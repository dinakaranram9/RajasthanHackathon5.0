<?php
include("common.php");

session_start();
$dob=$_REQUEST['dob'];

$email=$_REQUEST['email'];
if($_SESSION['email']!="")
{
	
	header("Location: dashboard.php");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	

$query=mysqli_query($conn,"select email,dob from application where email='$email' and dob='$dob'");
$count=mysqli_num_rows($query);
	$output=mysqli_fetch_assoc($query);
	
	if($count==1)
	{
		$k=$output['email'];
		$_SESSION['email']=$k;
	echo"success";	
 echo "<script type='text/javascript'> window.location='dashboard.php' </script>";

	}
	else
	{
		
		echo"<script> alert('Invalid User')</script>";
	}
}




?>				

				
				
				
				
				
				
				<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <title>Login Form </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/customicon.css">
        <link rel="stylesheet" href="css/linearicons.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="header" class="navbar-fixed-top">
            <div class="container">
                <div class="main_menu">	
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand our_logo" href="#">Panimalar</a>
                                <div class="call_us">
                                    <i class="fa fa-phone"></i>
                                    +44 2649 0101
                                </div>	  
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.html">HOme</a></li>
                                 <li><a href="formapp.php">Application</a></li>
                                    <li><a href="login.php">Login</a></li>
									<li><a href="admin.php">Admin</a></li>
																		<li><a href="contact.php">Contact Us</a></li>

                                     </ul>
                                 
                             
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>

                </div>
            </div>
        </header>
        <!--Home page style-->

        <!-- Google Maps Sections -->
	<section id="google_map" class="">
			<div class="container-fullwidth">
	
		</div>
		</section>
		
		
		
		<!-- Contact form -->
		<section id="message_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="message_top_text text-center">
							<h2>Login Form</h2>
							<p class="description_p">Enter your Email and DateOfBirth</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="messsage_contant">
						<div class="col-md-7 col-sm-7">
							<div class="single_message_left">
								<form action="" id="formid" method="POST">
										<!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->
										  
										
										 
										   
											
											
									 
										   <div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="Type Your Email" required="">
										  </div>

										  <div class="form-group">
											<input type="text" class="form-control" name="dob" placeholder="Type your Date of Birth" required="">
										  </div>
										 
										  

										  <div class="center-content">
											<input type="submit" value="signin" name="signin" class="btn btn-primary">
										  </div>
										<!--</div>--> 
								</form>
							</div>
						</div>
						
						<div class="col-md-5 col-sm-5">
							<div class="single_message_right">
								<h4>Headquarter</h4>
								<p>
									<i class="fa fa-map-marker"></i> 
									Panimalar Engineering College
									<span>Bangalore Trunk Road</span>
									<span>Nazreth Pettai,Poonamalle</span>
								</p>
								
								<p><i class="fa fa-phone"></i>+44 2640 0101</p>
								<p><i class="fa fa-envelope"></i>panimalarengineeringcollege@co.in</p>
								<p></p>
							</div>
						</div>
					</div> <!-- End of messsage contant-->
				</div>
			</div>
		</section>


      


        <!--Footer-->
       

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script src="http://maps.google.com/maps/api/js"></script>
        <script src="js/gmaps.min.js"></script>
            <script>
            var map = new GMaps({
              el: '.ourmaps',
              scrollwheel: false,
              lat: -12.043333,
              lng: -77.028333
            });
            </script>		
    </body>
</html>
