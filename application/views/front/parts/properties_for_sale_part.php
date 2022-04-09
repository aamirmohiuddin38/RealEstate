<!-- Properties for sale -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-445202c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="445202c7" data-element_type="section">
  <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4b08a3c4" data-id="4b08a3c4" data-element_type="column">
        <div class="elementor-column-wrap elementor-element-populated">
          <div class="elementor-widget-wrap">
            <div class="elementor-element elementor-element-367d907f elementor-widget elementor-widget-spacer" data-id="367d907f" data-element_type="widget" data-widget_type="spacer.default">
              <div class="elementor-widget-container">
                <div class="elementor-spacer">
                  <div class="elementor-spacer-inner"></div>
                </div>
              </div>
            </div>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-2b212d18 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2b212d18" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-543764a2" data-id="543764a2" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-79998a8b animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title" data-id="79998a8b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="houzez_elementor_section_title.default">
                          <div class="elementor-widget-container">
                            <div class="houzez_section_title_wrap section-title-module">
                              <h2 class="houzez_section_title">Properties For Sale</h2>

                              <p class="houzez_section_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-12714def elementor-widget elementor-widget-houzez_elementor_properties_carousel_v2n" data-id="12714def" data-element_type="widget" data-widget_type="houzez_elementor_properties_carousel_v2n.default">
                          <div class="elementor-widget-container">

                            <div class="property-carousel-module houzez-carousel-arrows-n4K5T houzez-carousel-cols-3 property-carousel-module-v2">

                              <div class="property-carousel-buttons-wrap">
                                <button type="button" class="slick-prev-js-n4K5T slick-prev btn-primary-outlined">Prev</button>
                                <button type="button" class="slick-next-js-n4K5T slick-next btn-primary-outlined">Next</button>
                              </div><!-- property-carousel-buttons-wrap -->

                              <div class="listing-view grid-view">
                                <div id="houzez-properties-carousel-n4K5T" data-token="n4K5T" class="houzez-properties-carousel-js houzez-all-slider-wrap card-deck">
                                  <?php if (valArr($featured)) {
                                    foreach ($featured as $index => $property) { ?>
                                      <div class="item-listing-wrap hz-item-gallery-js card" data-images="[<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?>]">
                                        <div class="item-wrap item-wrap-v2 item-wrap-no-frame h-100">
                                          <div class="d-flex align-items-center h-100">
                                            <div class="item-header">
                                              <span class="label-featured label"><?php echo $property->p_featured ? "Featured" : ""; ?></span>
                                              <div class="labels-wrap labels-right">

                                                <a href="#status/for-sale/index.html" class="label-status label status-color-18">
                                                  <?php echo $property->ps_name; ?>
                                                </a>

                                              </div>
                                              <ul class="item-price-wrap hide-on-list">
                                                <li class="item-price">
                                                  <?php
                                                  $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                                                  echo $fmt->formatCurrency($property->p_price, "INR");
                                                  ?>
                                                </li>
                                                <!-- <li class="item-sub-price">$3,700/sq ft</li> -->
                                              </ul>
                                              <?php /*
                                              <ul class="item-tools">

                                                <li class="item-tool item-preview">
                                                  <span class="hz-show-lightbox-js" data-listid="282" data-toggle="tooltip" data-placement="top" title="Preview">
                                                    <i class="houzez-icon icon-expand-3"></i>
                                                  </span><!-- item-tool-favorite -->
                                                </li><!-- item-tool -->

                                                <li class="item-tool item-favorite">
                                                  <span class="add-favorite-js item-tool-favorite" data-toggle="tooltip" data-placement="top" title="Favourite" data-listid="282">
                                                    <i class="houzez-icon icon-love-it "></i>
                                                  </span><!-- item-tool-favorite -->
                                                </li><!-- item-tool -->

                                                <li class="item-tool item-compare">
                                                  <span class="houzez_compare compare-282 item-tool-compare show-compare-panel" data-toggle="tooltip" data-placement="top" title="Add to Compare" data-listing_id="282">
                                                    <i class="houzez-icon icon-add-circle"></i>
                                                  </span><!-- item-tool-compare -->
                                                </li><!-- item-tool -->
                                              </ul><!-- item-tools -->
                                              */ ?>
                                              <div class="listing-image-wrap">
                                                <div class="listing-thumb">
                                                  <a href="<?php echo base_url('houzez/property/' . $property->p_id) ?>" class="listing-featured-thumb hover-effect">
                                                    <img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?>" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?> 592w" sizes="(max-width: 592px) 100vw, 592px" /> </a><!-- hover-effect -->
                                                </div>
                                              </div>
                                              <div class="preview_loader"></div>
                                            </div><!-- item-header -->
                                            <div class="item-body flex-grow-1">
                                              <div class="labels-wrap labels-right">

                                                <a href="#status/for-sale/index.html" class="label-status label status-color-18">
                                                  <?php echo $property->ps_name; ?>
                                                </a>

                                              </div>
                                              <h2 class="item-title">
                                                <a href="<?php echo base_url('houzez/property/' . $property->p_id) ?>"><?php echo $property->p_title; ?></a>
                                              </h2><!-- item-title -->
                                              <ul class="item-price-wrap hide-on-list">
                                                <li class="item-price">
                                                  <?php
                                                  $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                                                  echo $fmt->formatCurrency($property->p_price, "INR");
                                                  ?></li>
                                                <!-- <li class="item-sub-price">$3,700/sq ft</li> -->
                                              </ul>
                                              <address class="item-address">
                                                <?php echo $property->pa_address . ' ' . $property->city . ', ' . $property->state . ', ' . $property->country . ' ' . $property->pa_postal_code; ?>
                                              </address>
                                              <ul class="item-amenities item-amenities-with-icons">
                                                <li class="h-beds"><span class="hz-figure"><?php echo $property->pd_bedrooms; ?> <i class="houzez-icon icon-hotel-double-bed-1 ml-1"></i></span> Bedrooms</li>
                                                <li class="h-baths"><span class="hz-figure"><?php echo $property->pd_bathrooms; ?> <i class="houzez-icon icon-bathroom-shower-1 mr-1"></i></span>Bathrooms</li>
                                                <li class="h-area"><span class="hz-figure"><?php echo $property->pd_area_size; ?> <i class="houzez-icon icon-ruler-triangle mr-1"></i></span>
                                                  <div class="area_postfix"><?php echo $property->pd_area_size_unit; ?></div>
                                                </li>
                                              </ul>
                                            </div><!-- item-body -->

                                          </div><!-- d-flex -->

                                        </div><!-- item-wrap -->
                                      </div><!-- item-listing-wrap -->
                                  <?php }
                                  } ?>
                                </div><!-- testimonials-slider -->
                              </div><!-- listing-view grid-view -->
                            </div><!-- testimonials-module -->

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="elementor-element elementor-element-365cf5b5 elementor-widget elementor-widget-spacer" data-id="365cf5b5" data-element_type="widget" data-widget_type="spacer.default">
              <div class="elementor-widget-container">
                <div class="elementor-spacer">
                  <div class="elementor-spacer-inner"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>