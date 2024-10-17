<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\majalah;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class MajalahController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Ambil kata kunci pencarian dari request
            $search = $request->input('search');
    
            // Jika ada input pencarian, filter data berdasarkan pencarian, jika tidak ambil semua data
            if ($search) {
                $majalahs = majalah::where('judul', 'like', "%{$search}%")
                                    ->orWhere('issn', 'like', "%{$search}%")
                                    ->orWhere('isi_majalah', 'like', "%{$search}%")
                                    ->paginate(3);
            } else {
                $majalahs = majalah::paginate(3);
            }
    
            return view('majalah.index', compact('majalahs', 'search'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }
    
    

    public function create()
    {
        //
        return view('majalah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'issn' => 'required',
            'tgl_masuk' => 'required',
            'judul' => 'required',
            'isi_majalah' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);
        
        try {
            majalah::create($request->all());
            
            return redirect('/majalah')->with('success', 'Majalah berhasil ditambahkan.');
        } catch (Exception $e) {
            echo "crot";
            return redirect()->back()->with('error', 'Failed to add Majalah: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $majalah = majalah::findOrFail($id);
            return view('majalah.edit', compact('majalah'));
        } catch (ModelNotFoundException $e) {
            return redirect('/majalah')->with('error', 'Majalah not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'issn' => 'required',
            'tgl_masuk' => 'required',
            'judul' => 'required',
            'isi_majalah' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);

        try {
            $majalah = majalah::findOrFail($id);
            $majalah->update($request->all());
            return redirect('/majalah')->with('success', 'Majalah berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/majalah')->with('error', 'Majalah not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Majalah: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $majalah = majalah::findOrFail($id);
            $majalah->delete();
            return redirect('/majalah')->with('success', 'Majalah berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/majalah')->with('error', 'Majalah not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Majalah: ' . $e->getMessage());
        }
    }
}
