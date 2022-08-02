<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataproduk = Produk::all();
        return view('index_barang', ['produk' => $dataproduk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_tambah_barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Produk::create([
            'id_barang' =>$request->id_barang,
            'nama_barang' =>$request->nama_barang,
            'kode_kategori' =>$request->kode_kategori,
            'kode_model' =>$request->kode_model,
            'kode_merk' =>$request->kode_merk,
            'gambar' =>$request->gambar,
            'deskripsi' =>$request->kode_merk
        ]);
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::where('id', $id)->first();
        return view('tampilan_barang', ['produk'=>$produk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataproduk = Produk::find($id);
        return view('form_edit_barang', ['produk'=>$dataproduk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->nama_barang = $request->nama;
        $produk->kode_kategori = $request->kode_kategori;
        $produk->kode_model = $request->kode_model;
        $produk->kode_merk = $request->kode_merk;
        $produk->gambar = $request->gambar;
        $produk->deskripsi = $request->deskripsi;
        $produk->save();

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return redirect()->route('produk.index');
    }
}
