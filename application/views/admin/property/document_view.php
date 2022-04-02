<div class="card">
	<div class="card-header bg-info">
		Add Documents
	</div>
	<div class="card-body">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<form action="" method="">
						<div class="form-group">
							<label for="type">Property</label> <i class="req text-danger"> *</i>
							<select name="pd_p_id" class="form-control" id="type">
								<option value="">Select Property Type</option>
								<?php
								if (!empty($type)) {
									foreach ($type as $tp) {
								?>
										<option value="<?php echo $tp['type_id']; ?>"><?php echo $tp['type_name']; ?></option>
								<?php
									}
								}
								?>
							</select>
						</div>
				</div>
				<div class="col-md-3 form-group text-black">
					<label for="title">Title</label><i class="req text-danger"> *</i>
					<input type="text" id="title" class="form-control" placeholder="property title">
				</div>
				<div class="col-md-4 form-group">
					<label for="inputGroupFile01">Attach file</label><i class="req text-danger"> *(Note: choose only pdf, image, doc)</i>
					<input type="file" class="form-control" id="inputGroupFile01">
				</div>
				<div class="col-md-2 form-group text-center pt-4">
					<button class="btn btn-info" type="submit">Upload <i class="fa-solid fa-cloud-arrow-up"></i></button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- document list -->
<div class="card">
	<h6 class="card-header bg-info">Property Documents</h6>
	<div class="card-body">
		<div class="container border">
			<div class="row text-center">
				<div class="col-3 border p-1 bg-light">
					<h6>ID</h6>
				</div>
				<div class="col-3 border p-1 bg-light">
					<h6> Title</h6>
				</div>
				<div class="col-3 border p-1 bg-light">
					<h6> Date</h6>
				</div>
				<div class="col-3 border p-1 bg-light">
					<h6> Action</h6>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-md-12 p-1">
					<h6>No data Available!</h6>
				</div>

			</div>
		</div>
	</div>
</div>