<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Models\piringanhitam;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class piringanhitamController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = piringanhitam::query();
    
            // Cek apakah ada parameter pencarian
            if ($request->has('search')) {
                $search = $request->input('search');
                
                // Lakukan pencarian berdasarkan beberapa kolom
                $query->where('nomor_regist', 'LIKE', "%$search%")
                    ->orWhere('penyumbang', 'LIKE', "%$search%")
                    ->orWhere('lagu', 'LIKE', "%$search%")
                    ->orWhere('deskripsi', 'LIKE', "%$search%");
            }
    
            // Ambil data dengan pagination
            $piringanhitams = $query->paginate(4);
    
            return view('piringanhitam.index', compact('piringanhitams'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }
    

    public function create()
    {
        //
        return view('piringanhitam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'penyumbang' => 'required',
            'tgl_masuk' => 'required',
            'cover' => 'required|mimes:jpeg,jpg,png,gif',
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
            'foto.mimes' => 'foto hanya diperbolehkan berektensi JPEG, JPG, PNG DAN GIF'
        ]);

        $cover_file = $request->file('cover');
        $cover_ekstensi = $cover_file->extension();
        $cover_nama = date('ymdhis') . "." . $cover_ekstensi;
        $cover_file->move(public_path('cover'), $cover_nama);
 
        $data = $request->except('cover');
        $data['cover'] = 'cover/'.$cover_nama;

        try {
            piringanhitam::create($data);

            return redirect('/piringanhitam')->with('success', 'Piringan Hitam berhasil ditambahkan.');
        } catch (Exception $e) {
            echo "c";
            return redirect()->back()->with('error', 'Failed to add Piringan Hitam: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $piringanhitam = piringanhitam::findOrFail($id);
            return view('piringanhitam.edit', compact('piringanhitam'));
        } catch (ModelNotFoundException $e) {
            return redirect('/piringanhitam')->with('error', 'Piringan Hitam not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'penyumbang' => 'required',
            'tgl_masuk' => 'required',
            'cover' => 'nullable|mimes:jpeg,jpg,png,gif', // foto bisa nullable
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);

        try {
            $piringanhitam = piringanhitam::findOrFail($id);
             // Jika ada file foto baru diupload
             if ($request->hasFile('cover')) {
                $cover_file = $request->file('cover');

                if ($cover_file->isValid()) {
                    $cover_ekstensi = $cover_file->extension();
                    $cover_nama = date('ymdhis') . "." . $cover_ekstensi;

                    // Hapus foto lama
                    if ($piringanhitam->cover && File::exists(public_path($piringanhitam->cover))) {
                        File::delete(public_path($piringanhitam->cover));
                    }

                    // Pindahkan foto baru ke folder 'public/foto'
                    $cover_file->move(public_path('cover'), $cover_nama);

                    // Simpan nama foto baru ke dalam database
                    $requestData = $request->all();
                    $requestData['cover'] = 'cover/' . $cover_nama;
                }
            } else {
                // Jika tidak ada foto baru, ambil semua data kecuali 'foto'
                $requestData = $request->except('cover');
            }

            // Update memorabilia
            $piringanhitam->update($requestData);

            return redirect('/piringanhitam')->with('success', 'Piringan hitam berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/piringanhitam')->with('error', 'Piringanhitam not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update piringanhitam: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $piringanhitam = piringanhitam::findOrFail($id);
            $piringanhitam->delete();
            return redirect('/piringanhitam')->with('success', 'Piringan Hitam berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/piringanhitam')->with('error', 'Piringan Hitam not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Piringan Hitam: ' . $e->getMessage());
        }
    }
}
