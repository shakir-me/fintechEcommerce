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
			<span class="contact__form-title">checkout</span>
			<p class="contact__form-dis">Please confirm your details below to complete your purchase</p>
			<div class="contact__form-innerr">
				<div class="contact__form-left">
					<h4 class="checktitle">Please Choos Your Payment System <span style="float:right; font-weight: bolder;"> Order ID: # {{ date('ymdhis') }}</span></h4>
					<form action="{{ route('checkout') }}" method="post">
						@csrf
						<div class="row">
							<div class="col-lg-12">
								<div class="contact__form-field field-2">
									<label>Amount</label>
									<input type="number" name="price" readonly value="{{ number_format($data['price'] , 2) }}">
									<input type="hidden" name="qty" readonly value="{{ $data['qty'] }}">
									<input type="hidden" name="order_no" readonly value="{{ date('ymdhis') }}">
									@foreach($data['url'] as $key=> $product)
									<input type="hidden" name="product_url[]" value="{{ $product }}">
									<input type="hidden" name="product_name[]" value="{{ $data['product_name'][$key] }}">
									<input type="hidden" name="product_qty[]" value="{{ $data['product_qty'][$key] }}">
									<input type="hidden" name="unit_price[]" value="{{ $data['unit_price'][$key] }}">
									@endforeach
								</div>
							</div>
						</div>
						<div class="contact__form-field-2">
							<span class="checkout-title">payment method</span>
							<div class="field-two-images">
								<span class="payment-select" data-id="1" style=" cursor: pointer; "><img src="{{ asset('frontend/') }}/img/bank.png" width="40" alt=""></span>
								<span class="payment-select" data-id="2" style=" cursor: pointer; "><img src="{{ asset('frontend/') }}/img/paypal1.png" alt=""></span>
								<span class="payment-select" data-id="3" style=" cursor: pointer; "><img src="{{ asset('frontend/') }}/img/stripe.png" width="80" alt=""></span>
								<span class="payment-select" data-id="4" style=" cursor: pointer; "><img src="{{ asset('frontend/') }}/img/bitcoin1.png" alt=""></span>
								<input type="hidden" class="payment-method" name="payment_method">
							</div>
							<button class="contact__form-checkbtn" type="submit">Order Place</button>
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