@extends('layouts.admin')

@section('category')
<div class="container-fluid page-body-wrapper">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{ asset('admin/images/faces/face1.jpg') }}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
            <span class="text-secondary text-small">Admin</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('categories') }}" >
          <span class="menu-title">Categories</span>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('add-categories') }}">
          <span class="menu-title">Add Category</span>
          <i class="mdi mdi-contacts menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <span class="menu-title">Forms</span>
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <span class="menu-title">Charts</span>
          <i class="mdi mdi-chart-bar menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <span class="menu-title">Tables</span>
          <i class="mdi mdi-table-large menu-icon"></i>
        </a>
      </li>
      
      
    </ul>
  </nav>

  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
          </span> Categories
        </h3>
      </div>
  
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Image </th>
                    <th> Name </th>
                    <th> Description </th>
                    <th> Actions </th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($categories as $category)
                    <tr>
                      <td class="py-1">
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="image" />
                      </td>
                      <td> {{ $category->name }} </td>
                      <td>{{ $category->description }}</td>
                      <td> 
                        <a href="{{ url('editcategory/'.$category->id) }}" class="add_btns"><i class="far fa-edit"></i></a>
                        <a href="{{ url('deletecategory/'.$category->id) }}" class="add_btns"><i class="far fa-trash-alt"></i></a>
                      </td>
                    </tr>
                 @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>   
      <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Eshop.com 2022</span>
          </div>
        </footer>
  </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
  <script>
    swal("{{ session('status') }}");
  </script>
@endif
@endsection

