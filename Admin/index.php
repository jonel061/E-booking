<?php
session_start();
include('../includes/config.php');
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'http://localhost/Problema2/admin/dashboard.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />


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
<body>
<div class="bg">

    <body class="bg-nav">
        <nav class="navbar">
            <a href="" class="navbar-brand text-light" style="color: aliceblue;">Johnny</a>
        </nav>
        <div id="demoObject">
            <div class=" container ">
                <div class="row ">
                    <div class="col-md-8 ">
                        <h1 class="text-light display-4 mt-50 " style="font-size:80px " style="color: aliceblue; ">Admin-Ebooking</h1>
                        <div class=" col-md-4 ">
                            <div class="card mt-100 "></div>
                            <div class="card-body ">
                                <!--suppress HtmlUnknownTarget -->
								<form  method="post">
								<div class="input-group">
                                    <label>Username</label>
                                    <input type="text" name="username" >
                                </div>
                                <div class="input-group">
                                    <label>Password</label>
                                    <input type="password" name="password">
                                </div><br>
			
			<div class="login-w3">
					<input type="submit" class="login" name="login" value="Sign In"><br>
					<a href="/Problema2/home.php">Back to home</a>
				</div>
			</div>
			<div class="clearfix"></div>
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