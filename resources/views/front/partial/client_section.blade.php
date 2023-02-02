<!-- client section -->
<section class="section client-section">
	<div class="container">
		<h2 class="heading mb-4 text-center">What Our Client Say</h2>

		<div class="client d-flex justify-content-between align-items-center gap-3">
			<div class="swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					@foreach($testimonial as $testi)
					<div class="swiper-slide">
						<div class="client__item">
							<figure class="client__profile mb-3">
								<img src="{{ asset($testi->image) }}" alt="" />
							</figure>
							<h3 class="heading">{{ $testi->name }}</h3>
							<p class="text title mb-2">{{ $testi->designation }}</p>

							<div class="desc">
								<span class="symbol"><i>"</i></span>
								<p class="text mb-4">
									{{ $testi->description }}
								</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev">
					<i class="bi bi-chevron-left"></i>
				</div>
				<div class="swiper-button-next">
					<i class="bi bi-chevron-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>