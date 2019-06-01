<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index() {
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }

    public function create() {
        return view('admin.products.create');
    }

    public function store(Request $request) {
        $formInput = $request->except('image');

        $this->validate($request, [
            'prod_name' => 'required',
            'prod_code' => 'required',
            'prod_price' => 'required',
            'prod_info' => 'required',
            'spl_price' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $image = $request->image;
        if ( $image ) {
            $imageName = $image->getClientOriginalName();
            $image->move('dist/img', $imageName );
            $formInput['image'] = $imageName;
        }

        Products::create($formInput);
        return redirect()->back();
    }

    public function show($id) {
        $product = Products::findOrFail($id);
        return view('products.show', compact('products'));
    }

}
