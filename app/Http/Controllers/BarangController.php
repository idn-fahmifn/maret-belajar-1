<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return 'Ini adalah halaman index barang';
    }

    public function post()
    {
        return 'ini route untuk post data';
    }

}
