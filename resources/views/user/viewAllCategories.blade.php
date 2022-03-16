@extends('layouts.app')

@section('view-category')

<div class="viewItemWrapper">
   
    @foreach ($products as $product)
        <a class="item" href="{{ url('viewProduct/'.$product->name) }}">
            <img src="{{ asset('assets/uploads/products/'.$product->image) }}" alt="">
            <h4 class="name">{{ $product->name }}</h4>
            <h4 class="price">Rs {{ $product->selling_price }}</h4>
            <button>Add To Cart</button>
        </a>
    @endforeach
</div>
@endsection