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

    public function newProductForm() {
        return view('products.new-product-form');
    }

    public function processCreateProduct(Request $request) {
        $product = $request->except('_token');
        
        $request->validate(Product::validationRules(), Product::validationMessages());
        
        // Product::create($product);
        return redirect()->route('productsList')->with('feedback.message', 'El producto ' . e($product['name']) . ' se creó con éxito');
    }

    public function product(int $id) {
        $product = Product::findOrFail($id);
        return view('products.product', ['product' => $product]);
    }

    public function confirmDelete(int $id) {

        return view('products.confirm-delete-product', ['product' => Product::findOrFail($id)]);
    }

    public function processDelete(int $id) {
        $product = Product::findOrFail($id);
        $name = $product['name'];
        $product->delete(); 
        return redirect()->route('productsList')->with('feedback.message', 'El producto ' . e($name) . ' se eliminó       con éxito');
    }
 }
       