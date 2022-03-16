@extends('layouts.app')
@section('content')
<div>
  @include('sections.categories')
  @include('user.slider')
  @include('sections.trendingSlider')
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
  <script>
    swal("{{ session('status') }}");
  </script>
@endif
@endsection
