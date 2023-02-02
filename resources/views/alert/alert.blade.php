<!--Start alert-->
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
                	<div class="text-white"><i class='bx bxs-message-square-x'></i> {{ $error }}</div>
                	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        </ul>
    </div>
@elseif(session()->has('success'))
<div class="alert alert-success border-0 bg-success alert-dismissible fade show">
	<div class="text-white"><i class='bx bxs-check-circle'></i> {{ session()->get('success') }}</div>
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif(session()->has('error'))
<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
    <div class="text-white"><i class='bx bxs-check-circle'></i> {{ session()->get('error') }}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif(session()->has('warning'))
<div class="alert alert-warning border-0 bg-warning alert-dismissible fade show">
    <div class="text-white"><i class='bx bxs-check-circle'></i> {{ session()->get('warning') }}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!--End alert-->