<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
@include('include.css')
</head>
<body>
    <div class="wt-haslayout wt-innerbannerholder">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title"><h2>LOGIN</h2></div>
                        <ol class="wt-breadcrumb">
                            <li class="wt-active">New to Freelancing Service Platform? <a href="{{ url('/register')}}">Register Instead.</a> </li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">


    <section class="login section-padding">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-5 col-md-12 col-xs-12">
    <div class="login-form login-area">
    <form method="POST" action="{{ route('login') }}" class="login-form">
    @csrf
        <div class="form-group">
        <div class="input-icon">
        <i class="lni-user"></i>
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email"  value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        </div>
        </div>
        <div class="form-group">
        <div class="input-icon">
        <i class="lni-lock"></i>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
        </div>
        <div class="form-group mb-3">
        <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="custom-control-label" for="checkedall">Remember Me </label>
        </div>
        <a class="forgetpassword" href="forgot-password.html">Forgot Password?</a>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary log-btn">Login</button>

        </div>
        <br><br><br><br>
    </form>
    </div>
    </div>
    </div>
    </div>
    </section>
    </main>
</body>
</html>

