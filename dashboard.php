
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
error_reporting(E_ALL && E_PARSE);

include("common.php");
session_start();

echo $_SESSION['email'];


$query=mysqli_query($conn,"select firstname,status from application where email='".$_SESSION['email']."'");
$count=mysqli_num_rows($query);
$output=mysqli_fetch_assoc($query);
	


?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Company Error Page template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style3.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="agileits-main"> 
	<div class="w3top-nav">	
				<div class="w3top-nav-left">	
					<h1><a href="index.html">Panimalar University</a></h1>
				</div>	
				
				<div class="clear"></div>
			</div>	
		<div class="agileinfo-row">
			
			<h2>Welcome to Panimalar Engineering College</h2>
			<h3>HI <?php echo $output['firstname'];  ?> </h3>
			<h2>
			<?php
			if($output['status']=="")
{
echo "Wait for Admin Confirmation ".'<br/>';
echo "Login after some time";
}
if($output['status']=="confirm")
{
	echo "Congratulations!!!!Your Seat IS COnfirmed..Contact College and approach....";
}
else
{
	echo "Sorry!!!Your applicaton cannot fullfil the requirements.";
}
?></h2>
<h3><a href="logout1.php">Log Out</a></h3>
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="copyright w3-agile">
		<p>© 2017 Panimalar Page . All rights reserved | Design by <a href="http://w3layouts.com" target="_blank">CSE THUGS</a></p>
	</div>
	<!-- //copyright --> 
</body>
</html>