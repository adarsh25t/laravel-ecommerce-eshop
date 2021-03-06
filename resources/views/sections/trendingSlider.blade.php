<div class="trendingWrapper">
    <h3>Trending Products</h3>
    <div class="owl-carousel owl-theme">
        @foreach ($trending as $item)
        <div class="item card">
        <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <span class="float-start">Rs {{ $item->selling_price }}</span>
            <span class="float-end"><s>Rs {{ $item->original_price }}</s></span>
        </div>
    </div>
    @endforeach
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script>

$(document).ready(function() {
    $(function() {
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    loop:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  });
});

});
</script>