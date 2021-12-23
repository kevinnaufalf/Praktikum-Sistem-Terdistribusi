<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataBarang::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $barang = new DataBarang();
        $barang->type = $request->type;
        $barang->spek = $request->spek;
        $barang->jumlah = $request->jumlah;
        $barang->harga = $request->harga;
        $barang->save();

        return "Data berhasil dibuat";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataBarang  $DataBarang
     * @return \Illuminate\Http\Response
     */
    public function show(DataBarang $DataBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataBarang  $DataBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(DataBarang $DataBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataBarang  $DataBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id= $request->id;
        $type = $request->type;
        $spek = $request->spek;
        $jumlah = $request->jumlah;
        $harga = $request->harga;

        $barang = DataBarang::find($id);
        $barang->type = $type;
        $barang->spek = $spek;
        $barang->jumlah = $jumlah;
        $barang->harga = $harga;
        $barang->save();

        return "Data telah diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataBarang  $DataBarang
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $barang = DataBarang::find($id);
        $barang->delete();

        return "Data telah dihapus";
    }
}
