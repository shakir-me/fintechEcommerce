@extends('layouts.app')

@section('admin_content')
@push('css')

@endpush


<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">@if($status == "new") New @else Old @endif Request Product</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">@if($status == "new") New @else Old @endif Request Product</li>
					</ol>
				</nav>
			</div>
			{{-- <div class="ms-auto">
				<div class="btn-group">
					<button type="button" class="btn btn-sm btn-primary pull-right" data-bs-toggle="modal" data-bs-target="#createModel">Create New</button>
				</div>
			</div> --}}
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
								<th>Name</th>
								<th>Email</th>
								<th>Software Name</th>
								<th>Trading Security</th>
								<th width="10%">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key=>$row)
							<tr>
								<td>{{ ++$key }}</td>
								<td>{{ $row->name }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->software_name }}</td>
								<td>{{ $row->trading_security }}</td>
								<td>
									<button class="btn btn-sm btn-primary view" data-bs-toggle="modal" data-bs-target="#viewModel" data-id="{{ $row->id }}" >View</button>
									<form action="{{ route('delete.request.product',$row->id) }}" style="display: inline-block;" method="POST" id="delete_form">
									    @csrf
									    @method('DELETE')
									    <button class="btn btn-sm btn-danger" id="delete" type="submit">Delete</button>
									</form>

									<a href="{{ url('admin/request-product/detail',$row->id) }}" class="btn btn-info">Details</a>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Email</th>
								<th>Software Name</th>
								<th>Trading Security</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>

				<!--Edit Modal -->
				<div class="modal fade" id="editModel" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog modal-xl">
						<div class="modal-content" id="edit_section">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@push('js')

<script>

	//view modal show and after submit
    $('body').on('click', '.view', function () {
      var id = $(this).data('id'); //i or 2 categoryid
      $.get("{{ url('admin/request-product/view') }}/"+id,
      function (data) {
           $('#view_section').html(data);
           $("#example2").load(location.href + " #example2");
        }) 
    });
</script>

@endpush

@endsection