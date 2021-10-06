
@extends('site.layout.main');
@section('page');

{{--    <!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">--}}
{{--    <meta name="generator" content="Hugo 0.88.1">--}}
{{--    <title>Signin Template · Bootstrap v5.1</title>--}}

{{--    <link rel="canonical" href="signin">--}}



{{--    <!-- Bootstrap core CSS -->--}}
{{--    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">--}}

{{--    <style>--}}
{{--        .bd-placeholder-img {--}}
{{--            font-size: 1.125rem;--}}
{{--            text-anchor: middle;--}}
{{--            -webkit-user-select: none;--}}
{{--            -moz-user-select: none;--}}
{{--            user-select: none;--}}
{{--        }--}}

{{--        @media (min-width: 768px) {--}}
{{--            .bd-placeholder-img-lg {--}}
{{--                font-size: 3.5rem;--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}


{{--    <!-- Custom styles for this template -->--}}
{{--    <link href="signin.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body class="text-center">--}}
{{--<main class="form-signin">--}}
{{--  <form method=post action="{{route('signin')}}" enctype="multipart/form-data">--}}
{{--      @csrf--}}
{{--    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}
{{--    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>--}}

{{--    <div class="form-floating">--}}
{{--      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">--}}
{{--      <label for="floatingInput">Email address</label>--}}
{{--    </div>--}}
{{--    <div class="form-floating">--}}
{{--      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">--}}
{{--      <label for="floatingPassword">Password</label>--}}
{{--    </div>--}}

{{--    <div class="checkbox mb-3">--}}
{{--      <label>--}}
{{--        <input type="checkbox" value="remember-me"> Remember me--}}
{{--      </label>--}}
{{--    </div>--}}
{{--    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>--}}
{{--    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>--}}
{{--  </form>--}}
{{--</main>--}}
{{--</body></html>--}}


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

{{--    <link rel="stylesheet" href="css/style.css">--}}
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="css/owl.carousel.min.css">--}}
{{--    <link rel="stylesheet" href="fonts/icomoon/style.css">--}}
{{--    <!-- Bootstrap core CSS -->--}}
{{--    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">--}}

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center" style="
  height: 100%;
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;">

<main class="form-signin" style="width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;">
    <form method=post action="{{route('signin')}}" enctype="multipart/form-data">
        @csrf
{{--        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
{{--            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">--}}
            <div  class="input-group has-validation">
                <input type="email" class="form-control" name="email"  placeholder="you@example.com" required>
                <div class="invalid-feedback">
                    Your email is required.
                </div>
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>
            <label for="floatingInput">Email address</label>

        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password"  placeholder="password" required>
            <div class="invalid-feedback">
                Please enter your shipping password.
            </div>
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <a href="{{route('register')}}">create another acount</a>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
</main>


</body>
</html>






{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="fonts/icomoon/style.css">--}}

{{--    <link rel="stylesheet" href="css/owl.carousel.min.css">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}

{{--    <!-- Style -->--}}
{{--    <link rel="stylesheet" href="css/style.css">--}}

{{--    <title>Login #9</title>--}}
{{--</head>--}}
{{--<body>--}}



{{--<div class="content">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <!-- <div class="col-md-6 order-md-2">--}}
{{--              <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">--}}
{{--            </div> -->--}}
{{--            <div class="col-md-6 contents">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="form-block">--}}
{{--                            <div class="mb-4">--}}
{{--                                <h3>Sign In to <strong>Colorlib</strong></h3>--}}
{{--                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>--}}
{{--                            </div>--}}
{{--                            <form action="#" method="post">--}}
{{--                                <div class="form-group first">--}}
{{--                                    <label for="username">Username</label>--}}
{{--                                    <input type="text" class="form-control" id="username">--}}

{{--                                </div>--}}
{{--                                <div class="form-group last mb-4">--}}
{{--                                    <label for="password">Password</label>--}}
{{--                                    <input type="password" class="form-control" id="password">--}}

{{--                                </div>--}}

{{--                                <div class="d-flex mb-5 align-items-center">--}}
{{--                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>--}}
{{--                                        <input type="checkbox" checked="checked"/>--}}
{{--                                        <div class="control__indicator"></div>--}}
{{--                                    </label>--}}
{{--                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>--}}
{{--                                </div>--}}

{{--                                <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">--}}

{{--                                <span class="d-block text-center my-4 text-muted"> or sign in with</span>--}}

{{--                                <div class="social-login text-center">--}}
{{--                                    <a href="#" class="facebook">--}}
{{--                                        <span class="icon-facebook mr-3"></span>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="twitter">--}}
{{--                                        <span class="icon-twitter mr-3"></span>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="google">--}}
{{--                                        <span class="icon-google mr-3"></span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<script src="js/jquery-3.3.1.min.js"></script>--}}
{{--<script src="js/popper.min.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/main.js"></script>--}}
{{--</body>--}}

