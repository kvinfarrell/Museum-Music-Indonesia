<?php

namespace App\Http\Controllers;

use App\Models\cd;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class cdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    try {
        // Get the search keyword
        $search = $request->input('search');
        
        // Check if a search keyword is provided
        if ($search) {
            // Use 'where' clause to filter based on the search keyword
            $cds = cd::where('nomor_regist', 'like', '%' . $search . '%')
                ->orWhere('penyumbang', 'like', '%' . $search . '%')
                ->orWhere('judul', 'like', '%' . $search . '%')
                ->orWhere('lagu', 'like', '%' . $search . '%')
                ->paginate(3); // Paginate the results
        } else {
            // If no search keyword is provided, show all records
            $cds = cd::paginate(3);
        }
        
        return view('cd.index', compact('cds', 'search'));
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
        return view('cd.create');
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
            'judul' => 'required',
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);
       
        try {
            // dd($request->all());
            cd::create($request->all());
            return redirect('/cd')->with('success', 'cd berhasil ditambahkan.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to add cd: ' . $e->getMessage());
        }
    }

    
    public function edit($id)
    {
        try {
            $cd = cd::findOrFail($id);
            return view('cd.edit', compact('cd'));
        } catch (ModelNotFoundException $e) {
            return redirect('/cd')->with('error', 'cd not found.');
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
            'judul' => 'required',
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);

        try {
            $cd = cd::findOrFail($id);
            $cd->update($request->all());
            return redirect('/cd')->with('success', 'cd berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/cd')->with('error', 'cd not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update cd: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $cd = cd::findOrFail($id);
            $cd->delete();
            return redirect('/cd')->with('success', 'cd berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/cd')->with('error', 'cd not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete cd: ' . $e->getMessage());
        }
    }
}


