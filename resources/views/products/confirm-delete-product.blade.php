<?php
/** @var \App\Models\Product $product */
?>
@extends('layouts.main')

@section('title', 'Confirmación para eliminar el artículo' . $product->title)

@section('main')
    <x-product-data :product="$product"/>

    <form action="{{ route('processDelete', ['id' => $product->id]) }}" method="post">
        @csrf
        <h2 class="mb-3">Confirmación Necesaria</h2>

        <p class="mb-3">¿Estás seguro que querés eliminar este artículo?</p>

        <button type="submit" class="btn btn-danger">Sí, eliminar</button>
    </form>
@endsection