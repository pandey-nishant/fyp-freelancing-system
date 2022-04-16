<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Freelancing Service Platform</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="{{asset('assets')}}/images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/normalize.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/scrollbar.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/linearicons.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/tipso.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/chosen.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/prettyPhoto.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/color.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/transitions.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
	<script src="{{asset('assets')}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="wt-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader Start -->
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<!-- Preloader End -->
	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			<!-- Header Start -->
			<header id="wt-header" class="wt-header wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="">Freelancing Service Platform</a></strong>
								<div class="wt-rightarea">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="nav-item {{ request()->path() === 'about' ? 'active' : '' }}">
													<a href="{{ url('/')}}">HOME</a>
												</li>
                                                <li class="nav-item {{ request()->path() === 'about' ? 'active' : '' }}">
													<a href="{{ url('how-we-work')}}">GETTING STARTED</a>
												</li>
                                                <li class="nav-item {{ request()->path() === 'services' ? 'active' : '' }}">
													<a href="{{ url('services') }}">SERVICES</a>
												</li>
                                                <li class="nav-item {{ request()->path() === 'service/providers' ? 'active' : '' }}">
													<a href="{{ url('/service-providers') }}">SERVICE PROVIDERS</a>
												</li>
                                                <li class="nav-item {{ request()->path() === '/testimonial' ? 'active' : '' }}">
													<a href="{{ url('/testimonial') }}">TESTIMONIALS</a>
												</li>
												<li class="nav-item {{ request()->path() === 'contact' ? 'active' : '' }}">
													<a href="{{ url('contact') }}">CONTACT US</a>
												</li>


                                                <li class="nav-item {{ request()->path() === 'login' ? 'active' : '' }}">
													<a href="javascript:void(0);" style="text-decoration: none;">|</a>
												</li>
                                                @guest
                                                <li class="nav-item {{ request()->path() === 'login' ? 'active' : '' }}">
													<a href="{{ url('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> LOGIN</a>
												</li>

                                                <li class="nav-item {{ request()->path() === 'register' ? 'active' : '' }}">
													<a href="{{ url('register') }}"><i class="fa fa-address-book-o" aria-hidden="true"></i> REGISTER</a>
												</li>
                                                @else
                                                <li class="nav-item {{ request()->path() === 'login' ? 'active' : '' }}">
													<a href="{{ url('login') }}"><i class="fa fa-tachometer" aria-hidden="true"></i> DASHBOARD</a>
												</li>

                                                <li class="nav-item" >
                                                <a class="header-top-button" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                   <i class="fa fa-sign-out" aria-hidden="true"></i> LOGOUT
                                                 </a>

                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                     @csrf
                                                 </form>
                                                </li>
                                                @endguest
											</ul>

										</div>

									</nav>


								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--Header End-->
