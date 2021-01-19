@extends('home.master')

@section('service')
	<ul class="short">
		<li><a href="index.html">Home</a><i>|</i></li>
		<li>Check Out</li>
	</ul>
@endsection

@section('content')
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Chec<span>kout</span></h3>

				<div class="checkout-right">
					<h4>Your shopping cart contains: <span id="span">{{$total_item}}</span> Products</h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quantity</th>
								<th>Product Name</th>

								<th>Unit Price</th>
								<th>Subtotal</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							@for ($i=1; $i<=$total_item; $i++)
							<tr class="rem">
								<td class="invert">{{$i}}</td>
								<td class="invert-image"><a href="{{route('single', ['id'=>$products[$i]->id])}}"><img src="images/{{$products[$i]->id}}/1.jpg" style="max-width: 185.12px; max-height: 185.12px;" alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>{{$quantity[$i]}}</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert product-name">{{$products[$i]->name}}</td>

								<td class="invert unit">${{$products[$i]->out_price}}</td>
								<td class="invert sub">${{$quantity[$i]*$products[$i]->out_price}}</td>
								<td class="invert">
									<div class="rem">
										<div class="close1"> </div>
									</div>

								</td>
							</tr>
							@endfor
							<tr class="rem">
								<td class="inver" colspan="5"></td>
								<td class="inver total">${{$total}}</td>
								<td class="inver"> Total </td>
							</tr>
							
							

						</tbody>
					</table>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<h4>Detail your bill</h4>
						<ul class="ul-bill">
							{{-- @for ($i=1; $i<=$total_item; $i++)
							<li>{{$products[$i]->name}} <i>x</i> {{$quantity[$i]}} <span>${{$quantity[$i]*$products[$i]->out_price}} </span></li>
							@endfor  --}}
						</ul>
					</div>
					<div id="authcheck" style="visibility: hidden" >{{Auth::check()}}</div>
					<div class="col-md-8 address_form" id= "filled">
						<h4>Delivery Address</h4>
						@if (Auth::check())
						<span class="name">{{Auth::user()->name}}</span><br>
						<span class="phone">{{Auth::user()->phone}}</span><br>
						<span class="email">{{Auth::user()->email}}</span><br>
						<span class="address">{{Auth::user()->address}}</span><br>
						@endif
						<button class="submit check_out" onclick="change()">Change Delivery Address</button>
					</div>
					<div class="col-md-8 address_form" id="not_filled">
						<h4>Add Delivery Address</h4>
						<form action="#" method="" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Full name: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name" required>
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Mobile number:</label>
													<input class="form-control" type="text" name="phone" placeholder="Mobile number" required>
												</div>
											</div>
											<div class="controls">
												<label class="control-label">Email: </label>
												<input class="form-control" type="email" name="email" placeholder="Email" required>
											</div>
											<div class="controls">
												<label class="control-label">Address: </label>
												<input class="form-control" type="text" name="address" placeholder="Address" required>
											</div>
											<div class="clear"> </div>
										</div>
										
										
									</div>
									<button class="submit check_out" onclick="event.preventDefault(); post()">Delivery to this Address</button>
								</div>
							</section>
						</form>
					</div>

					<div class="clearfix"> </div>

					<div class="checkout-right-basket">
						<a onclick="payment()">Make a Payment </a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //top products -->
		<div class="mid_slider_w3lsagile">
			<div class="col-md-3 mid_slider_text">
				<h5>Some More</h5>
			</div>
			<div class="col-md-9 mid_slider_info">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class=""></li>
						<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="2" class=""></li>
						<li data-target="#myCarousel" data-slide-to="3" class=""></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item active">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g5.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g6.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
					<!-- The Modal -->

				</div>
			</div>

			<div class="clearfix"> </div>
		</div>
		
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart-js -->
<script src="js/minicart.js"></script>
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
<!-- //cart-js -->
<!-- /nav -->
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
<!-- //nav -->
<!--search-bar-->
<script src="js/search.js"></script>
<!--//search-bar-->
<!--quantity-->
<script>
	$('.value-plus').on('click', function () {
		var divUpd = $(this).parent().find('.value'),
			newVal = parseInt(divUpd.text(), 10) + 1;
		divUpd.text(newVal);
	});

	$('.value-minus').on('click', function () {
		var divUpd = $(this).parent().find('.value'),
			newVal = parseInt(divUpd.text(), 10) - 1;
		if (newVal >= 1) divUpd.text(newVal);
	});
