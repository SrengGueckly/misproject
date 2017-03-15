@extends('default')
@section('style')
<link href="/css/form.css" rel="stylesheet" type="text/css" media="all" />
@stop
@section('content')
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Single</h1>
		<em></em>
		<h2><a href="/">Home</a><label>/</label>Single</h2>
	</div>
</div>
<div class="single">
	<div class="container">

	<?php
		$pros=[];
		$products=config('gallery.single');
		foreach($products as $product){
			foreach($product as $item){
				array_push($pros, $item);
			}
		}
		$item='';
		// echo '<pre>'.$id.'</pre>';
		// echo '<pre>'.print_r($products).'</pre>';die();
		// echo '<pre>'.print_r($pros,true).'</pre>';die();
		foreach($pros as $product){
			foreach($product as $mypro)
			if($mypro['id']== $id){
				$item=$mypro;
				break;
			}
		}

	?>

		<div class="col-md-9">
			<div class="col-md-5 grid">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="{{ $item['src'] }}">
							<div class="thumb-image"> <img src="{{ $item['src'] }}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-7 single-top-in">
				<div class="span_2_of_a1 simpleCart_shelfItem">
					<h3>{{ $item['title'] }}</h3>
					<p class="in-para">{{ $item['desc'] }}</p>
					<div class="price_single">
						<span class="reducedfrom item_price">{{ $item['discount_price'] }}</span>
						<a href="#">click for offer</a>
						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Quick Overview:</h4>
					<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
					<div class="clearfix"> </div>
				</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
	<div class="clearfix"> </div>
</div>

<!--brand-->
@include('component.brand')
<!--//brand-->
</div>

<!--//content-->
@stop
@section('script')
<script src="/js/imagezoom.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
$('.flexslider').flexslider({
animation: "slide",
controlNav: "thumbnails"
});
});
</script>
@stop