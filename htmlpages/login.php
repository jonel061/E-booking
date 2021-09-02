
<?php require('../server.php') ?>


<!DOCTYPE html>



<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url_for('static',filename='css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
        
        .bg {
            /* The image used */
            background-image: url("../img/Ebooking/travel.jpg");
            /* Full height */
            height: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>


<div class="bg">

    <body class="bg-nav">
        <nav class="navbar">
            <a href="" class="navbar-brand text-light" style="color: aliceblue;">Johnny</a>
        </nav>
        <div id="demoObject">
            <div class=" container ">
                <div class="row ">
                    <div class="col-md-8 ">
                        <h1 class="text-light display-4 mt-50 " style="font-size:80px " style="color: aliceblue; ">Ebooking</h1>
                        <div class=" col-md-4 ">
                            <div class="card mt-100 "></div>
                            <div class="card-body ">
                                <!--suppress HtmlUnknownTarget -->
                                <form method="post" action="login.php">
                                <?php include('../errors.php'); ?>
                                <div class="input-group">
                                    <label>Username</label>
                                    <input type="text" name="username" >
                                </div>
                                <div class="input-group">
                                    <label>Password</label>
                                    <input type="password" name="password">
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="btn" name="login_user">Login</button>
                                </div>
                                <p style="color:black">
                                    Not yet a member? <a href="http://localhost/Problema2/Public/register" style="color:black">Sign up</a>
                                </p>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Option1:jQueryandBootstrapBundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>

        <!-- Option2:jQuery,Popper.js,andBootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous "></script>-->
</div>
</body>

</html>