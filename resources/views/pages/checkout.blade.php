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
								<?php
									$price=$product['discount_price'];
									// $price=substr($product['discount_price'],1)*100;
								?>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_{{ $key+1 }}">
								Buy Now
								</button>
								<!-- Modal -->
								<div class="modal fade" id="exampleModal_{{ $key+1 }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<form method="post" action="/buynow">
										{{ csrf_field() }}
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Please Fill in your information</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<table>
														<tr>
															<td>Phone Number</td>
															<td><input name="phone"></td>
														</tr>
														<tr>
															<td>Location</td>
															<td><input name="location"></td>
														</tr>
														<tr>
															<td>Product</td>
															<td><input name="productname" value="{{ $product['title'] }}" readonly></td>
														</tr>
														<tr>
															<td>Price</td>
															<td><input name="productprice" value="{{ $product['discount_price'] }}"  readonly></td>
														</tr>
													</table>
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">Buy Now {{ $price }}</button>
												</div>
											</div>
										</div>
									</form>
								</div>
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
		<script type="text/javascript">
			
		</script>
	@stop