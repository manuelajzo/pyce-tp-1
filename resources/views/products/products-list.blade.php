<?php
/** @var Product $products */
?>
@extends('layouts.main')
@section('title', 'Productos')
@section('main')
<h1>PRODUCTS LIST</H1>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product):
            <tr>
                <td> {{ $product->name }} </td> 
                <td> {{ $product->price }} </td> 
                <td> {{ $product->category }} </td> 
                <td> {{ $product->product_description }} </td> 
                <td><a href="{{ url('productos/' . $product->id) }}" class="btn btn-primary">Ver</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection