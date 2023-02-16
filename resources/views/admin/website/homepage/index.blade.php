@extends('layouts.app')

@section('admin_content')
@push('css')

@endpush


<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Home Page</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Market Place</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">
					<a href="{{ route('add.homepage') }}" class="btn btn-sm btn-primary pull-right">Create Market Place</a>
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
								<th>Title</th>
								<th>Description</th>
				
								<th width="5%">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($homepages as $key=>$row)
							<tr>
								<td width="5%">{{ ++$key }}</td>
								<td>{{ $row->title }}</td>
								<td>

                                    {!! Str::limit($row->details, 30, '') !!}
                                
                                </td>
						
							
								<td>
									<a href="{{ route('edit.homepage',$row->id) }}" class="btn btn-sm btn-info">Edit</a>
									<a href="{{ route('delete.homepage',$row->id) }}" class="btn btn-sm btn-danger" >Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th width="5%">SL</th>
								<th>Title</th>
								<th>Description</th>
								<th>Image</th>
								<th width="5%">Action</th>
							</tr>
						</tfoot>
					</table>
				</div>


				<!--View Modal -->
				
			</div>
		</div>
	</div>
</div>

@push('js')
	


@endpush

@endsection