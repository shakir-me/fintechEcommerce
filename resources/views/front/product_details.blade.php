@extends('layouts.front')
@section('front_content')
@push('css')
@endpush

	<!-- breadcrumb  -->
	<div class="bredcrumb">
		<h2 class="bredcrumb__title">Product Details</h2>
		<ul class="bredcrumb__items">
			<li>Home <i class="bi bi-chevron-right"></i></li>
			<li>Product Details</li>
		</ul>
	</div>

	@php
	$images = json_decode($product->images, true);
	$specifiactions = json_decode($product->specification, true);
	$tags = explode(',',$product->tag);
	@endphp

	<!-- single product  -->
	<div class="single__product">
		<div class="container">
			<div class="row g-5">
				<div class="col-xl-6 col-lg-6 col-md-12">
					<div class="single__product-left">
						<div class="single_preview_product">
							<div class="single-popup-view">
								<a class="popup-image" href="{{ asset('frontend/') }}/./assets/img/product/17-3.jpg"><i class="fal fa-search"></i></a>
							</div>
							<div class="single__product-bigthumb tab-content" id="myTabefContent">
								<div class="tab-pane fade show active" id="homde" role="tabpanel" >
								   <div class="full-view">
										<img src="{{ asset($product->thumbnail) }}" alt="">
								   </div>
								</div>
								@foreach($images as $key=> $image)
								<div class="tab-pane fade show" id="homde-{{ $key }}" role="tabpanel" >
								   <div class="full-view">
										<img src="{{ asset($image) }}" alt="">
								   </div>
								</div>
								@endforeach
							</div>
						</div>
						<div class="single_product_tab">
							<div class="single_prodct">
								<ul class="single__product-items nav nav-tabs border-0" id="dfde" role="tablist">
									<li class="single__product-item nav-item" role="presentation">
										<button class="nav-link active" id="home-tab" data-bs-toggle="tab"
											data-bs-target="#homde" type="button" role="tab" 
											aria-selected="true"><img src="{{ asset($product->thumbnail) }}" alt=""></button>
									</li>
									@foreach($images as $key=> $image)
									<li class="single__product-item nav-item" role="presentation">
										<button class="nav-link" id="home-tab" data-bs-toggle="tab"
											data-bs-target="#homde-{{ $key }}" type="button" role="tab" 
											aria-selected="true"><img src="{{ asset($image) }}" alt=""></button>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12">
					<div class="single_preview_content pl-30">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb"><a href="#">Home / </a>
							<li class="breadcrumb-item"><a href="#">{{ $product->category->category_name }}</a></li>
							@if( $product->subcategory_id)
							<li class="breadcrumb-item"><a href="#">{{  $product->subcategory->subcategory_name }}</a></li>
							@endif
							<li class="breadcrumb-item active" aria-current="page">{{ $product->product_name }}</li>
							</ol>
						</nav>
						<h2 class="single__product-title border-bottom-0">{{ $product->product_title }}</h2>
						<div class="s-price pt-30 mb-30">
							@if($product->discount_rate == 0.00)
							<span class="single__product-pricebtn">${{ $product->product_price }}</span>
							@else
							<span class="single__product-pricebtn">${{ $product->product_price }}</span>
							<span class="single__product-pricebtn">${{ $product->discount_price }}</span>
							@endif
						</div>
						@php
						$avgrating=0;
			     		@endphp

                    @foreach ($product->orderItems->where('rstatus',1) as $orderItem )
						@php
							$avgrating=$avgrating + $orderItem->review->rating;
						@endphp
						@endforeach

						<div class="single__product-star">
						 @for ($i=1; $i<=5; $i++)
                            @if ($i<=$avgrating)
				
						   <span><i class="bi bi-star-fill "></i></span>
						
						   
							@else
					
							<span><i class="far fa-star "></i></span>
							
							@endif
                                        
							@endfor 
					

							
							<span class="single__product-reviewtitle">
								({{ $product->orderItems->where('rstatus',1)->count() }} customer review)
						
								
							</span>
						</div>
						<div class="single__product-feature">
							<p>{{ $product->product_short_desc }}</p>
							<ul class="single__product-featurlist">
								@foreach($specifiactions as $key=> $specific)
								<li>{{ $specific }} : {{ json_decode($product->specification_ans, true)[$key] }}.</li>
								@endforeach
							</ul>
						</div>
						<h4 class="single__product-title2">Ask a Question!
						</h4>
						<form action="{{ route('add.cart') }}" method="post" class="addCard">
				
							@csrf
							<div class="viewcontent__action single_action pt-30">
								<p class="single__product-increment single__product-cart"><i class="bi bi-plus"></i><span class="qty">1</span><i class="bi bi-dash"></i></p>
								<input type="hidden" name="product_qty" class="product_qty" value="1" >
								<button class="single__product-cart2" type="submit">ADD TO CARD</button>
								<input type="hidden" name="product_id" value="{{ $product->id }}" >
								@if($product->discount_rate == 0.00 )
								<input type="hidden" name="product_price" value="{{ $product->product_price }}">
								@else
								<input type="hidden" name="product_price" value="{{ $product->discount_price }}">
								@endif
								<button class="single__product-heart addWishlist" data-id="{{ $product->id }}"><i class="bi bi-heart"></i></button>
								<button class="single__product-heart"><i class="bi bi-recycle"></i></button>
							</div>
						</form>
						<a class="single__product-buy" href="#">BUY NOW</a>
						<div class="single__product-categories">  
							<ul class="single__product-cat">  
								<li>SKU:</li>
								<li>categories :</li>
								<li>Tags:</li>
								<li>Brands :</li>
							</ul>
							<ul class="single__product-catname">
								<li>{{ $product->product_code }}</li>
								<li>{{ $product->category->category_name }}</li>
								<li> @foreach($tags as $key=> $tag) {{ $tag }}, @endforeach </li> 
								<li> {{ $product->brand->brand_name }} </li> 
							</ul>
						</div>
						<div class="single__product-social">
							<span class="f-title edit-f-title">FOLLOW US ON</span>
							<a href="#"><i class="bi bi-facebook"></i></a>
							<a href="#"><i class="bi bi-instagram"></i></a>
							<a href="#"><i class="bi bi-linkedin"></i></a>
							<a href="#"><i class="bi bi-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- latest  -->

	<div class="single__additional">
		<div class="container">
			<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
				  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Discription
				  </button>
				</li>
				<li class="nav-item" role="presentation">
				  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">specefications</button>
				</li>

				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-Reviews-tab" data-bs-toggle="pill"
						data-bs-target="#pills-Reviews" type="button" role="tab" aria-controls="pills-Reviews"
						aria-selected="false">Reviews</button>
				</li>

			  </ul>
			  <div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
					<div class="single__additional-content">
						<div class="single__additional-wrapper">
							<div class="single__additional-left">
								<h2 class="single__additional-title">{{ $product->product_title }}</h2>
								<p class="single__additional-dis1">Note: {{ $product->product_short_desc }} </p>

								<p>{!! $product->description !!}</p>
								
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
					<div class="specefications">
						<ul class="specefications__list">
							@foreach($specifiactions as $key=> $specific)
							<li>
								<span>{{ $specific }}</span>
								<span>{{ json_decode($product->specification_ans, true)[$key] }}</span>
							</li>
							@endforeach
						</ul>
					</div>
				</div>

				<div class="tab-pane fade" id="pills-Reviews" role="tabpanel" aria-labelledby="pills-Reviews-tab"
				tabindex="0">
				<div class="reviews__area">
					<div class="reviews__area-header">
						<h2 class="reviews__area-title">Reviews</h2>
					</div>
					<div class="row">
						@foreach ($product->orderItems->where('rstatus',1) as $orderItem )
						<div class="col-lg-6">
							<div class="reviews__area-body">
								<div class="reviews__area-items">
									<div class="reviews__area-item">
										<div class="thumb">
											<img src="{{ asset($orderItem->order->user->image) }}" alt="">
											{{-- <img src="{{asset('backend/images')}}/{{$orderItem->order->user->image}}" alt=""> --}}
										</div>
										<div class="content">
											<h3>{{ $orderItem->order->user->name }}</h3>
											<span>{{ Carbon\Carbon::parse($orderItem->review->created_at)->format('d F Y') }}</span>
											<p>{{ $orderItem->review->comment }}.</p>
										</div>
										<div class="star">


											<i class="fa-solid fa-star {{ $orderItem->review->rating }} "></i>
									
										</div>
										{{-- {{ $orderItem->review->rating }} --}}
									</div>
								
							
								</div>
							</div>
							<div class="reviews__area-footer"></div>
						</div>
						@endforeach

						{{-- <div class="col-lg-6">
							
						
							<div class="reviews__area-login">
								<h3>Leave your Review</h3>
								<form action="#">
									<div class="row">
										<div class="col-6">
											<div class="reviews__area-field">
												<label for="Name">Name</label>
												<input type="text" name="Name" id="Name"
													placeholder="Your name">
											</div>
										</div>
										<div class="col-6">
											<div class="reviews__area-field">
												<label for="rating">Your Rating</label>
												<select class="form-select form-select-lg mb-3"
													aria-label=".form-select-lg example">
													<option selected>Yur Ratings</option>
													<option value="1">5 Star</option>
													<option value="2">4 Star</option>
													<option value="3">3 Star</option>
													<option value="4">2 Star</option>
													<option value="5">1 Star</option>
												</select>
											</div>
										</div>
										<div class="col-12">
											<div class="reviews__area-field">
												<label for="text">Your Rating</label>
												<textarea name="text" id="text"
													placeholder="Write down your review here"></textarea>
											</div>
										</div>
									</div>
								</form>
								<button class="review-login-btn" type="submit">Submit</button>
							</div>

				
						
						</div> --}}
					</div>
				</div>
			</div>
			  </div>
		</div>
	</div>


	<!-- related products  -->
	<div class="related__products">
		<h2 class="related__products-title">popular products</h2>
		<div class="container">
			<div class="related__products-slider">
				<div class="related__products-wrapper">
					@foreach($related_product as $key=> $r_product)
						<div class="items__item">
							<a href="{{ URL::to('product/details/'.$r_product->product_slug) }}">
							<img src="{{ asset($r_product->thumbnail) }}" alt="" class="items__img" />
							<h5 class="heading name">{{ $r_product->product_name }}</h5>
							<h5 class="heading title">{{ $r_product->product_title }}</h5>
							<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
								@if($r_product->discount_rate == 0.00)
								<p class="price">${{ $r_product->product_price }}</p>
								@else
								<p class="price">${{ $r_product->discount_price }}</p>
								@endif

								@if($r_product->discount_rate == 0.00)
								@else
								<span class="discount">- @if($r_product->discount_type == "Flat") $@endif{{ intval($r_product->discount_rate) }} @if($r_product->discount_type == "Percent") % @endif</span>
								@endif

								@if($r_product->discount_rate == 0.00)
								@else
								<span class="old-price">${{ $r_product->product_price }}</span>
								@endif
							</div>

							<div class="items__bottom">
								<p class="text mb-2 text-center">
									{{-- {{ $r_product->product_short_desc }} --}}

									{{ Str::limit($r_product->product_short_desc, 100, '') }}
								</p>
							</a>
								<div class="d-flex justify-content-between align-items-center">
							
									<form action="{{ route('add.cart') }}" method="post" class="addCard">
										@csrf
										<input type="hidden" name="product_id" value="{{ $r_product->id }}">
										<input type="hidden" name="product_qty" value="1">
										@if($r_product->discount_rate == 0.00 )
										<input type="hidden" name="product_price" value="{{ $r_product->product_price }}">
										@else
										<input type="hidden" name="product_price" value="{{ $r_product->discount_price }}">
										@endif
										<button class="btn btn-cart" type="submit">Add to cart</button>
									</form>
									<button class="btn btn-wishlist addWishlist" data-id="{{ $r_product->id }}">
										<i class="bi bi-heart"></i>
									</button>
								</div>
							</div>
						</div>
					@endforeach
				  </div>
			</div>
		</div>
	</div>


@push('js')

<script>
	$(".bi-plus").on('click',function(){
		var qty = $(".qty").text();
		var qty_plus = ++qty;
		$(".qty").text(qty_plus);
		$(".product_qty").val(qty_plus);
	})

	$(".bi-dash").on('click',function(){
		var qty = $(".qty").text();
		var qty_substr = qty-1;
		$(".qty").text(qty_substr);
		$(".product_qty").val(qty_substr);
	})
</script>

<script>
	$(document).ready(function(){
		 $.ajax({
		   type: "GET",
		   url: "cart/show",
		   success: function (data) {
		      $('.cart_list_popup').html(data)	
		   },
		});
	})
</script>

@endpush

@endsection