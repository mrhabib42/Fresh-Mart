<?php 

include_once('database/connection.php')
 ?>
<!DOCTYPE html>
<html lang="zxx">
	

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>FreshMart - Organic, Fresh Food, Farm Store HTML Template</title>
		
		<meta name="keywords" content="Organic, Fresh Food, Farm Store">
		<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
		<meta name="author" content="tivatheme">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reponsive.css">
	</head>
	
	<body class="home home-2">
		<div id="all">
			<!-- Header -->
			
			<?php include('header.php') ?>
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Login</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><span>Login</span></li>
						</ul>
					</div>
				</div>
			
			
				<div class="container">
					<div class="login-page">
						<div class="login-form form">
							<div class="block-title">
								<h2 class="title"><span>Login</span></h2>
							</div>
						
							<form  method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>Email</label>
									<input type="email" value="" name="_email" required>
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input type="password" value="" name="_pass">
								</div>
								
								<div class="form-group text-center">
									<div class="link">
										<a href="#">Forgot your password?</a> 
										<a href="register.php">Register?</a>
									</div>
								</div>
								
								<div class="form-group text-center">
									<input type="submit" name="btnLogin" class="btn btn-primary" value="Sign In">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			
			<!-- Footer -->
			<?php include('footer.php') ?>
			
			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fa fa-long-arrow-up"></i>
				</a>
			</div>
			
			<!-- Page Loader -->
			<div id="page-preloader">
				<div class="page-loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>
			
		<!-- Vendor JS -->
		<script src="libs/jquery/jquery.js"></script>
		<script src="libs/bootstrap/js/bootstrap.js"></script>
		<script src="libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="libs/slider-range/js/tmpl.js"></script>
		<script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="libs/slider-range/js/draggable-0.1.js"></script>
		<script src="libs/slider-range/js/jquery.slider.js"></script>
		<script src="libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="js/main.js"></script>
	</body>


</html>

<?php 
if(isset($_POST['btnLogin']))
{
	$uemail = $_POST['_email'];
    $upass = $_POST['_pass'];

	$query = "SELECT * FROM `users` WHERE User_Email='$uemail' and User_Password='$upass'";
	$res = mysqli_query($con, $query);
	if(mysqli_num_rows($res))
	{
		$row = mysqli_fetch_assoc($res);
		$_SESSION['uemail'] = $row['User_Email'];
		$_SESSION['uname'] = $row['User_Name'];
		$_SESSION['uimg'] = $row['User_Image'];
		echo"<script> window.location.assign('index.php')</script>";
	}
	else{
		echo"<script> alert('Invliad Email & Password...')</script>";
	}
}

?>