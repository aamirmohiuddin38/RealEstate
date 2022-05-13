<!-- <?php
			//echo '<pre>';
			//print_r($status);
			//print_r($type);
			?> -->
<div class="container">
	<section class="property_search_wrap">
		<form method="" action="">
			<input type="text" id="keyword" name="keyword" placeholder="Enter Keyword">
			<ul>
				<select>
					<option value="" disabled selected hidden>Status</option>
					<?php foreach ($status as $key => $value) { ?>
						<option value="<?php echo $value->status_id; ?>"><?php echo $value->status_name; ?></option>
					<?php	} ?>
				</select>

				<select>
					<option value="" disabled selected hidden>Type</option>
					<?php foreach ($type as $key => $value) { ?>
						<option value="<?php echo $value->type_id; ?>"><?php echo $value->type_name; ?></option>
					<?php	} ?>
				</select>

				<select>
					<option value="" disabled selected hidden>Label</option>
					<?php foreach ($label as $key => $value) { ?>
						<option value="<?php echo $value->label_id; ?>"><?php echo $value->label_name; ?></option>
					<?php	} ?>
				</select>

				<select>
					<option value="" disabled selected hidden>Bedroom</option>
					<option>One</option>
					<option>Two</option>
					<option>Three</option>
				</select>

				<select>
					<option value="" disabled selected hidden>Bathroom</option>
					<option>One</option>
					<option>Two</option>
					<option>Three</option>
				</select>
			</ul>
			<button><i class="fa-solid fa-magnifying-glass mr-1"></i>Search</button>

		</form>
	</section>
</div>