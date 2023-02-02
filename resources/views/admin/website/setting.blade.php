@extends('layouts.app')

@section('admin_content')
@push('css')

@endpush


<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Web Site Setting</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Web Site Setting</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->
		<hr/>
		@include('alert.alert')
		<div class="card">
			<div class="card-body">
				<form class="g-3" method="POST" action="{{route('update.setting',$setting->id)}}" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<label for="inputFirstName" class="form-label">Email </label>
							<input type="email" class="form-control" name="email" value="{{ $setting->email }}" id="inputFirstName">
						</div>
						<div class="col-md-6">
							<label for="inputLastName" class="form-label">Web Site Logo</label>
							<input type="file" class="form-control" name="image" id="inputLastName">

                            
                            <img src="{{asset('backend/setting/'.$setting->image) }}" class="rounded border" width="50" alt="">
                            
                          
						</div>
                        <div class="col-md-6">
							<label for="inputFirstName" class="form-label">Facebook Link </label>
							<input type="text" class="form-control" name="facebook" value="{{ $setting->facebook }}" id="inputFirstName">
						</div>

                        <div class="col-md-6">
							<label for="inputFirstName" class="form-label">Instagram Link </label>
							<input type="text" class="form-control" name="instagram" value="{{ $setting->instagram }}" id="inputFirstName">
						</div>
                        <div class="col-md-6">
							<label for="inputFirstName" class="form-label">Youtube Link </label>
							<input type="text" class="form-control" name="youtube" value="{{ $setting->youtube }}" id="inputFirstName">
						</div>
                        <div class="col-md-6">
							<label for="inputFirstName" class="form-label">Twitter Link </label>
							<input type="text" class="form-control" name="twitter"  value="{{ $setting->twitter }}" id="inputFirstName">
						</div>
                        <div class="col-md-6">
							<label for="inputFirstName" class="form-label">About Us </label>
							<input type="text" class="form-control" name="about" value="{{ $setting->about }}" id="inputFirstName">
						</div>
						
					</div>
				

					<br>
					<div class="col-12">
						<button type="submit" class="btn btn-primary px-5">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@push('js')


@endpush

@endsection