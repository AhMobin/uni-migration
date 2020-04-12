<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Student Login | University Admission System</title>

    <!-- Bootstrap -->
    <link href="{{ asset('public/backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('public/backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('public/backend/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('public/backend/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('public/backend/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h1>Administrative Login</h1>
                    <div>
                        <input type="email" name="email_address" class="form-control @error('email_address') is-invalid @enderror" placeholder="Admin Email Address"value="{{ old('email_address') }}" required autocomplete="email_address">
                        @error('email_address')
                        <span class="invalid-feedback" role="alert">
                          <strong style="color: red">{{ $message }}</strong>
                      </span>
                        @enderror
                    </div>
                    <div>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong style="color: red">{{ $message }}</strong>
                      </span>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-default submit">Log in</button>
                        @if(Route::has('password.request'))
                            <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                        @endif
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div>
                            <p>Public University Admission System © AHM
                                <script>document.write(new Date().getFullYear())</script></p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
