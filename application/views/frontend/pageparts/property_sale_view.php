<?php
// echo "<pre>";
// echo print_r($property_sale);
// echo "</pre>";
?>
<!-- ******************** Card Slider Content ************************ -->
<div class="container">
   <div class="sales-heading-wrap mt-4">
      <div class="sale-heading">
         <h2> PROPERTIES FOR SALE </h2>
         <p> Explore the hot properties on Sale </p>
      </div>
   </div>
   <!-- Card -->
   <div class="card-wrap slider">
      <?php if (!empty($property_sale)) {
         foreach ($property_sale as $index => $property) {
      ?>
            <div class="card p-1 property-grid-item">
               <div class="card-image-and-tags">
                  <img class="card-img-top" src="<?php echo base_url(); ?>front_assets/Images/cove.jpg" alt="Card image cap">
                  <div class="property-tags">
                     <span class="price-tag">₹&nbsp; <?php echo $property->p_price ?> </span>
                     <span class="type-tag"><?php echo $property->type_name ?></span>
                     <span class="status-tag" style="background-color:#EB5353;"> <?php echo $property->status_name ?></span>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="card-title"><?php echo $property->p_title ?></h5>
                  <address class="item-address"><?php echo $property->p_address . " " . $property->state_name . " " . $property->city_name . " " . $property->country_name . " " . $property->p_postal_code; ?></address>
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


      <!--   
  <div class="card p-1 property-grid-item">
  	<div class="card-image-and-tags">
     <img class="card-img-top" src="<?php echo base_url(); ?>front_assets/Images/cove.jpg" alt="Card image cap">
      <div class="property-tags">
      	<span class="price-tag">₹&nbsp;1,52,20,001.00 </span>
      	<span class="type-tag">Property Type</span>
      	<span class="status-tag"style="background-color:#EB5353;">For Sale</span>
      </div>
   </div>
  <div class="card-body">
    <h5 class="card-title">Property Name</h5>
    <address class="item-address">Address, City Country Pindcode 00000</address>
    <ul class="item-amenities item-amenities-with-icons">
              <li> <span class="icon-and-number">
              	<span class="no_of_amenities">2</span>
              	<i class="fa-solid fa-bed 2x"></i> </span>
              	<p class="amenities-name">Bedrooms</p>
              </li>
              <li class="middle-item"> <span class="icon-and-number">
              	<span class="no_of_amenities">2</span>
              	<i class="fa-solid fa-shower"></i> </span>
              	<p class="amenities-name">Bathrooms</p>
              </li>
              <li> <span class="icon-and-number">
              	<span class="no_of_amenities">2</span> 
              <i class="fa-solid fa-chart-area"></i></span>
              	<p class="amenities-name">Sqft</p>
              </li>       
      </ul> 
   </div>
  </div>

  <div class="card p-1 property-grid-item">
  	<div class="card-image-and-tags">
     <img class="card-img-top" src="<?php echo base_url(); ?>front_assets/Images/cove.jpg" alt="Card image cap">
      <div class="property-tags">
      	<span class="price-tag">₹&nbsp;1,52,20,001.00 </span>
      	<span class="type-tag">Property Type</span>
      	<span class="status-tag"style="background-color:#EB5353;">For Sale</span>
      </div>
   </div>
  <div class="card-body">
    <h5 class="card-title">Property Name</h5>
    <address class="item-address">Address, City Country Pindcode 00000</address>
    <ul class="item-amenities item-amenities-with-icons">
              <li> <span class="icon-and-number">
              	<span class="no_of_amenities">2</span>
              	<i class="fa-solid fa-bed 2x"></i> </span>
              	<p class="amenities-name">Bedrooms</p>
              </li>
              <li class="middle-item"> <span class="icon-and-number">
              	<span class="no_of_amenities">2</span>
              	<i class="fa-solid fa-shower"></i> </span>
              	<p class="amenities-name">Bathrooms</p>
              </li>
              <li> <span class="icon-and-number">
              	<span class="no_of_amenities">2</span> 
              <i class="fa-solid fa-chart-area"></i></span>
              	<p class="amenities-name">Sqft</p>
              </li>       
      </ul> 
   </div>
  </div>

  <div class="card p-1 property-grid-item">
  	<div class="card-image-and-tags">
     <img class="card-img-top" src="<?php echo base_url(); ?>front_assets/Images/cove.jpg" alt="Card image cap">
      <div class="property-tags">
      	<span class="price-tag">₹&nbsp;1,52,20,001.00 </span>
      	<span class="type-tag">Property Type</span>
      	<span class="status-tag"style="background-color:#EB5353;">For Sale</span>
      </div>
   </div>
  <div class="card-body">
    <h5 class="card-title">Property Name</h5>
    <address class="item-address">Address, City Country Pindcode 00000</address>
    <ul class="item-amenities item-amenities-with-icons">
              <li> <span class="icon-and-number">
              	<span class="no_of_amenities">2</span>
              	<i class="fa-solid fa-bed 2x"></i> </span>
              	<p class="amenities-name">Bedrooms</p>
              </li>
              <li class="middle-item"> <span class="icon-and-number">
              	<span class="no_of_amenities">2</span>
              	<i class="fa-solid fa-shower"></i> </span>
              	<p class="amenities-name">Bathrooms</p>
              </li>
              <li> <span class="icon-and-number">
              	<span class="no_of_amenities">2</span> 
              <i class="fa-solid fa-chart-area"></i></span>
              	<p class="amenities-name">Sqft</p>
              </li>       
      </ul> 
   </div>
  </div> -->

      <!-- End Card -->
   </div>

</div> <!-- ******************** Card Slider End ********************* -->