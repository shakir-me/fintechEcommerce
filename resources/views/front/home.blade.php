@extends('layouts.front')

@section('front_content')

<header class="header">
	<div class="container">
		<div class="header__wrapper row g-5 row-md-lg-2">
			<div class="col-12 col-lg-8">
				<div class="header__content">
					<h1 class="heading mb-3">Optimised Trading Software and System for any platform</h1>
					<p class="text">
						Discover Thousands of easy to set up, expert advisors, Indicators made by world
						class developers
					</p>
					<form action="{{ route('product.search') }}" class="header__search d-flex align-items-center">
						<label for="search">
							<i class="bi bi-search"></i>
						</label>
						<input type="text" name="search" id="search" class="w-100" placeholder="Search here..." />
			
				
		
						<select name="category_id" >
							@foreach ($categories as $category)
							<option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
							@endforeach		
						</select>
					</form>
				</div>
			</div>
			<div class="col-12 col-lg-4">

						  <div class="hello text-center">
							@if(Auth::check())
							<a href="{{ url('user/home') }}">
								<div class="loader">
					
								</div>
								<div class="text">
									<p class="hero-dis">Personal Fintech Account</p>
								</div>
							</a>
							@else
							<a href="javascript:void(0)" class="login">
								<div class="loader">
					
								</div>
								<div class="text">
									<p class="hero-dis">Personal Fintech Account</p>
								</div>
							</a>
							@endif
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>
</header>
<!-- about section -->
<section class="section about-section">
	<div class="container">
		<h2 class="heading mb-5 text-center d-none d-lg-block">
			We are the largest trading software <br />
			marketplace in the world
		</h2>
		<h2 class="heading mb-5 text-center d-lg-none">
			We are the largest trading software marketplace in the world
		</h2>
		<div class="about row g-5">
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="about__item">
					<img src="{{ asset('frontend/img/about-img-1.png')}}" class="mb-3 about__img" alt="" />
					<h3 class="heading mb-1">Web Content Management</h3>
					<p class="text">
						Donec gravida est ut velit fringilla, et venenatis nisi euismod. Aenean est
						turpis, rhoncus quis scelerisque
					</p>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="about__item">
					<img src="{{ asset('frontend//img/about-img-2.png')}}" class="mb-3 about__img" alt="" />
					<h3 class="heading mb-1">Digital Asset Management</h3>
					<p class="text">
						Donec gravida est ut velit fringilla, et venenatis nisi euismod. Aenean est
						turpis, rhoncus quis scelerisque ac, eleifend quis lorem
					</p>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="about__item">
					<img src="{{ asset('frontend/img/about-img-3.png')}}" class="mb-3 about__img" alt="" />
					<h3 class="heading mb-1">Headless CMS</h3>
					<p class="text">
						Donec gravida est ut velit fringilla, et venenatis nisi euismod. Aenean est
						turpis, rhoncus quis
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- latest items -->
<section class="section items-section">
	<div class="container">
		<h2 class="heading text-center">Latest Added</h2>
		<p class="text mb-4 text-center">Latest uploaded Ea's or indicators</p>

		<div class="items row g-4 mb-4">
		
			
			@foreach($latestProducts as $key=> $latest)
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="{{ URL::to('product/details/'.$latest->product_slug) }}">
					<div class="items__item">
						<img src="{{ asset($latest->thumbnail) }}" alt="" class="items__img" />
						<h5 class="heading name">{{ $latest->product_name }}</h5>
						<h5 class="heading title">{{ $latest->product_title }}</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							@if($latest->discount_rate == 0.00)
							<p class="price newprice">${{ $latest->product_price }}</p>
							@else
							<p class="price newprice">${{ $latest->discount_price }}</p>
							@endif

							@if($latest->discount_rate == 0.00)
							@else
							<span class="discount">- @if($latest->discount_type == "Flat") $@endif{{ intval($latest->discount_rate) }} @if($latest->discount_type == "Percent") % @endif</span>
							@endif

							@if($latest->discount_rate == 0.00)
							@else
							<span class="price">${{ $latest->product_price }}</span>
							@endif

							{{-- <p class="price">$35.00</p>
							<span class="price newprice">$30.00</span> --}}
						</div>

						<div class="items__bottom mx-auto">
							<p class="text mb-2 text-center">
								{{ Str::limit($latest->product_short_desc, 100, '') }}
							</p>
							<div class="d-flex justify-content-between align-items-center">

								<form  action="{{ route('add.cart') }}" method="post" class="d-flex w-full justify-content-center align-items-center mx-auto addCard">
									@csrf
									<input type="hidden" name="product_id" value="{{ $latest->id }}">
									<input type="hidden" name="product_qty" value="1">
									@if($latest->discount_rate == 0.00 )
									<input type="hidden" name="product_price" value="{{ $latest->product_price }}">
									@else
									<input type="hidden" name="product_price" value="{{ $latest->discount_price }}">
									@endif
									<div class="d-flex  justify-content-between align-items-center mx-auto">

										<button class="btn btn-cart mx-auto" type="submit">Add to cart </button>
									</div>
								</form>

								<a href="#" class="btn btn-wishlist addWishlist" data-id="{{ $latest->id }}">
									<i class="bi bi-heart"></i>
								</a>
								{{-- <button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button> --}}
							</div>
						</div>
					</div>
				</a>
			</div>
		
	
			@endforeach
		
		</div>

		<div class="items__btn">
			<!-- <a href="#" class="btn btn-more">view more</a> -->
			<a href="{{ route('latest.product') }}" class="btn-one">view more</a>
		</div>
	</div>
