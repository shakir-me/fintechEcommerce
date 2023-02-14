@extends('layouts.front')
@section('front_content')

@push('css')
@endpush

@if(Auth::check())
<section class="custom__area">
	<div class="container">
		<div class="row g-0">
			<div class="col-lg-7">
				<div class="custom__area-left">
					<span class="custom__area-subtitle">Get Started</span>
					<h2 class="custom__area-title">Automate your <br> Personal Strategy</h2>
					<p class="custom__area-dis">Contract us to automate your personal strategy, or indicator  for MT4, MT5 and Binance. You can also request for a cracked software</p>
					<div class="row align-items-center">
						<div class="col-md-3">
							<a href="{{ url('/') }}" class="btn-one custom-btn">get started</a>
						</div>
						<div class="col-md-3">
							<a href="{{ url('shop') }}" class="btn-one">go to shop</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="custom__area-right">
					<div class="custom__area-items">
						<div class="custom__area-item">
							<div class="custom__area-thumb">
								<span>1</span>
							</div>
							<div class="custom__area-content">
								<h3>Fill in the request form</h3>
								<p>Complete the simple software request form.</p>
							</div>
						</div>
						<div class="custom__area-item">
							<div class="custom__area-thumb">
								<span>3</span>
							</div>
							<div class="custom__area-content">
								<h3>Wait a Little Bit</h3>
								<p>Development may take some time, depending on the strategy and optimization parameters</p>
							</div>
						</div>
					</div>
					<div class="custom__area-items">
						<div class="custom__area-item">
							<div class="custom__area-thumb">
								<span>2</span>
							</div>
							<div class="custom__area-content">
								<h3>Pay Development Fee</h3>
								<p>Your Development Fee would be 100% refunded, if your strategy is not approved.

								</p>
							</div>
						</div>
						<div class="custom__area-item">
							<div class="custom__area-thumb">
								<span>4</span>
							</div>
							<div class="custom__area-content">
								<h3>Download and Test
								</h3>
								<p>A Meeting Would be scheduled to show you your new strategy, which you can download and share

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="custom__form">
			<div class="row">
				<div class="col-lg-8">
					<h3 class="custom__form-title">Software Request Form</h3>
					<form action="{{ url('request-store') }}" method="post" enctype="multipart/form-data">
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
									<input type="text" name="lname" id="email" >
								</div>
							</div>
						</div>
						
						<div class="row">
							@foreach ($requestProducts as $requestProduct )
							<h3 class="custom__form-mark">Select Platform *</h3>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->one }}">
									<label for="g">{{ $requestProduct->one }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->two }}">
									<label for="h">{{ $requestProduct->two }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->three }}">
									<label for="i">{{ $requestProduct->three }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->four }}">
									<label for="j">{{ $requestProduct->four }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->five }}">
									<label for="k">{{ $requestProduct->five }}</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="custom__form-markcheck">
									<input type="checkbox" name="value[]" value="{{ $requestProduct->six }}">
									<label for="l">{{ $requestProduct->six }}</label>
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
									<input type="text" name="Metatrader" id="Metatrader" placeholder="bsiwibdbuihu8">
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
				<div class="col-lg-4">
					<aside class="custom__sidebar">
						<h3 class="custom__sidebar-title">Available 24/7</h3>
						<p class="custom__sidebar-dis">We are always available 24/7 to respond to queries or issues, please ensure to check our FAQ’s to avoid duplicate questions, if you need immediate help you can click the chat button at the bottom right to initiate live support with our support team.</p>
						<p class="custom__sidebar-dis">Queries will be responded to based on first come, first serve and the moment you send us a contact request you will be added to the que and an support ticket will be automatically open for you.</p>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
@else
  <h3 align:center>Register first</h3>
@endif

<!-- footer -->

@push('js')
@endpush

@endsection