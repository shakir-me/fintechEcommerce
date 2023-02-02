@extends('layouts.front')

@section('front_content')
@push('css')

@endpush
<div class="container">
	@include('alert.alert')
</div>
@include('front.partial.search_section')

<!-- about section -->
@include('front.partial.about_section')

<!-- latest items -->
@include('front.partial.latest_item_section')

<!-- Free items -->
@include('front.partial.free_item_section')

<!-- membership section -->
@include('front.partial.membership_section')

<!-- request section -->
@include('front.partial.request_section')

<!-- client section -->
@include('front.partial.client_section')

<!-- footer -->
@include('front.partial.footer_section')



@push('js')

@endpush

@endsection

