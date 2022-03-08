@extends('layouts.admin')

@section('add-category')

<div class="content-wrapper d-flex justify-content-center align-items-center mt-5">
    <div class="col-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                    <label >Name</label>
                    <input type="text" class="form-control" name="Name">
                  </div>
                  <div class="form-group w-50 m-3">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug">
                  </div>
              </div>
              <div class="form-group m-3">
                <label>Description</label>
                <textarea class="form-control" rows="4" name="description"></textarea>
              </div>
              <div class="form-group m-3">
                <label for="exampleInputEmail4">Status</label>
                <input type="checkbox"  id="exampleInputEmail4" name="status">

                <label for="exampleInputEmail4">Popular</label>
                <input type="checkbox"  id="exampleInputEmail4" name="popular">
              </div>

              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                    <label>Meta Title</label>
                    <input type="text" class="form-control" name="metaTitle">
                  </div>
    
                  <div class="form-group w-50 m-3">
                    <label>Meta Keywords</label>
                    <input type="text" class="form-control" name="metaKeywords">
                  </div>
              </div>

              <div class="form-group m-3">
                <label>Meta Description</label>
                <textarea class="form-control" name="metaDescription" rows="4"></textarea>
              </div>
              
              <div class="form-group m-3">
                <label>File upload</label>
                <input type="file" name="image" >
                
              </div>
             
              
              <button type="submit" class="btn btn-gradient-primary me-2 m-3">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>    
@endsection