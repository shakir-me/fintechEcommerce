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

	@include('front.partial.membership_section')
</div>

<!-- footer -->


@push('js')

@endpush
@endsection