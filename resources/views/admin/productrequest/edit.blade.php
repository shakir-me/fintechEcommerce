@extends('layouts.app')

@section('admin_content')
@push('css')

@endpush


<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Product</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Edit Product</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">
					<a href="{{ route('index.productrequest') }}" class="btn btn-sm btn-primary pull-right">All Product Request</a>
				</div>
			</div>
		</div>
		<!--end breadcrumb-->
		<hr/>
		@include('alert.alert')
		<div class="card">
			<div class="card-body">
				<form class="g-3" method="POST" action="{{ route('update.productrequest',$requesstproducts->id) }}" enctype="multipart/form-data">
					@csrf
					
					<div class="row">
                        <div class="col-md-12">
							<label for="inputLastName" class="form-label">Product Heading</label>
							<input type="text" class="form-control" name="name" id="inputLastName" value="{{ $requesstproducts->name }}">
						</div>

                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="one" id="inputLastName" value="{{ $requesstproducts->one }}">
						</div>

                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="two" id="inputLastName" value="{{ $requesstproducts->two }}">
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="three" id="inputLastName" value="{{ $requesstproducts->three }}">
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="four" id="inputLastName"  value="{{ $requesstproducts->four }}">
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Nme</label>
							<input type="text" class="form-control" name="five" id="inputLastName"  value="{{ $requesstproducts->five }}">
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="six" id="inputLastName" value="{{ $requesstproducts->six }}">
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