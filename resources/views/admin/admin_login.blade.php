<!DOCTYPE html>
<html lang="en">
<head>
    <title>K.G. Children School</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="shortcut icon" type="image/x-icon" href="/logo/image20.jpg">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/css/util.css">
    <link rel="stylesheet" type="text/css" href="form/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('form/images/bg-02.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{url('/admin')}}" method="post">
                    @csrf
                    <span class="login100-form-logo">
                        <img src="logo/logo2.png">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27" style="font-weight: bold;">
                        K.G. Children School
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                        <input class="input100" type="email" name="email" placeholder="E-mail">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                   

                    <div class="contact100-form-checkbox" style="visibility: hidden;">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    

                    
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="form/vendor/bootstrap/js/popper.js"></script>
    <script src="form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="form/vendor/daterangepicker/moment.min.js"></script>
    <script src="form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="form/js/main.js"></script>

</body>
</html>