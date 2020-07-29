<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Bondan Satrio K.D -->
		<!-- 4817070443 -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Rib Manufacture</title>
		<link rel="shortcut icon" href="img/r.png">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

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
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +62 812 1105 3115</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> ribmanufacture@ribrick.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> West Java</a></li>
					</ul>
					<ul class="header-links pull-right">
						<?php

          				if(isset($_SESSION['email'])){
            			echo '<li><a href="#"><i class="fa fa-user-o"></i>'.$_SESSION['email'].'</a></li>';
            			//echo '<li><a href="#"><i class="fa fa-user-o"></i>'.$_SESSION['id_member'].'</a></li>';
            			echo '<li><a href="logout.php">Log Out</a></li>';
          				}
          				else
          				{
            				echo '<li><a href="login.php"><i class="fa fa-user-o"></i>Login</a></li>';
            				echo '<li><a href="member.php">Register</a></li>';
          				}

         			 	?>
						
					</ul>
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
								<a href="#" class="logo">
									<img src="img/rib 2.png" alt="" style="height: 80px; width: 250px;">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Produk</option>
										<option value="1">Jasa</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<img src="img/order.png" alt="" style="height: 27px; width: 27px;">
										<span>Pemesanan Jasa</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->
								
  											<!-- Cart -->
											<div class="dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
											<i class="fa fa-shopping-cart"></i>
											<span>Keranjang Belanja</span>
											<div class="qty">3</div>
											</a>
									
											<div class="cart-dropdown">
											<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="'.$data['gambar_produk'].'" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">'.$data['nama_produk'].'</a></h3>';
													
  														<h4 class="product-price"><span class="qty">'.$te.'</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
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

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Beranda</a></li>
						<li><a href="produk.php">Produk</a></li>
						<li><a href="jasa.php">Jasa</a></li>
						<li><a href="panduan.php">Panduan Belanja</a></li>
						<li><a href="kontak.php">Kontak</a></li>
						<li><a href="testimoni.php">Testimoni</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-6 col-xs-8">
						<div class="shop">
							<div class="shop-img">
								<img src="img/mesin bubut.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Koleksi<br>Produk</h3>
								<a href="produk.php" class="cta-btn">Beli sekarang! <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-6 col-xs-8">
						<div class="shop">
							<div class="shop-img">
								<img src="img/mekanik.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Jasa Yang <br>Kami Tawarkan</h3>
								<a href="jasa.php" class="cta-btn">Gunakan jasa kami! <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Produk Kami</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Mesin Terbaik!</a></li>
									<!-- <li><a data-toggle="tab" href="#tab1">Spare Parts</a></li> -->
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<?php
					include('koneksi.php');

					?>
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->

											<?php

												$query = mysql_query("SELECT * FROM produk ORDER BY id_produk ASC") or die(mysql_error());

												if(mysql_num_rows($query) == 0)
												{   
												    echo '<tr><td colspan="6">Tidak ada data!</td></tr>'; 
        										}
        										else
        										{
        											$no = 1;    
										            while($data = mysql_fetch_assoc($query))
										            {
										            	echo "
										            	<!-- product -->
										<form name='addcart' method='POST'>
										<div class='product'>
											<div class='product-img'>
												<img src='img/".$data['gambar_produk']."' style='height: 200px; width: 100%;' alt=''>
												<div class='product-label'>
													<span class='new'>NEW</span>
												</div>
											</div>
											<div class='product-body'>
												<p class='product-category'>Produk</p>
												<h3 class='product-name'><a href=''>".$data['nama_produk']."</a></h3>
												<h4 class='product-price'>Rp. ".$data['harga']." <del class='product-old-price'></del></h4>
												
												<div class='product-btns'>
													<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
													
												</div>
											</div>

											<div class='add-to-cart'>
												<a href='addtocart.php?id=".$data['id_produk']."&qty=1'><i class='fa fa-shopping-cart'><input type='submit' value='add to cart' class='add-to-cart-btn' name='addcart'></i></a>
											</div>
										</div>
										</form>
										<!-- /product -->";
										            }
        										}
											?>

									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">			
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				

					
							</div>
						</div>
					</div>

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
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
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
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Tentang Kami</h3>
								<p>Perusahaan Manufaktur yang memproduksi berbagai macam jenis mesin dan spare part yang berkualitas</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>West Java</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+62 812 1105 3115</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>ribmanufacture@ribrick.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Kategori</h3>
								<ul class="footer-links">
									<li><a href="produk.php">Produk</a></li>
									<li><a href="jasa.php">Jasa</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informasi</h3>
								<ul class="footer-links">
									<li><a href="#">Tentang Kami</a></li>
									<li><a href="kontak.php">Kontak</a></li>
									<li><a href="panduan.php">Panduan Belanja</a></li>
									<li><a href="testimoni.php">Testimoni</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
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
							
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Bondan Satrio<br> Design by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
