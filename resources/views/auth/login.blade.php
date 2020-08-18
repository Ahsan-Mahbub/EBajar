<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>Login</title>
    @include('Backend.layouts.css')
    @include('Backend.layouts.js')
</head>

<body class="full-width page-condensed" style="background-image: url(&quot;/ecommerce.jpg&quot;);background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%; ">


<div class="login-wrapper">
        <div class="popup-header" style="margin-top: -60px;">
            <a href="{{route('register')}}" class="pull-left"><i class="icon-user-plus"></i></a>
            <span class="text-semibold">User Login</span>
            <div class="btn-group pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                <ul class="dropdown-menu icons-right dropdown-menu-right">
                    <li><a href="{{route('register')}}"><i class="icon-people"></i> Change user</a></li>
                    <li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
                    <li><a href="#"><i class="icon-support"></i> Contact admin</a></li>
                    <li><a href="#"><i class="icon-wrench"></i> Settings</a></li>
                </ul>
            </div>
        </div>
        <div class="well" style="background-image: url(&quot;/ecommerce.jpg&quot;); ackground-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback">
                    <label for="name">E-Mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                

                

                <div class="row form-actions">
                    <div class="col-xs-6">
                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember Me</label> 
                    </div>

                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-warning ">Login</button>
                    </div>
                    <div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <a class="btn btn-link" href="{{ url('/register') }}">Create an account</a> 
                    </div>
                    
                </div>
            </form>
        </div>
</div>

</body>
</html>
