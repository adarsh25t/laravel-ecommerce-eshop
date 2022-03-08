<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
   
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}" />
</head>
<body>
    @include('sections.adminNavbar')
    <div class="container-fluid page-body-wrapper">
        @include('sections.adminSidebar')

        <div class="main-panel">
           @yield('Home')
           @yield('category')
            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                  <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Eshop.com 2022</span>
                  
                </div>
              </footer>
        </div>
    </div>
<!-- plugins:js -->
<script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('admin/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/js/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('admin/js/dashboard.js') }}"></script>
<script src="{{ asset('admin/js/todolist.js') }}"></script>
<!-- End custom js for this page -->