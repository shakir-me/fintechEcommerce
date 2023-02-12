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
						<li class="breadcrumb-item active" aria-current="page">Create Product</li>
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
				<form class="g-3" method="POST" action="{{ route('store.productrequest') }}" enctype="multipart/form-data">
					@csrf
					
					<div class="row">
                        <div class="col-md-12">
							<label for="inputLastName" class="form-label">Product Heading</label>
							<input type="text" class="form-control" name="name" id="inputLastName" placeholder="Product Heading" required>
						</div>

                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="one" id="inputLastName" placeholder="Product Name
                            ">
						</div>

                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="two" id="inputLastName" placeholder="Product Name">
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="three" id="inputLastName" placeholder="Product Name">
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="four" id="inputLastName" placeholder="Product Name">
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Nme</label>
							<input type="text" class="form-control" name="five" id="inputLastName" placeholder="Product Name">
						</div>
                        <div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Name</label>
							<input type="text" class="form-control" name="six" id="inputLastName" placeholder="Product Name">
						</div>
                     
                     
                     
                     
                      
			
					</div>

				
					
					<br>
					<div class="col-12">
						<button type="submit" class="btn btn-primary px-5">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@push('js')


@endpush

@endsection