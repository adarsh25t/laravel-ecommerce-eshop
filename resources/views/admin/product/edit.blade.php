@extends('layouts.admin')

@section('add-category')

<div class="content-wrapper d-flex justify-content-center align-items-center mt-5">
    <div class="col-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="d-flex justify-content-between">
                  <select name="cate_id">
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>  
              </div>
              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                    <label >Name</label>
                    <input type="text" class="form-control" value="{{ $product->name }}" name="Name">
                  </div>
                  <div class="form-group w-50 m-3">
                    <label>Small Text</label>
                    <input type="text" class="form-control" value="{{ $product->small_text }}" name="small_text">
                  </div>
              </div>
              <div class="form-group m-3">
                <label>Description</label>
                <textarea class="form-control" rows="4" name="description">{{ $product->description }}</textarea>
              </div>

              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Original Price</label>
                  <input type="number" class="form-control" value="{{ $product->original_price }}" name="original_price">  
                </div>
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Selling Price</label>
                  <input type="number" class="form-control" value="{{ $product->selling_price }}" name="selling_price">
                </div>
              </div>

              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Quantity</label>
                  <input type="number" class="form-control" value="{{ $product->qty }}" name="qty">  
                </div>
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Tax</label>
                  <input type="number" class="form-control" value="{{ $product->tax }}" name="tax">
                </div>
                <div class="form-group  m-3">
                  <label for="exampleInputEmail4">Status</label>
                  <input type="checkbox" id="exampleInputEmail4" name="status" {{ $product->status == '1' ? 'checked' : ""}}>
                </div>
                <div class="form-group  m-3">
                  <label for="exampleInputEmail4">Trending</label>
                  <input type="checkbox" id="exampleInputEmail4" name="trending" {{ $product->trending == '1' ? 'checked' : ""}}>
                </div>
              </div>

              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Meta Title</label>
                  <input type="text" class="form-control" value="{{ $product->meta_title }}" name="meta_title">  
                </div>
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Meta Keywords</label>
                  <input type="text" class="form-control" value="{{ $product->meta_keywords }}" name="meta_keywords">
                </div>
              </div>

              <div class="form-group m-3">
                <label>Meta Description</label>
                <textarea class="form-control" name="meta_description" rows="4">{{ $product->meta_description }}</textarea>
              </div>

              @if ($product->image)
                <div class="edit-image">
                    <img src="{{ asset('assets/uploads/products/'.$product->image) }}" alt="">
                </div>
              @endif
              
              <div class="form-group m-3">
                <label>File upload</label>
                <input type="file" name="image">   
              </div>
             
              <button type="submit" class="btn btn-gradient-primary me-2 m-3">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>    
@endsection