<!DOCTYPE html>
<html lang="en">


<head>
@include('include.header')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Register</title>
@include('include.css')
</head>
<body>


<div class="wt-haslayout wt-innerbannerholder">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title"><h2>Register As Customer</h2></div>
                    <ol class="wt-breadcrumb">
                        <li class="wt-active">Already Have an Account?<br>
                        <br>
                         <a href="{{ url('/login')}}">Login.</a> </li>
                         <break> 
                         <a href="{{ url('/')}}">Home</a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">


<section class="register section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="register-form login-area">
<h3>
Register Now & Get Your Job Done
</h3>
<form method="POST" action="{{ route('register') }}" class="login-form">
    @csrf

<div class="form-group">
<div class="input-icon">
<i class="lni-user"></i>
<input type="text" placeholder="Full Name" id="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-envelope"></i>
<input type="text" id="sender-email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
</div>
</div>
<div class="form-group">
    <div class="input-icon">
    <i class="lni-lock"></i>
    <input id="phone" placeholder="Phone Number" type="text" pattern="([9][8|7][0-9]{8})" maxlength="10"
    minlength="10" required class="form-control @error('phone') is-invalid @enderror" name="phone"
    value="{{ old('phone') }}">

    @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>

<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input id="password" type="password"  placeholder="Enter your Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input id="password-confirm" type="password" class="form-control" placeholder="Re-enter your Password" name="password_confirmation" required autocomplete="new-password">
</div>
</div>
<div class="form-group mb-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="checkedall" required>
<label class="custom-control-label" for="checkedall">By registering, you accept our Terms & Conditions</label>
</div>
</div>
<div class="text-center">
<button class="btn btn-primary log-btn">Register</button>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</main>
@include('include.footer')
</body>
</html>