</section>

<!-- latest items -->
<section class="section items-section free-items">
	<div class="container">
		<h2 class="heading text-center">free items</h2>
		<h3 class="heading mb-4 text-center">
			There are always free software on Trading Kernel for you to enjoy. forex robots, must
			use scripts, profit lock systems and lots more, get the while you can!
		</h3>

		<div class="items row g-5 mb-4">
			@foreach ($freeProducts as $product)
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="{{ URL::to('product/details/'.$product->product_slug) }}">							
					<div class="items__item">
					<img src="{{ asset($product->thumbnail) }}" alt="" class="items__img" />
					<h5 class="heading name">{{ $product->product_name }}</h5>
					<h5 class="heading title">{{ $product->product_title }}</h5>
					<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">


						@if($product->discount_rate == 0.00)
										<p class="price newprice">${{ $product->product_price }}</p>
										@else
										<p class="price newprice">${{ $product->discount_price }}</p>
										@endif

										@if($product->discount_rate == 0.00)
										@else
										<span class="discount">- @if($product->discount_type == "Flat") $@endif{{ intval($product->discount_rate) }} @if($product->discount_type == "Percent") % @endif</span>
										@endif

										@if($product->discount_rate == 0.00)
										@else
										<span class="price">${{ $product->product_price }}</span>
										@endif
						{{-- <p class="price">$35.00</p>
						<span class="price newprice">$30.00</span> --}}
					</div>

					<div class="items__bottom">
						<p class="text mb-2 text-center">
							{{ Str::limit($product->product_short_desc, 100, '') }}
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<form action="{{ route('add.cart') }}" method="post" class="d-flex w-full justify-content-center align-items-center mx-auto addCard">
								@csrf
								<input type="hidden" name="product_id" value="{{ $product->id }}">
								<input type="hidden" name="product_qty" value="1">
								@if($product->discount_rate == 0.00 )
								<input type="hidden" name="product_price" value="{{ $product->product_price }}">
								@else
								<input type="hidden" name="product_price" value="{{ $product->discount_price }}">
								@endif
								<button class="btn btn-cart" type="submit">Add to cart</button>
							</form>

							<button class="btn btn-wishlist addWishlist" data-id="{{ $product->id }}">
								<i class="bi bi-heart"></i>
							</button>
						</div>
					</div>
				</div>
				</a>
			</div>
			@endforeach
			
		
			
		</div>
		<div class="items__btn">
			<!-- <a href="#" class="btn btn-more">view more</a> -->
			<a href="{{ url('/free-product') }}" class="btn-one">view more</a>
		</div>
	</div>
</section>

