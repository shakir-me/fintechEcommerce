@extends('layouts.front')

@section('front_content')
@push('css')

@endpush


<div class="mt-3">
	@include('front.partial.membership_section')
</div>

<!-- footer -->
@include('front.partial.footer_section')

@push('js')

@endpush
@endsection