<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="back-ground">
        <div class="container">
            <div class="box-content" style="width: 500px;">
                <div class="brand">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <p>Enter your email address and password to access admin panel.</p>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoop!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif                    
                <form action="{{ route('account.login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="username" class="control-label">Email address</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="checkbox">
                        <label for="remember">
                            <input type="checkbox" class="" name="remember" checked> Remember me
                        </label>
                    </div>
                    <input type="submit" class="btn btn-default" name="submit" value="Login">
                </form>
            </div>
            <!-- end box-content -->

            <div class="foot-content text-center" style="width: 500px;">
                <div>
                    <a href="#" id="forgot-password">Forgot your password ?</a>
                </div>
                <div>
                    <a href="{{ route('account.showRegister') }}" id="sign-up">Don't have an account ? <span>Sign Up</span></a>
                </div>
            </div>
            <!-- end foot-content -->
        </div>
    </div>
</body>

</html>