<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasales = Sales::all();
        return view('index', ['sales' => $datasales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sales::create([
            'nama' =>$request->nama,
            'alamat' =>$request->alamat,
            'tgl_lahir' =>$request->tgl_lahir
        ]);
        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Sales::where('id', $id)->first();
        return view('profil_sales', ['sales'=>$produk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datasales = Sales::find($id);
        return view('form_ubah', ['sales'=>$datasales]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Sales::find($id);
        $produk->nama = $request->nama;
        $produk->alamat = $request->alamat;
        $produk->tgl_lahir = $request->tgl_lahir;
        $produk->save();

        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $id)
    {
        $produk = Sales::find($id);
        $produk->delete();

        return redirect()->route('sales.index');
    }
}
