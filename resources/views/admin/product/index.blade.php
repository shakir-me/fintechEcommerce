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
						<li class="breadcrumb-item active" aria-current="page">Product</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">
					<a href="{{ route('create.product') }}" class="btn btn-sm btn-primary pull-right">Create New</a>
				</div>
			</div>
		</div>
		<!--end breadcrumb-->
		<hr/>
		@include('alert.alert')
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="5%">SL</th>
								<th>Product Name</th>
								<th>Product Code</th>
								<th>Category</th>
								<th>Brand</th>
								<th>Price</th>
								<th>Image</th>
								<th width="15%">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key=>$row)
							<tr>
								<td width="5%">{{ ++$key }}</td>
								<td>{{ $row->product_name }}</td>
								<td>{{ $row->product_code }}</td>
								<td>{{ $row->category->category_name }}</td>
								<td>{{ $row->brand->brand_name }}</td>
								<td>{{ $row->product_price }}</td>
								<td>
									<img src="{{ asset($row->thumbnail) }}" width="60">
								</td>
								<td>
									<button class="btn btn-sm btn-primary view" data-bs-toggle="modal" data-bs-target="#viewModel" data-id="{{ $row->id }}" >View</button>

									<a href="{{ route('edit.product',$row->id) }}" class="btn btn-sm btn-info">Edit</a>

									<form action="{{ route('delete.product',$row->id) }}" style="display: inline-block;" method="POST" id="delete_form">
									    @csrf
									    @method('DELETE')
									    <button class="btn btn-sm btn-danger" id="delete" type="submit">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>SL</th>
								<th>Product Name</th>
								<th>Product Code</th>
								<th>Category</th>
								<th>Brand</th>
								<th>Price</th>
								<th>Image</th>
								<th width="15%">Action</th>
							</tr>
						</tfoot>
					</table>
				</div>


				<!--View Modal -->
				<div class="modal fade" id="viewModel" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog modal-xl">
						<div class="modal-content" id="view_part">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@push('js')
	
	<script>
			//edit modal show and after submit
		    $('body').on('click', '.view', function () {
		      var id = $(this).data('id'); //i or 2 categoryid
		      $.get("{{ url('admin/product/view') }}/"+id,
		      function (data) {
		           $('#view_part').html(data);
		        }) 
		    });
	</script>

@endpush

@endsection