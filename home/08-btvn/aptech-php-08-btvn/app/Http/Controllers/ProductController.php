<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function hienThiSanPham($id)
    {
        return view('product', ['number' => $id] );
    }
}
