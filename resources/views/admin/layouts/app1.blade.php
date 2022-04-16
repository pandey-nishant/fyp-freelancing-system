<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HG Admin Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="" alt="Logo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>

      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('assets') }}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('assets') }}/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('assets') }}/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/')}}" class="brand-link">
        <img src="{{asset('assets')}}/images/hg-logo3.JPG" alt="company logo here" style="height:3.5rem;">
      {{-- <span class="brand-text font-weight-light">Hire Garam</span> --}}
    </a>
    <br><br>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('admin/home')}}" class="nav-link {{ 'admin/home'== request()->path() ? 'active' :'' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <li class="nav-item {{ 'admin/service/requests'== request()->path() ? 'active' :'' }}">
            <a class="nav-link  {{ 'admin/service/requests'== request()->path() ? 'active' :'' }}" href="{{ url('admin/service/requests') }}">
                <i class="fa fa-map" aria-hidden="true"></i>
                <p>&nbsp; Services Requests </p></a>
          </li>

          <li class="nav-header">SERVICES MANAGEMENT</li>
          <li class="nav-item {{ 'admin/service'== request()->path() ? 'active' :'' }}  {{ 'admin/add/service'== request()->path() ? 'active' :'' }}">
            <a class="nav-link {{ 'admin/service'== request()->path() ? 'active' :'' }}  {{ 'admin/add/service'== request()->path() ? 'active' :'' }}" href="{{ url('admin/service') }}">
                <i class="fa fa-folder-open" aria-hidden="true"></i>
                <p>Services Entry </p></a>
        </li>
        <li class="nav-item {{ 'admin/service-provider'== request()->path() ? 'active' :'' }} {{ 'admin/add/service-provider'== request()->path() ? 'active' :'' }}">
            <a class="nav-link {{ 'admin/service-provider'== request()->path() ? 'active' :'' }} {{ 'admin/add/service-provider'== request()->path() ? 'active' :'' }}"" href="{{ url('admin/service-provider') }}">
                <i class="fa fa-street-view" aria-hidden="true"></i>
                <p> Service Providers </p></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{ 'admin/service/categories'== request()->path() ? 'active' :'' }}{{ 'admin/service-categories'== request()->path() ? 'active' :'' }}" href="{{ url('admin/service/categories')}}">
                <i class="fas fa-fw fa-th-list"></i>
                <p>Service Categories </p></a>
        </li>
          <li class="nav-header">SITE MANAGEMENT</li>
          <li class="nav-item ">
            <a class="nav-link {{ 'admin/banner'== request()->path() ? 'active' :'' }}{{ 'admin/add-banner-image'== request()->path() ? 'active' :'' }}" href="{{ url('admin/banner')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <p>Slider Images</p></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{ 'admin/testimonials'== request()->path() ? 'active' :'' }}" href="{{ url('admin/testimonials')}}">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <p>Reviews and Feedbacks</p></a>
        </li>
          <li class="nav-item">
            <a href="pages/charts/uplot.html" class="nav-link">
                <i class="fa fa-users" aria-hidden="true"></i>
              <p>Teams Section</p>
            </a>
          </li>
          <li class="nav-header">USERS SECTION</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
               Users Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="nav-icon fas fa-binoculars"></i>

                  <p>Permissions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-address-card nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                    <i class="nav-icon fas fa-user-secret"></i>

                  <p>Admin Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                    <i class="nav-icon fas fa-id-badge"></i>

                  <p>Customers </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">SETTINGS</li>
          <li class="nav-item ">
            <a class="nav-link {{ 'admin/settings'== request()->path() ? 'active' :'' }} {{ 'change_password'== request()->path() ? 'active' :'' }}" href="{{ url('admin/settings')}}">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <span> Account Settings</span></a>
        </li>
          {{-- <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fa fa-cogs" aria-hidden="true"></i>
              <p>Other Settings</p>
            </a>
          </li> --}}
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        @yield('content')
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets') }}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('assets') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('assets') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('assets') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('assets') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('assets') }}/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets') }}/dist/js/pages/dashboard2.js"></script>
@yield('scripts')
</body>
</html>