<!-- membership section -->
<section class="section membership-section">
	<div class="container">
		<h2 class="heading center mb-1 text-center">Fintech Membership</h2>
		<p class="text mb-4 text-center">
			Enjoy millions of expert advisors, indicators & more with Fintech
		</p>

		<div class="membership row g-5">
			@foreach ($memberships  as $key=> $member)
				
			
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
				<div class="membership__item Reseller">
					<div class="membership__top">
						<img
							src="{{ asset('frontend/img/elite.png')}}"
							class="membership__icon membership__icon-1"
							alt=""
						/>
						<h2 class="heading mb-1">{{ $member->membership_name }}</h2>
						<h3 class="heading d-flex flex-column align-items-center">
							<span class="price">${{ $member->membership_price }}</span>
							<span class="month"> Monthly {{ $member->monthly_charge }}$</span>
						</h3>
					</div>
					<h4>Plan Includes:</h4>
					@if($key == 0)
					<ul class="membership__list">
						<li>
							<i class="bi bi-check-lg"></i>
							@if($member->expires_at == 1)
							<span class="text">Lifetime Membership</span>
							@elseif($member->expires_at == 2)
							<span class="text">6 Months Membership</span>
							@elseif($member->expires_at == 3)
							<span class="text">1 Year Membership</span>
							@elseif($member->expires_at == 4)
							<span class="text">2 Years Membership</span>
							@endif
						</li>
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text"
								>You can resell my all ea with  lifetime free updates for a one-time fee $350
								& monthly $100 payment</span
							>
						</li>
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">25000+ EA Channel</span>
						</li>
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">Source Code Channel</span>
						</li>
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">Can request EA</span>
						</li>
					</ul>
					@elseif($key == 3)
					<ul class="membership__list">
						<li>
							<i class="bi bi-check-lg"></i>
							@if($member->expires_at == 1)
							<span class="text">Lifetime Membership</span>
							@elseif($member->expires_at == 2)
							<span class="text">6 Months Membership</span>
							@elseif($member->expires_at == 3)
							<span class="text">1 Year Membership</span>
							@elseif($member->expires_at == 4)
							<span class="text">2 Years Membership</span>
							@endif
						</li>
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">Everytime you can buy ea  at lower prices</span>
						</li>
					</ul>
					@elseif($key == 1)
					<ul class="membership__list">
						<li>
							<i class="bi bi-check-lg"></i>
							@if($member->expires_at == 1)
							<span class="text">Lifetime Membership</span>
							@elseif($member->expires_at == 2)
							<span class="text">6 Months Membership</span>
							@elseif($member->expires_at == 3)
							<span class="text">1 Year Membership</span>
							@elseif($member->expires_at == 4)
							<span class="text">2 Years Membership</span>
							@endif
						</li>
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">Lifetime package $1000 -$1500</span>
						</li>
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text"
								>You can get free access to all EAs of my channel with  lifetime free updates
								for a one-time fee of $300 & monthly $10 payment</span
							>
						</li>
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">Private Channel+ Discussion Group</span>
						</li>
					</ul>
					@elseif($key == 2)
					<ul class="membership__list">
						<li>
							<i class="bi bi-check-lg"></i>
							@if($member->expires_at == 1)
							<span class="text">Lifetime Membership</span>
							@elseif($member->expires_at == 2)
							<span class="text">6 Months Membership</span>
							@elseif($member->expires_at == 3)
							<span class="text">1 Year Membership</span>
							@elseif($member->expires_at == 4)
							<span class="text">2 Years Membership</span>
							@endif
						</li>
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text"
								>You can get free access to all EAs of my channel with future updates for a
								one-time fee of 200$ payment
							</span>
						</li>
					</ul>
					@endif
					<form action="{{ route('subscription.page') }}" method="get">
						<input type="hidden" name="total_subscription_fee" value="{{ $member->membership_price + $member->monthly_charge }}" >
						<input type="hidden" name="subscription_fee" value="{{ $member->membership_price }}" >
						<input type="hidden" name="monthly_charge" value="{{ $member->monthly_charge }}" >
						<input type="hidden" name="subscribe_id" value="{{ $member->id }}">
						<input type="hidden" name="expired" value="{{ $member->expires_at }}">
						<input type="hidden" name="life_time_charge" value="{{ $member->life_time_charge }}">
						@if($member->life_time_charge > 0)
						<ul class="membership__list">
							<li>
								<input type="hidden" name="is_lifetime" value="0">
								<input type="checkbox" name="is_lifetime" value="1">
								<span class="text"><b> Lifetime : ${{ $member->life_time_charge }}</b></span>
							</li>
						</ul>
						@else
						<input type="hidden" name="is_lifetime" value="0">
						@endif
						<button type="submit" class="btn btn-membershipt">Purchase</button>
					</form>
					
					
				</div>
			</div>
			@endforeach
		
			
		</div>
		<div class="items__btn">
			<!-- <a href="#" class="btn btn-more">view more</a> -->
			<a href="{{ url('membership') }}" class="btn-one">view more</a>
		</div>
	</div>
