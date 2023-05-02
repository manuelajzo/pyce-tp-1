<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productsList() {
        
        $products = Product::all();
        
        

        // return view('products.products-list', ['products' => $products]);
        return view('products\products-list', ['products' => $products]);
    }

    public function product(int $id) {
        $product = Product::find($id);
        return view('products.product', ['product' => $product]);
    }
}
