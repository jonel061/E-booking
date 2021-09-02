<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
//$lastInsertId = $dbh->lastInsertId();
//if($lastInsertId)
//{
//$msg="Enquiry  Successfully submited";
//}
//else 
//{
//$error="Something went wrong. Please try again";
//}

}

?>
<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<head>
    <meta charset="utf-8">
    <title> enquiry</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../img/favicon.png" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Libraries CSS Files -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../css/style_ebooking.css" rel="stylesheet">
    <link href="../css/style_slideshow.css" rel="stylesheet">

    <script type="text/javascript" src="slide.js"></script>

</head>
<style>
       body {
        background: linear-gradient(45deg, rgba(29, 224, 153, 0.8), rgba(29, 253, 239, 0.8)), url("../img/Ebooking/travel.jpg") center top no-repeat;
            color: #666666;
            font-family: "Open Sans", sans-serif;
            overflow-x: hidden;
        }
        
        a {
            color: #1dc8cd;
            transition: 0.5s;
        }
        

</style>


<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a style="color:blue" href="#intro" class="scrollto">Ebooking</a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a style="color:blue" href="#intro">Home</a></li>
                <li class="menu-has-children"><a style="color:blue" href="#Touristic Destination">Touristic Destination</a>
                    <ul>
                        <li><a href="http://localhost/Problema2/Public/zrenjanin">Zrenjanin</a></li>
                        <li><a href="http://localhost/Problema2/Public/timisoara">Timisoara</a></li>
                    </ul>
                    <li class="menu-has-children"><a style="color:blue" href="http://localhost/Problema2/Public/login">Login</a>
                    <li class="menu-has-children"><a style="color:blue" href="http://localhost/Problema2/Public/admin">Admin Login</a>
                    <li class="menu-has-children"><a style="color:blue" href="http://localhost/Problema2/Public/enquiry">Enquiry</a>
                    </li>
            </ul>
        </nav>
        <!-- #nav-menu-container -->
    </div>
</header>
<br><br><br><br><br><br>
<body>
<div class="container">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Enquiry Form </h3>
		<form name="enquiry" method="post" action='http://localhost/Problema2/Public/enquiry'>
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	<p style="width: 350px;">
		
			<b>Full name</b>  <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name" required="">
	</p> 
<p style="width: 350px;">
<b>Email</b>  <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email id" required="">
	</p> 

	<p style="width: 350px;">
<b>Mobile No</b>  <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="10 Digit mobile No" required="">
	</p> 

	<p style="width: 350px;">
<b>Subject</b>  <input type="text" name="subject" class="form-control" id="subject"  placeholder="Subject" required="">
	</p> 
	<p style="width: 350px;">
<b>Description</b>  <textarea name="description" class="form-control" rows="6" cols="50" id="description"  placeholder="Description" required=""></textarea> 
	</p> 

			<p style="width: 350px;">
<button type="submit" name="submit1" class="btn-primary btn">Submit</button>
			</p>
			</form>

		
	</div>
</div>
</div
