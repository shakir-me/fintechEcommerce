@extends('layouts.app')

@section('admin_content')
@push('css')

@endpush


<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Request Product</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">All Request Product</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">
					<a href="{{ route('index.request.product') }}" class="btn btn-sm btn-primary pull-right">Back</a>
				</div>
			</div>
		</div>
		<!--end breadcrumb-->
		<hr/>
		@include('alert.alert')
		<div class="card">
			<div class="card-body">
				<form class="g-3" method="POST" action="" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<label for="inputFirstName" class="form-label">User Name</label>
							<input type="text" class="form-control" value="{{ $data->name }}" name="membership_name" id="inputFirstName">
						</div>
						<div class="col-md-6">
							<label for="inputLastName" class="form-label">User Email</label>
							<input type="text" value="{{ $data->email }}" class="form-control" name="membership_price" id="inputLastName">
						</div>
						<div class="col-md-6">
							<label for="inputLastName" class="form-label">Software Name</label>
							<input type="text" class="form-control" value="{{ $data->software_name }}" name="monthly_charge" id="inputLastName">
						</div>

                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Software Details</label>
							<input type="text" class="form-control" value="{{ $data->details }}" name="monthly_charge" id="inputLastName">
                            
						</div>

                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Author Name </label>
							<input type="text" class="form-control" value="{{ $data->author_name }}" name="monthly_charge" id="inputLastName">
                            
						</div>

                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Baker Name </label>
							<input type="text" class="form-control" value="{{ $data->baker_name }}" name="monthly_charge" id="inputLastName">
                            
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Trading Security </label>
							<input type="text" class="form-control" value="{{ $data->trading_security }}" name="monthly_charge" id="inputLastName">
                            
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Trading Server</label>
							<input type="text" class="form-control" value="{{ $data->trading_server }}" name="monthly_charge" id="inputLastName">
                            
						</div>

                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Value</label>
							<input type="text" class="form-control" value="{{ $data->value }}" name="monthly_charge" id="inputLastName">
                            
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Trading Server</label>
							<input type="text" class="form-control" value="{{ $data->trading_server }}" name="monthly_charge" id="inputLastName">
                            
						</div>

                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Image </label>
							<img src="{{asset('backend/images/bookproduct/'.$data->imageone)}}" alt="" height="80px;" width="80px;">
                            
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Image</label>
                            <img src="{{asset('backend/images/bookproduct/'.$data->imagetwo)}}" alt="" height="80px;" width="80px;">
						</div>
					</div>
					

					
				
				</form>
			</div>
		</div>
	</div>
</div>

@push('js')


@endpush

@endsection