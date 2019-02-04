<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> Casr&Cosas@yahoo.net</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
				</ul>

				<?php
					if (isset($_SESSION['user_id'])){
						if (37==($_SESSION['user_id'])){
				   ?>
					<ul class="header-links pull-right">
						<li><a href="añadir_registros.php"><i class="fa fa-book"></i></a></li>
						<li><a href="Login/logout.php"><i class="fa fa-user-o"></i> Log Out</a></li>
					</ul>
					<?php
				}
			  }
				  ?>

				<?php
					if (isset($_SESSION['user_id'])){
						if (37!=($_SESSION['user_id'])){
				   ?>

					<ul class="header-links pull-right">
						<li><a href="Login/logout.php"><i class="fa fa-user-o"></i> Log Out</a></li>
					</ul>
					
				<?php
				}
			  }
				  ?>

				  <?php

					if (!isset($_SESSION['user_id'])){
						?>

						<ul class="header-links pull-right">
						<li><a href="Login/login.php"><i class="fa fa-user-o"></i> Log In</a></li>
						
					</ul>
				

		

<?php
}
?>
				
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="index.php" class="logo">
								<img src="./img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form>
								<select class="input-select" id = "categorias">
									<option value="0">All Categories</option>
									<option value="1">Deportivo</option>
									<option value="2">Clasico</option>
									<option value="3">4X4</option>
								</select>
								<input class="input" placeholder="Search here">
								<button type="button" class="search-btn" onclick="Categorias()">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->
					
					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->

							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>

										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>3 Item(s) selected</small>
										<h5>SUBTOTAL: $2940.00</h5>
									</div>
									<div class="cart-btns">
										<a href="#">View Cart</a>
										<a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->

							
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->

			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
		<!-- container -->

		<!-- /row -->
	</div>
	<!-- /container -->
	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">
					<!-- aside Widget -->
					<div class="aside">
						<h3 class="aside-title">Marcas</h3>
						<div class="checkbox-filter">

							<div class="input-checkbox">
								<input type="checkbox" id="category-1" display= "inline"; onchange="checkClasicos()">
								<label for="category-1">
									<span></span>
									Lamborghini
									<small>(1)</small>
								</label>
							</div>

							<div class="input-checkbox">
								<input type="checkbox" id="category-2" display= "inline"; onchange="checkClasicos()">
								<label for="category-2">
									<span></span>
									Mercedes
									<small>(1)</small>
								</label>
							</div>

							<div class="input-checkbox">
								<input type="checkbox" id="category-3" display= "inline"; onchange="checkClasicos()">
								<label for="category-3">
									<span></span>
									Porsche
									<small>(1)</small>
								</label>
							</div>

							<div class="input-checkbox">
								<input type="checkbox" id="category-4" display= "inline"; onchange="checkClasicos()">
								<label for="category-4">
									<span></span>
									Ferrari
									<small>(1)</small>
								</label>
							</div>

							<div class="input-checkbox">
								<input type="checkbox" id="category-5" display= "inline"; onchange="checkClasicos()">
								<label for="category-5">
									<span></span>
									Ford
									<small>(1)</small>
								</label>
							</div>
						</div>
					</div>
					<!-- /aside Widget -->

					<div class="aside">
						<h3 class="aside-title">Top selling</h3>
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/gtr1.jpg" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="product.php">Nissan GTR</a></h3>
								<h4 class="product-price">108.050€ </h4>
							</div>
						</div>

						<div class="product-widget">
							<div class="product-img">
								<img src="./img/r81.jpg" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="audir8.php">Audi R8</a></h3>
								<h4 class="product-price">280.085€ </h4>
							</div>
						</div>

						<div class="product-widget">
							<div class="product-img">
								<img src="./img/bmw2.jpg" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="bmwM8.php">BMW M3</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
					</div>
					<!-- /aside Widget -->
				</div>
				<!-- /ASIDE -->

				<!-- STORE -->
				<div id="store" class="col-md-9">
					<!-- store top filter -->

					<!-- /store top filter -->

					<!-- store products -->

					<div class="row">
						<!-- product -->

						



						<div class="col-md-4 col-xs-6" id="Lambo" style="display:inline;">

							<div class="product">
								<div class="product-img">
									<img src="./img/Lambo-Clasi.jpg" alt="">
									
								</div>
								<div class="product-body">

									<p class="product-category">Clasicos</p>

									<h3 class="product-name"><a href="Lamborghini_350gt.php">Lamborghini 350GT</a></h3>
									<h4 class="product-price">$108.050 </h4>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>

								</div>
								<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							</div>
						</div>

						

						<!-- /product -->

						<!-- product -->
						<div class="col-md-4 col-xs-6" id="Mercedes" style="display:inline;">
							<div class="product">
								<div class="product-img">
									<img src="./img/mercedes.jpg" alt="">
									
								</div>
								<div class="product-body">
									<p class="product-category">Clasicos</p>
									<h3 class="product-name"><a href="audir8.html">Mercedes 280 SE</a></h3>
									<h4 class="product-price">$260.085 <del class="product-old-price">$990.00</del></h4>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>

								</div>
								<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							</div>
						</div>
						<!-- /product -->

						<div class="clearfix visible-sm visible-xs"></div>

						<!-- product -->
						<div class="col-md-4 col-xs-6" id="Porsche" style="display:inline;">
							<div class="product">
								<div class="product-img">
									<img src="./img/porsche 356.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Clasicos</p>
									<h3 class="product-name"><a href="bmwM8.html">Porsche 365</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<div class="product-rating">
									</div>

								</div>
								<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							</div>
						</div>
						<!-- /product -->

						<div class="clearfix visible-lg visible-md"></div>

						<!-- product -->
						<div class="col-md-4 col-xs-6" id="Ferrari" style="display:inline;">
							<div class="product">
								<div class="product-img">
									<img src="./img/ferrari.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Clasicos</p>
									<h3 class="product-name"><a href="mustang.html">Ferrari 400GT</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<div class="product-rating">
									</div>

								</div>
								<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							</div>
						</div>
						<!-- /product -->

						<div class="clearfix visible-sm visible-xs"></div>

						

						<!-- product -->
						<div class="col-md-4 col-xs-6" id="Shelby" style="display:inline;">
							<div class="product">
								<div class="product-img">
									<img src="./img/shelby.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Clasicos</p>
									<h3 class="product-name"><a href="lambo.html">Ford Mustang Shelby 1967</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>

								</div>
								<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							</div>
						</div>
						<!-- /product -->


					</div>
					<!-- /store products -->

					<!-- store bottom filter -->
					<div class="store-filter clearfix">
						<span class="store-qty">Showing 5-5 products</span>
						<ul class="store-pagination">
							<li class="active">1</li>
							<li><a href="#category-4"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div>
					<!-- /store bottom filter -->
				</div>
				<!-- /STORE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- NEWSLETTER -->
	<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" id="email" placeholder="example@gmail.com ">
								<button class="newsletter-btn" onclick="alertEmail()"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="https://es-es.facebook.com/"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/?hl=es"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.pinterest.es/"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row" id="contacto">
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<p>Somos una empresa de nueva creación con el respaldo y la experiència en Servicios para el automóvil de la
								empresa Benitez Florit S.L. con más de 35 años trabajando en el sector.</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>943-20-89-89</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>Casr&Cosas@yahoo.net</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Categories</h3>
							<ul class="footer-links">
								<li><a href="deportivos.html">Deportivos</a></li>
								<li><a href="clasicos.html">Clasicos</a></li>
								<li><a href="SUV.php">4X4</a></li>
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Information</h3>
							<ul class="footer-links">
								<li><a href="#contacto">About Us</a></li>
								<li><a href="#contacto">Contact Us</a></li>
								<li><a href="#contacto">Privacy Policy</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Service</h3>
							<ul class="footer-links">
								<li><a href="#">My Account</a></li>
								<li><a href="#">View Cart</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer -->
		<div id="bottom-footer" class="section">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="footer-payments">
							<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
						</ul>
						<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> All rights reserved | CARS & COSAS
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/check.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>