<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/clients/login/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/clients/login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/clients/login/css/bootstrap.min.css">
    <link rel="stylesheet" href="/clients/contactus/toastr/toastr.min.css">
    <link rel="stylesheet" href="/clients/login/css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4 text-center">
                                    <h3>Sign In </h3>
                                </div>
                                <form action="{{route('userlogin.index')}}" method="POST" role="form">
                                    @csrf
                                    <div class="form-group first">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" name="username" id="username">
                                    </div>
                                    <div class="form-group last mb-4">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password">
                                    </div>
                                    <div class="d-flex mb-5 align-items-center">
                                        <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                            <input type="checkbox" name="remember" />
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>
                                    <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">
                                    <div class="text-center pt-2">
                                        <a style=" text-decoration: none;" href="{{route('clients.register')}}">Don't have an account? <span><u>Register</u></span> </a>
                                    </div>
                                    </a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <script src="/clients/login/js/jquery-3.3.1.min.js"></script>
    <script src="/clients/login/js/popper.min.js"></script>
    <script src="/clients/login/js/bootstrap.min.js"></script>
    <script src="/clients/login/js/main.js"></script>
    <script src="/clients/contactus/toastr/toastr.min.js"></script>
    <script>
        toastr.options = {
            "debug": false,
            "positionClass": "toast-top-center",
            "fadeIn": 300,
            "fadeOut": 1000,
            "timeOut": 3000,
            "extendedTimeOut": 1000
        }
    </script>
    @if(Session::has('success'))
    <script>
        toastr.success("{{Session::get('success')}}", 'Success');
    </script>
    @endif
    @if(Session::has('fail'))
    <script>
        toastr.error("{{Session::get('fail')}}", 'Fail');
    </script>
    @endif
</body>

</html>