@extends('layouts.front')

@section('front_content')

@push('css')
@endpush

<!-- Free items -->
<section class="section items-section free-items mt-3">
	<div class="container">
		<h2 class="heading text-center">@if($product_type == 'latest')Latest items @else Free items @endif</h2>
		<h3 class="heading mb-4 text-center">
			There are always free software on Trading Kernel for you to enjoy. forex robots, must
			use scripts, profit lock systems and lots more, get the while you can!
		</h3>

		<div class="items row g-5 mb-5">
			@foreach($freeProducts as $freeProduct)
			<div class="col-12 col-sm-6 col-lg-3">
					<div class="items__item">
						<a href="{{ URL::to('product/details/'.$freeProduct->product_slug) }}">
						<img src="{{ asset($freeProduct->thumbnail) }}" alt="" class="items__img" />
						<h5 class="heading name">{{ $freeProduct->product_name }}</h5>
						<h5 class="heading title">{{ $freeProduct->product_title }}</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							@if($freeProduct->discount_rate == 0.00)
							<p class="price newprice">${{ $freeProduct->product_price }}</p>
							@else
							<p class="price newprice">${{ $freeProduct->discount_price }}</p>
							@endif

							@if($freeProduct->discount_rate == 0.00)
							@else
							<span class="discount">- @if($freeProduct->discount_type == "Flat") $@endif{{ intval($freeProduct->discount_rate) }} @if($freeProduct->discount_type == "Percent") % @endif</span>
							@endif

							@if($freeProduct->discount_rate == 0.00)
							@else
							<span class="price">${{ $freeProduct->product_price }}</span>
							@endif
						</div>

						<div class="items__bottom">
							<p class="text mb-2 text-center">
								{{ $freeProduct->product_short_desc }}
							</p>
						</a>
							<div class="d-flex justify-content-between align-items-center">
								<button class="btn btn-search">
									<i class="bi bi-search"></i>
								</button>
								<form action="{{ route('add.cart') }}" method="post" class="addCard">
									@csrf
									<input type="hidden" name="product_id" value="{{ $freeProduct->id }}">
									<input type="hidden" name="product_qty" value="1">
									@if($freeProduct->discount_rate == 0.00 )
									<input type="hidden" name="product_price" value="{{ $freeProduct->product_price }}">
									@else
									<input type="hidden" name="product_price" value="{{ $freeProduct->discount_price }}">
									@endif
									<button class="btn btn-cart" type="submit">Add to cart</button>
								</form>
								<button class="btn btn-wishlist addWishlist" data-id="{{ $freeProduct->id }}">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
			</div>
			@endforeach
		</div>
	</div>
	<br>
</section>
<!-- footer -->


@endsection