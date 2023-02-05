@extends('layouts.front')

@section('front_content')
@push('css')

@endpush



<div class="bredcrumb">
	<h2 class="bredcrumb__title">subscription plan</h2>
	<ul class="bredcrumb__items">
		<li>Home <i class="bi bi-chevron-right"></i></li>
		<li>subscription plan</li>
	</ul>
</div>


<!-- pricing area  -->
<section class="section membership-section membership-section-bottom">
	<div class="container">
		<h2 class="heading center mb-1 text-center">Fintech Membership</h2>
		<p class="text mb-4 text-center">
			Enjoy millions of expert advisors, indicators & more with Fintech
		</p>

		<div class="membership membership-plan row g-5">
			@foreach($memberships as $key=> $member)
				
		
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
				<div class="membership__item Reseller">
					<div class="membership__top">
						<img
							src="{{ asset('frontend/') }}/img/elite.png"
							class="membership__icon membership__icon-1"
							alt=""
						/>
						{{-- <img
							src="{{ asset('frontend/') }}/img/membership-icon-hove.png"
							class="membership__icon membership__icon-2"
							alt=""
						/> --}}
						<h2 class="heading mb-1">{{ $member->membership_name }}</h2>
						<h3 class="heading d-flex flex-column align-items-center">
							{{-- <span class="price">Subscription</span> --}}
							<span class="price">$ {{ $member->membership_price }}</span>
							<span class="month">Per Month</span>
							<span class="month">$ {{ $member->monthly_charge }}</span>
						</h3>
					</div>
					
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
	</div>
</section>


@push('js')

@endpush
@endsection