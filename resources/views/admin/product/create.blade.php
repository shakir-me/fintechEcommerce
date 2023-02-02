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
					<a href="{{ route('index.product') }}" class="btn btn-sm btn-primary pull-right">All Product</a>
				</div>
			</div>
		</div>
		<!--end breadcrumb-->
		<hr/>
		@include('alert.alert')
		<div class="card">
			<div class="card-body">
				<form class="g-3" method="POST" action="{{ route('store.product') }}" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-8">
							<label for="inputFirstName" class="form-label">Product Name <sup class="text-danger">*</sup></label>
							<input type="text" class="form-control" placeholder="Enter product name" name="product_name" id="inputFirstName">
						</div>
						<div class="col-md-4">
							<label for="inputLastName" class="form-label">Product Code <sup class="text-danger">*</sup></label>
							<input type="text" class="form-control" name="product_code" value="{{ Helper::product_code(9); }}" readonly id="inputLastName">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-6">
							<label for="inputFirstName" class="form-label">Product Title <sup class="text-danger">*</sup></label>
							<input type="text" class="form-control" placeholder="Enter product title" name="product_title" id="inputFirstName">
						</div>
						<div class="col-md-6">
							<label for="inputLastName" class="form-label">Product Short Desc. <sup class="text-danger">*</sup></label>
							<input type="text" class="form-control" placeholder="Enter short description" name="product_short_desc" id="inputLastName">
						</div>
					</div>
					<div class="row mt-2">
						<div class="mb-3 select2-sm col-md-4">
							<label class="form-label">Category <sup class="text-danger">*</sup></label>
							<select class="single-select" name="category_id">
								<option value="" disabled selected>--Select--</option>
								@foreach($categories as $category)
								<option value="{{ $category->id }}">{{ $category->category_name }}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3 select2-sm col-md-4">
							<label class="form-label">Sub-category</label>
							<select class="single-select" name="subcategory_id">
								
								<option value="" disabled selected>--Select--</option>
								
							</select>
						</div>
						<div class="mb-3 select2-sm col-md-4">
							<label class="form-label">Brand</label>
							<select class="single-select" name="brand_id">
								<option value="" disabled selected>--Select--</option>
								@foreach($brands as $brand)
								<option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-md-4">
							<label for="inputCity" class="form-label">Sell Price <sup class="text-danger">*</sup></label>
							<input type="number" name="product_price" placeholder="Enter amount" class="form-control" id="inputCity">
						</div>
						<div class="mb-3 select2-sm col-md-4">
							<label class="form-label">For Membership <sup class="text-danger">*</sup></label>
							<select class="single-select" name="membership_id">
								<option value="" selected>For All Package</option>
								@foreach($packages as $pack)
								<option value="{{ $pack->id }}">For {{ $pack->membership_name }}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3 select2-sm col-md-4">
							<label class="form-label">Visibility <sup class="text-danger">*</sup></label>
							<select class="single-select" name="visibility">
								<option value="" selected>All Member</option>
								@foreach($packages->skip(3) as $pack)
								<option value="{{ $pack->id }}">Reseller Member</option>
								@endforeach
							</select>
						</div>
						{{-- <div class="col-md-3">
							<label for="inputCity" class="form-label">Buying Price</label>
							<input type="number" class="form-control" name="buying_price" id="inputCity">
						</div>
						<div class="col-md-3">
							<label for="inputCity" class="form-label">Discount Rate</label>
							<input type="number" class="form-control" name="discount_rate" id="inputCity">
						</div>
						<div class="col-md-3">
							<label for="inputCity" class="form-label">Discount Price</label>
							<input type="number" class="form-control" name="discount_price" id="inputCity">
						</div> --}}
					</div>
					<br>
					<div class="form-check form-switch">
						<input class="form-check-input" name="is_free" type="checkbox" id="flexSwitchCheckChecked" value="1">
						<label class="form-check-label" for="flexSwitchCheckChecked">Free Product</label>
					</div>
					<br>
					<div class="row mt-3">
						<div class="mb-3 col-lg-6 col-md-12">
							<label for="inputCity" class="form-label">Thumbnail <sup class="text-danger">*</sup></label>
							<input type="file" class="form-control" name="thumbnail" id="inputCity">
							<small class="text-danger form-label">NB : Max size 2 MB.</small>
						</div>
						<div class="col-lg-6 col-md-12">
							<label class="form-label">More Images</label>
							<input class="form-control" name="images[]" type="file" accept="image/*" multiple>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12 mt-2 row ">
						<lebel class="card-title">Specification <sup class="text-danger">*</sup></lebel>
		                  <table class="table" id="dynamic_field">
		                    <tr>  
		                        <td><input type="text" name="specification[]" placeholder="Enter specification" class="form-control name_list" /></td>  
		                        <td><input type="text" name="specification_ans[]" placeholder="Enter specification" class="form-control name_list" /></td>  
		                        <td><button type="button" name="add" id="add" class="btn btn-sm btn-success">Add</button></td>  
		                    </tr>  
		                  </table>                  
						</div>
					</div>

					<div class="col-12 mt-3">
						<div class="mb-3">
							<label class="form-label">Product URL <sup class="text-danger">*</sup></label>
							<input type="url" class="form-control" placeholder="http://" name="product_url">
						</div>
					</div>

					<div class="col-12 mt-3">
						<div class="mb-3">
							<label class="form-label">Tags <small class="text-danger"> NB : (',') will separate your tags.</small></label>
							<input type="text" class="form-control" placeholder="Enter tags" name="tag" data-role="tagsinput">
						</div>
					</div>					
					<br>
					<div class="col-12">
						<label for="inputAddress2" class="form-label">Description <sup class="text-danger">*</sup></label>
						<textarea class="form-control" id="summernote2" name="description" placeholder="Address 2..." rows="3"></textarea>
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

<script>
       $(document).ready(function() {
          $('select[name="category_id"]').on('change', function(){
                var cat_id = $(this).val();
                if(cat_id) {
                   $.ajax({
                       url: "{{ url('admin/product/get/subcategory') }}/"+cat_id,
                       type:"GET",
                       dataType:"json",
                       success:function(data) {
                       
                            var d =$('select[name="subcategory_id"]').empty();
                            $('select[name="subcategory_id"]').append('<option value="" >--Select--</option>')
                           $.each(data, function(key, value){
                               $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                           });   
                       },     
                   });
               } else {
                   $('select[name="sub_id"]').empty();
               }
           });
       });

       $(document).ready(function() {
         $('#summernote, #summernote2').summernote({
         	height: 280, 
         });
       });

       $(document).ready(function(){      
            var postURL = "<?php echo url('addmore'); ?>";
            var i=1;  
            $('#add').click(function(){  
                 i++;  
                 $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="specification[]" placeholder="Enter specification" class="form-control name_list" /></td><td><input type="text" name="specification_ans[]" placeholder="Enter specification" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-sm btn-danger btn_remove"><i class="bx bx-trash"></i></button></td></tr>');  
            });  
            $(document).on('click', '.btn_remove', function(){  
                 var button_id = $(this).attr("id");   
                 $('#row'+button_id+'').remove();  
            });  
          });
  </script>

@endpush

@endsection