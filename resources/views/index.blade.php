{{-- <!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- font awesome CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<!-- owl.carousel CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
<!-- meanmenu CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/meanmenu/meanmenu.min.css')}}">
<!-- animate CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<!-- normalize CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/normalize.css')}}">
<!-- mCustomScrollbar CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
<!-- Notika icon CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/notika-custom-icon.css')}}">
<!-- wave CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/wave/waves.min.css')}}">
<link rel="stylesheet" href="{{asset('css/wave/button.css')}}">
<!-- main CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<!-- style CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('style.css')}}">
<!-- responsive CSS
            ============================================ -->
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<style>
    .login-content,
    .error-page-area {
        background-color: rgb(0, 142, 52);
    }

    .nk-block.toggled {
        -webkit-animation-name: fadein;
        animation-name: fadein;
        -webkit-animation-duration: .9s;
        animation-duration: .9s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        z-index: 10;
    }
</style>
<script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <form action="{{url('login')}}" method="POST" class="nk-form">
                <h1>Veillez renseignez le formulaire</h1> <br>
                @csrf
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="samAccountName" class="form-control" placeholder="Identifiant">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin: 15px">
                    <button class="btn btn-success col-md-4">Se connecter</button>
                </div>
            </form>
            <div class="nk-navigation nk-lg-ic"></div>
        </div>
    </div>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('js/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('js/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{asset('js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/flot/flot-active.js')}}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{asset('js/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('js/knob/jquery.appear.js')}}"></script>
    <script src="{{asset('js/knob/knob-active.js')}}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{asset('js/wave/waves.min.js')}}"></script>
    <script src="{{asset('js/wave/wave-active.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{asset('js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('js/icheck/icheck-active.js')}}"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{asset('js/chat/jquery.chat.js')}}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{asset('js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en" class=" bg-success">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FCPB Connexion</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="icon" type="image/png,jpg" href="{{ asset('img/mokutech.jpg') }}" />
    <style>
        .card-primary.card-outline {
            border-top: 3px solid #218838;
        }
    </style>
</head>

<body class="hold-transition login-page bg-dark">
    <div class="login-box" style="width: 540px;">
        <!-- /.login-logo -->
        <div class="card card-info bg-light">
            <div class="card-header bg-warning">
                <h3 class="card-title" style="color: #002a54;font-weight:bold">AUTHENTIFICATION</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2" name="remember">
                                <label class="form-check-label" for="exampleCheck2">Remember me</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Se connecter</button>
                    <a href="{{ route('register') }}" class="btn btn-warning float-right">S'inscrire</a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>

</html>
