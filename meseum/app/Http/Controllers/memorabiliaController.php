<?php

namespace App\Http\Controllers;

use App\Models\memorabilia;
use File;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class memorabiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  // Controller
public function index(Request $request)
{
    try {
        $query = $request->input('search');

        // Filter data berdasarkan query pencarian
        $memorabilias = memorabilia::when($query, function ($queryBuilder, $query) {
            return $queryBuilder->where('nomor_regist', 'LIKE', "%{$query}%")
                ->orWhere('penyumbang', 'LIKE', "%{$query}%")
                ->orWhere('Biografi', 'LIKE', "%{$query}%")
                ->orWhere('nama', 'LIKE', "%{$query}%")
                ->orWhere('deskripsi', 'LIKE', "%{$query}%");
        })->paginate(1);

        return view('memorabilia.index', compact('memorabilias'));
    } catch (Exception $e) {
        return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
    }
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('memorabilia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'penyumbang' => 'required',
            'tgl_masuk' => 'required',
            'Biografi' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif',
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto.mimes' => 'foto hanya diperbolehkan berektensi JPEG, JPG, PNG DAN GIF'
        ]);

       $foto_file = $request->file('foto');
       $foto_ekstensi = $foto_file->extension();
       $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
       $foto_file->move(public_path('foto'), $foto_nama);

       $data = $request->except('foto');
       $data['foto'] = 'foto/'.$foto_nama;

       try {
            memorabilia::create($data);
            return redirect('/memorabilia')->with('success', 'memorabilia berhasil ditambahkan.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to add memorabilia: ' . $e->getMessage());
        }
    }

    
    public function edit($id)
    {
        try {
            $memorabilia = memorabilia::findOrFail($id);
            return view('memorabilia.edit', compact('memorabilia'));
        } catch (ModelNotFoundException $e) {
            return redirect('/memorabilia')->with('error', 'memorabilia not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'penyumbang' => 'required',
            'tgl_masuk' => 'required',
            'Biografi' => 'required',
            'foto' => 'nullable|mimes:jpeg,jpg,png,gif', // foto bisa nullable
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        try {
            $memorabilia = memorabilia::findOrFail($id);

            // Jika ada file foto baru diupload
            if ($request->hasFile('foto')) {
                $foto_file = $request->file('foto');

                if ($foto_file->isValid()) {
                    $foto_ekstensi = $foto_file->extension();
                    $foto_nama = date('ymdhis') . "." . $foto_ekstensi;

                    // Hapus foto lama
                    if ($memorabilia->foto && File::exists(public_path($memorabilia->foto))) {
                        File::delete(public_path($memorabilia->foto));
                    }

                    // Pindahkan foto baru ke folder 'public/foto'
                    $foto_file->move(public_path('foto'), $foto_nama);

                    // Simpan nama foto baru ke dalam database
                    $requestData = $request->all();
                    $requestData['foto'] = 'foto/' . $foto_nama;
                }
            } else {
                // Jika tidak ada foto baru, ambil semua data kecuali 'foto'
                $requestData = $request->except('foto');
            }

            // Update memorabilia
            $memorabilia->update($requestData);

            return redirect('/memorabilia')->with('success', 'Memorabilia berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/memorabilia')->with('error', 'Memorabilia not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update memorabilia: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $memorabilia = memorabilia::findOrFail($id);
            $memorabilia->delete();
            return redirect('/memorabilia')->with('success', 'memorabilia berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/memorabilia')->with('error', 'memorabilia not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete memorabilia: ' . $e->getMessage());
        }
    }
}



