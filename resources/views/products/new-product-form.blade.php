@extends('layouts.main')
@section('title', 'Crear producto')
@section('main')
    <h1>Form</h1>
    <form action="{{ route('createProduct') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del producto</label>
            <input type="text" class="form-contro" id="name" name="name"/>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="text" class="form-contro" id="price" name="price"/>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoría</label>
            <input type="text" class="form-contro" id="category" name="category"/>
        </div>
        <div class="mb-3">
            <label for="product_description" class="form-label">Descripcion del producto</label>
            <input type="textarea" class="form-contro" id="product_description" name="product_description"/>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-contro" id="image" name="image"/>
        </div>
        <div class="mb-3">
            <label for="image_description" class="form-label">Descripción de la imagen</label>
            <input type="text" class="form-contro" id="image_description" name="image_description"/>
        </div>
        <button type="submit" class="btn btn-prymary">Crear</button>
    </form>
@endsection