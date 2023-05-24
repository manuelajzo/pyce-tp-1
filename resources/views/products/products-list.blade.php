<?php
/** @var \App\Models\Product[]|\Illuminate\Database\Eloquent\Collection $products */    
?>
@extends('layouts.main')
@section('title', 'Artículos')
@section('main')
    <h2>PRODUCTS LIST</h2>

    @auth
    <div class="mb-3">
        <a href="{{ route('newProductForm') }}">Crear artículo</a>
    </div>
    @endauth

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Tags</th>
                <th>Texto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product):
                <tr>
                    <td> {{ $product->name }} </td> 
                    <!-- <td> ${{ $product->price }} </td>  -->
                    <td> {{ $product->y }} </td> 
                    <td> {{ $product->product_description }} </td> 
                    <!-- @if($product->image != null && Storage::has('imgs/' . $product->image))
                        <td> <img class="mw-100 mh-100" src="{{ Storage::url('imgs/' . $product->image) }}" alt="{{ $product->imageDescription }}" > </td> 
                    @else   
                        <td> No hay imagen </td> 
                    @endif -->
                    
                    <td>
                        <a href="{{ route('product' , ['id' => $product->id]) }}" class="see-product"><i class="bi bi-eye-fill"></i></a>
                        @auth
                            <a href="{{ route('updateProductForm' , ['id' => $product->id]) }}" class="edit" data-toggle="modal"><i class="bi bi-pen-fill biIcons"></i></a>
							<a href="{{ route('confirmDelete' , ['id' => $product->id]) }}" class="delete" data-toggle="modal"><i class="bi bi-trash-fill" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection