<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fi-Shop | Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container auth">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card card-login">
                    <div class="card-body login">
                        <div class="row">
                            <div class="col-md-6 col-12 left">
                                <img src="{{ asset('assets/logo-fi.png') }}" alt="Logo Fi-Shop" class="img-brand">
                                <h1 class="name-brand">Fi-Shop</h1>
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit Fuga nostrum accusantium, doloremque.
                                </p>
                            </div>
                            <div class="col-md-6 col-12 right">
                                <h1 class="login-title">
                                    Login
                                </h1>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="email">{{__('E-mail')}}</label>
                                            <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="example@example.com">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="email">{{__('Password')}}</label>
                                            <input id="email" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="*******">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: -16px; margin-bottom: 16px;">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="row" style="margin-top: -16px; margin-bottom: 16px;">
                                        <a class="btn btn-link" href="{{ route('register') }}">
                                            {{ __('Sign Up') }}
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-12">
                                            <button class="btn-auth" type="submit">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>