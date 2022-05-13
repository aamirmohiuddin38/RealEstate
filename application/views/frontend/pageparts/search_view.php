<!-- <?php
			//echo '<pre>';
			//print_r($status);
			//print_r($type);
			?> -->
<div class="container">
	<section class="property_search_wrap">
		<form method="post" action="<?php echo base_url('index.php/front/search_data') ?>">
			<input type="text" id="keyword" name="keyword" placeholder="Enter Keyword">
			<ul>
				<select name="status">
					<option value="" disabled selected hidden>Status</option>
					<?php foreach ($status as $key => $value) { ?>
						<option value="<?php echo $value->status_id; ?>"><?php echo $value->status_name; ?></option>
					<?php	} ?>
				</select>

				<select name="type">
					<option value="" disabled selected hidden>Type</option>
					<?php foreach ($type as $key => $value) { ?>
						<option value="<?php echo $value->type_id; ?>"><?php echo $value->type_name; ?></option>
					<?php	} ?>
				</select>

				<select name="label">
					<option value="" disabled selected hidden>Label</option>
					<?php foreach ($label as $key => $value) { ?>
						<option value="<?php echo $value->label_id; ?>"><?php echo $value->label_name; ?></option>
					<?php	} ?>
				</select>

				<select name="bedroom">
					<option value="" disabled selected hidden>Bedroom</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>

				<select name="bathroom">
					<option value="" disabled selected hidden>Bathroom</option>
					<option>1</option>
					<option>2</option>
					<option>7</option>
				</select>
			</ul>
			<button type="submit"><i class="fa-solid fa-magnifying-glass mr-1"></i>Search</button>

		</form>
	</section>
</div>