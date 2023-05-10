<?php
/** @var \App\Models\Product $product */
?>
@extends('layouts.main')

@section('title', 'Confirmación para Eliminar la Película ' . $product->title)

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

    <hr>

    <form action="{{ route('processDelete', ['id' => $product->id]) }}" method="post">
        @csrf
        <h2 class="mb-3">Confirmación Necesaria</h2>

        <p class="mb-3">¿Estás seguro que querés eliminar este producto?</p>

        <button type="submit" class="btn btn-danger">Sí, eliminar</button>
    </form>
@endsection