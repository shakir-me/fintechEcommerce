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
					<form action="#" class="header__search d-flex align-items-center">
						<label for="search">
							<i class="bi bi-search"></i>
						</label>
						<input type="text" id="search" class="w-100" placeholder="Search here..." />
						<select name="" id="">
							<option value="All products">All products</option>
							<option value="All products">All products</option>
							<option value="All products">All products</option>
							<option value="All products">All products</option>
						</select>
					</form>
				</div>
			</div>
			<div class="col-12 col-lg-4">

						  <div class="hello text-center">
							<a href="javascript:void(0)" class="register">
								<div class="loader">
					
								</div>
								<div class="text">
									<p class="hero-dis">Personal Fintech Account</p>
								</div>
							</a>
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
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="items__item">
					<a href="single.html">
						<img src="{{ asset('frontend/img/items-img-1.png')}}" alt="" class="items__img" />
					</a>
					<h5 class="heading name">Microsoft Office</h5>
					<h5 class="heading title"><a href="single.html">Operating Systems & Mac Software</a></h5>
					<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
						<p class="price">$35.00</p>
						<span class="price newprice">$30.00</span>
					</div>

					<div class="items__bottom">
						<p class="text mb-2 text-center">
							Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
							eget ut fringilla.
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<a href="#" class="btn btn-cart">Add to cart</a>
							{{-- <a href="#" class="btn btn-wishlist">
								<i class="bi bi-heart"></i>
							</a> --}}
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">
					<div class="items__item">
						<img src="{{ asset('frontend/img/items-img-2.png')}}" alt="" class="items__img" />
						<h5 class="heading name">Microsoft Office</h5>
						<h5 class="heading title">Operating Systems & Mac Software</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							<p class="price">$35.00</p>
							<span class="price newprice">$30.00</span>
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
								eget ut fringilla.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-cart">Add to cart</button>
								<button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">
					<div class="items__item">
						<img src="{{ asset('frontend//img/items-img-3.png')}}" alt="" class="items__img" />
						<h5 class="heading name">Microsoft Office</h5>
						<h5 class="heading title">Operating Systems & Mac Software</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							<p class="price">$35.00</p>
							<span class="price newprice">$30.00</span>
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
								eget ut fringilla.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-cart">Add to cart</button>
								<button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">
					<div class="items__item">
						<img src="{{ asset('frontend//img/items-img-4.png')}}" alt="" class="items__img" />
						<h5 class="heading name">Microsoft Office</h5>
						<h5 class="heading title">Operating Systems & Mac Software</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							<p class="price">$35.00</p>
							<span class="price newprice">$30.00</span>
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
								eget ut fringilla.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-cart">Add to cart</button>
								<button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">
					<div class="items__item">
						<img src="{{ asset('frontend/img/items-img-1.png')}}" alt="" class="items__img" />
						<h5 class="heading name">Microsoft Office</h5>
						<h5 class="heading title">Operating Systems & Mac Software</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							<p class="price">$35.00</p>
							<span class="price newprice">$30.00</span>
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
								eget ut fringilla.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-cart">Add to cart</button>
								<button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">
					<div class="items__item">
						<img src="{{ asset('frontend/img/items-img-2.png')}}" alt="" class="items__img" />
						<h5 class="heading name">Microsoft Office</h5>
						<h5 class="heading title">Operating Systems & Mac Software</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							<p class="price">$35.00</p>
							<span class="price newprice">$30.00</span>
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
								eget ut fringilla.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-cart">Add to cart</button>
								<button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">
					<div class="items__item">
						<img src="{{ asset('frontend/img/items-img-3.png')}}" alt="" class="items__img" />
						<h5 class="heading name">Microsoft Office</h5>
						<h5 class="heading title">Operating Systems & Mac Software</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							<p class="price">$35.00</p>
							<span class="price newprice">$30.00</span>
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
								eget ut fringilla.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-cart">Add to cart</button>
								<button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">
					<div class="items__item">
						<img src="{{ asset('frontend/img/items-img-4.png')}}" alt="" class="items__img" />
						<h5 class="heading name">Microsoft Office</h5>
						<h5 class="heading title">Operating Systems & Mac Software</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							<p class="price">$35.00</p>
							<span class="price newprice">$30.00</span>
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
								eget ut fringilla.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-cart">Add to cart</button>
								<button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="items__btn">
			<!-- <a href="#" class="btn btn-more">view more</a> -->
			<a href="shop.html" class="btn-one">view more</a>
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
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">							<div class="items__item">
					<img src="{{ asset('frontend/img/items-img-1.png')}}" alt="" class="items__img" />
					<h5 class="heading name">Microsoft Office</h5>
					<h5 class="heading title">Operating Systems & Mac Software</h5>
					<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
						<p class="price">$35.00</p>
						<span class="price newprice">$30.00</span>
					</div>

					<div class="items__bottom">
						<p class="text mb-2 text-center">
							Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
							eget ut fringilla.
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<button class="btn btn-cart">Add to cart</button>
							<button class="btn btn-wishlist">
								<i class="bi bi-heart"></i>
							</button>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">
					<div class="items__item">
						<img src="{{ asset('frontend/img/items-img-2.png')}}" alt="" class="items__img" />
						<h5 class="heading name">Microsoft Office</h5>
						<h5 class="heading title">Operating Systems & Mac Software</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							<p class="price">$35.00</p>
							<span class="price newprice">$30.00</span>
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
								eget ut fringilla.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-cart">Add to cart</button>
								<button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
			<a href="single.html">
				<div class="items__item">
					<img src="{{ asset('frontend/img/items-img-3.png')}}" alt="" class="items__img" />
					<h5 class="heading name">Microsoft Office</h5>
					<h5 class="heading title">Operating Systems & Mac Software</h5>
					<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
						<p class="price">$35.00</p>
						<span class="price newprice">$30.00</span>
					</div>

					<div class="items__bottom">
						<p class="text mb-2 text-center">
							Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
							eget ut fringilla.
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<button class="btn btn-cart">Add to cart</button>
							<button class="btn btn-wishlist">
								<i class="bi bi-heart"></i>
							</button>
						</div>
					</div>
				</div>
			</a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<a href="single.html">
					<div class="items__item">
						<img src="{{ asset('frontend/img/items-img-1.png')}}" alt="" class="items__img" />
						<h5 class="heading name">Microsoft Office</h5>
						<h5 class="heading title">Operating Systems & Mac Software</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							<p class="price">$35.00</p>
							<span class="price newprice">$30.00</span>
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								Lorem ipsum dolor sit amet consectetur. Sollicitudin maecenas vehicula neque
								eget ut fringilla.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-cart">Add to cart</button>
								<button class="btn btn-wishlist">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="items__btn">
			<!-- <a href="#" class="btn btn-more">view more</a> -->
			<a href="product.html" class="btn-one">view more</a>
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
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
				<div class="membership__item Reseller">
					<div class="membership__top">
						<img
							src="{{ asset('frontend/img/elite.png')}}"
							class="membership__icon membership__icon-1"
							alt=""
						/>
						<h2 class="heading mb-1">basic Membership</h2>
						<h3 class="heading d-flex flex-column align-items-center">
							<span class="price">$300</span>
							<span class="month"> Monthly 10$</span>
						</h3>
					</div>
					<h4>Plan Includes:</h4>
					<ul class="membership__list">
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">1 Year $100 - $120</span>
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

					<button class="btn btn-membershipt">Purchase</button>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
				<div class="membership__item Reseller">
					<div class="membership__top">
						<img
							src="{{ asset('frontend/img/elite.png')}}"
							class="membership__icon membership__icon-1"
							alt=""
						/>
						<img
							src="{{ asset('frontend/img/membership-icon-hove.png')}}"
							class="membership__icon membership__icon-2"
							alt=""
						/>
						<h2 class="heading mb-1">vip Membership</h2>
						<h3 class="heading d-flex flex-column align-items-center">
							<span class="price">$300</span>
							<span class="month"> Monthly 10$</span>
						</h3>
					</div>
					<h4>Plan Includes:</h4>
					<ul class="membership__list">
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">1 Year $100 - $120</span>
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

					<button class="btn btn-membershipt">Purchase</button>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
				<div class="membership__item Reseller">
					<div class="membership__top">
						<img
							src="{{ asset('frontend/img/elite.png')}}"
							class="membership__icon membership__icon-1"
							alt=""
						/>
						<img
							src="{{ asset('frontend/img/membership-icon-hove.png')}}"
							class="membership__icon membership__icon-2"
							alt=""
						/>
						<h2 class="heading mb-1">Elite Membership</h2>
						<h3 class="heading d-flex flex-column align-items-center">
							<span class="price">$300</span>
							<span class="month"> Monthly 10$</span>
						</h3>
					</div>
					<h4>Plan Includes:</h4>
					<ul class="membership__list">
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">1 Year $100 - $120</span>
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

					<button class="btn btn-membershipt">Purchase</button>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
				<div class="membership__item Reseller">
					<div class="membership__top">
						<img
							src="{{ asset('frontend/img/elite.png')}}"
							class="membership__icon membership__icon-1"
							alt=""
						/>
						<img
							src="{{ asset('frontend/img/membership-icon-hove.png')}}"
							class="membership__icon membership__icon-2"
							alt=""
						/>
						<h2 class="heading mb-1">premium</h2>
						<h3 class="heading d-flex flex-column align-items-center">
							<span class="price">$300</span>
							<span class="month"> Monthly 10$</span>
						</h3>
					</div>
					<h4>Plan Includes:</h4>
					<ul class="membership__list">
						<li>
							<i class="bi bi-check-lg"></i>
							<span class="text">1 Year $100 - $120</span>
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

					<button class="btn btn-membershipt">Purchase</button>
				</div>
			</div>
		</div>
		<div class="items__btn">
			<!-- <a href="#" class="btn btn-more">view more</a> -->
			<a href="plan.html" class="btn-one">view more</a>
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
					<form action="#">
						<div class="row">
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Name <span>*</span></label>
									<input type="text" name="fname" id="name">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Email  <span>*</span></label>
									<input type="text" name="lname" id="lname">
								</div>
							</div>
						</div>
						<div class="row">
							<h3 class="custom__form-mark">What would you like to do? *</h3>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="a">
									<label for="a">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="b">
									<label for="b">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="c">
									<label for="c">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="d">
									<label for="d">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="e">
									<label for="e">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="f">
									<label for="f">Build Indicator</label>
								</div>
							</div>
						</div>
						<div class="row">
							<h3 class="custom__form-mark">Select Platform *</h3>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="g">
									<label for="g">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="h">
									<label for="h">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="i">
									<label for="i">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="j">
									<label for="j">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="k">
									<label for="k">Build Indicator</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="a" id="l">
									<label for="l">Build Indicator</label>
								</div>
							</div>
						</div>
						<div class="custom__form-field">
							<label for="name">Software Information</label>
							<input type="text" name="fname" id="name">
						</div>
						<div class="custom__form-field">
							<label for="name">Upload a zip file describing your EA or Indicator Strategy</label>
							<input type="text" name="fname" id="name">
						</div>
						<div class="custom__form-field">
							<label for="name">Upload EA or Indicator</label>
							<input type="text" name="fname" id="name">
						</div>
						<div class="custom__form-field">
							<label for="name">Anything Else we need to know?</label>
							<textarea>

							</textarea>
						</div>
						<div class="custom__form-field">
							<label for="name">Broker Information</label>
							<input type="text" name="broker" id="broker">
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Broker Name </label>
									<input type="text" name="banme" id="banme">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Securities to Trade</label>
									<input type="text" name="Trade" id="Trade" placeholder="EURUSD, GBPUSD">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Trading Account Type (Create Demo account and upload details)</label>
									<input type="text" name="Account" id="Account" placeholder="ECN MT4 Demo">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="custom__form-field">
									<label for="name">Trading Server</label>
									<input type="text" name="Trade" id="Trade" placeholder="Alpari-Trade03">
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
									<input type="text" name="Metatrader" id="Metatrader" placeholder="bsiwibdbuihu8">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-field">
									<label for="name">Deposit Currency</label>
									<input type="text" name="Deposit" id="Deposit" placeholder="USD">
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
					<div class="swiper-slide">
						<div class="client__item">
							<figure class="client__profile mb-3">
								<img src="img/client-img-1.png" alt="" />
							</figure>
							<h3 class="heading">H. Rackham</h3>
							<p class="text title mb-2">Director Open X</p>

							<div class="desc">
								<p class="text mb-4">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									Lorem Ipsum has been the industry's standard dummy text ever since the
									1500s, when an unknown printer took a galley of type and scrambled it to
									make a type specimen book. It has survived not only five centuries, but also
									the leap into electronic typesetting, remaining essentially unchanged.
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="client__item">
							<figure class="client__profile mb-3">
								<img src="img/client-img-1.png" alt="" />
							</figure>
							<h3 class="heading">H. Rackham</h3>
							<p class="text title mb-2">Director Open X</p>

							<div class="desc">
								<p class="text mb-4">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									Lorem Ipsum has been the industry's standard dummy text ever since the
									1500s, when an unknown printer took a galley of type and scrambled it to
									make a type specimen book. It has survived not only five centuries, but also
									the leap into electronic typesetting, remaining essentially unchanged.
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="client__item">
							<figure class="client__profile mb-3">
								<img src="img/client-img-1.png" alt="" />
							</figure>
							<h3 class="heading">H. Rackham</h3>
							<p class="text title mb-2">Director Open X</p>

							<div class="desc">
								<p class="text mb-4">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									Lorem Ipsum has been the industry's standard dummy text ever since the
									1500s, when an unknown printer took a galley of type and scrambled it to
									make a type specimen book. It has survived not only five centuries, but also
									the leap into electronic typesetting, remaining essentially unchanged.
								</p>
							</div>
						</div>
					</div>
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

