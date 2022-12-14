<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
        $sales= Sales::where('id', $id)->first();
        return view('profil_sales', ['sales'=>$sales]);
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
        $sales = Sales::find($id);
        $sales->nama = $request->nama;
        $sales->alamat = $request->alamat;
        $sales->tgl_lahir = $request->tgl_lahir;
        $sales->save();

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
        $sales = Sales::find($id);
        $sales->delete();

        return redirect()->route('sales.index');
    }
}
