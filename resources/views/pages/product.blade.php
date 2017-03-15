@extends('default')
@section('style')
<link href="/css/form.css" rel="stylesheet" type="text/css" media="all" />
@stop
@section('content')<!--A Design by W3layouts
<!--banner-->
<!-- <pre>{{ print_r($products,true) }}</pre> -->
<div class="banner-top">
	<div class="container">
		<h1>Products</h1>
		<em></em>
		<h2><a href="/">Home</a><label>/</label>Products</h2>
	</div>
</div>
<!--content-->
<div class="product">
	<div class="container">
		<div class="col-md-12">
			<div class="mid-popular">
			@foreach($products as $key => $item)
				<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
						<div class="pro-img">
							<img src="{{ $item['src'] }}" class="img-responsive1" alt="">
							<div class="zoom-icon ">
								<a class="picture" href="{{ $item['src'] }}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
								<a href="single"><i class="glyphicon glyphicon-menu-right icon"></i></a>
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
										<input type="hidden" name="productIdFromPage" value="product">
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
			@endforeach
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">
			$(function() {
			var menu_ul = $('.menu-drop > li > ul'),
			menu_a  = $('.menu-drop > li > a');
			menu_ul.hide();
			menu_a.click(function(e) {
			e.preventDefault();
			if(!$(this).hasClass('active')) {
			menu_a.removeClass('active');
			menu_ul.filter(':visible').slideUp('normal');
			$(this).addClass('active').next().stop(true,true).slideDown('normal');
			} else {
			$(this).removeClass('active');
			$(this).next().stop(true,true).slideUp('normal');
			}
			});
			
			});
		</script>
	</div>
	<div class="clearfix"></div>
	<!--brand-->
	@include('component.brand')
	<!--//brand-->
</div>
<!--//content-->
@stop
@section('script')
<script src="/js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
$(function() {
	$('a.picture').Chocolat();
});
</script>
@stop