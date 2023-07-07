<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Golongan;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Golongan::all();
        return view('Golongan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Golongan::create([
            'gol_kode' => $request->gol_kode,
            'gol_nama' => $request->gol_nama,
        ]);

        return redirect('Golongan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Golongan::find($id);
        return view('Golongan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $row = Golongan::findOrFail($id);

                $row->update([
                    'gol_kode' => $request->gol_kode,
                    'gol_nama' => $request->gol_nama,
                ]);
        
                return redirect('Golongan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Golongan::findOrFail($id);

        $row->delete();

         return redirect('Golongan');
    }
}
