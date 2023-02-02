<nav class="nav">
	<div class="main-nav">
		<div class="container">
			<div class="nav__wrapper d-flex justify-content-between align-items-center gap-4">
				<div class="nav__logo d-flex align-items-center gap-3">
					<a href="{{ url('/') }}"><img src="{{ asset('frontend/') }}/img/LOGO.png" alt="logo" /></a>
				</div>
				<div class="nav__right d-flex align-items-center">
					<div class="d-flex align-items-center gap-5">
						<a href="#" class="nav__icon wishlist">
							<i class="bi bi-heart"></i>
							<span class="cart__number wishlist-count">{{ Helper::countWishlist() }}</span>
							@if(Auth::check())
							<div class="hovercart hovercart-wishlist">
								<div class="wish_list_popup">
									{{ Helper::wishlistPopup() }}
								</div>
							</div>
							@endif
						</a>
						<a href="#" class="nav__icon cart">
							<i class="bi bi-basket2"></i>
							<span class="cart__number cart-count">{{ \Cart::count(); }}</span>
							<div class="hovercart">
								<div class="cart_list_popup">
									
								</div>
							</div>
						</a>
						<button class="btn btn-dark">
							<svg class="icon icon-dark">
								<use xlink:href="{{ asset('frontend/') }}/img/icons.svg#icon-dark"></use>
							</svg>
						</button>
						<button class="btn btn-light">
							<svg class="icon icon-dark">
								<use xlink:href="{{ asset('frontend/') }}/img/icons.svg#icon-light"></use>
							</svg>
						</button>
						@if(Auth::check())
						<a class="link logout" href="{{ route('user.home') }}">{{ Auth::user()->name }}</a>
						<button class="dashboard__header-balance">${{ Auth::user()->balance }}</button>
						{{-- <a class="link logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> --}}
						@else
						<a href="#" class="link login">login</a>
						<a href="#" class="link login register">register</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		 $.ajax({
		   type: "GET",
		   url: "user/cart/show",
		   success: function (data) {
		      $('.cart_list_popup').html(data)	
		   },
		});
	})
</script>
<script>
	$(document).ready(function wishlist($)  {
	    $.ajax({
	      type: "GET",
	      url: "count/wishlist",
	      dataType: 'json',
	      success: function (data) {
	          $('.wishlist-count').text(data)
	      },
	   	});
	});
</script>

<script>
	$(document).ready(function show(){
		 $.ajax({
		   type: "GET",
		   url: "show/wishlist",
		   success: function (data) {
		      $('.wish_list_popup').html(data)	
		   },
		});
	})
</script> --}}
