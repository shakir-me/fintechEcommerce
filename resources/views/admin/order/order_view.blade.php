@extends('layouts.app')

@section('admin_content')
@push('css')

@endpush


<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">All Order</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">All Order</li>
					</ol>
				</nav>
			</div>
            <div class="ms-auto">
				<div class="btn-group">
					<a href="{{ route('admin.order') }}" class="btn btn-sm btn-primary pull-right">All Order</a>
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
								<th>Order NO</th>
								<th>Total Qty</th>
								<th>Total Price</th>
								<th>Coupon Amount</th>
								<th>Payment Method </th>
								<th>Refund </th>
								<th>Coupon Amount </th>
								<th>Coupon Name</th>

								<th width="15%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($order->orderItems as $item)
							<tr>
								<td width="5%">{{ $item->id }}</td>
                                <td>{{  }}</td>
								
      
                              
			
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>SL</th>
								<th>User Name</th>
                                <th>Order NO</th>
								<th>Total Qty</th>
								<th>Total Price</th>
								<th>Coupon Amount</th>
								<th>Payment Method </th>
								<th>Refund </th>
                                <th>Coupon Amount </th>
								<th>Coupon Name</th>
								<th width="15%">Action</th>
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