<?php session_start() ?><!-- Header -->
<header id="header">
				<!-- Topbar -->
				<div class="topbar">
					<div class="container topbar-content">
						<div class="row">
							<!-- Topbar Left -->
							<div class="col-md-7 col-sm-7 col-xs-12">
								<div class="topbar-left d-flex">
									<div class="email">
										<i class="fa fa-envelope" aria-hidden="true"></i>Email: <?php
										 
										 if(isset($_SESSION['uemail'])!="")
										 {
											echo $_SESSION['uemail'];
										 }
										 else 
										 {
											echo "Please Login....";
										 }
										 
										 ?>
									</div>
									<div class="skype">
										<i class="fa fa-user" aria-hidden="true"></i>User Name: <?php
										 
										 if(isset($_SESSION['uname'])!="")
										 {
											echo $_SESSION['uname'];
										 }
										 else 
										 {
											echo "Please Login....";
										 }
										 
										 ?></div>
								</div>
							</div>
							
							<!-- Topbar Right -->
							<div class="col-md-5 col-sm-5 col-xs-12">
								<div class="topbar-right d-flex justify-content-end">
									<!-- My Account -->
									<div class="dropdown account">
										<div class="dropdown-toggle" data-toggle="dropdown">
											My Account
										</div>
										<div class="dropdown-menu">									
											<div class="item">
												<a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
											</div>
											<?php
										 
										 if(isset($_SESSION['uname'])!="")
										 { ?>
											<div class="item">
											<a href="logout.php" title="Log in to your customer account"><i class="fa fa-sign-out"></i>Logout</a>
											</div>
									<?php	 } 
										 else 
										 {
											?>
											<div class="item">
											<a href="login.php" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
											</div>
											<?php } ?>

											
											
											<div class="item">
												<a href="register.php" title="Register Account"><i class="fa fa-user"></i>Register</a>
											</div>
											<div class="item">
												<a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
											</div>
										</div>
									</div>
									
									<!-- Language -->
									<div class="dropdown language">
										<div class="dropdown-toggle" data-toggle="dropdown">
											<img src="img/language-en.jpg" alt="Language English">
										</div>
										<div class="dropdown-menu">
											<div class="item">
												<a href="#" title="Language English"><img src="img/language-en.jpg" alt="Language English"> English</a>
											</div>
											<div class="item">
												<a href="#" title="Language French"><img src="img/language-fr.jpg" alt="Language French"> French</a>
											</div>
										</div>
									</div>
									
									<!-- Currency -->
									<div class="dropdown currency">
										<div class="dropdown-toggle" data-toggle="dropdown">
											USD
										</div>
										<div class="dropdown-menu">
											<div class="item">
												<a href="#" title="USD">USD</a>
											</div>
											<div class="item">
												<a href="#" title="EUR">EUR</a>
											</div>
											<div class="item">
												<a href="#" title="GBP">GBP</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Header Top -->
				<div class="header-top">
					<div class="container">
						<div class="row margin-0">
							<div class="col-lg-2 col-md-2 col-sm-12 padding-0">
								<!-- Logo -->
								<div class="logo">
									<a href="index.php">
										<img class="img-responsive" src="img/logo.png" alt="Logo">
									</a>
								</div>
								
								<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
							</div>
							
							<div class="col-lg-7 col-md-7 col-sm-12 padding-0">
								<!-- Main Menu -->
								<div id="main-menu">
									<ul class="menu">
										<li class="dropdown">
											<a href="index.php" title="Homepage">Home</a>
											
										</li>
										
										<li class="dropdown">
											<a href="#" title="Product">Product</a>
											<div class="dropdown-menu">
												<ul>
													<?php 
													
													$query = "select * from catogery";
													$res = mysqli_query($con, $query);
													while($row = mysqli_fetch_assoc($res))
													{ ?>
													<li class="has-image">
														<img src="Images/CategoryImages/<?php echo $row['navimg'] ?>" alt="Product Category Image">
														<a href="products.php?Id=<?php echo $row['Cat_Name'] ?>" title="<?php echo $row['Cat_Name'] ?>"><?php echo $row['Cat_Name'] ?></a>
													</li>

													<?php }
													
													?>
													
													
													
												</ul>
											</div>
										</li>
										
																
										
										<li>
											<a href="aboutus.php">About Us</a>
										</li>
										
										<li>
											<a href="contact.php">Contact</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-12 padding-0">
								<!-- Cart -->
								<div class="block-cart dropdown">
									<div class="cart-title">
										<i class="fa fa-shopping-basket"></i>
										<span class="cart-count">2</span>
									</div>
									
									<div class="dropdown-content">
										<div class="cart-content">
											<table>
												<tbody>
													<tr>
														<td class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img src="img/product/7.jpg" alt="Product">
															</a>
														</td>
														<td>
															<div class="product-name">
																<a href="product-detail-left-sidebar.html">Organic Strawberry Fruits</a>
															</div>
															<div>	
																2 x <span class="product-price">$28.98</span>
															</div>
														</td>
														<td class="action">
															<a class="remove" href="#">
																<i class="fa fa-trash-o" aria-hidden="true"></i>
															</a>
														</td>
													</tr>
													
													<tr>
														<td class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img src="img/product/6.jpg" alt="Product">
															</a>
														</td>
														<td>
															<div class="product-name">
																<a href="product-detail-left-sidebar.html">Organic Strawberry</a>
															</div>
															<div>	
																1 x <span class="product-price">$35.00</span>
															</div>
														</td>
														<td class="action">
															<a class="remove" href="#">
																<i class="fa fa-trash-o" aria-hidden="true"></i>
															</a>
														</td>
													</tr>
													
													<tr class="total">
														<td>Total:</td>
														<td colspan="2">$92.96</td>
													</tr>
													
													<tr>
														<td colspan="3">
															<div class="cart-button">
																<a class="btn btn-primary" href="product-cart.html" title="View Cart">View Cart</a>
																<a class="btn btn-primary" href="product-checkout.html" title="Checkout">Checkout</a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
								<!-- Search -->
								<div class="form-search">
									<form action="#" method="get">
										<input type="text" class="form-input" placeholder="Search">
										<button type="submit" class="fa fa-search"></button>
									</form>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</header>