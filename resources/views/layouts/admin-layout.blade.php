<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets-admin/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('images/beescanner.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  {{ Route::currentRouteName() }}
  </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <!-- CSS Files -->
  <link href="{{ asset('assets-admin/css/material-dashboard.css')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets-admin/demo/demo.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('/css/preloader.css') }}">

  <link rel="stylesheet" href="{{ asset('/font_awesome/css/all.css') }}">
  <script src="{{asset('/js/charts.js')}}" charset="utf-8"></script>
  <style>
    label{
      color: black !important;
    }
  </style>
</head>

<body class="">
<div id="overlayer" style="width: 100vw; z-index: 99998;
position: fixed; top: 0; left: 0; right: 0; bottom: 0; height: 100%;
"></div>
<span class="loader">
<span class="loader-inner"></span>
</span>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo" style="background-color: white">
        <a href="#" class="simple-text logo-normal">
          <img src="{{ asset('/images/beescanner.png') }}" alt="Logo" style="max-width: 100%; height: auto">
        </a>
      </div>
      <div class="sidebar-wrapper" style="background-color: white; text-align: left;">
        <ul class="nav" style="min-height: 850px">
          @if(Route::currentRouteName() == "Panou de administrare" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/home') }}">
          @endif
          <i class="fas fa-tachometer-alt"></i>
              <p>Acasa</p>
            </a>
          </li>
          @if(Route::currentRouteName() == "Utilizatori" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/users') }}">
          @endif
              <i class="fa fa-user"></i>
              <p>Utilizatori</p>
            </a>
          </li>
          @if(Route::currentRouteName() == "Doctori" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/doctors') }}">
          @endif
              <i class="fas fa-user-md"></i>
              <p>Doctori</p>
            </a>
          </li>
          @if(Route::currentRouteName() == "Restaurante" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/restaurants') }}">
          @endif
            <i class="fas fa-utensils"></i>
            <p>Restaurante</p>
            </a>
          </li>
          @if(Route::currentRouteName() == "Moderatori" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/moderators') }}">
          @endif
              <i class="fas fa-users-cog"></i>
              <p>Moderatori</p>
            </a>
          </li>
          @if(Route::currentRouteName() == "Produse" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/products') }}">
          @endif
              <i class="fab fa-product-hunt"></i>
              <p>Produse</p>
            </a>
          </li>
          @if(Route::currentRouteName() == "Mesaje" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/messages') }}">
          @endif
              <i class="fas fa-comments"></i>
              <p>Mesaje</p>
            </a>
          </li>
          @if(Route::currentRouteName() == "Notificari" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/notifications') }}">
          @endif
          <i class="fas fa-align-justify"></i>
            <p>Cereri de produse</p>
            </a>
          </li>

          @if(Route::currentRouteName() == "Alergii" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/allergies') }}">
          @endif
              <i class="fas fa-allergies"></i>
              <p>Alergii</p>
            </a>
          </li>

          <!-- @if(Route::currentRouteName() == "Soferi" )
            <li class="nav-item active">
            <a class="nav-link" href="#">
          @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/drivers') }}">
          @endif
          <i class="fas fa-car"></i>
          <p>Soferi</p>
            </a>
          </li> -->
      
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Bee Scanner</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
           
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        @if(Session::has('message'))
        <div class="alert alert-warning" role="alert">
          {{Session::get('message')}}
        </div>
        @endif
           @yield('content')
          
        </div>
      </div>
     
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="{{ asset('assets-admin/js/core/jquery.min.js')}}"></script>
  <script>
    $(".loader").delay(500).fadeOut("slow");
    $("#overlayer").delay(500).fadeOut("slow");
  </script>
  <script src="{{ asset('assets-admin/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('assets-admin/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{ asset('assets-admin/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{ asset('assets-admin/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('assets-admin/js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{ asset('assets-admin/js/plugins/jquery.validate.min.js')}}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ asset('assets-admin/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('assets-admin/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ asset('assets-admin/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{ asset('assets-admin/js/plugins/jquery.dataTables.min.js')}}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('assets-admin/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('assets-admin/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{ asset('assets-admin/js/plugins/fullcalendar.min.js')}}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{ asset('assets-admin/js/plugins/jquery-jvectormap.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets-admin/js/plugins/nouislider.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{ asset('assets-admin/js/plugins/arrive.min.js')}}"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('assets-admin/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets-admin/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets-admin/js/material-dashboard.js?v=2.1.1" type="text/javascript')}}"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('assets-admin/demo/demo.js')}}"></script>

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>

 <script>
  </script>
</body>

</html>