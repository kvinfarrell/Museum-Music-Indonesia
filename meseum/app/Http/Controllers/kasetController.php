<?php

namespace App\Http\Controllers;

use App\Models\kaset;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class kasetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    try {
        // Tangkap query pencarian dari input user
        $search = $request->input('search');

        // Jika ada input pencarian, filter data berdasarkan pencarian
        if ($search) {
            $kasets = kaset::where('nomor_regist', 'like', "%$search%")
                            ->orWhere('penyumbang', 'like', "%$search%")
                            ->orWhere('lagu', 'like', "%$search%")
                            ->paginate(4);
        } else {
            // Jika tidak ada pencarian, tampilkan semua data
            $kasets = kaset::paginate(4);
        }

        return view('kaset.index', compact('kasets'));
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
        return view('kaset.create');
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
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);
       
        try {
            // dd($request->all());
            kaset::create($request->all());
            return redirect('/kaset')->with('success', 'kaset berhasil ditambahkan.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to add kaset: ' . $e->getMessage());
        }
    }

    
    public function edit($id)
    {
        try {
            $kaset = kaset::findOrFail($id);
            return view('kaset.edit', compact('kaset'));
        } catch (ModelNotFoundException $e) {
            return redirect('/kaset')->with('error', 'kaset not found.');
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
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);

        try {
            $kaset = kaset::findOrFail($id);
            $kaset->update($request->all());
            return redirect('/kaset')->with('success', 'kaset berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/kaset')->with('error', 'kaset not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update kaset: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $kaset = kaset::findOrFail($id);
            $kaset->delete();
            return redirect('/kaset')->with('success', 'kaset berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/kaset')->with('error', 'kaset not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete kaset: ' . $e->getMessage());
        }
    }
}


