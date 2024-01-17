<?php 
	include_once('database/connection.php');
	$id =  $_GET['Id'];
	
	$query = "SELECT * FROM `catogery` WHERE Cat_Name = '$id'";
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
		<?php include("header.php") ?>
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title"><?php echo $row1['Cat_Name'] ?></h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><a href="#" title="Fruit">Fruit</a></li>
							
						</ul>
					</div>
				</div>
			
			
				<div class="container">
					<div class="row">
						<!-- Page Content -->
						<div id="center-column" class="col-lg-12 col-md-12">
							<div class="product-category-page">
								<!-- Nav Bar -->
								<div class="products-bar">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<div class="gridlist-toggle" role="tablist">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#products-grid" data-toggle="tab" aria-expanded="true"><i class="fa fa-th-large"></i></a></li>
													<li><a href="#products-list" data-toggle="tab" aria-expanded="false"><i class="fa fa-bars"></i></a></li>
												</ul>
											</div>
											<?php 
											
											$query = "select * from products where CategoryName= '$id'";
											$res = mysqli_query($con, $query);
											

											
											?>
											<div class="total-products">There are <?php echo mysqli_num_rows($res) ?> products</div>
										</div>
										
										<div class="col-md-6 col-xs-6">
											<div class="filter-bar">
												<form action="#" class="pull-right">
													<div class="select">
														<select class="form-control">
															<option value="">Sort By</option>
															<option value="1">Price: Lowest first</option>
															<option value="2">Price: Highest first</option>
															<option value="3">Product Name: A to Z</option>
															<option value="4">Product Name: Z to A</option>
															<option value="5">In stock</option>
														</select>
													</div>
												</form>
												<form action="#" class="pull-right">
													<div class="select">
														<select class="form-control">
															<option value="">Relevance</option>
															<option value="1">Price: Lowest first</option>
															<option value="2">Price: Highest first</option>
															<option value="3">Product Name: A to Z</option>
															<option value="4">Product Name: Z to A</option>
															<option value="5">In stock</option>
														</select>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								
								<div class="tab-content">
									<!-- Products Grid -->
									<div class="tab-pane active" id="products-grid">
										<div class="products-block">
											<div class="row">
												<?php 
												$query = "SELECT * FROM `products` WHERE CategoryName = '$id'";
												$res = mysqli_query($con, $query);
												while($row = mysqli_fetch_assoc($res))
												{ ?>

												<div class="col-md-3 col-sm-4 col-xs-12">
													<div class="product-item">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img class="img-responsive" src="Images/Products/<?php echo $row['Pro_Image'] ?>" alt="Product Image">
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
												</div>

											<?php	}
												?>
												
												
												
												
												
											</div>
										</div>
									</div>
									
									<!-- Products List -->
									<div class="tab-pane" id="products-list">
										<div class="products-block layout-5">
										<?php 
												$query = "SELECT * FROM `products` WHERE CategoryName = '$id'";
												$res = mysqli_query($con, $query);
												while($row = mysqli_fetch_assoc($res))
												{ ?>

												<div class="product-item">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img class="img-responsive" src="Images/Products/<?php echo $row['Pro_Image'] ?>" alt="Product Image">
															</a>
														</div>
													</div>
													
													<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
														<div class="product-info">
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
																<span class="review-count">(3 Reviews)</span>
															</div>
															
															<div class="product-price">
																<span class="sale-price"><?php echo $row['Pro_Price'] ?></span>
																
															</div>

															<div class="product-price">
																<span class="sale-price"><?php echo $row['Pro_qty'] ?></span>
																
															</div>
															
															<div class="product-stock">
																<i class="fa fa-check-square-o" aria-hidden="true"></i>In stock  
															</div>
															
															<div class="product-description">
															<?php echo $row['Pro_Details'] ?>....
															</div>
															
															<div class="product-buttons">
																<a class="add-to-cart" href="#">
																	<i class="fa fa-shopping-basket" aria-hidden="true"></i>
																	<span>Add To Cart</span>
																</a>
																
																<a class="add-wishlist" href="#">
																	<i class="fa fa-heart" aria-hidden="true"></i>												
																</a>
																
																<a class="quickview" href="productdetail.php?pid=<?php echo $row['Pro_Id']  ?>">
																	<i class="fa fa-eye" aria-hidden="true"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											
										
										<?php
												}
										?>
										</div>
									</div>
								</div>
								
								<!-- Pagination Bar -->
								<div class="pagination-bar">
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="text">Showing 1-12 of 20 item(s)</div>
										</div>
										
										<div class="col-md-8 col-sm-8 col-xs-12">
											<div class="pagination">
												<ul class="page-list">
													<li><a href="#" class="prev">Previous</a></li>
													<li><a href="#" class="current">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#" class="next">Next</a></li>
												</ul>
											</div>
										</div>
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