<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dtKategori = Kategori::all();

        return view('pages.kategori.index', compact('dtKategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());

        Kategori::create([
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('kategori')->with('success', 'Berhasil');

        Alert::success('Berhasil!', 'Berhasi Menambah Data!');

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
        $kateg = Kategori::findorfail($id);

        return view('pages.kategori.edit-kategori', compact('kateg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $kateg = Kategori::findOrFail($id);
        $kateg->update($request->all());
        return redirect()->route('kategori');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $kateg = Kategori::findorfail($id);
        $kateg->delete();
        return back();

    }
}
