<div class="header">
	<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="{{$baseUrlLang}}/"><img src="/images/logo1.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
			<div class="col-sm-5 col-md-offset-2  header-login">
				<ul >
					<li><a href="{{$baseUrlLang}}/login">Login</a></li>
					<li><a href="{{$baseUrlLang}}/register">Register</a></li>
					<li><a href="{{$baseUrlLang}}/checkout">Checkout</a></li>
				</ul>
			</div>
				
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li>
							@if ($lang === 'en')
							<a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('kh') }}">
								<img class="img-fluid flag" src="{{ asset('images/kh_icon.jpg') }}" alt="english language">
								<span class="_text lang">KH</span>
							</a>
							@else
							<a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('en') }}">
								<img class="img-fluid flag" src="{{ asset('images/en_icon.jpg') }}" alt="english language">
								<span class="_text lang">EN</span>
							</a>
							@endif
						</li>
					</ul>
					
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="container">
	
		<div class="head-top">
			
		 	<div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
	 
				 <!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
					    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>
					     
					</div> 
	   <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				        <ul class="nav navbar-nav nav_1">
				            <li><a class="color" href="/">{{ trans('content.header.header_1') }}</a></li>
				            
				    		<li class="dropdown mega-dropdown active">
							    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('content.header.header_2') }}<span class="caret"></span></a>				
								<div class="dropdown-menu ">
				                    <div class="menu-top">
										<div class="col1">
											<div class="h_nav">
												<!-- <h4>Submenu1</h4> -->
													<ul>
														<li><a href="{{$baseUrlLang}}/product/women/accessory">Accessories</a></li>
														<li><a href="{{$baseUrlLang}}/product/women/bag">Bags</a></li>
														<li><a href="{{$baseUrlLang}}/product/women/hat">Caps & Hats</a></li>
														<li><a href="{{$baseUrlLang}}/product/women/sweatshirt">Hoodies & Sweatshirts</a></li>
														
													</ul>	
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<!-- <h4>Submenu2</h4> -->
												<ul>
													<li><a href="{{$baseUrlLang}}/product/women/jacket">Jackets & Coats</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/jean">Jeans</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/jewellery">Jewellery</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/jumper">Jumpers & Cardigans</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/leatherjacket">Leather Jackets</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/longsleeve">Long Sleeve T-Shirts</a></li>
												</ul>	
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<!-- <h4>Submenu3</h4> -->
												<ul>
													<li><a href="{{$baseUrlLang}}/product/women/shirt">Shirts</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/shoes">Shoes, Boots & Trainers</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/sunglasses">Sunglasses</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/sweatpants">Sweatpants</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/swimwear">Swimwear</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/trouser">Trousers & Chinos</a></li>
													
												</ul>	
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<!-- <h4>Submenu4</h4> -->
												<ul>
													<li><a href="{{$baseUrlLang}}/product/women/tshirt">T-Shirts</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/underwear">Underwear & Socks</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/vest">Vests</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/jacket">Jackets & Coats</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/jean">Jeans</a></li>
													<li><a href="{{$baseUrlLang}}/product/women/jewellery">Jewellery</a></li>
												</ul>	
											</div>							
										</div>
										<div class="col1 col5">
											<img src="/images/me.png" class="img-responsive" alt="">
										</div>
										<div class="clearfix"></div>
									</div>                  
								</div>				
							</li>
							<li class="dropdown mega-dropdown active">
							    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('content.header.header_3') }}<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
				                    <div class="menu-top">
										<div class="col1">
											<div class="h_nav">
												<!-- <h4>Submenu1</h4> -->
												<ul>
													<li><a href="{{$baseUrlLang}}/product/men/accessory">Accessories</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/bag">Bags</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/hat">Caps & Hats</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/sweatshirt">Hoodies & Sweatshirts</a></li>
													
												</ul>	
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<!-- <h4>Submenu2</h4> -->
												<ul>
													<li><a href="{{$baseUrlLang}}/product/men/jacket">Jackets & Coats</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/jean">Jeans</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/jewellery">Jewellery</a></li>
													<li><a href="/product/men/jumper">Jumpers & Cardigans</a></li>
													<li><a href="/product/men/leatherjacket">Leather Jackets</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/longsleeve">Long Sleeve T-Shirts</a></li>
												</ul>	
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<!-- <h4>Submenu3</h4> -->
												
												<ul>
													<li><a href="{{$baseUrlLang}}/product/men/shirt">Shirts</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/shoes">Shoes, Boots & Trainers</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/sunglasses">Sunglasses</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/sweatpants">Sweatpants</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/swimwear">Swimwear</a></li>
													<li><a href="{{$baseUrlLang}}/product/men/trouser">Trousers & Chinos</a></li>
													
												</ul>	
												
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<!-- <h4>Submenu4</h4> -->
												<ul>
													<li><a href="/product/men/tshirt">T-Shirts</a></li>
													<li><a href="/product/men/underwear">Underwear & Socks</a></li>
													<li><a href="/product/men/vest">Vests</a></li>
													<li><a href="/product/men/jacket">Jackets & Coats</a></li>
													<li><a href="/product/men/jean">Jeans</a></li>
													<li><a href="/product/men/jewellery">Jewellery</a></li>
												</ul>	
											</div>							
										</div>
										<div class="col1 col5">
											<img src="/images/me1.png" class="img-responsive" alt="">
										</div>
										<div class="clearfix"></div>
									</div>                  
								</div>				
							</li>
							<li><a class="color3" href="{{$baseUrlLang}}/product">{{ trans('content.header.header_4') }}</a></li>
							<li><a class="color4" href="{{$baseUrlLang}}/404">{{ trans('content.header.header_5') }}</a></li>
				          <!--   <li><a class="color5" href="{{$baseUrlLang}}/typo">{{ trans('content.header.header_6') }}</a></li> -->
				            <li ><a class="color6" href="{{$baseUrlLang}}/contact">{{ trans('content.header.header_7') }}</a></li>
				        </ul>
				    </div><!-- /.navbar-collapse -->

				</nav>
			</div>
			<?php

				$total=0;
				$products=Session::get('myCart');
				if(sizeof($products)<=0){
					$total=0;
				}
				else{
					foreach($products as $product){
						$price=substr($product['discount_price'], 1);
						$total+=$price;
					}
				}
				
			?>
			<div class="col-sm-2 search-right">
				<ul class="heart">
					<li>
						<a href="wishlist" >
							<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
						</a>
					</li>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
				</ul>
				<div class="cart box_1">
					<a href="checkout">
						<h3>
							<div class="total">
								<span class="Cart_total">${{ $total }}</span>
							</div>
							<img src="/images/cart.png" alt=""/>
						</h3>
					</a>
					<form method="post" action='/emptycard' id="frmEmpty">
					{{ csrf_field() }}
						<p><button class="Cart_empty" onclick="emptycard()" type="submit" style="background-color: transparent; border:none; outline: none!important; font-size:10px; padding:0;">Empty Cart</button></p>
					</form>
				</div>
				<div class="clearfix"> </div>
					
				<!----->

				<!---pop-up-box---->					  
				<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					<div class="search-top">
						<div class="login-search">
							<input type="text" id="txtsearch" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
						</div>
						<div id="result" style="text-align:left;">
							
						</div>
					</div>				
				</div>
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>

<script>
function emptycard(){
	$('.frmEmpty').submit();
}
$("#txtsearch").keyup(function(){
	var name=$("#txtsearch").val();
	if(name==''){
		name='';
	}
	$("#result").empty();
	$.ajax({

	    url : '/search/'+name,
	    type : 'GET',
	    dataType:'json',
	    success : function(data) {
	        if(data.length<=0){
	        	$("#result").text('Not Found');
	        }
	        else{
	        	var htm='';
	        	$("#result").empty();
	        	$(data).each(function(v,k){
	        		// $("#result").append(k['title']+k['desc']);
	        		htm='<ul style="margin-bottom:5px;"><a href="/single/'+k['id']+'"><li><img src="'+k['src']+'"'+'</li>'+'<li>'+k['title']+'</li>'+k['desc']+'<li></a></ul>';
	        		$("#result").append(htm);
	        	});
	        }
	    },
	    error : function(request,error)
	    {
	    	console.log('error');
	    }
	});
});

</script>
