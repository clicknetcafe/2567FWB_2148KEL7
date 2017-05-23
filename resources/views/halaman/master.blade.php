<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | AVA-MART</title>
    <link href="{{ asset('eshop/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('eshop/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('eshop/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('eshop/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('eshop/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('eshop/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('eshop/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('eshop/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><span>AVA</span>-MART</a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/beritamember"><i class="fa fa-user"></i> Berita</a></li>
								<li><a href="promomember"><i class="fa fa-star"></i> Promo</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Produk</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i>Belanja</a></li>
								<li><a href="{{url('logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Beranda</a></li>
								<li class="dropdown"><a href="#">Belanja<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Produk</a></li>
										<li><a href="product-details.html">Detail Produk</a></li>
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="mainmenu pull-right">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="contact-us.html">Tentang</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
<body>@yield('container')</body>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>AVA</span>-MART</h2>
							<p>Website pemesanan online produk minimarket AVA</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://facebook.com/dikzsaga">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>1515015060</p>
								<h2>Syahrul Andi S<s/h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://facebook.com/putra.barcelona.3914">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>1515015063</p>
								<h2>Vamilu Yovan S</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://facebook.com/jhalyl.seggyhunt">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>1515015065</p>
								<h2>Rojalil</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://facebook.com/dony.amoy">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>1515015066</p>
								<h2>Dony Ramadhan</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 AVA-MART Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://invoinn.com/">Kelompok 7</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{ asset('eshop/js/jquery.js') }}"></script>
	<script src="{{ asset('eshop/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('eshop/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('eshop/js/price-range.js') }}"></script>
    <script src="{{ asset('eshop/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('eshop/js/main.js') }}"></script>
</body>
</html>