<!-- request section -->
<section class="section request-sction">
	<div class="container">
		<h2 class="heading mb-2 text-center">Request for any custom trading software</h2>
		<p class="text mb-4 text-center">
			If you would like to enquire about the availability of any trading software, strategy or
			system, simply let us know!
		</p>

		<div class="request">
			<form action="{{ route('store.request.product') }}" class="request__form" method="post">
				@csrf
				<div class="request__form-item d-flex align-items-center gap-5">
					<input type="text" name="name" placeholder="Your Name" class="name" value="{{ Auth::check() ? Auth::user()->name : '' }}" />
					<input type="text" name="email" placeholder="Your e-mail" value="{{ Auth::check() ? Auth::user()->email : '' }}" class="email" />
				</div>
				<div class="request__form-item d-flex align-items-center gap-5">
					<input
						type="text"
						name="software_name"
						placeholder="software name"
						required
						class="software-name"
					/>
					<input
						type="text"
						name="trading_security"
						placeholder="treding security"
						class="treding-security"
					/>
				</div>
				<div class="request__form-item d-flex align-items-center justify-content-center gap-2">
					<textarea
						name="details"
						id=""
						cols="30"
						rows="10"
						placeholder="Request Details"
						required
					></textarea>
				</div>
				<div class="request-btn text-center">
					<button type="submit" class="btn-one">submit request</button>
				</div>
			</form>
		</div>
	</div>
</section>