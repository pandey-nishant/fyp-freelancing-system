<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Freelancing Service Platform Customer Panel
  </title>
  <!--     Fonts and icons     -->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <!-- CSS Files -->
 <link href="{{ asset('customerdash') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
 <link href="{{ asset('customerdash') }}/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
 <!-- CSS Just for demo purpose, don't include it in your project -->
 <link href="{{ asset('customerdash') }}/assets/demo/demo.css" rel="stylesheet" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

</head>

<body class="" >
    <div class="wrapper ">
      <div class="sidebar" data-color="green" style="background-color:#929693;">
        <!--
      -->
`        <div class="logo" style="background-color:black;">
\\`
<center>
    <a class="sidebar-brand d-flex align-items-center justify-content-center" style="text-decoration:none; color:black;" href="{{ url('/')}}">
        <div class="sidebar-brand-text mx-2"> <h5 style="color:snow; ">  Freelancing Service Platform  </h5></div>
    </a>
</center>

        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper" style="background-color:black;">
            <ul class="nav">
              <li class="{{ 'customer'== request()->path() ? 'active' :'' }}">
                <a href="{{url('customer')}}">
                <p style="font-size: 15px; ">Dashboard</p>
                </a>
              </li>

              <li class="{{ 'customer/view/paid/services'== request()->path() ? 'active' :'' }}">
                <a href="{{url('/customer/view/paid/services')}}">
                    <p style="font-size: 15px; ">Transactions</p>

                  </a>
                </li>

              <li class="{{ 'customer/view/completed/services'== request()->path() ? 'active' :'' }}">
              <a href="{{ url('/customer/view/completed/services')}}">

              <p style="font-size: 15px; ">Completed Orders</p>
                </a>
              </li>

              <li class="{{ 'customer/reviews'== request()->path() ? 'active' :'' }}">
                <a href="{{ url('/customer/reviews')}}">
                  <p style="font-size: 15px; ">Reviews</p>

                </a>
              </li>



              <li class="{{ 'customer/settings'== request()->path() ? 'active' :'' }}">
                <a href="{{ url('customer/settings')}}">
                <p style="font-size: 15px; ">Settings</p>
                  </a>
                </li>

                <li>
                
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="" aria-hidden="true"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </li>

            </ul>
          </div>
        </div>
        <div class="main-panel" id="main-panel" >
          <!-- Navbar -->
        <br><br><br>
        <div class="content" >
            @if(session()->has('message'))
            <div class="alert alert-success">{{session()->get('message')}}</div>
            @elseif(session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}} </div>
            @endif

          <div class="container">
            @yield('content')
        </div>


        </div>


      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('customerdash') }}/assets/js/core/jquery.min.js"></script>
    <script src="{{ asset('customerdash') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('customerdash') }}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('customerdash') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('customerdash') }}/assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('customerdash') }}/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('customerdash') }}/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('customerdash') }}/assets/demo/demo.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

    @yield('scripts')
  </body>


  </html>
<script>
    $("document").ready(function(){
    setTimeout(function(){
        $("div.alert").remove();
    }, 5000 ); // 5 secs

});
</script>
