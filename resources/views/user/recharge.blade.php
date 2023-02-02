@extends('layouts.front')

@section('front_content')
@push('css')

@endpush
<div class="container"> 
	@include('alert.alert')
</div>
<!-- contact form  -->
<div class="contact__form">
	<div class="container">
		<div class="contact__form-wrapper contact__form-checkout">
			<span class="contact__form-title">Recharge</span>
			<p class="contact__form-dis">Please enter amount to confirm recharge. Recharge amount will deduct your payment account !</p>
			<div class="contact__form-innerr">
				<div class="contact__form-left">
					<h4 class="checktitle">Please Choos Your Payment System </h4>
					<form action="{{ route('recharge') }}" method="post">
						@csrf
						<div class="row">
							<div class="col-lg-12">
								<div class="contact__form-field field-2">
									<label>Amount</label>
									<input type="number" name="amount" min="5" placeholder="Enter Amount">
								</div>
							</div>
						</div>
						<div class="contact__form-field-2">
							<span class="checkout-title">payment method</span>
							<div class="field-two-images">
								<span class="payment-select" data-id="2" style=" cursor: pointer; "><img src="{{ asset('frontend/') }}/img/paypal1.png" alt=""></span>
								<span class="payment-select" data-id="3" style=" cursor: pointer; "><img src="{{ asset('frontend/') }}/img/stripe.png" width="40" alt=""></span>
								<span class="payment-select" data-id="4" style=" cursor: pointer; "><img src="{{ asset('frontend/') }}/img/bitcoin1.png" alt=""></span>
								<input type="hidden" class="payment-method" name="payment_method">
							</div>
							<button class="contact__form-checkbtn" type="submit">Recharge</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@push('js')
<script>
	$(".payment-select").click(function(){
		var id = $(this).data('id');
		$(this).addClass('bg-info');
		$('.payment-select').not(this).removeClass('bg-info'); 
		$(".payment-method").val(id);
	});
</script>
<script>
    document.addEventListener('contextmenu', function(e) {
      e.preventDefault();
    });
</script>
@endpush
@endsection