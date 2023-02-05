{{-- @php
	$category = App\Models\Admin\Category::take(5)->with('sub_category')->get();
	$category_more = App\Models\Admin\Category::skip(5)->take(10)->get();
@endphp
<nav class="nav">
	<div class="nav__links header-sticky">
		<div class="container">
			<ul class="nav__list d-flex justify-content-center align-items-center gap-5">
				@foreach($category as $cat)
				<li class="nav__item">
					<a href="{{ URL::to('get/'.$cat->category_slug.'/product/') }}" class="nav__link"> {{ $cat->category_name }} @if($cat->sub_category->count() > 0)<i class="bi bi-chevron-down"></i>@endif</a>
					@if($cat->sub_category->count() > 0)
					<ul class="nav__dropdown">
						@foreach($cat->sub_category as $sub_cat)
						<li><a href="{{ URL::to('get/'.$cat->category_slug.'/'.$sub_cat->subcategory_slug . '/product/') }}">{{ $sub_cat->subcategory_name }}</a></li>
						@endforeach
					</ul>
					@endif
				</li>
				@endforeach

				@if($category_more->count() > 0)
				<li class="nav__item">
					<a href="#" class="nav__link"> More <i class="bi bi-chevron-down"></i></a>
					<ul class="nav__dropdown">
						@foreach($category_more as $cat_more)
						<li><a href="{{ URL::to('get/'.$cat_more->category_slug.'/product/') }}">{{ $cat_more->category_name }}</a></li>
						@endforeach
					</ul>
				</li>
				@endif

				<li class="nav__item">
					<a href="{{ route('membership') }}" class="nav__link">Membership</a>
				</li>
				<li class="nav__item">
					<a href="{{ route('free.product') }}" class="nav__link">Free product</a>
				</li>
				<li class="nav__item">
					<a href="{{ route('shop') }}" class="nav__link">Shop</a>
				</li>
				<li class="nav__item">
					<a href="{{ route('customer.request') }}" class="nav__link">Custom Request</a>
				</li>
			</ul>
		</div>
	</div>
</nav> --}}