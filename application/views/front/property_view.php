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
                    <?php echo $property->label_name; ?>
                  </a>
                  <a href="#/status/for-rent/index.html" class="label-status label status-color-34">
                    <?php echo $property->status_name; ?>
                  </a>
                </span>

                <div class="page-title">
                  <h1><?php echo $property->p_title; ?></h1>
                </div><!-- page-title -->
                <address class="item-address"><i class="houzez-icon icon-pin mr-1"></i>
                <?php echo $property->p_address . ' ' . $property->city_name . ', ' . $property->state_name . ', ' . $property->country . ' ' . $property->p_postal_code; ?>
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
                      <button class="houzez_agent_property_form btn btn-secondary btn-sm-full-width">
                        <span class="btn-loader houzez-loader-js"></span> Request Information
                      </button>

                    </div><!-- col-sm-12 col-xs-12 -->
                  </div><!-- row -->
                </form>

              </div><!-- block-content-wrap -->
            </div><!-- block-wrap -->
          </div><!-- property-schedule-tour-wrap -->

        </div><!-- property-view -->
      </div><!-- bt-content-wrap -->
    </div><!-- row -->


  </div><!-- container -->


</section><!-- listing-wrap -->