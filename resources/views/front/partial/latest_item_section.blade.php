<!-- latest items -->
<section class="section items-section">
	<div class="container">
		<h2 class="heading text-center">Latest Added</h2>
		<p class="text mb-4 text-center">Latest uploaded Ea's or indicators</p>

		<div class="items row g-4 mb-4">
			@foreach($latestProducts as $key=> $latest)
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="items__item">
					<a href="{{ URL::to('product/details/'.$latest->product_slug) }}">
						<img src="{{ asset($latest->thumbnail) }}" alt="" class="items__img" />
						<h5 class="heading name">{{ $latest->product_name }}</h5>
						<h5 class="heading title">{{ $latest->product_title }}</h5>
						<div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">
							@if($latest->discount_rate == 0.00)
							<p class="price">${{ $latest->product_price }}</p>
							@else
							<p class="price">${{ $latest->discount_price }}</p>
							@endif

							@if($latest->discount_rate == 0.00)
							@else
							<span class="discount">- @if($latest->discount_type == "Flat") $@endif{{ intval($latest->discount_rate) }} @if($latest->discount_type == "Percent") % @endif</span>
							@endif

							@if($latest->discount_rate == 0.00)
							@else
							<span class="old-price">${{ $latest->product_price }}</span>
							@endif
						</div>
					</a>
					<div class="items__bottom">
						<p class="text mb-2 text-center">
							{{ $latest->product_short_desc }}
						</p>					    
						<div class="d-flex justify-content-between align-items-center">
							<button class="btn btn-search">
								<i class="bi bi-search"></i>
							</button>
							<form action="{{ route('add.cart') }}" method="post" class="addCard">
								@csrf
							<input type="hidden" name="product_id" value="{{ $latest->id }}">
							<input type="hidden" name="product_qty" value="1">
							@if($latest->discount_rate == 0.00 )
							<input type="hidden" name="product_price" value="{{ $latest->product_price }}">
							@else
							<input type="hidden" name="product_price" value="{{ $latest->discount_price }}">
							@endif
							<button class="btn btn-cart" type="submit">Add to cart</button>
							</form>
							<button class="btn btn-wishlist addWishlist" data-id="{{ $latest->id }}">
								<i class="bi bi-heart"></i>
							</button>
						</div>
							
					</div>
				</div>
			</div>
			@endforeach
		</div>

		<div class="items__btn">
			<!-- <a href="#" class="btn btn-more">view more</a> -->
			<a href="{{ route('latest.product') }}" class="btn-one">view more</a>
		</div>
	</div>
</section>

