<?php
include_once('database/connection.php');
$id =  $_GET['pid'];

$query = "SELECT * FROM `products` WHERE Pro_Id = '$id'";
$res = mysqli_query($con, $query);
$row1 = mysqli_fetch_assoc($res);

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
					<h2 class="title"><?php echo $row1['Pro_Name'] ?></h2>


				</div>
			</div>


			<div class="container">
				<div class="product-detail">
					<div class="products-block layout-5">
						<div class="product-item">
							<div class="product-title">
								<?php echo $row1['Pro_Name'] ?>
							</div>

							<div class="row">
								<div class="product-left col-md-4 col-sm-4 col-xs-12">
									<div class="product-image horizontal">
										<div class="main-image">
											<img class="img-responsive" src="Images/Products/<?php echo $row1['Pro_Image'] ?>" alt="Product Image">
										</div>

									</div>
								</div>

								<div class="product-right col-md-5 col-sm-4 col-xs-12">
									<div class="product-info">
										<div class="product-price">
											<span class="sale-price">Rs. <?php echo $row1['Pro_Price'] ?></span>

										</div>
										<br>
										<div class="product-price">
											<span class="sale-price">Qty. <?php echo $row1['Pro_qty'] ?></span>

										</div>
										<?php
										$query = "SELECT Pro_qty FROM `products` WHERE Pro_Id='$id' ";
										$res = mysqli_query($con, $query);
										$num = mysqli_fetch_assoc($res);

										if ($num['Pro_qty'] > 0) { ?>
											<div class="product-stock">
												<span class="availability">Availability :</span><i class="fa fa-check-square-o" aria-hidden="true"></i>In stock
											</div>

										<?php	} else { ?>

											<div class="product-stock">
												<span class="availability ">Availability :</span>
												<p class="text-danger"><i class="text-danger fa fa-check-square-o"></i>Out of Stock</p>
											</div>

										<?php	}

										?>


										<div class="product-short-description">
											<?php echo $row1['Pro_Details'] ?>....
										</div>



										<div class="product-add-to-cart border-bottom">
											<div class="product-quantity">
												<span class="control-label">QTY :</span>
												<div class="qty">
													<div class="input-group">
														<input type="number" name="qty" value="1" min="1" max="<?php echo $num['Pro_qty'] ?>">

													</div>
												</div>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="productcart.php?Id=<?php echo $row1['Pro_Id'] ?>">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													<span>Add To Cart</span>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-share border-bottom">
											<div class="item">
												<a href="#"><i class="zmdi zmdi-share" aria-hidden="true"></i><span class="text">Share</span></a>
											</div>
											<div class="item">
												<a href="#"><i class="zmdi zmdi-email" aria-hidden="true"></i><span class="text">Send to a friend</span></a>
											</div>
											<div class="item">
												<a href="#"><i class="zmdi zmdi-print" aria-hidden="true"></i><span class="text">Print</span></a>
											</div>
										</div>

										<div class="product-review border-bottom">
											<div class="item">
												<div class="product-quantity">
													<span class="control-label">Review :</span>
													<div class="product-rating">
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star"></div>
													</div>
												</div>
											</div>

											<div class="item">
												<a href="#"><i class="zmdi zmdi-comments" aria-hidden="true"></i><span class="text">Read Reviews (3)</span></a>
											</div>

											<div class="item">
												<a href="#"><i class="zmdi zmdi-edit" aria-hidden="true"></i><span class="text">Write a review</span></a>
											</div>
										</div>

										<div class="product-extra">
											<div class="item">
												<span class="control-label">Review :</span><span class="control-label">E-02154</span>
											</div>
											<div class="item">
												<span class="control-label">Categories :</span>
												<?php

												$query = "select * from catogery";
												$res = mysqli_query($con, $query);
												while ($row = mysqli_fetch_assoc($res)) { ?>
													<a href="products.php?Id=<?php echo $row['Cat_Name'] ?>" title="<?php echo $row['Cat_Name'] ?>"><?php echo $row['Cat_Name'] ?> | </a>
												<?php } ?>
											</div>
											<div class="item">
												<span class="control-label">Tags :</span>
												<a href="#" title="Vegetables">Hot Trend,</a>
												<a href="#" title="Fruits">Summer</a>
											</div>
										</div>
									</div>
								</div>

								<div class="payment-intro col-md-3 col-sm-4 col-xs-12">
									<div class="block-content">
										<div class="item">
											<img class="img-responsive" src="img/home2-payment-1.png" alt="Payment Intro">
											<h3 class="title">Free Shipping item</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
										</div>
										<div class="item">
											<img class="img-responsive" src="img/home2-payment-2.png" alt="Payment Intro">
											<h3 class="title">Secured Payment</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
										</div>
										<div class="item">
											<img class="img-responsive" src="img/home2-payment-3.png" alt="Payment Intro">
											<h3 class="title">money back guarantee</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
										</div>
									</div>
								</div>
							</div>

							<div class="product-tab">
								<!-- Tab Navigation -->
								<div class="tab-nav">
									<ul>
										<li class="active">
											<a data-toggle="tab" href="#description">
												<span>Description</span>
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#additional-information">
												<span>Additional Information</span>
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#review">
												<span>Review</span>
											</a>
										</li>
									</ul>
								</div>

								<!-- Tab Content -->
								<div class="tab-content">
									<!-- Description -->
									<div role="tabpanel" class="tab-pane fade in active" id="description">
										<?php echo $row1['Pro_Details'] ?>
									</div>

									<!-- Product Tag -->
									<div role="tabpanel" class="tab-pane fade" id="additional-information">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									</div>

									<!-- Review -->
									<div role="tabpanel" class="tab-pane fade" id="review">
										<div class="reviews">
											<div class="comments-list">
												<?php
												$query = "SELECT * FROM `reviews` WHERE productName='$id'";
												$res = mysqli_query($con, $query);
												while ($row = mysqli_fetch_assoc($res)) { ?>
													<div class="item">
														<div class="comment-left pull-left">
															<div class="avatar">
																<img src="Images/Users/<?php echo $row['User_Image'] ?>" alt="" width="70" height="70">
															</div>
															<div class="product-rating">
																<div class="star on"></div>
																<div class="star on"></div>
																<div class="star on"></div>
																<div class="star on"></div>
																<div class="star on"></div>
															</div>
														</div>
														<div class="comment-body">
															<div class="comment-meta">
																<span class="author"><?php echo $row['User_Name'] ?></span> - <span class="time"><?php echo $row['R_Date'] ?> </span>
															</div>
															<div class="comment-content"><?php echo $row['R_comments'] ?> </div>
														</div>
													</div>
												<?php	}

												?>




											</div>

											<div class="review-form">
												<h4 class="title">Write a review</h4>

												<form method="post" class="form-validate">
													<div class="form-group">
														<div class="text">Your Rating</div>
														<div class="product-rating">
															<div class="star"></div>
															<div class="star"></div>
															<div class="star"></div>
															<div class="star"></div>
															<div class="star"></div>
														</div>
													</div>

													<div class="form-group">
														<div class="text">You review<sup class="required">*</sup></div>
														<textarea id="comment" name="_comment" cols="45" rows="6" aria-required="true"></textarea>
													</div>
													<?php

													if (isset($_SESSION['uemail']) != "") { ?>
														<div class="form-group">
															<button name="btn_review" class="btn btn-primary">Send your review</button>
														</div>
													<?php
													} else {
														echo "<p class='alert alert-danger'>Please Login For Review....</p>";
													}

													?>


												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Related Products -->
				<div class="products-block related-products item-4">
					<div class="block-title">
						<h2 class="title">Related <span>Products</span></h2>
					</div>

					<div class="block-content">
						<div class="products owl-theme owl-carousel">
							<div class="product-item">
								<div class="product-image">
									<a href="product-detail-left-sidebar.html">
										<img src="img/product/4.jpg" alt="Product Image">
									</a>
								</div>

								<div class="product-title">
									<a href="product-detail-left-sidebar.html">
										Organic Strawberry Fruits
									</a>
								</div>

								<div class="product-rating">
									<div class="star on"></div>
									<div class="star on"></div>
									<div class="star on "></div>
									<div class="star on"></div>
									<div class="star"></div>
								</div>

								<div class="product-price">
									<span class="sale-price">$80.00</span>
									<span class="base-price">$90.00</span>
								</div>

								<div class="product-buttons">
									<a class="add-to-cart" href="#">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									</a>

									<a class="add-wishlist" href="#">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</a>

									<a class="quickview" href="#">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</div>
							</div>

							<div class="product-item">
								<div class="product-image">
									<a href="product-detail-left-sidebar.html">
										<img src="img/product/15.jpg" alt="Product Image">
									</a>
								</div>

								<div class="product-title">
									<a href="product-detail-left-sidebar.html">
										Organic Strawberry Fruits
									</a>
								</div>

								<div class="product-rating">
									<div class="star on"></div>
									<div class="star on"></div>
									<div class="star on "></div>
									<div class="star on"></div>
									<div class="star"></div>
								</div>

								<div class="product-price">
									<span class="sale-price">$120.00</span>
								</div>

								<div class="product-buttons">
									<a class="add-to-cart" href="#">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									</a>

									<a class="add-wishlist" href="#">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</a>

									<a class="quickview" href="#">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</div>
							</div>

							<div class="product-item">
								<div class="product-image">
									<a href="product-detail-left-sidebar.html">
										<img src="img/product/31.jpg" alt="Product Image">
									</a>
								</div>

								<div class="product-title">
									<a href="product-detail-left-sidebar.html">
										Organic Strawberry Fruits
									</a>
								</div>

								<div class="product-rating">
									<div class="star on"></div>
									<div class="star on"></div>
									<div class="star on "></div>
									<div class="star on"></div>
									<div class="star"></div>
								</div>

								<div class="product-price">
									<span class="sale-price">$80.00</span>
									<span class="base-price">$90.00</span>
								</div>

								<div class="product-buttons">
									<a class="add-to-cart" href="#">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									</a>

									<a class="add-wishlist" href="#">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</a>

									<a class="quickview" href="#">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</div>
							</div>

							<div class="product-item">
								<div class="product-image">
									<a href="product-detail-left-sidebar.html">
										<img src="img/product/9.jpg" alt="Product Image">
									</a>
								</div>

								<div class="product-title">
									<a href="product-detail-left-sidebar.html">
										Organic Strawberry Fruits
									</a>
								</div>

								<div class="product-rating">
									<div class="star on"></div>
									<div class="star on"></div>
									<div class="star on "></div>
									<div class="star on"></div>
									<div class="star"></div>
								</div>

								<div class="product-price">
									<span class="sale-price">$80.00</span>
									<span class="base-price">$90.00</span>
								</div>

								<div class="product-buttons">
									<a class="add-to-cart" href="#">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									</a>

									<a class="add-wishlist" href="#">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</a>

									<a class="quickview" href="#">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</div>
							</div>

							<div class="product-item">
								<div class="product-image">
									<a href="product-detail-left-sidebar.html">
										<img src="img/product/15.jpg" alt="Product Image">
									</a>
								</div>

								<div class="product-title">
									<a href="product-detail-left-sidebar.html">
										Organic Strawberry Fruits
									</a>
								</div>

								<div class="product-rating">
									<div class="star on"></div>
									<div class="star on"></div>
									<div class="star on "></div>
									<div class="star on"></div>
									<div class="star"></div>
								</div>

								<div class="product-price">
									<span class="sale-price">$120.00</span>
								</div>

								<div class="product-buttons">
									<a class="add-to-cart" href="#">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									</a>

									<a class="add-wishlist" href="#">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</a>

									<a class="quickview" href="#">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
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
if (isset($_POST['btn_review'])) {
	$com = $_POST['_comment'];
	$na = $_SESSION['uname'];
	$im = $_SESSION['uimg'];
	$query = "INSERT INTO `reviews`( `User_Name`, `User_Image`,  `R_Rating`, `R_comments`, productName) VALUES ('$na','$im','5','$com', '$id')";
	$res = mysqli_query($con, $query);

	if ($res) {
		echo "<script> alert('Your Review is Submitteddd Thanks....')</script>";
	} else {
		echo "<script> alert('Try agin......')</script>";
	}
}

?>