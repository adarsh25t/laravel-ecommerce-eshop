@extends('layouts.app')

@section('viewProduct')
<div class="view-product">
    <div class="view-image">
        <img src="{{ asset('assets/uploads/products/'.$product->image) }}" alt="">
    </div>
    <div class="view-details">
        <h1 class="name">{{  $product->name }}</h1>
        <span class="price-1">Rs {{ $product->selling_price }}</span> <span class="price-2"><s>Rs {{ $product->original_price }}</s></span>
        <p>{{ $product->description }}</p>
        <div class="qty">
            <button id="increment">+</button>
            <h4 id="qty">0</h4>
            <button id="decrement">-</button>
        </div>
        <div class="action">
            <button>Add To Wishlist</button>
            <button>Add To Cart</button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script>
    $(document).ready(function(){
        $("#increment").on("click",function(){
            val = Number($("#qty").text());
            if(val < 100){
                val++;
                $("#qty").text(val)
            }
        })

        $("#decrement").on("click",function(){
            val = Number($("#qty").text());
            if(val > 1){
                val--;
                $("#qty").text(val)
            }
        })
    })
</script>
@endsection