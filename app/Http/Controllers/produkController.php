<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index()
    {

        //Halaman Produk
        return view('produk/produk');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman Tambah mahasiswa
        return view('produk/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Simpan Tambah mahasiswa
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman Detail
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman Edit mahasiswa
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Simpan edit mahasiswa
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Hapus mahasiswa
    }
}
