<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo-agro.svg') }}">
    <link rel="icon" href="{{ asset('img/logo-agro.svg') }}" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Owl Carousel -->
    <link href="{{ asset('vendors/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet"
          type="text/css"/>

    <!-- Toggles CSS -->
    <link href="{{ asset('vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper" id="quick_login">

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="auth-form-wrap pt-xl-0 pt-70">
                        <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                            <a class="auth-brand text-center d-block mb-20" href="#">
                                Login
                            </a>
                            <form method="POST" action="{{ route('login') }}" id="login_form">
                                @csrf
                                <p class="text-center mb-30">Resep Makanan</p>

                                <div class="form-group">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" placeholder="Email" required autocomplete="email"
                                           autofocus v-model="username">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" placeholder="Password" required
                                               autocomplete="current-password" v-model="password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="input-group-append">
                                            <span class="input-group-text"><span class="feather-icon"><i
                                                        data-feather="eye-off"></i></span></span>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block" type="submit" id="login_button">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <quick-login :accounts="accounts"></quick-login>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{ asset('js/feather.min.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('js/init.js') }}"></script>

@stack('before_scripts')

<script src="{{ url('/js/adminlte.min.js') }}"></script>
<script>
    var accounts = [
        {
            role: 'Super Admin',
            username: 'admin@admin.com',
            password: 'admin123'
        },
    ];
</script>

<script src="{{ asset('js/quick-login.js') }}"></script>

@stack('after_scripts')

</body>
</html>
