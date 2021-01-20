<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
</head>
<body>
	
	
	
	

		
	

</body>
</html>




<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Downy Shop</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shop" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
								<li><a href="{{route('logout')}}">Logout</a></li>
							@else
								<li><a href="{{route('login')}}">Login</a></li>
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
								<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
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
    
			<div class="wrap-login100" style="margin: auto">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				@yield('content')
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

	<script src="jquery/jquery-3.2.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="select2/select2.min.js"></script>
	<script src="tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>
</body>

</html>
