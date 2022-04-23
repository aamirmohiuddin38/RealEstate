<?php
// ddisplay($property);
?>
<section class="content-wrap property-wrap property-detail-v3">
  <div class="property-navigation-wrap">
    <div class="container-fluid">
      <ul class="property-navigation list-unstyled d-flex justify-content-between">
        <li class="property-navigation-item">
          <a class="back-top" href="#main-wrap">
            <i class="houzez-icon icon-arrow-button-circle-up"></i>
          </a>
        </li>
        <li class="property-navigation-item">
          <a class="target" href="#property-description-wrap">Description</a>
        </li>
        <li class="property-navigation-item">
          <a class="target" href="#property-address-wrap">Address</a>
        </li>
        <li class="property-navigation-item">
          <a class="target" href="#property-detail-wrap">Details</a>
        </li>
        <li class="property-navigation-item">
          <a class="target" href="#property-contact-agent-wrap">Contact</a>
        </li>
      </ul>
    </div><!-- container -->
  </div><!-- property-navigation-wrap -->
  <div class="page-title-wrap">
    <div class="container">
      <div class="d-flex align-items-center">

        <div class="breadcrumb-wrap">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><span>Home</span></a></li>
              <li class="breadcrumb-item"><a href="#">
                  <span><?php echo $property->type_name; ?></span></a></li>
              <li class="breadcrumb-item active"><?php echo $property->p_title; ?></li>
            </ol>
          </nav>
        </div><!-- breadcrumb-wrap -->
      
      </div><!-- d-flex -->
      <div class="d-flex align-items-center property-title-price-wrap">
        <div class="page-title">
          <h1><?php echo $property->p_title; ?></h1>
        </div><!-- page-title -->
        <ul class="item-price-wrap hide-on-list">
          <li class="item-price">
            <?php
            $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
            echo $fmt->formatCurrency($property->p_price, "INR");
            ?>
          </li>
        </ul>
      </div><!-- d-flex -->
      <div class="property-labels-wrap">
        <!-- <?php if ($property->p_featured) { ?>
          <span class="label-featured label">Featured</span>
        <?php } ?> -->
        <a href="#status/for-sale/index.html" class="label-status label status-color-18">
          <?php echo $property->label_name; ?>
        </a>
        <a href="#label/hot-offer/index.html" class="hz-label label label-color-38">
          <?php echo $property->status_name; ?>
        </a>
      </div>
      <!-- <div class="property-labels-wrap">
        <a href="#status/for-rent/index.html" class="label-status label status-color-34">
          <?php echo $property->label_name; ?>
        </a>
        <a href="#status/for-rent/index.html" class="label-status label status-color-34">
          <?php echo $property->status_name; ?>
        </a>
      </div> -->
      <address class="item-address"><i class="houzez-icon icon-pin mr-1"></i>
        <?php echo $property->p_address . ' ' . $property->city_name . ', ' . $property->state_name . ', ' . $property->country . ' ' . $property->p_postal_code; ?>
      </address>
    </div><!-- container -->
  </div><!-- page-title-wrap -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 bbt-content-wrap">
        <div class="property-top-wrap">
          <div class="property-banner">
            <div class="container hidden-on-mobile">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <!-- <li class="nav-item">
                  <a class="nav-link active" id="pills-gallery-tab" data-toggle="pill" href="#pills-gallery" role="tab" aria-controls="pills-gallery" aria-selected="true">
                    <i class="houzez-icon icon-picture-sun"></i>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="true">
                    <i class="houzez-icon icon-maps"></i>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " id="pills-street-view-tab" data-toggle="pill" href="#pills-street-view" role="tab" aria-controls="pills-street-view" aria-selected="false">
                    <i class="houzez-icon icon-location-user"></i>
                  </a>
                </li> -->
              </ul><!-- nav -->
            </div><!-- container -->

            <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane show active" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
                <div class="top-gallery-section">
                  <div id="property-gallery-js" class="listing-slider cS-hidden">
                    <?php if (valArr($property_images)) {
                      foreach ($property_images as $key => $image) { ?>
                        <div data-thumb="<?php echo base_url($image->img_file_path); ?>">
                          <a rel="gallery-1" data-slider-no="<?php echo $key; ?>" href="#" class="houzez-trigger-popup-slider-js swipebox" data-toggle="modal" data-target="#property-lightbox">
                            <img class="img-fluid" src="<?php echo base_url($image->img_file_path); ?>" alt="" title="008">
                          </a>
                        </div>
                    <?php }
                    } ?>

                  </div>
                </div><!-- top-gallery-section -->
              </div>

              <div class="tab-pane " id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                <div class="map-wrap">
                  <div id="houzez-single-listing-map"></div>
                </div>
              </div>

              <div class="tab-pane " id="pills-street-view" role="tabpanel" aria-labelledby="pills-street-view-tab">
              </div>

            </div><!-- tab-content -->
          </div><!-- property-banner -->
        </div><!-- property-top-wrap -->

        <div class="property-view">

          <div class="visible-on-mobile">
            <div class="mobile-top-wrap">
              <div class="mobile-property-tools clearfix">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">

                  <li class="nav-item">
                    <a class="nav-link active" id="pills-gallery-tab" data-toggle="pill" href="#pills-gallery" role="tab" aria-controls="pills-gallery" aria-selected="true">
                      <i class="houzez-icon icon-picture-sun"></i>
                    </a>
                  </li>

                  <!-- <li class="nav-item">
                    <a class="nav-link " id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="true">
                      <i class="houzez-icon icon-maps"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link " id="pills-street-view-tab" data-toggle="pill" href="#pills-street-view" role="tab" aria-controls="pills-street-view" aria-selected="false">
                      <i class="houzez-icon icon-location-user"></i>
                    </a>
                  </li> -->
                </ul><!-- nav -->
                <ul class="item-tools">

                  <li class="item-tool houzez-favorite hide">
                    <span class="add-favorite-js item-tool-favorite" data-listid="437">
                      <i class="houzez-icon icon-love-it "></i>
                    </span><!-- item-tool-favorite -->
                  </li><!-- item-tool -->

                  <li class="item-tool houzez-share">
                    <span class="item-tool-share dropdown-toggle" data-toggle="dropdown">
                      <i class="houzez-icon icon-share"></i>
                    </span><!-- item-tool-favorite -->
                    <div class="dropdown-menu dropdown-menu-right item-tool-dropdown-menu">

                      <a class="dropdown-item" target="_blank" href="https://api.whatsapp.com/send?text=<?php echo $property->p_title . ' ' . base_url('houzez/property/' . $property->p_id); ?>">
                        <i class="houzez-icon icon-messaging-whatsapp mr-1"></i> WhatsApp</a>

                      <a class="dropdown-item" href="https://www.facebook.com/sharer.php?u<?php echo $property->p_title . ' ' . base_url('houzez/property/' . $property->p_id); ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                        <i class="houzez-icon icon-social-media-facebook mr-1"></i> Facebook
                      </a>
                      <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=Renovated+apartment+at+last+floor&amp;url=<?php echo $property->p_title . ' ' . base_url('houzez/property/' . $property->p_id); ?>&amp;via=Hyunkunun" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}">
                        <i class="houzez-icon icon-social-media-twitter mr-1"></i> Twitter
                      </a>

                      <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo base_url('houzez/property/' . $property->p_id); ?>&amp;title=<?php echo $property->p_title; ?>&amp;source=<?php echo base_url('houzez/property/' . $property->p_id); ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                        <i class="houzez-icon icon-professional-network-linkedin mr-1"></i> Linkedin
                      </a>

                    </div>
                  </li><!-- item-tool -->

                  <li class="item-tool houzez-print" data-propid="437">
                    <span class="item-tool-compare">
                      <i class="houzez-icon icon-print-text"></i>
                    </span><!-- item-tool-compare -->
                  </li><!-- item-tool -->
                </ul><!-- item-tools -->
              </div><!-- mobile-property-tools -->
              <div class="mobile-property-title clearfix">
                <span class="labels-wrap labels-right">
                  <a href="#status/for-rent/index.html" class="label-status label status-color-34">
                    <?php echo $property->pl_name; ?>
                  </a>
                  <a href="#/status/for-rent/index.html" class="label-status label status-color-34">
                    <?php echo $property->ps_name; ?>
                  </a>
                </span>

                <div class="page-title">
                  <h1><?php echo $property->p_title; ?></h1>
                </div><!-- page-title -->
                <address class="item-address"><i class="houzez-icon icon-pin mr-1"></i>
                  <?php echo $property->pa_address . ' ' . $property->city . ', ' . $property->state . ', ' . $property->country . ' ' . $property->pa_postal_code; ?>
                </address>
                <ul class="item-price-wrap hide-on-list">
                  <li class="item-price">
                    <?php
                    $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                    echo $fmt->formatCurrency($property->p_price, "INR");
                    ?>
                  </li>
                </ul>
              </div><!-- mobile-property-title -->
            </div><!-- mobile-top-wrap -->
          </div><!-- visible-on-mobile -->

          <div class="property-overview-wrap property-section-wrap" id="property-overview-wrap">
            <div class="block-wrap">

              <div class="block-title-wrap d-flex justify-content-between align-items-center">
                <h2>Overview</h2>

                <!-- <div><strong>Property ID:</strong> <?php //echo $property->p_unique_id; ?></div> -->
              </div><!-- block-title-wrap -->

              <div class="d-flex property-overview-data">
                <ul class="list-unstyled flex-fill">
                  <li class="property-overview-item"><strong><?php echo $property->type_name; ?></strong></li>
                  <li class="hz-meta-label property-overview-type">Property Type</li>

                </ul>
                <ul class="list-unstyled flex-fill">
                  <li class="property-overview-item"><i class="houzez-icon icon-hotel-double-bed-1 mr-1"></i>
                    <strong><?php echo $property->pd_bedrooms; ?></strong>
                  </li>
                  <li class="hz-meta-label h-beds">Bedrooms</li>
                </ul>
                <ul class="list-unstyled flex-fill">
                  <li class="property-overview-item"><i class="houzez-icon icon-bathroom-shower-1 mr-1"></i>
                    <strong><?php echo $property->pd_bathrooms; ?></strong>
                  </li>
                  <li class="hz-meta-label h-baths">Bathrooms</li>
                </ul>
                <ul class="list-unstyled flex-fill">
                  <li class="property-overview-item"><i class="houzez-icon icon-car-1 mr-1"></i> <strong><?php echo $property->p_garage; ?></strong>
                  </li>
                  <li class="hz-meta-label h-garage">Garage</li>
                </ul>
                <ul class="list-unstyled flex-fill">
                  <li class="property-overview-item"><i class="houzez-icon icon-real-estate-dimensions-plan-1 mr-1"></i> <strong><?php echo $property->pd_area_size; ?></strong></li>
                  <li class="hz-meta-label h-area"><?php echo $property->pd_area_size_unit; ?></li>
                </ul>
                <ul class="list-unstyled flex-fill">
                  <li class="property-overview-item"><i class="houzez-icon icon-calendar-3 mr-1"></i>
                    <strong><?php echo $property->p_year; ?></strong>
                  </li>
                  <li class="hz-meta-label h-year-built">Year Built</li>
                </ul>
              </div><!-- d-flex -->
            </div><!-- block-wrap -->
          </div><!-- property-overview-wrap -->
          <div class="property-description-wrap property-section-wrap" id="property-description-wrap">
            <div class="block-wrap">
              <div class="block-title-wrap">
                <h2>Description</h2>
              </div>
              <div class="block-content-wrap">
                <p><?php echo $property->p_content; ?></p>
              </div>
            </div>
          </div>
          <div class="property-address-wrap property-section-wrap" id="property-address-wrap">
            <div class="block-wrap">
              <div class="block-title-wrap d-flex justify-content-between align-items-center">
                <h2>Address</h2>

                <!-- <a class="btn btn-primary btn-slim" href="http://maps.google.com/?q=10425%20Tabor%20St,%20Los%20Angeles,%20CA%2090034,%20USA" target="_blank"><i class="houzez-icon icon-maps mr-1"></i> Open on Google Maps</a> -->

              </div><!-- block-title-wrap -->
              <div class="block-content-wrap">
                <ul class="list-2-cols list-unstyled">
                  <li class="detail-address"><strong>Address</strong>
                    <span><?php echo $property->p_address; ?></span>
                  </li>
                  <li class="detail-city"><strong>City</strong>
                    <span><?php echo $property->city_name; ?></span>
                  </li>
                  <li class="detail-state"><strong>State</strong>
                    <span><?php echo $property->state_name; ?></span>
                  </li>
                  <li class="detail-zip"><strong>Zip/Postal Code</strong>
                    <span><?php echo $property->p_postal_code; ?></span>
                  </li>
                  <li class="detail-area"><strong>Area</strong>
                    <span><?php echo $property->pd_area_size; ?></span>
                  </li>
                  <li class="detail-country"><strong>Country</strong>
                    <span><?php echo $property->country; ?></span>
                  </li>
                </ul>
              </div><!-- block-content-wrap -->


            </div><!-- block-wrap -->
          </div><!-- property-address-wrap -->
          <div class="property-detail-wrap property-section-wrap" id="property-detail-wrap">
            <div class="block-wrap">
              <div class="block-title-wrap d-flex justify-content-between align-items-center">
                <h2>Details</h2>
                <span class="small-text grey"><i class="houzez-icon icon-calendar-3 mr-1"></i> Updated on April 4,
                  2020 at 5:19 pm</span>
              </div><!-- block-title-wrap -->
              <div class="block-content-wrap">
                <div class="detail-wrap">
                  <ul class="list-2-cols list-unstyled">
                    <!-- <li>
                      <strong>Property ID:</strong>
                      <span><?php // echo $property->p_unique_id; ?></span>
                    </li> -->
                    <li> 
                      <strong>Price:</strong>
                      <span>
                        <?php
                        $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                        echo $fmt->formatCurrency($property->p_price, "INR");
                        ?>
                      </span>
                    </li>
                    <li>
                      <strong>Property Area:</strong>
                      <span>
                        <?php
                        echo $property->pd_area_size . ' ' . $property->pd_area_size_unit;
                        ?></span>
                    </li>
                    <li>
                      <strong>Property Land Area:</strong>
                      <span>
                        <?php
                        echo $property->p_land . ' ' . $property->p_land_unit;
                        ?></span>
                    </li>
                    <li>
                      <strong>Bedrooms:</strong>
                      <span>
                        <?php echo $property->pd_bedrooms; ?>
                      </span>
                    </li>
                    <li>
                      <strong>Bathrooms:</strong>
                      <span>
                        <?php echo $property->pd_bathrooms; ?>
                      </span>
                    </li>
                    <li>
                      <strong>Garage:</strong>
                      <span><?php echo $property->p_garage; ?></span>
                    </li>
                    <li>
                      <strong>Garage Size:</strong>
                      <span><?php echo $property->p_garages_unit; ?></span>
                    </li>
                    <li>
                      <strong>Year Built:</strong>
                      <span><?php echo $property->p_year; ?></span>
                    </li>
                    <li class="prop_type">
                      <strong>Property Type:</strong>
                      <span><?php echo $property->type_name; ?></span>
                    </li>
                    <li class="prop_status">
                      <strong>Property Status:</strong>
                      <span><?php echo $property->status_name; ?></span>
                    </li>
                    <li class="prop_label">
                      <strong>Property Label:</strong>
                      <span><?php echo $property->label_name; ?></span>
                    </li>
                  </ul>
                </div>

          
          <!-- Floor Plan Section -->

          <!-- property-schedule-tour-wrap -->

          <!-- property-video-wrap -->

          <!-- property-virtual-tour-wrap -->

          <!-- property-walkscore-wrap -->

          <!-- property-walkscore-wrap -->

          <div class="property-contact-agent-wrap property-section-wrap" id="property-contact-agent-wrap">
            <div class="block-wrap">

              <div class="block-title-wrap d-flex justify-content-between align-items-center">
                <h2>Contact Information</h2>

                <a class="btn btn-primary btn-slim hide" href="#agency/modern-house-real-estate/index.html" target="_blank">View Listings</a>
              </div><!-- block-title-wrap -->

              <div class="block-content-wrap">

                <form method="post" action="#">
                  <div class="agent-details">
                    <div class="d-flex align-items-center">
                      <div class="agent-image hide"><a href="#agency/modern-house-real-estate/index.html"><img class="rounded" src="#432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/10/Artboard-2-Copy-150x150.jpg" alt="Modern House Real Estate" width="80" height="80"></a></div>
                      <ul class="agent-information list-unstyled">
                        <li class="agent-name"><i class="houzez-icon icon-single-neutral mr-1"></i>
                          HomeSphere
                        </li>
                        <li class="agent-phone-wrap clearfix">
                          <i class="houzez-icon icon-phone mr-1"></i>
                          <span class="agent-phone ">
                            <a href="tel:9622806016">7006112233</a>
                          </span>
                          <i class="houzez-icon icon-mobile-phone mr-1"></i>
                          <span class="agent-phone ">
                            <a href="tel:7006382025">7006112233</a>
                          </span>
                        </li>
                        <!-- agent-social-media -->

                      </ul>
                    </div>
                  </div>
                  <div class="block-title-wrap">
                    <h3>Enquire About This Property</h3>
                  </div>

                  <div class="form_messages"></div>

                  <div class="row">

                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control" name="first_name" placeholder="Enter your name" type="text">
                      </div>
                    </div><!-- col-md-6 col-sm-12 -->

                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control" name="last_name" placeholder="Enter your name" type="text">
                      </div>
                    </div><!-- col-md-6 col-sm-12 -->

                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control" name="f_phone" placeholder="Enter your Phone" type="text">
                      </div>
                    </div><!-- col-md-6 col-sm-12 -->

                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" placeholder="Enter your email" type="email">
                      </div>
                    </div><!-- col-md-6 col-sm-12 -->


                    <div class="col-md-6 col-sm-12 hide">
                      <div class="form-group">
                        <label>I'm a</label>
                        <select name="user_type" class="selectpicker form-control bs-select-hidden" title="Select">
                          <option value="buyer">I'm a buyer</option>

                          <option value="tennant">I'm a tennant</option>

                          <option value="agent">I'm an agent</option>

                          <option value="other">Other</option>
                        </select><!-- selectpicker -->
                      </div>
                    </div><!-- col-md-6 col-sm-12 -->

                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label>Subject</label>
                        <input class="form-control" name="f_subject" placeholder="Enter your Subject" type="text">
                      </div>
                    </div><!-- col-md-6 col-sm-12 -->

                    <div class="col-sm-12 col-xs-12">
                      <div class="form-group form-group-textarea">
                        <label>Message</label>
                        <textarea class="form-control hz-form-message" name="message" rows="5" placeholder="Enter your Message">Hello, I am interested in [<?php echo $property->p_title ?>]</textarea>
                      </div>
                    </div><!-- col-sm-12 col-xs-12 -->

                    <div class="col-sm-12 col-xs-12 hide">
                      <div class="form-group">
                        <label class="control control--checkbox m-0 hz-terms-of-use">
                          <input type="checkbox" name="privacy_policy">By submitting this form I agree to <a target="_blank" href="../../terms-and-conditions/index.html">Terms of Use</a>
                          <span class="control__indicator"></span>
                        </label>
                      </div><!-- form-group -->
                    </div>

                    <div class="col-sm-12 col-xs-12">
                      <input type="hidden" name="target_email" value="ag&#101;&#110;&#99;&#121;&#50;&#64;&#104;ouz&#101;z&#46;co">
                      <input type="hidden" name="property_agent_contact_security" value="95d2ff6887" />
                      <input type="hidden" name="property_permalink" value="index.html" />
                      <input type="hidden" name="property_title" value="Renovated apartment at last floor" />
                      <input type="hidden" name="property_id" value="HZ48" />
                      <input type="hidden" name="action" value="houzez_property_agent_contact">
                      <input type="hidden" class="is_bottom" value="bottom">
                      <input type="hidden" name="listing_id" value="437">
                      <input type="hidden" name="is_listing_form" value="yes">
                      <input type="hidden" name="agent_id" value="2784">
                      <input type="hidden" name="agent_type" value="agency_info">


                      <button class="houzez_agent_property_form btn btn-secondary btn-sm-full-width">
                        <span class="btn-loader houzez-loader-js"></span> Request Information
                      </button>


                    </div><!-- col-sm-12 col-xs-12 -->
                  </div><!-- row -->
                </form>

              </div><!-- block-content-wrap -->
            </div><!-- block-wrap -->
          </div><!-- property-schedule-tour-wrap -->

          <div class="property-review-wrap property-section-wrap hide" id="property-review-wrap">
            <div class="block-title-wrap review-title-wrap d-flex align-items-center">
              <h2>1 Review</h2>
              <div class="rating-score-wrap flex-grow-1">

                <span class="star"><i class="icon-rating full-star"></i></span>
                <span class="star"><i class="icon-rating full-star"></i></span>
                <span class="star"><i class="icon-rating full-star"></i></span>
                <span class="star"><i class="icon-rating full-star"></i></span>
                <span class="star"><i class="icon-rating empty-star"></i></span>

                <span class="star-text star-text-right">
                  (<span itemprop="ratingValue">4</span> out of <span itemprop="bestRating">5</span>)
                </span>
              </div>

              <div class="sort-by">
                <div class="d-flex align-items-center">
                  <div class="sort-by-title">
                    Sort by:
                  </div><!-- sort-by-title -->
                  <select id="sort_review" class="selectpicker form-control bs-select-hidden" title="" data-live-search="false" data-dropdown-align-right="auto">
                    <option value="">Default Order</option>
                    <option value="a_date">Date Old to New</option>
                    <option value="d_date">Date New to Old</option>
                    <option value="a_rating">Rating (Low to High)</option>
                    <option value="d_rating">Rating (High to Low)</option>
                  </select>
                </div><!-- d-flex -->
              </div><!-- sort-by -->
              <a class="btn btn-primary btn-slim" href="#property-review-form">Leave a Review</a>
            </div>

            <input type="hidden" name="review_paged" id="review_paged" value="1">
            <input type="hidden" name="total_pages" id="total_pages" value="1">

            <ul id="houzez_reviews_container" class="review-list-wrap list-unstyled">
              <li id="review-16931" class="property-review">
                <div class="d-flex">
                  <div class="review-image flex-grow-1">
                    <img class="rounded-circle" src="#432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/themes/houzez/img/profile-avatar.png" width="64" height="64" alt="thumb">
                  </div>
                  <div class="review-message">
                    <div class="d-flex align-items-center">
                      <h4 class="review-title">Lorem Ipsum is simply dummy</h4>
                      <div class="rating-score-wrap flex-grow-1">

                        <span class="star"><i class="icon-rating full-star"></i></span>
                        <span class="star"><i class="icon-rating full-star"></i></span>
                        <span class="star"><i class="icon-rating full-star"></i></span>
                        <span class="star"><i class="icon-rating full-star"></i></span>
                        <span class="star"><i class="icon-rating empty-star"></i></span>
                      </div>
                    </div><!-- d-flex -->
                    <time class="review-date"><i class="houzez-icon icon-attachment mr-1"></i> 1 year ago</time>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                      been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer
                      took a galley of type and scrambled it to make a type specimen book.</p>

                    <div class="review-like mt-2">
                      <ul class="likes-container-js list-inline">

                        <li class="list-inline-item"><span class="vote-msg"></span></li>
                        <span class="btn-loader houzez-loader-js"></span>
                        <li class="list-inline-item review-like-button">
                          <a class="hz-like-dislike-js" data-id="16931" data-type="likes" data-msg="You have already voted">
                            <i class="houzez-icon icon-like mr-1"></i>
                          </a>
                          <span class="likes-count">1</span>
                        </li>
                        <li class="list-inline-item review-dislike-button">
                          <a class="hz-like-dislike-js" data-id="16931" data-type="dislikes" data-msg="You have already voted">
                            <i class="houzez-icon icon-dislike mr-1"></i>
                          </a>
                          <span class="dislikes-count">0</span>
                        </li>

                      </ul>
                    </div>
                  </div><!-- review-message -->
                </div><!-- d-flex -->
              </li><!-- property-review -->
            </ul>


            <div class="block-wrap" id="property-review-form">
              <div class="block-title-wrap">
                <h3>Leave a Review</h3>
              </div>

              <div class="block-content-wrap">
                <form method="post">
                  <input type="hidden" name="review-security" value="68010b8b46" />
                  <input type="hidden" name="listing_id" value="437" />
                  <input type="hidden" name="review_id" value="0" />
                  <input type="hidden" name="listing_title" value="Renovated apartment at last floor" />
                  <input type="hidden" name="permalink" value="index.html" />
                  <input type="hidden" name="review_post_type" value="property">
                  <input type="hidden" name="action" value="houzez_submit_review">
                  <input type="hidden" name="is_update" value="">

                  <div class="form_messages"></div>
                  <div class="row">

                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="review_email" placeholder="you@example.com" type="text">
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="review_title" value="" placeholder="Enter a title" type="text">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Rating</label>
                        <select name="review_stars" class="selectpicker form-control bs-select-hidden" title="Select" data-live-search="false">
                          <option value="">Select</option>
                          <option value="1">1 Star - Poor</option>
                          <option value="2">2 Star - Fair</option>
                          <option value="3">3 Star - Average</option>
                          <option value="4">4 Star - Good</option>
                          <option value="5">5 Star - Excellent</option>
                        </select><!-- selectpicker -->
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="form-group form-group-textarea">
                        <label>Review</label>
                        <textarea class="form-control" name="review" rows="5" placeholder="Write a review"></textarea>
                      </div>
                    </div><!-- col-sm-12 col-xs-12 -->
                    <div class="col-sm-12 col-xs-12">
                      <button id="submit-review" class="btn btn-secondary btn-sm-full-width">
                        <span class="btn-loader houzez-loader-js"></span> Submit Review </button>
                    </div><!-- col-sm-12 col-xs-12 -->
                  </div><!-- row -->
                </form>
              </div><!-- block-content-wrap -->
            </div>
          </div>

          <div id="similar-listings-wrap" class="similar-property-wrap listing-v2 hide">
            <div class="block-title-wrap">
              <h2>Similar Listings</h2>
            </div><!-- block-title-wrap -->
            <div class="listing-view grid-view card-deck">
              <div class="item-listing-wrap hz-item-gallery-js card" data-images="[&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/02\/033-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/008-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/012-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/030-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/040-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/045-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/047-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/02\/033-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/035-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/036-592x444.jpg&quot;]">
                <div class="item-wrap item-wrap-v2 item-wrap-no-frame h-100">
                  <div class="d-flex align-items-center h-100">
                    <div class="item-header">
                      <div class="labels-wrap labels-right">

                        <a href="../../status/for-rent/index.html" class="label-status label status-color-34">
                          For Rent
                        </a>

                      </div>
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">$1,890/mo</li>
                      </ul>
                      <ul class="item-tools">

                        <li class="item-tool item-preview">
                          <span class="hz-show-lightbox-js" data-listid="127" data-toggle="tooltip" data-placement="top" title="Preview">
                            <i class="houzez-icon icon-expand-3"></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-favorite">
                          <span class="add-favorite-js item-tool-favorite" data-toggle="tooltip" data-placement="top" title="Favourite" data-listid="127">
                            <i class="houzez-icon icon-love-it "></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-compare">
                          <span class="houzez_compare compare-127 item-tool-compare show-compare-panel" data-toggle="tooltip" data-placement="top" title="Add to Compare" data-listing_id="127">
                            <i class="houzez-icon icon-add-circle"></i>
                          </span><!-- item-tool-compare -->
                        </li><!-- item-tool -->
                      </ul><!-- item-tools -->
                      <div class="listing-image-wrap">
                        <div class="listing-thumb">
                          <a href="../amazing-oceanfront-apartment/index.html" class="listing-featured-thumb hover-effect">
                            <img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/033-592x444.jpg" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/033-592x444.jpg 592w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/033-300x225.jpg 300w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/033-1024x768.jpg 1024w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/033-768x576.jpg 768w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/033.jpg 1170w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/033-584x438.jpg 584w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/033-800x600.jpg 800w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/033-496x372.jpg 496w" sizes="(max-width: 592px) 100vw, 592px" /> </a><!-- hover-effect -->
                        </div>
                      </div>
                      <div class="preview_loader"></div>
                    </div><!-- item-header -->
                    <div class="item-body flex-grow-1">
                      <div class="labels-wrap labels-right">

                        <a href="../../status/for-rent/index.html" class="label-status label status-color-34">
                          For Rent
                        </a>

                      </div>
                      <h2 class="item-title">
                        <a href="../amazing-oceanfront-apartment/index.html">Renovated kitchen apartment</a>
                      </h2><!-- item-title -->
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">$1,890/mo</li>
                      </ul>
                      <address class="item-address">NE 50th Terrace, Miami, FL 33137, USA</address>
                      <ul class="item-amenities item-amenities-with-icons">
                        <li class="h-beds"><span class="hz-figure">2 <i class="houzez-icon icon-hotel-double-bed-1 ml-1"></i></span> Bedrooms</li>
                        <li class="h-baths"><span class="hz-figure">2 <i class="houzez-icon icon-bathroom-shower-1 mr-1"></i></span>Bathrooms</li>
                        <li class="h-area"><span class="hz-figure">1320 <i class="houzez-icon icon-ruler-triangle mr-1"></i></span>
                          <div class="area_postfix">Sq Ft</div>
                        </li>
                      </ul>
                    </div><!-- item-body -->

                  </div><!-- d-flex -->

                </div><!-- item-wrap -->
              </div><!-- item-listing-wrap -->
              <div class="item-listing-wrap hz-item-gallery-js card" data-images="[&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/02\/039-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/008-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/012-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/036-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/040-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/045-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/047-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/02\/039-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/030-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/035-592x444.jpg&quot;]">
                <div class="item-wrap item-wrap-v2 item-wrap-no-frame h-100">
                  <div class="d-flex align-items-center h-100">
                    <div class="item-header">
                      <div class="labels-wrap labels-right">

                        <a href="../../status/for-rent/index.html" class="label-status label status-color-34">
                          For Rent
                        </a>

                      </div>
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">$5,600/mo</li>
                      </ul>
                      <ul class="item-tools">

                        <li class="item-tool item-preview">
                          <span class="hz-show-lightbox-js" data-listid="112" data-toggle="tooltip" data-placement="top" title="Preview">
                            <i class="houzez-icon icon-expand-3"></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-favorite">
                          <span class="add-favorite-js item-tool-favorite" data-toggle="tooltip" data-placement="top" title="Favourite" data-listid="112">
                            <i class="houzez-icon icon-love-it "></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-compare">
                          <span class="houzez_compare compare-112 item-tool-compare show-compare-panel" data-toggle="tooltip" data-placement="top" title="Add to Compare" data-listing_id="112">
                            <i class="houzez-icon icon-add-circle"></i>
                          </span><!-- item-tool-compare -->
                        </li><!-- item-tool -->
                      </ul><!-- item-tools -->
                      <div class="listing-image-wrap">
                        <div class="listing-thumb">
                          <a href="../complex-building-ocean-front/index.html" class="listing-featured-thumb hover-effect">
                            <img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/039-592x444.jpg" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/039-592x444.jpg 592w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/039-300x225.jpg 300w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/039-1024x768.jpg 1024w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/039-768x576.jpg 768w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/039.jpg 1170w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/039-584x438.jpg 584w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/039-800x600.jpg 800w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/039-496x372.jpg 496w" sizes="(max-width: 592px) 100vw, 592px" /> </a><!-- hover-effect -->
                        </div>
                      </div>
                      <div class="preview_loader"></div>
                    </div><!-- item-header -->
                    <div class="item-body flex-grow-1">
                      <div class="labels-wrap labels-right">

                        <a href="../../status/for-rent/index.html" class="label-status label status-color-34">
                          For Rent
                        </a>

                      </div>
                      <h2 class="item-title">
                        <a href="../complex-building-ocean-front/index.html">Complex</a>
                      </h2><!-- item-title -->
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">$5,600/mo</li>
                      </ul>
                      <address class="item-address">2195 SW 8th St, Miami, FL 33135, USA</address>
                      <ul class="item-amenities item-amenities-with-icons">
                        <li class="h-beds"><span class="hz-figure">5 <i class="houzez-icon icon-hotel-double-bed-1 ml-1"></i></span> Bedrooms</li>
                        <li class="h-baths"><span class="hz-figure">3 <i class="houzez-icon icon-bathroom-shower-1 mr-1"></i></span>Bathrooms</li>
                        <li class="h-area"><span class="hz-figure">3450 <i class="houzez-icon icon-ruler-triangle mr-1"></i></span>
                          <div class="area_postfix">Sq Ft</div>
                        </li>
                      </ul>
                    </div><!-- item-body -->

                  </div><!-- d-flex -->

                </div><!-- item-wrap -->
              </div><!-- item-listing-wrap -->
              <div class="item-listing-wrap hz-item-gallery-js card" data-images="[&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/02\/038-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/035-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/036-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/040-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/045-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/047-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/02\/038-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/030-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/012-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/008-592x444.jpg&quot;]">
                <div class="item-wrap item-wrap-v2 item-wrap-no-frame h-100">
                  <div class="d-flex align-items-center h-100">
                    <div class="item-header">
                      <span class="label-featured label">Featured</span>
                      <div class="labels-wrap labels-right">

                        <a href="../../status/for-rent/index.html" class="label-status label status-color-34">
                          For Rent
                        </a>

                      </div>
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">$4,500/mo</li>
                      </ul>
                      <ul class="item-tools">

                        <li class="item-tool item-preview">
                          <span class="hz-show-lightbox-js" data-listid="115" data-toggle="tooltip" data-placement="top" title="Preview">
                            <i class="houzez-icon icon-expand-3"></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-favorite">
                          <span class="add-favorite-js item-tool-favorite" data-toggle="tooltip" data-placement="top" title="Favourite" data-listid="115">
                            <i class="houzez-icon icon-love-it "></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-compare">
                          <span class="houzez_compare compare-115 item-tool-compare show-compare-panel" data-toggle="tooltip" data-placement="top" title="Add to Compare" data-listing_id="115">
                            <i class="houzez-icon icon-add-circle"></i>
                          </span><!-- item-tool-compare -->
                        </li><!-- item-tool -->
                      </ul><!-- item-tools -->
                      <div class="listing-image-wrap">
                        <div class="listing-thumb">
                          <a href="../modern-apartment-on-the-bay/index.html" class="listing-featured-thumb hover-effect">
                            <img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/038-592x444.jpg" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/038-592x444.jpg 592w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/038-300x225.jpg 300w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/038-1024x768.jpg 1024w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/038-768x576.jpg 768w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/038.jpg 1170w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/038-584x438.jpg 584w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/038-800x600.jpg 800w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/038-496x372.jpg 496w" sizes="(max-width: 592px) 100vw, 592px" /> </a><!-- hover-effect -->
                        </div>
                      </div>
                      <div class="preview_loader"></div>
                    </div><!-- item-header -->
                    <div class="item-body flex-grow-1">
                      <div class="labels-wrap labels-right">

                        <a href="../../status/for-rent/index.html" class="label-status label status-color-34">
                          For Rent
                        </a>

                      </div>
                      <h2 class="item-title">
                        <a href="../modern-apartment-on-the-bay/index.html">Light and modern apartment</a>
                      </h2><!-- item-title -->
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">$4,500/mo</li>
                      </ul>
                      <address class="item-address">2436 SW 8th St, Miami, FL 33135, USA</address>
                      <ul class="item-amenities item-amenities-with-icons">
                        <li class="h-beds"><span class="hz-figure">4 <i class="houzez-icon icon-hotel-double-bed-1 ml-1"></i></span> Bedrooms</li>
                        <li class="h-baths"><span class="hz-figure">2 <i class="houzez-icon icon-bathroom-shower-1 mr-1"></i></span>Bathrooms</li>
                        <li class="h-area"><span class="hz-figure">1200 <i class="houzez-icon icon-ruler-triangle mr-1"></i></span>
                          <div class="area_postfix">Sq Ft</div>
                        </li>
                      </ul>
                    </div><!-- item-body -->

                  </div><!-- d-flex -->

                </div><!-- item-wrap -->
              </div><!-- item-listing-wrap -->
              <div class="item-listing-wrap hz-item-gallery-js card" data-images="[&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/02\/037-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/030-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/012-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/035-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/036-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/040-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/045-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/047-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/02\/037-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/008-592x444.jpg&quot;]">
                <div class="item-wrap item-wrap-v2 item-wrap-no-frame h-100">
                  <div class="d-flex align-items-center h-100">
                    <div class="item-header">
                      <div class="labels-wrap labels-right">

                        <a href="../../status/for-rent/index.html" class="label-status label status-color-34">
                          For Rent
                        </a>

                      </div>
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">$3,500/mo</li>
                      </ul>
                      <ul class="item-tools">

                        <li class="item-tool item-preview">
                          <span class="hz-show-lightbox-js" data-listid="123" data-toggle="tooltip" data-placement="top" title="Preview">
                            <i class="houzez-icon icon-expand-3"></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-favorite">
                          <span class="add-favorite-js item-tool-favorite" data-toggle="tooltip" data-placement="top" title="Favourite" data-listid="123">
                            <i class="houzez-icon icon-love-it "></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-compare">
                          <span class="houzez_compare compare-123 item-tool-compare show-compare-panel" data-toggle="tooltip" data-placement="top" title="Add to Compare" data-listing_id="123">
                            <i class="houzez-icon icon-add-circle"></i>
                          </span><!-- item-tool-compare -->
                        </li><!-- item-tool -->
                      </ul><!-- item-tools -->
                      <div class="listing-image-wrap">
                        <div class="listing-thumb">
                          <a href="../apartment-for-rent-in-downtown/index.html" class="listing-featured-thumb hover-effect">
                            <img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/037-592x444.jpg" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/037-592x444.jpg 592w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/037-300x225.jpg 300w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/037-1024x768.jpg 1024w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/037-768x576.jpg 768w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/037.jpg 1170w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/037-584x438.jpg 584w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/037-800x600.jpg 800w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/02/037-496x372.jpg 496w" sizes="(max-width: 592px) 100vw, 592px" /> </a><!-- hover-effect -->
                        </div>
                      </div>
                      <div class="preview_loader"></div>
                    </div><!-- item-header -->
                    <div class="item-body flex-grow-1">
                      <div class="labels-wrap labels-right">

                        <a href="../../status/for-rent/index.html" class="label-status label status-color-34">
                          For Rent
                        </a>

                      </div>
                      <h2 class="item-title">
                        <a href="../apartment-for-rent-in-downtown/index.html">Green view design</a>
                      </h2><!-- item-title -->
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">$3,500/mo</li>
                      </ul>
                      <address class="item-address">621 Beacom Blvd, Miami, FL 33135, USA</address>
                      <ul class="item-amenities item-amenities-with-icons">
                        <li class="h-beds"><span class="hz-figure">1 <i class="houzez-icon icon-hotel-double-bed-1 ml-1"></i></span> Bedroom</li>
                        <li class="h-baths"><span class="hz-figure">1 <i class="houzez-icon icon-bathroom-shower-1 mr-1"></i></span>Bathroom</li>
                        <li class="h-area"><span class="hz-figure">1760 <i class="houzez-icon icon-ruler-triangle mr-1"></i></span>
                          <div class="area_postfix">Sq Ft</div>
                        </li>
                      </ul>
                    </div><!-- item-body -->

                  </div><!-- d-flex -->

                </div><!-- item-wrap -->
              </div><!-- item-listing-wrap -->
            </div><!-- listing-view -->
          </div><!-- similar-property-wrap -->

        </div><!-- property-view -->
      </div><!-- bt-content-wrap -->
      <?php /*
      <div class="col-lg-4 col-md-12 bt-sidebar-wrap houzez_sticky">

        <aside id="sidebar" class="sidebar-wrap">
          <div class="property-form-wrap">

            <div class="property-form clearfix">
              <form method="post" action="#">

                <div class="agent-details">
                  <div class="d-flex align-items-center">
                    <div class="agent-image"><img class="rounded" src="../../../432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/10/Artboard-2-Copy-150x150.jpg" alt="Modern House Real Estate" width="70" height="70"></div>
                    <ul class="agent-information list-unstyled">
                      <li class="agent-name"><i class="houzez-icon icon-single-neutral mr-1"></i> Modern House Real
                        Estate</li>
                      <li class="agent-link"><a href="../../agency/modern-house-real-estate/index.html">View
                          Listings</a></li>
                    </ul>
                  </div>
                </div>
                <div class="form-group">
                  <input class="form-control" name="name" value="" type="text" placeholder="Name">
                </div><!-- form-group -->


                <div class="form-group">
                  <input class="form-control" name="mobile" value="" type="text" placeholder="Phone">
                </div><!-- form-group -->

                <div class="form-group">
                  <input class="form-control" name="email" value="" type="email" placeholder="Email">
                </div><!-- form-group -->


                <div class="form-group form-group-textarea">
                  <textarea class="form-control hz-form-message" name="message" rows="4" placeholder="Message">Hello, I am interested in [Renovated apartment at last floor]</textarea>
                </div><!-- form-group -->


                <div class="form-group">
                  <select name="user_type" class="selectpicker form-control bs-select-hidden" title="Select">

                    <option value="buyer">I'm a buyer</option>

                    <option value="tennant">I'm a tennant</option>

                    <option value="agent">I'm an agent</option>

                    <option value="other">Other</option>
                  </select><!-- selectpicker -->
                </div><!-- form-group -->

                <div class="form-group">
                  <label class="control control--checkbox m-0 hz-terms-of-use">
                    <input type="checkbox" name="privacy_policy">By submitting this form I agree to <a target="_blank" href="../../terms-and-conditions/index.html">Terms of Use</a>
                    <span class="control__indicator"></span>
                  </label>
                </div><!-- form-group -->


                <input type="hidden" name="target_email" value="a&#103;enc&#121;2&#64;&#104;ouzez&#46;&#99;&#111;">
                <input type="hidden" name="property_agent_contact_security" value="95d2ff6887" />
                <input type="hidden" name="property_permalink" value="index.html" />
                <input type="hidden" name="property_title" value="Renovated apartment at last floor" />
                <input type="hidden" name="property_id" value="HZ48" />
                <input type="hidden" name="action" value="houzez_property_agent_contact">
                <input type="hidden" name="listing_id" value="437">
                <input type="hidden" name="is_listing_form" value="yes">
                <input type="hidden" name="agent_id" value="2784">
                <input type="hidden" name="agent_type" value="agency_info">

                <div class="form_messages"></div>
                <button type="button" class="houzez_agent_property_form btn btn-secondary btn-half-width">
                  <span class="btn-loader houzez-loader-js"></span> Send Message
                </button>

                <a href="tel:8904564357" class="btn btn-secondary-outlined btn-half-width">
                  <!-- <button type="button" class="btn"> -->
                  <span class="hide-on-click">Call</span>
                  <span class="show-on-click">(890) 456-4357</span>
                  <!-- </button> -->
                </a>


              </form>
            </div><!-- property-form -->

          </div><!-- property-form-wrap -->
        </aside>
      </div><!-- bt-sidebar-wrap -->
      */ ?>
    </div><!-- row -->


  </div><!-- container -->


</section><!-- listing-wrap -->