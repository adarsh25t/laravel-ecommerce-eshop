@extends('layouts.app')

@section('cart')

@foreach ($carts as $cart)
    <h2>{{ $cart->products->name }}</h2>
@endforeach

@endsection