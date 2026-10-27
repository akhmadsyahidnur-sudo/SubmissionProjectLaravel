<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index() 
    {
        // Mencari file view di dalam folder resources/views/products/index.blade.php
        return view('products.index');
    }
}