</script>
<!--quantity-->
<script>
	function change(){
		var filled = document.getElementById('filled');
		var not_filled = document.getElementById('not_filled');
		filled.style.display = "none";
		not_filled.style.display = "block";
	}
	function post(e){
		var name = document.getElementsByName('name')[0].value;
		var phone = document.getElementsByName('phone')[0].value;
		var email = document.getElementsByName('email')[0].value;
		var address = document.getElementsByName('address')[0].value;


		document.getElementById('not_filled').style.display = "none";
		var filled = document.getElementById('filled');
		filled.innerHTML="<h4>Delivery Address</h4>";
		let element = document.createElement('span');
		element.classList.add('name');
		element.innerHTML=name;
		filled.appendChild(element);

		element = document.createElement('span');
		element.classList.add('phone');
		element.innerHTML=phone;
		filled.appendChild(element);

		element = document.createElement('span');
		element.classList.add('email');
		element.innerHTML=email;
		filled.appendChild(element);

		element = document.createElement('span');
		element.classList.add('address');
		element.innerHTML=address;
		filled.appendChild(element);

		const btn = document.createElement('button');
		btn.classList.add('submit');
		btn.classList.add('check_out');
		btn.setAttribute('onclick', 'change()');
		btn.innerHTML="Change Delivery Address"
		filled.appendChild(btn);

		filled.style.display = "block";
	}


	function payment(){
		var form = document.createElement('form');
		form.setAttribute('method', 'post');
		form.setAttribute('action', 'payment');

		var j = document.createElement("input");
		j.setAttribute('type', "hidden");
		j.setAttribute('name', '_token');
		j.setAttribute('value', "{{csrf_token()}}");
		form.appendChild(j);

		let name = document.querySelector('.name');
		var i = document.createElement("input"); 
		i.setAttribute('type',"text");
		i.setAttribute('name',"name");
		i.setAttribute('value', name.textContent);
		form.appendChild(i);
		
		let phone = document.querySelector('.phone');
		var i = document.createElement("input"); 
		i.setAttribute('type',"text");
		i.setAttribute('name',"phone");
		i.setAttribute('value', phone.textContent);
		form.appendChild(i);

		let email = document.querySelector('.email');
		var i = document.createElement("input"); 
		i.setAttribute('type',"text");
		i.setAttribute('name',"email");
		i.setAttribute('value', email.textContent);
		form.appendChild(i);

		let address = document.querySelector('.address');
		var i = document.createElement("input"); 
		i.setAttribute('type',"text");
		i.setAttribute('name',"address");
		i.setAttribute('value', address.textContent);
		form.appendChild(i);

		var element = document.getElementsByClassName('rem');
		for (k =0; k<(element.length-1)/2; k++)
		{
			var x = document.createElement('input');
			x.setAttribute('type',"text");
			x.setAttribute('name',"product"+k);
			x.setAttribute('value',element[k*2].children[3].textContent);

			var y = document.createElement('input');
			y.setAttribute('type',"text");
			y.setAttribute('name',"quantity"+k);
			y.setAttribute('value',parseInt(element[k*2].children[2].textContent));


			var z = document.createElement('input');
			z.setAttribute('type',"text");
			z.setAttribute('name',"sub"+k);
			z.setAttribute('value',element[k*2].children[5].textContent);

			form.appendChild(x);
			form.appendChild(y);
			form.appendChild(z);
		}

		var l = document.createElement('input');
		l.setAttribute('type', 'text');
		l.setAttribute('name', 'len');
		l.setAttribute('value', (element.length-1)/2);
		form.appendChild(l);

		var l = document.createElement('input');
		l.setAttribute('type', 'text');
		l.setAttribute('name', 'total');
		l.setAttribute('value', parseInt($('.total').text().substr(1)));
		form.appendChild(l);
		

		document.body.appendChild(form);
		form.submit();
	}

	function renderBill(){
		document.querySelector(".ul-bill").innerHTML="";
		var element = document.getElementsByClassName('rem');
		for (i =0; i<(element.length-1)/2; i++)
		{
			const product = document.createElement('li');
			product.innerHTML=element[i*2].children[3].textContent + " <i>x</i> "+ element[i*2].children[2].textContent +" <span>"+ element[i*2].children[5].textContent + " </span>";
			document.querySelector(".ul-bill").appendChild(product);
		}

		const total = document.createElement('li');
		total.classList.add('cl-total');
		total.innerHTML="Total <span id = 'cl-total'>"+$('.total').text()+"</span>"
		document.querySelector(".ul-bill").appendChild(total);
	}

	function total(){
		var sub = document.getElementsByClassName('sub');
		var total = 0;
		for (i=0; i<sub.length; i++)
		{
			total += parseInt(sub[i].textContent.substr(1));
		}
		return total;
	}
	$(document).ready(function (c) {
		console.log(document.querySelector('.ul-bill').getElementsByTagName('li'));
		renderBill();
		var auth = document.getElementById('authcheck').textContent;
		console.log(auth);
		if (auth == 1)
		{
			document.getElementById('filled').style.display = "block";
			document.getElementById('not_filled').style.display = "none";
		}else
		{
			document.getElementById('filled').style.display = "none";
			document.getElementById('not_filled').style.display = "block";
		}
		$('.close1').on('click', function (c) {
			var total_item = parseInt($('#span').text());
			total_item--;
			$('#span').text(total_item);

			var total = parseInt($('.total').text().substr(1));
			var sub = parseInt($(this).parent().parent().parent().first().find('.sub').text().substr(1));
			total -= sub;
			$('.total').text('$' + total);
			$('#cl-total').text('$' + total);


			$(this).parent().parent().parent().first().fadeOut('slow', function (c) {
				$(this).remove();
				renderBill();
			});
		});

		
		$('.value-plus').on('click', function (c) {
			var count = parseInt($(this).parent().parent().parent().parent().first().find('.value').text());
			//if (count ==1 ) return;
			var unit = parseInt($(this).parent().parent().parent().parent().first().find('.unit').text().substr(1));
			var sub = count*unit;
			$(this).parent().parent().parent().parent().first().find('.sub').text('$'+ count*unit);
			total();
			$('.total').text('$' + total());
			renderBill();
		});

		$('.value-minus').on('click', function (c) {
			var count = parseInt($(this).parent().parent().parent().parent().first().find('.value').text());
			//if (count == 1) return;
			var unit = parseInt($(this).parent().parent().parent().parent().first().find('.unit').text().substr(1));
			var sub = count*unit;
			$(this).parent().parent().parent().parent().first().find('.sub').text('$'+ count*unit);
			total();
			$('.total').text('$' + total());
			renderBill();
		});
		
		
	});
</script>

	
@endsection
