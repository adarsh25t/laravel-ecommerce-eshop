@extends('layouts.admin')

@section('add-category')

<div class="content-wrapper d-flex justify-content-center align-items-center mt-5">
    <div class="col-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="d-flex justify-content-between">
                  <select name="cate_id" id="">
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>  
              </div>
              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                    <label >Name</label>
                    <input type="text" class="form-control" name="Name">
                  </div>
                  <div class="form-group w-50 m-3">
                    <label>Small Text</label>
                    <input type="text" class="form-control" name="small_text">
                  </div>
              </div>
              <div class="form-group m-3">
                <label>Description</label>
                <textarea class="form-control" rows="4" name="description"></textarea>
              </div>

              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Original Price</label>
                  <input type="number" class="form-control" id="exampleInputEmail4" name="original_price">  
                </div>
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Selling Price</label>
                  <input type="number" class="form-control" id="exampleInputEmail4" name="selling_price">
                </div>
              </div>

              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Quantity</label>
                  <input type="number" class="form-control" id="exampleInputEmail4" name="qty">  
                </div>
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Tax</label>
                  <input type="number" class="form-control" id="exampleInputEmail4" name="tax">
                </div>
                <div class="form-group  m-3">
                  <label for="exampleInputEmail4">Status</label>
                  <input type="checkbox" id="exampleInputEmail4" name="status">
                </div>
                <div class="form-group  m-3">
                  <label for="exampleInputEmail4">Trending</label>
                  <input type="checkbox" id="exampleInputEmail4" name="trending">
                </div>
              </div>

              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Meta Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail4" name="meta_title">  
                </div>
                <div class="form-group w-50 m-3">
                  <label for="exampleInputEmail4">Meta Keywords</label>
                  <input type="text" class="form-control" id="exampleInputEmail4" name="meta_keywords">
                </div>
              </div>

              <div class="form-group m-3">
                <label>Meta Description</label>
                <textarea class="form-control" name="meta_description" rows="4"></textarea>
              </div>
              
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