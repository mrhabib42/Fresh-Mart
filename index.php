<?php include_once('database/connection.php') ?>
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
			
		<!-- Header Area-->
		<?php include("header.php") ?>
		
		
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Slideshow -->
				<div class="section slideshow">
					<div class="container">
						<div class="tiva-slideshow-wrapper">
							<div id="tiva-slideshow" class="nivoSlider">
								<a href="#">
									<img class="img-responsive" src="img/slideshow/home2-slideshow-1.jpg" alt="Slideshow Image">
								</a>
								<a href="#">
									<img class="img-responsive" src="img/slideshow/home2-slideshow-2.jpg" alt="Slideshow Image">
								</a>
								<a href="#">
									<img class="img-responsive" src="img/slideshow/home2-slideshow-3.jpg" alt="Slideshow Image">
								</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- Banners -->
				<div class="section banners">
					<div class="container">
						<div class="row margin-10">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-10">
								<div class="banner-item effect">
									<a href="#">
										<img class="img-responsive" src="img/banner/home2-banner-1.png" alt="Banner 1">
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-10">
								<div class="banner-item effect">
									<a href="#">
										<img class="img-responsive" src="img/banner/home2-banner-2.png" alt="Banner 2">
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-10">
								<div class="banner-item effect">
									<a href="#">
										<img class="img-responsive" src="img/banner/home2-banner-3.png" alt="Banner 3">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- 2 Columns -->
				<div class="two-columns">
					<div class="container">
						<div class="row ">
							<!-- Left Column -->
							<div class="col-20p col-md-3 left-column">
								<!-- Product - Category -->
								<div class="section product-categories">
									<div class="block-title">
										<h2 class="title">Categories</h2>
									</div>
									
									<div class="block-content">
										<?php
										
										$query = "select * from catogery";
										$res = mysqli_query($con, $query);
										while($row = mysqli_fetch_assoc($res))
										{?>
										<div class="item">
											<a class="category-title" href="products.php?Id=<?php echo $row['Cat_Name'] ?>"><?php echo $row['Cat_Name'] ?></a>
										</div>

										<?php }
										?>
										
										
									</div>
								</div>
								
								
								<!-- Product - Flash Deals -->
								<div class="section products-block nav-color flash-deals layout-4">
									<div class="block-title">
										<h2 class="title">Flash Deals</h2>
									</div>
									
									<div class="block-content">
										<div class="products owl-theme owl-carousel">
										<?php
													
													$query = "SELECT * FROM `products` WHERE pro_price >= 500";
													$res = mysqli_query($con, $query);
													while($row = mysqli_fetch_assoc($res))
													{ ?>
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="Images/Products/<?php echo $row['Pro_Image'] ?>" alt="Product Image">
													</a>
												</div>
												
												<div class="product-countdown" data-date="2018/11/28">
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
													<?php echo $row['Pro_Name'] ?>
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
													<span class="sale-price">Rs.<?php echo $row['Pro_Price'] ?></span>
													<span class="base-price">Rs.900.00</span>
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="productdetail.php?pid=<?php echo $row['Pro_Id']  ?>">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>

											<?php } ?>
											
											
										</div>
									</div>
								</div>
								
								
								<!-- Payment Intro -->
								<div class="section payment-intro">
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
								
								
								<!-- Testimonial -->
								<div class="section testimonial">
									<div class="block-title">
										<h2 class="title">Testimonial</h2>
									</div>
									
									<div class="block-content">
										<div class="testimonial-wrap owl-theme owl-carousel">
											<div class="item">
												<div class="image"><img src="img/testimonial-1.png" alt=""></div>
												<div class="content">“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum.”</div>
												<div class="name">WILLIAM JAMES</div>
												<div class="job">Hairstyle</div>
											</div>
											
											<div class="item">
												<div class="image"><img src="img/testimonial-2.png" alt=""></div>
												<div class="content">“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum.”</div>
												<div class="name">WILLIAM JAMES</div>
												<div class="job">Hairstyle</div>
											</div>
											
											<div class="item">
												<div class="image"><img src="img/testimonial-3.png" alt=""></div>
												<div class="content">“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum.”</div>
												<div class="name">WILLIAM JAMES</div>
												<div class="job">Hairstyle</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							<!-- Right Column -->
							<div class="col-80p col-md-9 right-column">
								<!-- Product - Category Tab -->
								<div class="section products-block category-tab">
									<div class="block-title">
										<h2 class="title">All Products</h2>
									</div>
									
									<div class="block-content">
												<div class="products owl-theme owl-carousel">
													<?php
													
													$query = "SELECT * FROM `products`";
													$res = mysqli_query($con, $query);
													while($row = mysqli_fetch_assoc($res))
													{ ?>

												<div class="product-item">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img src="Images/Products/<?php echo $row['Pro_Image'] ?>" alt="Product Image">
															</a>
														</div>
														
														<div class="product-title">
															<a href="product-detail-left-sidebar.html">
															<?php echo $row['Pro_Name'] ?> Fruits
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
															Rs:	<span class="sale-price"><?php echo $row['Pro_Price'] ?></span>
															
														</div>

														<div class="product-price">
															Qty : <span class="sale-price"><?php echo $row['Pro_qty'] ?></span>
															
														</div>
														
														<div class="product-buttons">
															<a class="add-to-cart" href="#">
																<i class="fa fa-shopping-basket" aria-hidden="true"></i>
															</a>
															
															<a class="add-wishlist" href="#">
																<i class="fa fa-heart" aria-hidden="true"></i>												
															</a>
															
															<a class="quickview" href="productdetail.php?pid=<?php echo $row['Pro_Id']  ?>">
																<i class="fa fa-eye" aria-hidden="true"></i>
															</a>
														</div>
													</div>		

												<?php	}
													?>
													
													
													
												</div>
											</div>
								</div>
								
								
								<!-- Newsletter -->
								<div class="section newsletter">
									<h2 class="block-title">Newsletter</h2>
									
									<div class="block-content">
										<p class="description">Sign up for newsletter to receive special offers and exclusive news about FreshMart products</p>
										<form action="#" method="post">
											<input type="text" placeholder="Enter Your Email">
											<button type="submit" class="btn btn-primary">Subscribe</button>
										</form>
									</div>
								</div>
								
								
								<!-- Product - Category Double -->
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="section products-block category-double">
											<div class="block-title">
												<h2 class="title">Fruits</h2>
											</div>
											
											<div class="block-content">
												<div class="products owl-theme owl-carousel">
													<?php
													
													$query = "SELECT * FROM `products` WHERE CategoryName = 'Fruits'";
													$res = mysqli_query($con, $query);
													while($row = mysqli_fetch_assoc($res))
													{ ?>

												<div class="product-item">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img src="Images/Products/<?php echo $row['Pro_Image'] ?>" alt="Product Image">
															</a>
														</div>
														
														<div class="product-title">
															<a href="product-detail-left-sidebar.html">
															<?php echo $row['Pro_Name'] ?> Fruits
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
															Rs:	<span class="sale-price"><?php echo $row['Pro_Price'] ?></span>
															
														</div>

														<div class="product-price">
															Qty : <span class="sale-price"><?php echo $row['Pro_qty'] ?></span>
															
														</div>
														
														<div class="product-buttons">
															<a class="add-to-cart" href="#">
																<i class="fa fa-shopping-basket" aria-hidden="true"></i>
															</a>
															
															<a class="add-wishlist" href="#">
																<i class="fa fa-heart" aria-hidden="true"></i>												
															</a>
															
															<a class="quickview" href="productdetail.php?pid=<?php echo $row['Pro_Id']  ?>">
																<i class="fa fa-eye" aria-hidden="true"></i>
															</a>
														</div>
													</div>		

												<?php	}
													?>
													
													
													
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="section products-block category-double">
											<div class="block-title">
												<h2 class="title">Juices</h2>
											</div>
											
											<div class="block-content">
												<div class="products owl-theme owl-carousel">
												<?php
													
													$query = "SELECT * FROM `products` WHERE CategoryName = 'Juices'";
													$res = mysqli_query($con, $query);
													while($row = mysqli_fetch_assoc($res))
													{ ?>

													<div class="product-item">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img src="Images/Products/<?php echo $row['Pro_Image'] ?>" alt="Product Image">
															</a>
														</div>
														
														<div class="product-title">
															<a href="product-detail-left-sidebar.html">
															<?php echo $row['Pro_Name'] ?>
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
															<span class="sale-price">Rs. <?php echo $row['Pro_Price'] ?></span>
															
														</div>

														<div class="product-price">
															<span class="sale-price">Qty. <?php echo $row['Pro_qty'] ?></span>
															
														</div>
														
														<div class="product-buttons">
															<a class="add-to-cart" href="#">
																<i class="fa fa-shopping-basket" aria-hidden="true"></i>
															</a>
															
															<a class="add-wishlist" href="#">
																<i class="fa fa-heart" aria-hidden="true"></i>												
															</a>
															
															<a class="quickview" href="productdetail.php?pid=<?php echo $row['Pro_Id']  ?>">
																<i class="fa fa-eye" aria-hidden="true"></i>
															</a>
														</div>
													</div>

													<?php } ?>
													
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
								<!-- Banners -->
								<div class="section banners-block">
									<div class="row margin-15">
										<div class="col-lg-6 col-md-6 col-sm-6 padding-15">
											<div class="banner-item effect">
												<a href="#">
													<img class="img-responsive" src="img/banner/home2-banner-4.png" alt="Banner">
												</a>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 padding-15">
											<div class="banner-item effect">
												<a href="#">
													<img class="img-responsive" src="img/banner/home2-banner-5.png" alt="Banner">
												</a>
											</div>
										</div>
									</div>
								</div>
								
								
								<!-- Product - New Arrivals -->
								<div class="section products-block new-arrivals layout-3">
									<div class="block-title">
										<h2 class="title">New <span>Arrivals</span></h2>
									</div>
									
									<div class="block-content">
										<div class="products owl-theme owl-carousel">
											<div class="item">
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/1.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$35.00</span>
															<span class="base-price">$55.00</span>
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
												
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/2.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$68.00</span>
															<span class="base-price">$76.00</span>
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
												
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/3.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$85.00</span>
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
											
											<div class="item">
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/4.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$52.00</span>
															<span class="base-price">$58.00</span>
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
												
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/5.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$45.00</span>
															<span class="base-price">$48.00</span>
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
												
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/6.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$35.00</span>
															<span class="base-price">$55.00</span>
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
											
											<div class="item">
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/7.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$72.00</span>
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
												
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/8.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$50.00</span>
															<span class="base-price">$60.00</span>
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
												
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/9.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
											
											<div class="item">
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/10.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$35.00</span>
															<span class="base-price">$55.00</span>
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
												
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/11.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$53.00</span>
															<span class="base-price">$70.00</span>
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
												
												<div class="product-item">
													<div class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="img/product/12.jpg" alt="Product Image">
														</a>
													</div>
													
													<div class="product-info">
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
															<span class="sale-price">$42.00</span>
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
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- Intro -->
				<div class="section intro">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="intro-header">
									<img src="img/leaf.png" alt="Partner 1">
									<h3>Why Choose Us</h3>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="intro-left">
									<div class="intro-item">
										<p><img src="img/intro-icon-1.png" alt="Intro Image"></p>
										<h4>Always Fresh</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									
									<div class="intro-item">
										<p><img src="img/intro-icon-2.png" alt="Intro Image"></p>
										<h4>Super Healthy</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="effect">
									<a href="#">
										<img class="intro-image img-responsive" src="img/intro-2.png" alt="Intro Image">
									</a>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="intro-right">
									<div class="intro-item">
										<p><img src="img/intro-icon-3.png" alt="Intro Image"></p>
										<h4>100% Natural</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									
									<div class="intro-item">
										<p><img src="img/intro-icon-4.png" alt="Intro Image"></p>
										<h4>Premium Quality</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<!-- Footer -->
			<?php include("footer.php") ?>
			
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