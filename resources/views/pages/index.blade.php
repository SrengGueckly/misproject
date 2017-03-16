@extends('default')
@section('style')
@stop
@section('content')
<div class="banner">
	<div class="container">
		<section class="rw-wrapper">
			<h1 class="rw-sentence">
			<span>Fashion 2017</span>
			<div class="rw-words rw-words-1">
				<span>Bags</span>
				<span>Hoodies &amp; Sweatshirts</span>
				<span>Jackets &amp; Coats</span>
				<span>Jean Jewellery</span>
				<span>Sweatpants</span>
				<span>Swimwear</span>
			</div>
			<div class="rw-words rw-words-2">
				<span>Leather Jackets</span>
				<span>Shirts</span>
				<span>Shoes, Boots &amp; Trainers</span>
				<span>T-shirt</span>
				<span>Underwears &amp; Socks</span>
				<span>Vests</span>
			</div>
			</h1>
		</section>
	</div>
</div>
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="col-md-6 col-md">
				<div class="col-1">
					<a href="javascript:void(0);" class="b-link-stroke b-animate-go  thickbox">
						<img src="/images/pi(1).jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Hin Channiroth</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Our Model</h3></div></a>
						<!---<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>-->
					</div>
					<div class="col-2">
						<span>Hot Deal</span>
						<h2><a href="javascript:void(0);">Luxurious &amp; Trendy</a></h2>
						<p>The newest among products! We sell you the best quality product, reasonable price... Please keep following our website for the update every week.</p>
					</div>
				</div>
				<div class="col-md-6 col-md1">
					<div class="col-3">
						<a href="javascript:void(0);"><img src="/images/pi(2).jpg" class="img-responsive" alt="">
							<div class="col-pic">
								<p>Alex Chandra</p>
								<label></label>
								<h5>Our Model</h5>
							</div></a>
						</div>
						<div class="col-3">
							<a href="javascript:void(0);"><img src="/images/pi(3).jpg" class="img-responsive" alt="">
								<div class="col-pic">
									<p>Hin Channiroth</p>
									<label></label>
									<h5>Our Model</h5>
								</div></a>
							</div>
							<div class="col-3">
								<a href="javascript:void(0);"><img src="/images/pi3.jpg" class="img-responsive" alt="">
									<div class="col-pic">
										<p>Sarah</p>
										<label></label>
										<h5>Our Model</h5>
									</div></a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<!--products-->
						<div class="content-mid">
							<h3>Trending Items</h3>
							<label class="line"></label>
							<div class="mid-popular">
								<?php
								
									$items = config('gallery.single');
								?>
								@foreach($items as $products)
									@foreach($products as $product)
										@foreach($product as $item)
											@if(isset($item['trending_item']))
									<div class="col-md-3 item-grid simpleCart_shelfItem">
										<div class=" mid-pop">
											<div class="pro-img">
												<img src="{{ $item['src'] }}" class="img-responsive" alt="">
												<div class="zoom-icon ">
													<a class="picture" href="{{ $item['src'] }}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
													<a href="/single/{{ $item['id'] }}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
												</div>
											</div>
											<div class="mid-1">
												<div class="women">
													<div class="women-top">
														<span>{{ $item['title'] }}</span>
														<h6><a href="single">{{ $item['desc'] }}</a></h6>
													</div>
													<div class="img item_add">
														<form method="post" action="/addtocart">
														{{ csrf_field() }}
														<input type="hidden" name="productId" value="{{$item['id']}}">
														<input type="hidden" name="productIdFromPage" value="index">
														<button type="submit" class="no_border no_background"><img src="/images/ca.png" alt=""></button>
														</form>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="mid-2">
													<p ><label>{{ $item['actual_price'] }}</label><em class="item_price">{{ $item['discount_price'] }}</em></p>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													
													<div class="clearfix"></div>
												</div>
												
											</div>
										</div>
									</div>
									@endif
								@endforeach
								@endforeach
								@endforeach
							</div>
							
						</div>
						<!--//products-->
						<!--brand-->
						@include('component.brand')
						<!--//brand-->
					</div>
					
				</div>
				<!--//content-->
				@stop
				@section('script')
				
				@stop