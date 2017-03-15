@extends('default')
@section('style')
@stop
@section('content')
<div class="banner-top">
	<div class="container">
		<h1>Checkout</h1>
		<em></em>
		<h2><a href="/">Home</a><label>/</label>Checkout</h2>
	</div>
</div>
<!--login-->
<div class="check-out">
	<div class="container">
		
		<div class="bs-example4" data-example-id="simple-responsive-table">
			<div class="table-responsive">
				<table class="table-heading simpleCart_shelfItem1">
					<tr>
						<th class="table-grid">Item</th>
						
						<th>Prices</th>
						<th >Delivery </th>
						<th>Subtotal</th>
					</tr>
					<?php
						$products=Session::get('myCart');
						if(sizeof($products)<=0){
							$products=[];
						}
					?>
					@foreach($products as $key => $product)
					<tr class="cart-header">
						<td class="ring-in">
							<!-- <form method="post" action="/single">
									{{ csrf_field() }}
									<input type="hidden" name="productId" value="{{$product['id']}}">
									<button type="submit" class="at-in"><img src="{{ $product['src'] }}" class="img-responsive" alt=""></button>
							</form> -->
							<a href="/single/{{ $product['id'] }}" class="at-in"><img src="{{ $product['src'] }}" class="img-responsive" alt=""></a>
							<div class="sed">
								<h5><a href="single">{{ $product['title'] }}</a></h5>
								<p>{{ $product['desc'] }} </p>
								
							</div>
							<div class="clearfix"> </div>
							<form method="post" action="/deleteproduct">
								{{ csrf_field() }}
								<div class="close1"><button type="submit" style="width:20px;height:20px;background-color: transparent;border:none;outline:none;"></button></div></td>
								<input type="hidden" name="productId" value="{{$product['id']}}">
							</form>
							<td>{{ $product['actual_price'] }}</td>
							<td>FREE SHIPPING</td>
							<td class="item_price" id="myprice">{{ $product['discount_price'] }}</td>
							<td class="add-check"><a class="item_add hvr-skew-backward1" href="#">
								<!-- <form action="" method="POST"> -->
								 <!--  <script
								    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								    data-key="pk_test_KCw3yivWWmhhSgS7jTZWCA9I"
								    data-amount="998"
								    data-name="Demo Site"
								    data-description="Widget"
								    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
								    data-locale="auto">
								  </script> -->
								<!-- </form> -->
								<script
								  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								  data-key="pk_live_UvtBzXZ5WLQOvDH9qf2iW8ED"
								  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
								  data-name="Demo SaaS Site"
								  data-description="Pro Subscription ($29 per month)"
								  data-panel-label="Buy Now"
								  data-label="Buy Now"
								  data-amount="2900"
								  data-allow-remember-me="false">
								</script>
							</a></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--//login-->
	<!--brand-->
	@include('component.brand')
	<!--//brand-->
	<!--//content-->
	@stop
	@section('script')

		<!-- <script src="https://checkout.stripe.com/checkout.js"></script>

			<button id="customButton">Purchase</button>

			<script>
			var handler = StripeCheckout.configure({
			  key: 'pk_test_KCw3yivWWmhhSgS7jTZWCA9I',
			  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
			  locale: 'auto',
			  token: function(token) {
			    // You can access the token ID with `token.id`.
			    // Get the token ID to your server-side code for use.
			  }
			});

			document.getElementById('customButton').addEventListener('click', function(e) {
			  // Open Checkout with further options:
			  handler.open({
			    name: 'Demo Site',
			    description: '2 widgets',
			    amount: 2000
			  });
			  e.preventDefault();
			});

			// Close Checkout on page navigation:
			window.addEventListener('popstate', function() {
			  handler.close();
			});
			</script> -->

	@stop