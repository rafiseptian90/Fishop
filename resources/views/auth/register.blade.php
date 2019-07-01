<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fi-Shop | Register</title>
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
                                    Register
                                </h1>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="name">{{__('Name')}}</label>
                                            <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="email">{{__('E-mail Address')}}</label>
                                            <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="example@example.com" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="password">{{__('Password')}}</label>
                                            <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="*******" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="password-confirm">{{__('Confirm Password')}}</label>
                                            <input id="password-confirm" class="form-control" type="password" name="password_confirmation" placeholder="*******" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-12">
                                            <button class="btn-auth" type="submit">
                                                Register
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