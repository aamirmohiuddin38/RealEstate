<div class="card">
	<div class="card-header bg-info">
		Add Documents
	</div>
	<div class="card-body">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<form action="<?php echo base_url('index.php/admin/property/property_document'); ?>" method="post" enctype="multipart/form-data">
						<?php echo form_hidden('pd_id', $input->pd_id) ?>
						<div class="form-group">
							<label for="type">Property</label> <i class="req text-danger"> *</i>
							<select name="pd_p_id" class="form-control" id="type">
								<option value="">Select Property</option>
								<?php
								if (!empty($propertyList)) {
									foreach ($propertyList as $tp) {
								?>
										<option value="<?php echo $tp['p_id']; ?>" <?php ($input->pd_p_id == $tp['p_id']) ? 'selected' : ''; ?>><?php echo $tp['p_title']; ?></option>
								<?php
									}
								}
								?>
							</select>
						</div>
				</div>
				<div class="col-md-3 form-group text-black">
					<label for="title">Title</label><i class="req text-danger"> *</i>
					<input type="text" id="title" class="form-control" placeholder="property title" name="pd_title" value="<?php echo $input->pd_title; ?>">
				</div>

				<div class="col-md-4 form-group">
					<label for="inputGroupFile01">Attach file</label><i class="req text-danger"> *(Note: choose only pdf, image, doc)</i>
					<input type="file" class="form-control" id="inputGroupFile01" name="pd_file_path">
				</div>
				<div class="col-md-2 form-group text-center pt-4">
					<button class="btn btn-info" type="submit">Upload <i class="fa-solid fa-cloud-arrow-up"></i></button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- Display -->
<div class="col-sm-12">
	<div class="card">
		<div class="card-header bg-dark">
			<h3 class="card-title">
				<i class="fa fa-list"></i> Document List
			</h3>
			<!-- <a class="btn btn-warning pull-right" href="< ?= base_url('admin/transaction/payment_report/').$search->start_date.'/'.$search->end_date; ?>"><i class="fa fa-print"></i></a> -->
		</div>
		<div class="card-body">
			<table width="100%" class="datatable_colvis table table-striped table-bordered table-hover table-sm">
				<thead>
					<tr>
						<th><?php echo ('Unique Id') ?></th>
						<th><?php echo ('Property') ?></th>
						<th><?php echo ('Title') ?></th>
						<th><?php echo ('Image') ?></th>
						<th><?php echo ('Action') ?></th>
					</tr>
				</thead>
				<tbody>
					<?php if (!empty($property_documents)) { ?>
						<?php $sl = 1; ?>
						<?php foreach ($property_documents as $pd) { ?>
							<tr>
								<td><?php echo $sl; ?></td>
								<td><?php echo $pd->pd_p_id; ?></td>
								<td><?php echo $pd->pd_title; ?></td>
								<td><img src="<?= base_url($pd->pd_file_path); ?>" width="100px" height="100px"></td>
								<td class="text-center" width="100">
									<?php if (!in_array($pd->pd_id, [])) { ?>
										<a href="<?php echo base_url("index.php/admin/property/edit_property_document/$pd->pd_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
										<a href="<?php echo base_url("index.php/admin/property/delete_property_document/$pd->pd_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo ('Are You Sure') ?>') "><i class="fa fa-trash"></i></a>
									<?php } ?>
								</td>
							</tr>
							<?php $sl++; ?>
						<?php } ?>
					<?php } ?>
				</tbody>
			</table> <!-- /.table-responsive -->
		</div>
	</div>
</div>