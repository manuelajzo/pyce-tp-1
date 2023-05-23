<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\Product $product */

?>
<section>
    <section class="product-details row">
        <picture class="img-prod col-6">
            @if($product->image != null && Storage::has('imgs/' . $product->image))
            
            <img class="mw-100" src="{{ Storage::url('imgs/' . $product->image) }}" alt="{{ $product->imageDescription }}" >
            @else
            <img class="mw-100" src="{{ asset('storage/imgs/error.jpg') }}" alt="{{ $product->imageDescription }}" >
            @endif
        </picture>
            
        <div class="prod-details col-6">
            <h2>{{ $product->name }}</h2>
            <p>Precio: ${{ $product->price }}</p>
            
            <p>Descripcion: {{ $product->product_description }}</p>
        </div>
        
    </section>
    <div class="row">
        <a class="back col-12" href="{{ route('productsList') }}">Volver a productos</a>
    </div>
</section>  