<?php

include_once('database/connection.php');

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
					<h2 class="title">Shopping Cart</h2>

					<ul class="breadcrumb">
						<li><a href="#" title="Home">Home</a></li>
						<li><span>Shopping Cart</span></li>
					</ul>
				</div>
			</div>

			<div class="container">
				<div class="page-cart">
					<div class="table-responsive">
						<table class="cart-summary table table-bordered">
							<thead>
								<tr>
									<th class="width-20">&nbsp;</th>
									<th class="width-80 text-center">Image</th>
									<th>Name</th>
									<th class="width-100 text-center">Unit price</th>

									<th class="width-100 text-center">Total</th>
								</tr>
							</thead>

							<tbody>
								 <?php
									$idd = $_GET['Id'];

								 if (isset($_SESSION['uemail']) != "") {
									$query = "SELECT * FROM `products` WHERE Pro_Id='$idd'";
									$res = mysqli_query($con, $query);
									$row = mysqli_fetch_assoc($res);
									$im = $row['Pro_Image'];
									$na = $row['Pro_Name'];
									$pp = $row['Pro_Price'];


									$query_insert = "INSERT INTO `cart`(`PImage`, `PName`, `Unitprice`, `Qty`, `TotalPrice`) VALUES ('$im','$na','$pp','1','$pp*1')";
									$result = mysqli_query($con, $query_insert);
									if ($result) {
										echo "<script>alert('product Added Successfullt...')</script>";
									}

									$query_cart = "SELECT * FROM `cart`";
									$res_cart = mysqli_query($con, $query_cart);

									while ($row_cart = mysqli_fetch_assoc($res_cart)) {
								?>

										<tr>
											<td class="product-remove">
												<a title="Remove this item" class="remove" href="#">
													<i class="fa fa-times"></i>
												</a>
											</td>
											<td>
												<a href="product-detail-left-sidebar.html">
													<img width="80" alt="Product Image" class="img-responsive" src="Images/Products/<?php echo $row_cart['PImage'] ?>">
												</a>
											</td>
											<td>
												<a href="product-detail-left-sidebar.html" class="product-name"><?php echo $row_cart['PName'] ?></a>
											</td>
											<td class="text-center">
												<?php echo $row_cart['Unitprice'] ?>
											</td>

											<td class="text-center">
												<?php echo $row_cart['TotalPrice']?>
											</td>
										</tr>
										
									<?php
								}
									?>

								<?php
								} else {
									echo "<script> alert('Please Login for Add to Cart....')</script>";
									echo "<script> window.location.assign('login.php')</script>";
								}


								?>



							</tbody>

							<tfoot>
								<tr class="cart-total">
									<td rowspan="3" colspan="3"></td>
									<td colspan="2" class="text-right">Total Products Price</td>
									<?php

									$query = "SELECT sum(TotalPrice) FROM `cart`";
									$res = mysqli_query($con, $query);
									$row = mysqli_fetch_assoc($res);
									
									?>
									<td colspan="1" class="text-center"><?php echo $row['sum(TotalPrice)'] ?></td>
								</tr>
								<tr class="cart-total">
									<td colspan="2" class="text-right">Total shipping</td>
									<td colspan="1" class="text-center">100</td>
								</tr>
								<tr class="cart-total">
									<td colspan="2" class="total text-right">Total</td>
									<td colspan="1" class="total text-center"><?php echo $row['sum(TotalPrice)'] + 100; ?></td>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="checkout-btn">
						<a href="product-checkout.html" class="btn btn-primary pull-right" title="Proceed to checkout">
							<span>Proceed to checkout</span>
							<i class="fa fa-angle-right ml-xs"></i>
						</a>
					</div>
				</div>
			</div>
		</div>


		<!-- Footer -->
		<footer id="footer">
			<div class="footer">
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="block text">
									<div class="block-content">
										<a href="index.html" class="logo-footer">
											<img src="img/logo-2.png" alt="Logo">
										</a>

										<div class="contact">
											<div class="item d-flex">
												<div class="item-left">
													<i class="zmdi zmdi-home"></i>
												</div>
												<div class="item-right">
													<span>123 Suspendis matti, VST District, NY Accums, North American</span>
												</div>
											</div>
											<div class="item d-flex">
												<div class="item-left">
													<i class="zmdi zmdi-phone-in-talk"></i>
												</div>
												<div class="item-right">
													<span>0123-456-78910<br>0987-654-32100</span>
												</div>
											</div>
											<div class="item d-flex">
												<div class="item-left">
													<i class="zmdi zmdi-email"></i>
												</div>
												<div class="item-right">
													<span><a href="mailto:support@domain.com">support@domain.com</a><br><a href="mailto:contact@domain.com">contact@domain.com</a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="block instagram">
									<h2 class="block-title">Photo Instagram</h2>

									<div class="block-content">
										<div class="row margin-0">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
												<a href="#">
													<img src="img/instagram-1.png" alt="Instagram Image">
												</a>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
												<a href="#">
													<img src="img/instagram-2.png" alt="Instagram Image">
												</a>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
												<a href="#">
													<img src="img/instagram-3.png" alt="Instagram Image">
												</a>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
												<a href="#">
													<img src="img/instagram-4.png" alt="Instagram Image">
												</a>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
												<a href="#">
													<img src="img/instagram-5.png" alt="Instagram Image">
												</a>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
												<a href="#">
													<img src="img/instagram-6.png" alt="Instagram Image">
												</a>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
												<a href="#">
													<img src="img/instagram-7.png" alt="Instagram Image">
												</a>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
												<a href="#">
													<img src="img/instagram-8.png" alt="Instagram Image">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="block newsletter">
									<h2 class="block-title">Newsletter</h2>

									<div class="block-content">
										<p class="description">Sign up for newsletter to receive special offers and exclusive news about FreshMart products</p>
										<form action="#" method="post">
											<input type="text" placeholder="Enter Your Email">
											<button type="submit" class="btn btn-primary">Subscribe</button>
										</form>
									</div>
								</div>

								<div class="block social">
									<h2 class="block-title">Follow Us</h2>

									<div class="block-content">
										<ul>
											<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
											<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
											<li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
											<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Footer Bottom -->
				<div class="footer-bottom">
					<div class="payment-intro">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="img/home1-payment-1.png" alt="Payment Intro">
										</div>
										<div class="item-right">
											<h3 class="title">Free Shipping item</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="img/home1-payment-2.png" alt="Payment Intro">
										</div>
										<div class="item-right">
											<h3 class="title">Secured Payment</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="img/home1-payment-3.png" alt="Payment Intro">
										</div>
										<div class="item-right">
											<h3 class="title">Money Back Guarantee</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Copyright -->
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<div class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
						</div>

						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
							<div class="payment">
								<span>Payment Accept</span>
								<img src="img/payment.png" alt="Payment">
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

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