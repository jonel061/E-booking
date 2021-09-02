<?php
    session_start();

    //connect to a database 
    $db = mysqli_connect("localhost","root","","problema2");

    if(isset($_POST['register_btn'])){
        session_start();
        $username = mysq_real_escape_string($_POST['username']);
        $email = mysq_real_escape_string($_POST['email']);
        $password = mysq_real_escape_string($_POST['password']);
        $password2 = mysq_real_escape_string($_POST['password2']);

        if ($password == $password2){
            //create username
            $password = md5($password); // hash password
            $sql ="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
            mysqli_query($db, $sql);
            $_SESSIONS['message']="Yo are now logged in";
            $_SESSIONS['username']=$username;
           header("location:home.php");
        }else{
            //failed
            $_SESSIONS['message']="The two password do not match";
        }
    }

?>


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
                                    <form method="post" action="register.php">
                                        <label style="color: aliceblue; ">Name</label><br>
                                        <label>
                            <input type="text " class="form-control " name="username " >
                       <label style="color: aliceblue; ">Email</label><br>
                                        <label>
                            <input type="email " class="form-control " name="email ">
                        </label><br>
                                        <label style="color: aliceblue; ">Password</label><br>
                                        <label>
                            <input type=" password " class="form-control " name="password ">
                        </label>
                                        <label style="color: aliceblue; ">Repeat Password</label><br>
                                        <input type="password" name="password2" class="form-control ">
                                        <a href=" home.html "><input type="submit " name="register_btn" class="btn btn primary btn-block btn-lg " value="Login " style="color: aliceblue; "></a>
                                        </label>

                                        <p class="mt-50 " style="color: aliceblue; "> You are a member?
                                            <a href=" login.html " style="color: aliceblue; ">Login </a>
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