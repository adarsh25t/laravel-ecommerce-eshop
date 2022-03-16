@extends('layouts.app')

@section('viewProduct')
<div class="view-product">
    <div class="view-image">
        <img src="{{ asset('assets/uploads/products/'.$product->image) }}" alt="">
    </div>
    <form class="view-details" action="{{ url('add-to-cart') }}" method="POST">
        @csrf
        <input type="text" value="{{ $product->id }}" name="product_id" id="product_id" hidden>
        <input type="text" value="{{ Auth::user() ? Auth::user()->id : 0 }}" name="user_id" id="user_id" hidden>
        <h1 class="name">{{  $product->name }}</h1>
        <span class="price-1">Rs {{ $product->selling_price }}</span> <span class="price-2"><s>Rs {{ $product->original_price }}</s></span>
        <p>{{ $product->description }}</p>
        <div class="qty">
            <button id="increment">+</button>
            <input id="qty" value="1" name="qty"></h4>
            <button id="decrement">-</button>
        </div>
        <div class="action">
            <button>Add To Wishlist</button>
            <input type="submit" value="Add To Cart">
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $("#increment").on("click",function(event){
            event.preventDefault()
            val = Number($("#qty").val());
            if(val < 100){
                val++;
                $("#qty").val(val)
            }
        })

        $("#decrement").on("click",function(event){
            event.preventDefault()
            val = Number($("#qty").val());
            if(val > 1){
                val--;
                $("#qty").val(val)
            }
        })
    })
</script>

@if (session('status'))
  <script>
    swal("{{ session('status') }}");
  </script>
@endif
@endsection