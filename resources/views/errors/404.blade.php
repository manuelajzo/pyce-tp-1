@extends('layouts.main')

@section('title', ('Pàgina no encontrada'))
@section('main')
    <section class="error">
        <h2>Página no encontrada</h2>
        <picture>
            <!-- <source srcset="./res/error-mobile.jpg" media="(max-width:480px)"/> -->
            <img src="{{ asset('storage/imgs/error.jpg') }}" alt="taza con una carita triste"/>
        </picture>
        <p>La página que estás tratando de visitar no existe, o se la tragó la tierra.</p>
        <p>¡Pero no te preocupes! Podés <a href="{{ route('productsList') }}">volver a la página principal</a>.</p>
    </section>
@endsection
