<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    try {
        // Tangkap query pencarian dari request
        $search = $request->input('search');

        // Jika ada query pencarian, filter data berdasarkan judul atau ISBN
        if ($search) {
            $bukus = buku::where('judul', 'like', "%$search%")
                         ->orWhere('isbn', 'like', "%$search%")
                         ->paginate(3);
        } else {
            // Jika tidak ada query pencarian, tampilkan semua data
            $bukus = buku::paginate(3);
        }

        return view('buku.index', compact('bukus'));
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
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required',
            'tgl_masuk' => 'required',
            'judul' => 'required',
            'isi_buku' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);
       
        try {
            // dd($request->all());
            buku::create($request->all());
            return redirect('/buku')->with('success', 'Buku berhasil ditambahkan.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to add Buku: ' . $e->getMessage());
        }
    }

    
    public function edit($id)
    {
        try {
            $buku = buku::findOrFail($id);
            return view('buku.edit', compact('buku'));
        } catch (ModelNotFoundException $e) {
            return redirect('/buku')->with('error', 'Buku not found.');
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
            'isbn' => 'required',
            'tgl_masuk' => 'required',
            'judul' => 'required',
            'isi_buku' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);

        try {
            $buku = buku::findOrFail($id);
            $buku->update($request->all());
            return redirect('/buku')->with('success', 'Buku berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/buku')->with('error', 'Buku not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Buku: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $buku = buku::findOrFail($id);
            $buku->delete();
            return redirect('/buku')->with('success', 'Buku berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/buku')->with('error', 'Buku not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Buku: ' . $e->getMessage());
        }
    }

    
}


