<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300&family=Poppins:wght@300&display=swap');
    </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/adminlte.min.css') }}">
  <!-- Bootstrap links -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <!-- FontAwsome Link -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/css/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('/css/jqvmap.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('/css/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('/css/summernote-bs4.min.css') }}">


</head>

<body class="hold-transition sidebar-mini" style="font-family: 'Noto Sans JP', sans-serif;font-family: 'Poppins', sans-serif;">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">Site</a>
      </li>
     {{--- <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('admin.index')}}" class="nav-link">Dashboard</a>
      </li>
      @if(Auth::user()->hasRole('superadmin'))
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('admin.create')}}" class="nav-link">Add Admin</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('admin.tablepage')}}" class="nav-link">Admins Table</a>
        </li>
      @endif
      --}}
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- <li class="nav-item d-none d-sm-inline-block mr-3">
        <select class="rounded-2 form-control" id="google_translate_element" data-width="fit" >
            <option data-content='English'>English</option>
            <option data-content='Arabic'>Arabic</option>
        </select>
      </li> -->

      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
              onclick="event.preventDefault();this.closest('form').submit();">
          {{ __('Log out') }}
      </x-dropdown-link>
      </form>
      <!-- Settings Dropdown -->
        {{-- <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown> --}}
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
      <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
        <a href="{{route('profile')}}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" id='myDIV' data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a href="/widgets" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
              </p>
            </a>
          </li> --}}
          @if(Auth::user()->hasRole('superadmin'))
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-users-crown"></i>
                <p>
                  Admins
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.tablepage')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Admins</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add new Admin</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif
          <li class="nav-item">
            <a href="{{route('admin.usertablepage')}}" class="nav-link">
            <i class="fas fa-user"></i>
              <p>
                Users
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-list-alt"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/category/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new category</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fab fa-product-hunt"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new product</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/orders" class="nav-link">
            <i class="fas fa-receipt"></i>
              <p>
              Orders
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>

          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="/important" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/warning" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>


      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<div class="container-fluid">
    @yield('content')
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script type="text/javascript" src="{{ asset('/js/adminlte.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/adminlte.min.js') }}"></script>
<!-- OPTIONAL SCRIPTS -->
<script type="text/javascript" src="{{ asset('/js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="{{ asset('/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type='text/javascript' src="{{ asset('/js/jquery-3.5.1.min.js') }}" ></script>
<!--data-tables---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script> error=false </script>
<!-- JQVMap -->
<script src="{{ asset('/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('/js/jquery.vmap.usa.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('/js/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- langs -->
<!-- <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
<!-- /langs -->


<!-- select -->
<script>
    $('.nav-item').click(function() {
      if ($(this).is("active"))
        $('.nav-item').not(this).removeClass('active');
      else
        $(this).addClass('active');
      $('.nav-item').not(this).removeClass('active');
    });
</script>
</body>
</html>
{{-- active menu-is-opening menu-open
  دي الحاجات اللي عايزه تتشال  --}}
