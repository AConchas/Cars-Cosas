

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
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/formulario.css"/>
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	<?php
					if (isset($_SESSION['user_id'])){
						if (37==($_SESSION['user_id'])){
				   ?>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 943-20-89-89</a></li>
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
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->


								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
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

		
		<section class="page-section about-heading">

              <form action="Erregistroak/gehitu.php" method="post">
<br><br>
                <h1 align="center" id="titulo"> Kotxeak Gehitu </h1>
                <br><br>
                <div align="center">
                    <input type="text" id="marca" name="marca" placeholder="Marca"/>
                </div>
                <br>
                <div align="center">
                    <input type="text" id="modelo" name="modelo" placeholder="Modelo"/>
                </div>
                <br>
                <div align="center">
                    <input type="text" id="tipo" name="tipo" placeholder="Deportivo/Clasico/4X4"/>
                </div>
                <br>
                <div align="center">
                    <input type="text" id="prezio" name="prezio" placeholder="ej: 80000€"/>
                </div>
                <br>
              


                <div class="button" align="center">
                    <button id="boton" type="submit">Gehitu</button>
                    <button id="boton" type="reset">Reset</button>
                </div>

        </form>

        <br><br>
        <p align="center">------------------------------------------------------------------------------------</p>
        <br><br>

        <h1 align="center"> Kotxeak </h1>
            <br><br>

            <?php
                include("Login/Konexioa.php");
                $link=ConnectDataBase();

              $result=mysqli_query($link,"select * from coches");

            ?>
            <table align = "center" class="table table-hover" id="table">
              <tr id="menu">
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th></th>
              </tr>

              <?php
                while($row = mysqli_fetch_array($result))
                {
                  printf("
                      <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td><a href =\"Erregistroak/kotxeakezabatu.php?modelo=%s\"><img src=\"img/basura.png\" width=\"20\" /></a></td>
                      </tr>
                    " , $row["marca"], $row["modelo"], $row["tipo"],  $row["prezioa"], $row["modelo"]);
                }
                  mysqli_free_result($result);
                  mysqli_close($link);
              ?>
            </table>
        
            <br><br>
        	<p align="center">------------------------------------------------------------------------------------</p>
        	<br><br>



		<center>
        <form action="añadir_registros.php" method= "post">
        <table id="izena">
          <tr>
            <td><p style="color:#000000";> MODELOA: &nbsp;&nbsp;&nbsp;&nbsp; </p></td>
            <td> <input type="text" name="Izena"> &nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input id="bidali" type="image" src="img/lupa.jpeg" width="50" name="save" value="Aurkitu"></td>
          </tr>
		  
        </table>
        </form>
      </center>

	  <br><br>
<?php
  error_reporting(E_ALL ^ E_NOTICE);

  $link=ConnectDataBase();
  $modelo=$_POST["Izena"];

  $result=mysqli_query($link,"SELECT * FROM `coches` where modelo = '$modelo'");
    ?>
    <form action="Erregistroak/update.php" method= "post">
      <table id="table" align="center" class="table table-hover">
        <tr id="menu">
          <th>Marca</th>
          <th>Modeloa</th>
          <th>Tipo</th>
          <th>Prezioa</th>
        <th></th>
        <th></th>
      </tr>
      <?php
        while($row = mysqli_fetch_array($result))
        {
          echo '

              <tr id="table2">
             <td><input id="input-custom-id" type="text" name="modelo" value="'.$row['modelo'].'"></td>'.
            '<td><input id="input-custom-mug-nan" type="text" name="marca" value="'.$row['marca'].'"></td>'.
            '<td><input id="input-custom" type="text" name="tipo" value="'.$row['tipo'].'"></td>'.
            '<td><input id="input-custom" type="text" name="prezioa" value="'.$row['prezioa'].'"></td>'.
            '<td><input type="image" src="img/save.png" width="25" name="save"></td>
            </tr>
            ';
        }
          mysqli_free_result($result);
      ?>
      </table>
    </form>




			<br><br>
        	<p align="center">------------------------------------------------------------------------------------</p>
     		<br><br>
            <h1 align="center"> Usuarioak </h1>
            <br><br>

            <?php
                
                $link=ConnectDataBase();
              $result=mysqli_query($link,"select * from users");

            ?>
            <table align = "center" class="table table-hover" id="table">
              <tr id="menu">
                <th>Id</th>
                <th>Email</th>
                <th>Password</th>
                <th></th>
              </tr>

              <?php
                while($row = mysqli_fetch_array($result))
                {
                  printf("
                      <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td><a href =\"Erregistroak/gehitu_user.php?email=%s\"><img src=\"img/basura.png\" width=\"20\" /></a></td>
                      </tr>
                    " , $row["id"], $row["email"], $row["password"], $row["email"]);
                }
                  mysqli_free_result($result);
                  mysqli_close($link);
              ?>
            </table>
<br><br>

            </section>


		

		


		<!-- FOOTER -->
	<footer id="footer">
		

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

	<?php
}}

?>
</body>

</html>

