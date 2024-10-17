<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\instrumenmodern;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class InstrumenmodernController extends Controller
{
    public function index(Request $request)
    {
        try {
            $search = $request->input('search');
            
            if ($search) {
                // If there is a search query, filter the results
                $instrumenmoderns = instrumenmodern::where('nomor_regist', 'like', "%$search%")
                    ->orWhere('nama_instrumen', 'like', "%$search%")
                    ->paginate(4);
            } else {
                // If no search query, just paginate as usual
                $instrumenmoderns = instrumenmodern::paginate(4);
            }
            
            return view('instrumenmodern.index', compact('instrumenmoderns', 'search'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }
    
    

    public function create()
    {
        //
        return view('instrumenmodern.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'nama_instrumen' => 'required',
            'penyumbang' => 'required',
            'quantity' => 'required',
        ]);
        
        try {
            instrumenmodern::create($request->all());
            
            return redirect('/instrumenmodern')->with('success', 'Instrumen Modern berhasil ditambahkan.');
        } catch (Exception $e) {
            echo "crot";
            return redirect()->back()->with('error', 'Failed to add Instrumen Modern: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $instrumenmodern = instrumenmodern::findOrFail($id);
            return view('instrumenmodern.edit', compact('instrumenmodern'));
        } catch (ModelNotFoundException $e) {
            return redirect('/instrumenmodern')->with('error', 'Instrumen Modren not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'nama_instrumen' => 'required',
            'penyumbang' => 'required',
            'quantity' => 'required',
        ]);

        try {
            $instrumenmodern = instrumenmodern::findOrFail($id);
            $instrumenmodern->update($request->all());

            return redirect('/instrumenmodern')->with('success', 'Instrumen Modern berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/instrumenmodern')->with('error', 'Instrumen Modern not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Instrumen Modern: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $instrumenmodern = instrumenmodern::findOrFail($id);
            $instrumenmodern->delete();
            return redirect('/instrumenmodern')->with('success', 'instrumenmodern berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/instrumenmodern')->with('error', 'instrumenmodern not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete instrumenmodern: ' . $e->getMessage());
        }
    }
}
