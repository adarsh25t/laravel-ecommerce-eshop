@extends('layouts.admin')

@section('add-category')

<div class="content-wrapper d-flex justify-content-center align-items-center mt-5">
    <div class="col-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{ url('update-category/'.$categorie->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                    <label >Name</label>
                    <input type="text" class="form-control" value="{{ $categorie->name }}" name="Name">
                  </div>
                  <div class="form-group w-50 m-3">
                    <label>Slug</label>
                    <input type="text" class="form-control" value="{{ $categorie->slug }}" name="slug">
                  </div>
              </div>
              <div class="form-group m-3">
                <label>Description</label>
                <textarea class="form-control" rows="4" name="description">{{ $categorie->description }}</textarea>
              </div>
              <div class="form-group m-3">
                <label for="exampleInputEmail4">Status</label>
                <input type="checkbox"  id="exampleInputEmail4" {{ $categorie->status == '1' ? "checked" :""}} name="status">

                <label for="exampleInputEmail4">Popular</label>
                <input type="checkbox"  id="exampleInputEmail4" {{ $categorie->popular == '1' ? "checked" :""}} name="popular">
              </div>

              <div class="d-flex justify-content-between">
                <div class="form-group w-50 m-3">
                    <label>Meta Title</label>
                    <input type="text" class="form-control" value="{{ $categorie->meta_title }}" name="metaTitle">
                  </div>
    
                  <div class="form-group w-50 m-3">
                    <label>Meta Keywords</label>
                    <input type="text" class="form-control" value="{{ $categorie->meta_keywords }}" name="metaKeywords">
                  </div>
              </div>

              <div class="form-group m-3">
                <label>Meta Description</label>
                <textarea class="form-control" name="metaDescription" rows="4">{{ $categorie->meta_descrip }}</textarea>
              </div>

              @if ($categorie->image)
                <div class="edit-image">
                    <img src="{{ asset('assets/uploads/category/'.$categorie->image) }}" alt="">
                </div>
              @endif
              
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