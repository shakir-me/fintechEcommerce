@extends('layouts.front')
@section('front_content')
@push('css')

@endpush
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- breadcrumb  -->
	<div class="bredcrumb">
		<h2 class="bredcrumb__title">shopping cart</h2>
		<ul class="bredcrumb__items">
			<li>Home <i class="bi bi-chevron-right"></i></li>
			<li>shopping cart</li>
		</ul>
	</div>

	<div class="container">
		@include('alert.alert')
	</div>
	<!-- cart page  -->

	<div class="cart__area">
		<div class="container">
			<div class="cart__area-wrapper">
				<div class="cart__area-left">
					<form action="{{ route('update.cart') }}" method="POST">
						@csrf
						<div class="cart__area-inner">
							<div class="dashboard__title-info">
								<span>Product</span>
								<span>Price</span>
								<span>quantity</span>
								<span>Subtotal</span>
							</div>
							@foreach($data as $key=> $row)
							<div class="dashboard__profile-wrapper">
								<div class="dashboard__profile-itemm product-order">
									<div>
										{{-- <form id="delete_form" action="{{ route('delete.cart',$row->rowId) }}" style="display: inline-block;" method="POST">
										    @csrf
										    @method('DELETE')
										    <button id="delete" type="submit"><img class="order-close-icon" src="{{ asset('frontend/') }}/img/close.png" alt=""></button>
										</form> --}}
										<a href="{{ route('delete.cart',$row->rowId) }}"><img class="order-close-icon" src="{{ asset('frontend/') }}/img/close.png" alt=""></a>
										<img src="{{ asset($row->options->image) }}" width="40" alt="">
									</div>
									<div>
										<span>{{ $row->name }}</span>
										<h5>{{ $row->options->title }}</h5>
									</div>
								</div>
								<div class="dashboard__profile-itemm">
									<h4> <span>$</span> {{ $row->price }}</h4>
								</div>
								<div class="dashboard__profile-itemm">
									<div class="increment">
										<span class="dash_{{ $key }}">-</span>
										<span class="qty_{{ $key }}">{{ $row->qty }}</span>
										<span class="plus_{{ $key }}">+</span>
									</div>
									<script>
										$(".plus_{{ $key }}").on('click',function(){
											var qty = $(".qty_{{ $key }}").text();
											var qty_plus = ++qty;
											$(".qty_{{ $key }}").text(qty_plus);
											$(".product_qty_{{ $key }}").val(qty_plus);
										})

										$(".dash_{{ $key }}").on('click',function(){
											var qty = $(".qty_{{ $key }}").text();
											var qty_substr = qty-1;
											$(".qty_{{ $key }}").text(qty_substr);
											$(".product_qty_{{ $key }}").val(qty_substr);
										})
									</script>
									<input type="hidden" name="rowId[]" value="{{ $row->rowId }}">
									<input min="1" max="100" name="qty[]" class="product_qty_{{ $key }}"  type="hidden" value="{{ $row->qty }}">
								</div>
								<div class="dashboard__profile-itemm">
									<h4>Total<span>$</span> {{ $row->price * $row->qty }}</h4>
								</div>
							</div>
							@endforeach
							<div>
								<button class="cart__area-coupon" type="submit">update cart</button>
							</div>
							</form>
							<div class="cart__area-footer">
								@if(Auth::check())
								<form action="{{ route('apply.coupon') }}" method="post">
									@csrf
									<input type="text" name="coupon" required placeholder="Have any coupon? Enter the coupon code">
									<button class="cart__area-coupon" type="submit">apply coupon</button>
								</form>
								@endif
								
							</div>
							
						</div>
					
				</div>
				<div class="cart__area-right">
					<div class="cart__area-innerright">
						<h4>cart total</h4>
					<div>
						<span>subtotal</span>
						<span>${{ Cart::subtotal() }}</span>
					</div>
					@if(Session::has('coupon'))
					<div>
						<span>Discount</span>
						@if(session('coupon_type') == 1)
						<span>( $ {{ session('coupon')['coupon_rate'] }} )</span>
						@else
						<span>( {{ session('coupon')['coupon_rate'] }} % )</span>
						@endif
						<span> - ${{ Session::get('coupon')['discount'] }}</span>
					</div>
					@endif
					<div>
						<span>total</span>
						@if(Session::has('coupon'))
						<span>${{ Session::get('coupon')['balance'] }}</span>
						@else
						<span>${{ Cart::subtotal() }}</span>
						@endif
					</div>
					<form action="{{ route('checkout.page') }}" method="get">
						@csrf
						@if(Session::has('coupon'))
							<input type="hidden" name="price" value="{{ Session::get('coupon')['balance'] }}">
							<input type="hidden" name="qty" value="{{ Cart::count() }}">

							@foreach($data as $url=>$row)
							<input type="hidden" name="url[]" value="{{ $row->options->url }}">
							<input type="hidden" name="product_name[]" value="{{ $row->name }}">
							<input type="hidden" name="product_qty[]" value="{{ $row->qty }}">
							<input type="hidden" name="unit_price[]" value="{{ $row->price }}">
							@endforeach

							@else
							<input type="hidden" name="price" value="{{ Cart::subtotal() }}">
							<input type="hidden" name="qty" value="{{ Cart::count() }}">

							@foreach($data as $url=>$row)
							<input type="hidden" name="url[]" value="{{ $row->options->url }}">
							<input type="hidden" name="product_name[]" value="{{ $row->name }}">
							<input type="hidden" name="product_qty[]" value="{{ $row->qty }}">
							<input type="hidden" name="unit_price[]" value="{{ $row->price }}">
							@endforeach
						
						@endif
						<button class="cart__area-coupon w-100 m-0" type="submit">product to checkout</button>
					</form>
					
					</div>
				</div>
			</div>
		</div>
	</div>

@push('js')

@endpush
@endsection