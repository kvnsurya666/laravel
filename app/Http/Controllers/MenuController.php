<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function beranda_admin() {
        return view ('beranda_admin');
    }

    public function produk() {
        return view ('produk');
    }

    public function sales() {
        return view ('sales');
    }
}
