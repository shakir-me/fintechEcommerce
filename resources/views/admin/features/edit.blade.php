
							<form action="{{ route('update.features', $data->id) }}" method="post" enctype="multipart/form-data">
								@csrf
								<div class="modal-header">
									<h5 class="modal-title">Create New Feature</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="col-md-12">
										<label for="inputFirstName" class="form-label">Heading <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" name="heading" id="inputFirstName" value="{{ $data->heading }}">
									</div>
								</div>
								<div class="modal-body">
									<div class="col-md-12">
										<label for="inputFirstName" class="form-label">Description <sup class="text-danger">*</sup></label>
                                        <textarea name="description" rows="4" class="form-control">{{ $data->description }}</textarea>
									</div>
								</div>
								<div class="modal-body">
									<div class="col-md-12">
										<label for="inputFirstName" class="form-label">Photo<sup class="text-danger">*</sup></label>
										<input type="file" class="form-control" name="photo" id="inputFirstName">
                                        <br>
                                        <img style="width: 50px;" src="{{ asset($data->photo) }}" alt="{{ $data->photo }}">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
