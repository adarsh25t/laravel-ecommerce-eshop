<div class="category-wrapper">
    @foreach ($categories as $category)
        <a class="item" href="{{ url('view-categorie-items/'.$category->name) }}">
            <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="">
            <h4>{{ $category->name }}</h4>
        </a>
    @endforeach
</div>