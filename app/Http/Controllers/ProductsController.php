<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('admin.products.index');
    }
    
    public function create() {
        return view('admin.products.create');
    }

}