</section>

<!-- request section -->
<section class="section request-sction">
	<div class="container">
		<h2 class="heading mb-2 text-center">Request for any custom trading software</h2>
		<p class="text mb-4 text-center">
			If you would like to enquire about the availability of any trading software, strategy or
			system, simply let us know!
		</p>

		
		<div class="custom__form">
			<div class="row">
				
				<div class="col-lg-12">
					<h3 class="custom__form-title">Software Request Form</h3>
					<form action="{{ url('request-store') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Name <span>*</span></label>
									<input type="text" name="name" id="name" >
								</div>
							</div>
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Email  <span>*</span></label>
									<input type="email" name="email" id="email">
								</div>
							</div>
						</div>
						<div class="row">
							@foreach ($requestProducts as $requestProduct )
								
						
							<h3 class="custom__form-mark">{{ $requestProduct->name }}? *</h3>
							<div class="col-lg-4">
								<div class="">
									<input type="checkbox" name="value[]"  value="{{ $requestProduct->one }}">
									<label for="a">{{ $requestProduct->one }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->two }}">
									<label for="b">{{ $requestProduct->two }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->three }}">
									<label for="c">{{ $requestProduct->three }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->four }}">
									<label for="d">{{ $requestProduct->four }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->five }}">
									<label for="e">{{ $requestProduct->five }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->six }}">
									<label for="f">{{ $requestProduct->six }}</label>
								</div>
							</div>
							@endforeach
						</div>
					
						<div class="custom__form-field">
							<label for="name">Software Information</label>
							<input type="text" name="software_name" id="software_name" required placeholder="Software Name">
						</div>
						<div class="custom__form-field">
							<label for="name">Upload a zip file describing your EA or Indicator Strategy</label>
							<input type="file" name="imageone" id="name">
						</div>
						<div class="custom__form-field">
							<label for="name">Upload EA or Indicator</label>
							<input type="file" name="imagetwo" id="name">
						</div>
						<div class="custom__form-field">
							<label for="name">Anything Else we need to know?</label>
							<textarea name="details">

							</textarea>
						</div>
						<div class="custom__form-field">
							<label for="name">Broker Information</label>
							<input type="text" name="author_name" id="author_name">
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Broker Name </label>
									<input type="text" name="baker_name" id="baker_name">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Securities to Trade</label>
									<input type="text" name="trading_security" id="trading_security" placeholder="EURUSD, GBPUSD">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Trading Account Type (Create Demo account and upload details)</label>
									<input type="text" name="trading_account" id="trading_account" placeholder="ECN MT4 Demo">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Trading Server</label>
									<input type="text" name="trading_server" id="trading_server" placeholder="Alpari-Trade03">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="custom__form-field">
									<label for="name">Metatrader Login</label>
									<input type="text" name="Account" id="Account" placeholder="3728293737">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-field">
									<label for="name">Metatrader Password</label>
									<input type="text" name="" id="Metatrader" placeholder="bsiwibdbuihu8">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-field">
									<label for="name">Deposit Currency</label>
									<input type="text" name="deposite_amount" id="deposite_amount" placeholder="USD">
								</div>
							</div>
						</div>
						<div class="custom__form-field">
							<button class="custom-btn2" type="submit">submit</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!-- client section -->
<section class="section client-section">
	<div class="container">
		<h2 class="heading mb-4 text-center">What Our Client Say</h2>

		<div class="client d-flex justify-content-between align-items-center gap-3">
			<div class="swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">

					@foreach ($testimonial as $row)
					<div class="swiper-slide">
						<div class="client__item">
							<figure class="client__profile mb-3">
								<img src="{{ asset($row->image) }}" alt="" />
							</figure>
							<h3 class="heading">{{ $row->name }}</h3>
							<p class="text title mb-2">{{ $row->designation }}</p>

							<div class="desc">
								<p class="text mb-4">
									{!!  $row->description!!}
								</p>
							</div>
						</div>
					</div>
					@endforeach
				
					

				</div>

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev">
					<i class="bi bi-chevron-left"></i>
				</div>
				<div class="swiper-button-next">
					<i class="bi bi-chevron-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>

@push('js')

@endpush

@endsection

