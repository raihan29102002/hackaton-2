<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Login TBN Indonesia</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('images/Rectangle\ 32.jpg');">
            <div class="text-left"
                style="position: absolute; top: 50%; right: -10%; transform: translate(-50%, -50%); color: white; text-align: center;">
                <h3 style="font-size: 40px; font-weight: bold; margin-bottom: 15px; text-align:center;">Make sure your
                    account is correct
                </h3>
                <h4 style="font-size: 20px; margin-bottom: 15px; text-align:center;">Enter your personal details
                </h4>
                <h4 style="font-size: 20px; margin-bottom: 15px; text-align:center;">and start journey with us</h4>
                <div class="text-center mt-3">
                    <a href="signupp.php" class="btn btn-outline-primary btn-sm"
                        style="font-size: 20px; margin-bottom: 15px; text-align:center; font-weight: bold">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3>Sign In</h3>
                            <p class="mb-4">Or use your account for login.</p>
                        </div>
                        <div class="social-login">
                            <a href="google-oauth.php"
                                class="google btn d-flex justify-content-center align-items-center">
                                <span class="icon-google mr-3"></span> Login with Google
                            </a>
                        </div>
                        <form action="login.php" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username">

                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>