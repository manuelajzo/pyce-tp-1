<?php 
/** @var \App\Models\Product $product */
?>
<?php
/** @var \App\Models\Product[]|\Illuminate\Database\Eloquent\Collection $products */
?>
@extends('layouts.main')
@section('title', 'Detalle de ' . $product->name)
@section('main')
    <section>
        <div class="d-flex flex-row-reverse">
            <div class="col-9 mb-3  ">
                <h1 class="mb-3 ">{{ $product->name }}</h1>
                <dl>
                    <dt>Precio</dt>
                    <dd>{{ $product->price }}</dd>
                    <dt>Descripción</dt>
                    <dd>{{ $product->product_description }}</dd>
                </dl>
            </div>
            <div class="col-3">
                <p>esto es una imagen</p>
                <img src="" alt="{{ $product->imageDescription }}" >
            </div>
        </div>
    </section>
@endsection