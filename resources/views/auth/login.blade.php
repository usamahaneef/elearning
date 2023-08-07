<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('frontend/login/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/login/assets/css/style.css') }}" rel="stylesheet">

    <title>E-Learning System</title>
</head>

<body>
    <section class="form-01-main">
        <div class="form-cover">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-sub-main">
                                <div class="_main_head_as">
                                    <a href="#">
                                        <img src="{{ asset('frontend/login/assets/images/vector.png') }}">

                                    </a>
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-block btn-success ">Login</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>