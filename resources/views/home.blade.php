@extends('layouts.app')
@section('content')
<div>
  @include('sections.categories')
  @include('user.slider')
  @include('sections.trendingSlider')
</div>
@endsection
