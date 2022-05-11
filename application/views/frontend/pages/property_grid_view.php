<?php
// echo "<pre>";
// print_r($properties);
// echo "</pre>";
?>
<!-- ******************** Grid Content ************************ -->
<div class="container">
  <div class="row mt-5">
      <?php if (!empty($properties)) {
         foreach ($properties as $index => $property) {
      ?>
  <div class="col-lg-4 col-md-6 col-sm-12 card property-grid-item">
      <div class="card-image-and-tags">
      <?php
                  foreach ($images as $img) {
                     if ($img['img_p_id'] == $property->p_id) { ?>
                        <img class="card-img-top" src="<?php echo base_url() . $img['img_file_path'] ?>" alt="Card image cap">
                  <?php break;
                     }
                  } ?>
      <div class="property-tags">
      	<span class="price-tag">₹&nbsp;<?php echo $property->p_price ?></span>
      	<span class="type-tag"><?php echo $property->type_name ?></span>
      	<span class="status-tag"><?php echo $property->status_name ?></span>
      </div>
   </div>
<div class="card-body">
      <h5 class="card-title"><?php echo $property->p_title ?></h5>
      <address class="item-address"><?php echo $property->p_address . ", " . $property->state_name . ", " . $property->city_name . ", " . $property->country_name . ", " . $property->p_postal_code; ?></address>
      <ul class="item-amenities item-amenities-with-icons">
               <li> <span class="icon-and-number">
              	 <span class="no_of_amenities"><?php echo $property->p_bedrooms ?></span>
              	 <i class="fa-solid fa-bed 2x"></i> </span>
              	 <p class="amenities-name">Bedrooms</p>
               </li>
               <li class="middle-item"> <span class="icon-and-number">
              	 <span class="no_of_amenities"><?php echo $property->p_bathrooms ?></span>
              	 <i class="fa-solid fa-shower"></i> </span>
              	 <p class="amenities-name">Bathrooms</p>
               </li>
               <li> <span class="icon-and-number">
              	 <span class="no_of_amenities"><?php echo $property->p_area ?></span> 
               <i class="fa-solid fa-chart-area"></i></span>
              	 <p class="amenities-name"><?php echo $property->p_area_unit ?></p>
               </li>       
      </ul> 
   </div>
</div>

  <?php
         }
      } ?>

</div>
</div>
  <!-- ******************** Grid Content End ********************* -->