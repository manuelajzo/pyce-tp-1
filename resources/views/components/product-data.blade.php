<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\Product $product */

?>
<section class="container">
    <div class="row">
        <section class="product-details col-md-6 offset-md-3">
            <picture class="img-prod">
            @if($product->image != null && Storage::has('imgs/' . $product->image))
            
            <img class="mw-100" src="{{ Storage::url('imgs/' . $product->image) }}" alt="{{ $product->imageDescription }}" >
            @else
            <img class="mw-100" src="{{ asset('storage/imgs/error.jpg') }}" alt="{{ $product->imageDescription }}" >
            @endif
            </picture>
            
            <div class="prod-details">
            <h2>{{ $product->name }}</h2>
            <!-- <p>Precio: ${{ $product->price }}</p> -->
            
            <p>Descripcion: {{ $product->product_description }}</p>
            </div>    
        </section>
    </div>
    <div class="col-md-6 offset-md-3 volver">
        <a class="back" href="{{ route('productsList') }}">Volver al blog</a>
    </div>
</section>  