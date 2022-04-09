<div class="col-lg-4 col-md-12 bt-sidebar-wrap houzez_sticky">

  <aside id="sidebar" class="sidebar-wrap">
    <div id="houzez_featured_properties-2" class="widget widget-wrap widget-featured-property">
      <div class="widget-header">
        <h3 class="widget-title">Featured Listings</h3>
      </div>


      <div class="widget-body widget-featured-property-slider-wrap">

        <div class="widget-featured-property-slider">

          <?php if (!empty($featured)) {
            // ddisplay($featured[0]);
            foreach ($featured as $key => $property) { ?>
              <div class="featured-property-item-widget">
                <div class="item-wrap item-wrap-v3">
                  <div class="listing-image-wrap">
                    <div class="listing-thumb">
                      <a href="<?php echo base_url('houzez/property/' . $property->p_id) ?>" class="listing-featured-thumb hover-effect">
                        <img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?>" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?> 592w" /> </a><!-- hover-effect -->
                    </div>
                  </div>
                  <div class="labels-wrap labels-right">

                    <a href="#" class="label-status label status-color-18">
                      <?php echo $property->ps_name; ?>
                    </a>

                  </div> <span class="label-featured label">Featured</span>
                  <ul class="item-price-wrap hide-on-list">
                    <li class="item-price">
                      <?php
                      $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                      echo $fmt->formatCurrency($property->p_price, "INR");
                      ?>
                    </li>
                    <!-- <li class="item-sub-price">$7,500/sq ft</li> -->
                  </ul>
                  <address class="item-address">
                    <?php echo $property->pa_address . ' ' . $property->city . ', ' . $property->state . ', ' . $property->country . ' ' . $property->pa_postal_code; ?>
                  </address>
                </div><!-- item-wrap -->
              </div>
          <?php }
          } ?>


        </div>

      </div>


    </div>
    <?php /*
          <div id="houzez_property_taxonomies-2" class="widget widget-wrap widget-taxonomy">
            <div class="widget-header">
              <h3 class="widget-title">Property Type</h3>
            </div>
            <div class="widget-body">
              <ul>
                <li><a href="../property-type/commercial/index.html">Commercial</a>
                  <ul class="children">
                    <li><a href="../property-type/office/index.html">Office</a></li>
                    <li><a href="../property-type/shop/index.html">Shop</a></li>
                  </ul>
                </li>
                <li><a href="../property-type/residential/index.html">Residential</a>
                  <ul class="children">
                    <li><a href="../property-type/apartment/index.html">Apartment</a></li>
                    <li><a href="../property-type/single-family-home/index.html">Single Family Home</a></li>
                    <li><a href="../property-type/studio/index.html">Studio</a></li>
                    <li><a href="../property-type/villa/index.html">Villa</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div id="houzez_property_taxonomies-3" class="widget widget-wrap widget-taxonomy">
            <div class="widget-header">
              <h3 class="widget-title">Cities</h3>
            </div>
            <div class="widget-body">
              <ul>
                <li><a href="../city/miami/index.html">Miami</a></li>
                <li><a href="../city/los-angeles/index.html">Los Angeles</a></li>
                <li><a href="../city/chicago/index.html">Chicago</a></li>
                <li><a href="../city/new-york/index.html">New York</a></li>
              </ul>
            </div>
          </div>
          */ ?>
  </aside>
</div>