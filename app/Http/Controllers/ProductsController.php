<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productsList() {
        // $products => Products::all()
        // return view('products.products-list', ['products' => $products]);
        return view('products\products-list');
    }
}
