<?php
$arr_status = [];
$arr_type = [];
$arr_label = [];
foreach ($tls_data as $key => $value) {
	$arr_status[$value->p_status] = $value->status_name;
	$arr_type[$value->p_type] =  $value->type_name;
	$arr_label[$value->p_label] =  $value->label_name;
}
$arr_status = array_unique($arr_status);
$arr_type = array_unique($arr_type);
$arr_label = array_unique($arr_label);
?>
<div class="container">
	<section class="property_search_wrap">
		<form method="post" action="<?php echo base_url('index.php/front/search_data') ?>">
			<input type="text" id="keyword" name="keyword" placeholder="Enter Keyword" class="inputs">
			<input type="number" name="price" placeholder="Max Price" class="inputs">
			<input type="text" name="location" placeholder="Nearby Location" class="inputs">
			<ul>
				<select name="status">
					<option value="" disabled selected hidden>Status</option>
					<?php
					foreach ($arr_status  as $key => $value) {
					?>
						<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
					<?php } ?>
				</select>

				<select name="type">
					<option value="" disabled selected hidden>Type</option>
					<?php foreach ($arr_type as $key => $value) { ?>
						<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
					<?php	} ?>
				</select>

				<select name="label">
					<option value="" disabled selected hidden>Label</option>
					<?php foreach ($arr_label as $key => $value) { ?>
						<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
					<?php	} ?>
				</select>

			</ul>
			<button type="submit"><i class="fa-solid fa-magnifying-glass mr-1"></i>Search</button>

		</form>
	</section>
</div>