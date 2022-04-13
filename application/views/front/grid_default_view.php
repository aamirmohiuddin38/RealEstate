<?php
// ddisplay($input);
?>
<!-- Search form -->
<?php
// $this->load->view('front/parts/advanced_search_part'); 
?>

<style>
  .labels-wrap.labels-left {
    top: 17px;
    left: 20px;
  }
</style>

<!-- Listing -->
<section class="listing-wrap listing-v2">
  <div class="container">
    <div class="page-title-wrap">
      <div class="breadcrumb-wrap">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('houzez'); ?>"><span>Home</span></a></li>
            <li class="breadcrumb-item active">Grid Default</li>
          </ol>
        </nav>
      </div><!-- breadcrumb-wrap -->
      <div class="d-flex align-items-center">
        <div class="page-title flex-grow-1">
          <h1>Grid Default</h1>
        </div><!-- page-title -->

        <div class="listing-switch-view">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a class="switch-btn btn-list">
                <i class="houzez-icon icon-layout-bullets"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="switch-btn btn-grid">
                <i class="houzez-icon icon-layout-module-1"></i>
              </a>
            </li>
          </ul>
        </div><!-- listing-switch-view -->
      </div><!-- d-flex -->
    </div><!-- page-title-wrap -->

    <div class="row">
      <div class="col-lg-8 col-md-12 bt-content-wrap ">

        <article class="post-28 page type-page status-publish hentry">
        </article>


        <div class="listing-tools-wrap">
          <div class="d-flex align-items-center mb-2">
            <div class="listing-tabs flex-grow-1">
              <?php echo $total_property ?? 0; ?> Properties</div><!-- listing-tabs -->

            <div class="sort-by">
              <div class="d-flex align-items-center">
                <div class="sort-by-title">
                  Sort by: </div><!-- sort-by-title -->
                <select id="sort_properties" class="selectpicker form-control bs-select-hidden" title="Default Order" data-live-search="false" data-dropdown-align-right="auto">
                  <option value="">Default Order</option>
                  <?php
                  echo generate_simple_drop_down($sort_by, $input->sortby);
                  ?>
                </select><!-- selectpicker -->
              </div><!-- d-flex -->
            </div><!-- sort-by -->
          </div><!-- d-flex -->
        </div><!-- listing-tools-wrap -->

        <div class="listing-view grid-view card-deck">
          <?php if (!empty($properties)) {
            // ddisplay($properties[0]);
            foreach ($properties as $key => $property) { ?>
              <div class="item-listing-wrap hz-item-gallery-js card" data-images="[<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?>]">
                <div class="item-wrap item-wrap-v2 item-wrap-no-frame h-100">
                  <div class="d-flex align-items-center h-100">
                    <div class="item-header">
                      <!-- <span class="label-featured label"><?php echo $property->pl_name; ?></span> -->
                      <div class="labels-wrap labels-left">
                        <a href="#" class="label-status label status-color-18">
                          <?php echo $property->pt_name; ?>
                        </a>
                      </div>
                      <div class="labels-wrap labels-right">

                        <a href="#" class="label-status label status-color-18">
                          <?php echo $property->ps_name; ?>
                        </a>

                      </div>
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">
                          <?php
                          $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                          echo $fmt->formatCurrency($property->p_price, "INR");
                          echo $property->p_price;
                          ?>
                        </li>
                        <!-- <li class="item-sub-price">$15,000/sq ft</li> -->
                      </ul>
                      <?php /*
                      <ul class="item-tools">

                        <li class="item-tool item-preview">
                          <span class="hz-show-lightbox-js" data-listid="2803" data-toggle="tooltip" data-placement="top" title="Preview">
                            <i class="houzez-icon icon-expand-3"></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-favorite">
                          <span class="add-favorite-js item-tool-favorite" data-toggle="tooltip" data-placement="top" title="Favourite" data-listid="2803">
                            <i class="houzez-icon icon-love-it "></i>
                          </span><!-- item-tool-favorite -->
                        </li><!-- item-tool -->

                        <li class="item-tool item-compare">
                          <span class="houzez_compare compare-2803 item-tool-compare show-compare-panel" data-toggle="tooltip" data-placement="top" title="Add to Compare" data-listing_id="2803">
                            <i class="houzez-icon icon-add-circle"></i>
                          </span><!-- item-tool-compare -->
                        </li><!-- item-tool -->
                      </ul><!-- item-tools -->
                      */ ?>
                      <div class="listing-image-wrap">
                        <div class="listing-thumb">
                          <a href="<?php echo base_url('houzez/property/' . $property->p_id) ?>" class="listing-featured-thumb hover-effect">
                            <img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?>" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?> 592w" /> </a><!-- hover-effect -->
                        </div>
                      </div>
                      <div class="preview_loader"></div>
                    </div><!-- item-header -->
                    <div class="item-body flex-grow-1">
                      <div class="labels-wrap labels-right">

                        <a href="#" class="label-status label status-color-18">
                          <?php echo $property->ps_name; ?>
                        </a>

                      </div>
                      <h2 class="item-title">
                        <a href="<?php echo base_url('houzez/property/' . $property->p_id) ?>"><?php echo $property->p_title; ?></a>
                      </h2><!-- item-title -->
                      <ul class="item-price-wrap hide-on-list">
                        <li class="item-price">
                          <?php
                          // $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                          // echo $fmt->formatCurrency($property->p_price, "INR");
                          echo $property->p_price;
                          ?>
                        </li>
                        <!-- <li class="item-sub-price">$15,000/sq ft</li> -->
                      </ul>
                      <address class="item-address">
                        <!-- <?php echo $property->pa_address . ' ' . $property->city . ', ' . $property->state . ', ' . $property->country . ' ' . $property->pa_postal_code; ?> -->
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

        </div><!-- listing-view -->
        <div class="pagination-wrap">
          <nav>
            <!-- <?php echo $pagination; ?> -->
          </nav>
        </div>
      </div>
      <!-- bt-content-wrap -->
      <!-- Right Sidebar featured view  -->
      <?php $this->load->view('front/parts/right_sidebar_featured_view'); ?>
      <!-- bt-sidebar-wrap -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- listing-wrap -->