<?php
// ddisplay($property_images);
?>
<section class="top-banner-wrap   property-slider-wrap">
  <div class="property-slider houzez-all-slider-wrap" data-autoplay="1" data-loop="1" data-speed="4000">
    <?php if (valArr($slider_property)) {
      foreach ($slider_property as  $property) {  ?>
        <div class="property-slider-item-wrap" style="background-image: url(
          <?php echo !empty($property_images[$property->p_id]->img_file_path) ?
            base_url($property_images[$property->p_id]->img_file_path) :
            base_url('uploads/noimage_front.png'); ?>);">
          <a href="#" class="property-slider-link"></a>
          <div class="property-slider-item">
            <h2 class="item-title">
              <a href="<?php echo base_url('houzez/property/' . $property->p_id) ?>"><?php echo $property->p_title; ?></a>
            </h2><!-- item-title -->
            <address class="item-address">
              <?php echo $property->p_address . ' ' . $property->city_name . ', ' . $property->state_name . ', ' . $property->country_name . ' ' . $property->p_postal_code; ?>
            </address>
            <ul class="item-price-wrap hide-on-list">
              <li class="item-price">
                <?php
                $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                echo $fmt->formatCurrency($property->p_price, "INR");
                ?></li>
              <!-- <li class="item-sub-price">$3,690/sq ft</li> -->
            </ul>
            <ul class="item-amenities item-amenities-with-icons">
              <li class="h-beds"><i class="houzez-icon icon-hotel-double-bed-1 mr-1"></i><span class="item-amenities-text">Beds:</span> <span class="hz-figure"><?php echo $property->pd_bedrooms ?? 0; ?></span></li>
              <li class="h-baths"><i class="houzez-icon icon-bathroom-shower-1 mr-1"></i><span class="item-amenities-text">Baths:</span> <span class="hz-figure"><?php echo $property->pd_bathrooms ?? 0; ?></span></li>
              <li class="h-area"><i class="houzez-icon icon-ruler-triangle mr-1"></i><span class="hz-figure"><?php echo $property->pd_area_size ?? 0; ?></span> <span class="area_postfix"><?php echo $property->pd_area_size_unit ?? 0; ?></span></li>
              <li class="h-type"><span><?php echo $property->pt_name; ?></span></li>
            </ul> <a class="btn btn-primary btn-item" href="<?php echo base_url('index.php/houzez/property/' . $property->p_id) ?>">
              Details</a><!-- btn-item -->
          </div><!-- property-slider-item -->
        </div><!-- property-slider-item-wrap -->
    <?php }
    } ?>
  </div><!-- property-slider -->
</section><!-- property-slider-wrap -->