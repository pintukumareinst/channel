<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Panel</title>   

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('public/admin/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/admin/css/style.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('admin/home')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        
      </div>
    </form>

    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <div class="row">
          <div class="col-md-4">
            <a href="{{ url('admin/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="nav-link">
                Logout
            </a>
            <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/images/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/assets/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{@Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin/home')}}" class="nav-link {{ request()->is('admin/home') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{url('admin/banners')}}" class="nav-link {{ request()->is('admin/banners') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Banners
                </p>
              </a>
            </li>

                <li class="nav-item">
              <a href="{{url('admin/images')}}" class="nav-link {{ request()->is('admin/images') ? 'active' : '' }}">
                <i class="nav-icon far fa-images"></i>
                <p>
                  Images
                </p>
              </a>
            </li>


             <li class="nav-item">
              <a href="{{url('admin/persons')}}" class="nav-link {{ request()->is('admin/persons') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-friends"></i>

                <p>
                  Users
                </p>
              </a>
            </li>

       

            <li class="nav-item">
              <a href="{{url('admin/news')}}" class="nav-link {{ request()->is('admin/news') ? 'active' : '' }}">
                <i class="nav-icon far fa-newspaper"></i>
                <p>
                  News
                </p>
              </a>
            </li>

           
             <li class="nav-item">
              <a href="{{url('admin/readers')}}" class="nav-link {{ request()->is('admin/readers') ? 'active' : '' }}">
                <i class="nav-icon fas fa-book-reader"></i>

                <p>
                  Readers Forum
                </p>
              </a>
            </li>

   
          <li class="nav-item">
            <a href="{{url('admin/contacts')}}" class="nav-link {{ request()->is('admin/contacts') ? 'active' : '' }}">
              <i class="nav-icon far fa-id-card"></i>
              <p>
                Contact us
              </p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a target="_blank" href="https://websitemobileappdesigning.business.site/">Website Mobile App Designing Itanagar</a></strong> All rights reserved
  </footer>
</div>
<!-- ./wrapper -->
 
      
<script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
<!-- REQUIRED SCRIPTS -->
<script src="{{asset('public/admin/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/admin/js/adminlte.min.js')}}"></script>
</body>
</html>
