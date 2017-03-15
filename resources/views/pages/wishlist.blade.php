@extends('default')
@section('style')

@stop
@section('content')

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Wishlist</h1>
		<em></em>
		<h2><a href="/">Home</a><label>/</label>Wishlist</h2>
	</div>
</div>
<!--login-->
	<div class="container">
		<div class="wishlist">
			<h6><a href="#">Product Name</a>	<a href="#">Unit Price</a>	<a href="#">Stock Status</a></h6>	
			<p>No products were added to the wishlist</p>
		</div>
	</div>
<!--//login-->
<!--brand-->
		@include('component.brand')
			<!--//brand-->
	<!--//content-->
@stop
@section('script')

@stop