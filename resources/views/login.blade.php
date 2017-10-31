<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page | VSAT</title>

    {{--make all above links same as below--}}
    <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/advbuttons.css') }}" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="text-center">
            <img class="v-align" src="img/tracelogo.png" alt="TraceLogo" />
        </div>
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div id="login">
                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Username/Email" autofocus value="{{ old('email') }}" required>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block" style="color: orange">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block" style="color: orange">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                    <span id="ForgetPass" class="pull-right"> <a href="#"> Forgot Password?</a></span>
                </label>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </div>

            <div id="ForgetForm" class="hide">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" placeholder="Username" autofocus>
                </div>
                <div class="text-center">Or</div>
                <br />
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_mail"></i></span>
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
                <button id="sndbtn" class="btn btn-primary btn-lg btn-block" type="button">Send</button>
            </div>
        </div>
    </form>

</div>
<div class="text-left">
    <div class="credits">
        <img src="img/ics technologies new.png" alt="Powered By ICS Technologies" />
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#ForgetPass').on('click', function () {
            $('#login').fadeToggle(700).addClass('hide');
            $('#ForgetForm').fadeToggle().removeClass('hide');

        });
        $('#sndbtn').on('click', function () {
            alert('Reset Password has been sent to your Email');
            $('#ForgetForm').fadeToggle().addClass('hide');
            $('#login').fadeToggle().removeClass('hide');
        });
    });
</script>
</body>
</html>


{{--Route::match(['get', 'post'], 'register', function(){--}}
{{--return redirect('/');--}}
{{--});--}}