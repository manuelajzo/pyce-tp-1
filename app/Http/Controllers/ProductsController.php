<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productsList() {
        $products = Product::all();
        return view('products\products-list', ['products' => $products]);
    }

    public function product(int $id) {
        $product = Product::findOrFail($id);
        return view('products.product', ['product' => $product]);
    }

    public function newProductForm() {
        return view('products.new-product-form');
    }

    public function createNewProduct(Request $request) {
        $product = $request->except('_token');
        Product::create($product);
        return redirect('productos');
    }
 }
       