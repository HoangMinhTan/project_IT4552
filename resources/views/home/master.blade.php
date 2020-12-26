
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Downy Shop</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shop" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('css/shop.css')}}" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="{{asset('css/about.css')}}" type="text/css" media="screen" property="" />
	<link rel="stylesheet" type="{{asset('text/css')}}" href="{{asset('css/contact.css')}}">
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
	<link href="{{asset('css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
	
	<link href="{{asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="{{asset('css/checkout.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui1.css')}}">
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="{{route('home')}}"><span>Downy</span> <i>Shop</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							@if (Auth::check())
								@if (Auth::user()->role<2)
									<li><a href="{{route('dashboard')}}">Dashboard</a></li>
								@endif 
							@endif
							<li><a href="{{route('home')}}" class="active">Home</a></li>
							<li><a href="{{route('about')}}">About</a></li>
							<li><a href="{{route('shop')}}">Shop Now</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
							@if (Auth::check())
								<li><a href="{{'logout'}}">Logout</a></li>
							@else
								<li><a href="{{'login'}}">Login</a></li>
							@endif 
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							@if(Auth::check())
								<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							@endif
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				@yield('service')

			</div>
		</div>
	</div>
    
	@yield('content')
	
	<!-- /newsletter-->
	<div class="newsletter_w3layouts_agile">
		<div class="col-sm-6 newsleft">
			<h3>Sign up for Newsletter !</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->

	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="{{route('home')}}"><span>D</span>owny Shop </a></h2>

				<p>This is a shop.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						<ul>
							<li><a href="{{route('home')}}">Home</a></li>
							<li><a href="{{route('about')}}">About</a></li>
							<li><a href="404.html">Services</a></li>
							<li><a href="404.html">Short Codes</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+1 234 567 8901</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:downyshop@gmail.com"> downyshop@gmail.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>Dai hoc Bach Khoa Ha Noi

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4>Flickr <span>Posts</span></h4>
						<ul>
							<li><a href="single.html"><img src="{{asset('images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="copy-right-w3ls-agileits">&copy 2020 Downy Shop. All rights reserved | Design by Huy Hieu</p>
		</div>
	</div>
	</div>
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('js/minicart.js')}}"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<script src="{{asset('js/classie.js')}}"></script>
	<script src="{{asset('js/demo1.js')}}"></script>
	<script src="{{asset('js/search.js')}}"></script>
	<script src="{{asset('js/jquery-ui.js')}}"></script>
	<script>
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>

	<script src="{{asset('js/easy-responsive-tabs.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- FlexSlider -->
	<script src="{{asset('js/jquery.flexslider.js')}}"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->


	<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>


</body>

</html>
