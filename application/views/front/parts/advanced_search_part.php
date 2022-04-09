<section class="advanced-search advanced-search-nav mobile-search-nav" data-sticky="0">
  <div class="container">
    <div class="advanced-search-v1">
      <div class="d-flex">
        <div class="flex-search flex-grow-1">
          <div class="form-group">
            <div class="search-icon">
              <input type="text" class="form-control" placeholder="Search" onfocus="blur();">
            </div><!-- search-icon -->
          </div><!-- form-group -->
        </div><!-- flex-search -->
      </div><!-- d-flex -->
    </div><!-- advanced-search-v1 -->
  </div><!-- container -->
</section>


<section id="desktop-header-search" class="advanced-search advanced-search-nav " data-hidden="0" data-sticky='0'>
  <div class="container">
    <form class="houzez-search-form-js " method="get" autocomplete="off" action="<?php echo base_url('houzez/search_results'); ?>">

      <div class="advanced-search-v2 ">
        <div class="d-flex">
          <div class="flex-search flex-grow-1">
            <div class="form-group">
              <div class="search-icon">

                <input name="keyword" type="text" class="houzez-keyword-autocomplete form-control" value="<?php echo $input->keyword; ?>" placeholder="Enter Keyword...">
                <div id="auto_complete_ajax" class="auto-complete"></div>

              </div><!-- search-icon -->
            </div><!-- form-group -->
          </div>
          <div class="flex-search fields-width ">
            <div class="form-group">
              <select name="status[]" data-size="5" class="selectpicker status-js  form-control bs-select-hidden" title="Status" data-live-search="true" data-selected-text-format="count > 1" data-actions-box="true" multiple data-select-all-text="Select All" data-deselect-all-text="Deselect All" data-none-results-text="No results matched {0}" data-count-selected-text="{0} Statuses" data-container="body">
                <?php
                echo generate_drop_down($status, $input->status);
                ?>
              </select><!-- selectpicker -->
            </div><!-- form-group -->
          </div>
          <div class="flex-search fields-width ">
            <div class="form-group">
              <select name="type[]" data-size="5" class="selectpicker  form-control bs-select-hidden" title="Type" data-live-search="true" data-selected-text-format="count > 1" data-actions-box="true" multiple data-select-all-text="Select All" data-deselect-all-text="Deselect All" data-count-selected-text="{0} Types" data-none-results-text="No results matched {0}" data-container="body">
                <?php echo generate_drop_down($type, $input->type); ?>
              </select><!-- selectpicker -->
            </div><!-- form-group -->
          </div>
          <div class="flex-search fields-width ">
            <div class="form-group">
              <select name="label[]" data-size="5" class="selectpicker  form-control bs-select-hidden" title="Label" data-live-search="true" data-selected-text-format="count > 1" data-actions-box="true" multiple data-select-all-text="Select All" data-deselect-all-text="Deselect All" data-count-selected-text="{0} labels" data-none-results-text="No results matched {0}" data-container="body">
                <?php echo generate_drop_down($label, $input->label); ?>

              </select><!-- selectpicker -->
            </div><!-- form-group -->
          </div>
          <div class="flex-search fields-width ">
            <div class="form-group">
              <select name="bedrooms" data-size="5" class="selectpicker  form-control bs-select-hidden" title="Bedrooms" data-live-search="false">
                <option value="">Bedrooms</option>
                <?php
                echo generate_simple_drop_down($bedrooms, $input->bedrooms);
                ?>
                <option value="any">Any</option>
              </select><!-- selectpicker -->
            </div>
          </div>
          <div class="flex-search fields-width ">
            <div class="form-group">
              <select name="bathrooms" data-size="5" class="selectpicker  form-control bs-select-hidden" title="Bathrooms" data-live-search="false">
                <option value="">Bathrooms</option>
                <?php
                echo generate_simple_drop_down($bathrooms, $input->bathrooms);
                ?>
                <option value="any">Any</option>
              </select><!-- selectpicker -->
            </div>
          </div>
          <div class="flex-search">
            <a class="btn advanced-search-btn btn-full-width" data-toggle="collapse" href="#advanced-search-filters">
              <i class="houzez-icon icon-cog mr-1"></i> Advanced</a>
          </div>

          <button type="submit" class="btn btn-search btn-secondary ">Go</button>
        </div><!-- d-flex -->
      </div><!-- advanced-search-v2 -->

      <div id="advanced-search-filters" class="collapse ">

        <div class="advanced-search-filters search-v1-v2">
          <div class="d-flex">
            <div class="flex-search">
              <div class="form-group">
                <?php echo form_dropdown('state', $state_list, $input->state, 'class="selectpicker  form-control bs-select-hidden" data-size="5" title="States" data-live-search="true" id="state"'); ?>
                <!-- <select id="state" name="state" data-target="houzezFourthList" data-size="5" class="houzezSelectFilter houzezCityFilter houzezThirdList selectpicker  houzez-city-js form-control bs-select-hidden" title="All States" data-selected-text-format="count > 1" data-live-search="true" data-actions-box="true" data-none-results-text="No results matched {0}" data-container="body">
                  <option value="">All States</option>
                  < ?php
                  if (valArr($state_list)) {
                    foreach ($state_list as $stateKey => $stateName) {
                      echo '<option data-ref="' . $stateKey . '" data-belong="india" data-subtext="India" value="' . $stateKey . '"> ' . $stateName . '</option>';
                    }
                  }
                  ?>
                </select> -->
                <!-- selectpicker -->
              </div><!-- form-group -->
            </div>
            <div class="flex-search">
              <div class="form-group">
                <?php echo form_dropdown('city', $city_list, $input->city, 'class="selectpicker  form-control bs-select-hidden" data-size="5" title="Cities" data-live-search="true" id="city"'); ?>
                <!-- <select id="city" name="city" data-size="5" class="houzezSelectFilter houzezFourthList selectpicker  form-control bs-select-hidden" title="All Areas" data-selected-text-format="count > 1" data-live-search="true" data-actions-box="true" data-none-results-text="No results matched {0}" data-count-selected-text="{0} Areas">
                  < ?php
                  if (valArr($city_list)) {
                    foreach ($city_list as $cityKey => $cityName) {
                      echo '<option data-ref="' . $cityKey . '" data-belong="india" data-subtext="India" value="' . $cityKey . '"> ' . $cityName . '</option>';
                    }
                  }
                  ?>
                </select> -->
                <!-- selectpicker -->
              </div><!-- form-group -->
            </div>

            <div class="flex-search">
              <div class="form-group">
                <input name="min-area" type="text" class="form-control " value="<?= $input->min_area; ?>" placeholder="Min. Area ">
              </div><!-- form-group -->
            </div>
            <div class="flex-search">
              <div class="form-group">
                <input name="max-area" type="text" class="form-control " value="<?= $input->max_area; ?>" placeholder="Max. Area ">
              </div><!-- form-group -->
            </div>
            <div class="flex-search">
              <div class="form-group">
                <input name="property_id" type="text" class=" form-control" value="<?= $input->property_id; ?>" placeholder="Property ID">
              </div>
            </div>
          </div>

          <div class="d-flex">
            <div class="flex-search-full ">
              <div class="range-text">
                <input type="hidden" name="min-price" class="min-price-range-hidden range-input" value="<?= $input->min_price; ?>">
                <input type="hidden" name="max-price" class="max-price-range-hidden range-input" value="<?= $input->max_price; ?>">
                <span class="range-title">Price Range</span> From <span class="min-price-range"></span> To <span class="max-price-range"></span>
              </div><!-- range-text -->
              <div class="price-range-wrap">
                <div class="price-range"></div><!-- price-range -->
              </div><!-- price-range-wrap -->
            </div>
          </div>
        </div>

        <div class="features-list-wrap">
          <a class="btn-features-list" data-toggle="collapse" href="#features-list">
            <i class="houzez-icon icon-add-square"></i> Other Features </a><!-- btn-features-list -->
          <div id="features-list" class="collapse">
            <div class="features-list">
              <?php if (!empty($features)) {
                foreach ($features as $f_key => $feature) {
                  if (empty($feature)) continue;
              ?>
                  <label class="control control--checkbox">
                    <input class="" name="feature[]" type="checkbox" value="<?php echo $f_key; ?>" <?php echo is_array($input->feature) ? (in_array($f_key, $input->feature) ? "checked" : null) : null; ?>><?php echo $feature; ?><span class="control__indicator"></span>
                  </label>
              <?php  }
              } ?>
            </div><!-- features-list -->
          </div><!-- collapse -->
        </div><!-- features-list-wrap -->
      </div><!-- advanced-search-filters -->
    </form>
  </div><!-- container -->
</section><!-- advanced-search -->

<section id="overlay-search-advanced-module" class="overlay-search-advanced-module">
  <div class="search-title">
    Search <button type="button" class="btn overlay-search-module-close"><i class="houzez-icon icon-close"></i></button>
  </div>
  <form class="houzez-search-form-js " method="get" autocomplete="off" action="<?php echo base_url('houzez/search_results'); ?>">

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <div class="search-icon">

            <input name="keyword" type="text" class="houzez-keyword-autocomplete form-control" value="<?php echo $input->keyword; ?>" placeholder="Enter Keyword...">
            <div id="auto_complete_ajax" class="auto-complete"></div>

          </div><!-- search-icon -->
        </div><!-- form-group -->
      </div>

      <div class="col-6">
        <div class="form-group">
          <select name="status[]" data-size="5" class="selectpicker status-js  form-control bs-select-hidden" title="Status" data-live-search="true" data-selected-text-format="count > 1" data-actions-box="true" multiple data-select-all-text="Select All" data-deselect-all-text="Deselect All" data-none-results-text="No results matched {0}" data-count-selected-text="{0} Statuses" data-container="body">
            <?php echo generate_drop_down($status, $input->status); ?>
          </select><!-- selectpicker -->
        </div><!-- form-group -->
      </div>
      <div class="col-6">
        <div class="form-group">
          <select name="type[]" data-size="5" class="selectpicker  form-control bs-select-hidden" title="Type" data-live-search="true" data-selected-text-format="count > 1" data-actions-box="true" multiple data-select-all-text="Select All" data-deselect-all-text="Deselect All" data-count-selected-text="{0} Types" data-none-results-text="No results matched {0}" data-container="body">
            <?php echo generate_drop_down($type, $input->type); ?>
          </select><!-- selectpicker -->
        </div><!-- form-group -->
      </div>
      <div class="col-6">
        <div class="form-group">
          <select name="label[]" data-size="5" class="selectpicker  form-control bs-select-hidden" title="Label" data-live-search="true" data-selected-text-format="count > 1" data-actions-box="true" multiple data-select-all-text="Select All" data-deselect-all-text="Deselect All" data-count-selected-text="{0} labels" data-none-results-text="No results matched {0}" data-container="body">
            <?php echo generate_drop_down($label, $input->label); ?>
          </select><!-- selectpicker -->
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <select name="bedrooms" data-size="5" class="selectpicker  form-control bs-select-hidden" title="Bedrooms" data-live-search="false">
            <option value="">Bedrooms</option>
            <?php echo generate_simple_drop_down($bedrooms, $input->bedrooms); ?>
            <option value="any">Any</option>
          </select><!-- selectpicker -->
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <select name="bathrooms" data-size="5" class="selectpicker  form-control bs-select-hidden" title="Bathrooms" data-live-search="false">
            <option value="">Bathrooms</option>
            <?php echo generate_simple_drop_down($bathrooms, $input->bathrooms); ?>
            <option value="any">Any</option>
          </select><!-- selectpicker -->
        </div><!-- form-group -->
      </div>
      <div class="col-6">
        <div class="form-group">
          <?php echo form_dropdown('state', $state_list, $input->state, 'class="selectpicker  form-control bs-select-hidden" data-size="5" title="States" data-live-search="true" id="state"'); ?>
          <!-- selectpicker -->
        </div><!-- form-group -->
      </div>
      <div class="col-6">
        <div class="form-group">
          <?php echo form_dropdown('city', $city_list, $input->city, 'class="selectpicker  form-control bs-select-hidden" data-size="5" title="Cities" data-live-search="true" id="city"'); ?>
        </div><!-- form-group -->
      </div>
      <div class="col-6">
        <div class="form-group">
          <input name="min-area" type="text" class="form-control " value="<?= $input->min_area; ?>" placeholder="Min. Area ">
        </div><!-- form-group -->
      </div>
      <div class="col-6">
        <div class="form-group">
          <input name="max-area" type="text" class="form-control " value="<?= $input->max_area; ?>" placeholder="Max. Area ">
        </div><!-- form-group -->
      </div>
      <div class="col-6">
        <div class="form-group">
          <input name="property_id" type="text" class=" form-control" value="<?= $input->property_id; ?>" placeholder="Property ID">
        </div>
      </div>
      <div class="col-12">
      </div>
      <div class="col-12">
        <div class="range-text">
          <input type="hidden" name="min-price" class="min-price-range-hidden range-input" value="<?= $input->min_price; ?>">
          <input type="hidden" name="max-price" class="max-price-range-hidden range-input" value="<?= $input->max_price; ?>">
          <span class="range-title">Price Range</span> From <span class="min-price-range"></span> To <span class="max-price-range"></span>
        </div><!-- range-text -->
        <div class="price-range-wrap">
          <div class="price-range"></div><!-- price-range -->
        </div><!-- price-range-wrap -->
      </div>

      <div class="col-12">
        <div class="features-list-wrap">
          <a class="btn-features-list" data-toggle="collapse" href="#features-list" aria-expanded="true">
            <i class="houzez-icon icon-add-square"></i> Other Features </a><!-- btn-features-list -->
          <div id="features-list" class="collapse show" style="">
            <div class="features-list">
              <?php if (!empty($features)) {
                foreach ($features as $f_key => $feature) {
                  if (empty($feature)) continue;
              ?>
                  <label class="control control--checkbox">
                    <input class="" name="feature[]" type="checkbox" value="<?php echo $f_key; ?>" <?php echo is_array($input->feature) ? (in_array($f_key, $input->feature) ? "checked" : null) : null; ?>><?php echo $feature; ?><span class="control__indicator"></span>
                  </label>
              <?php  }
              } ?>
            </div><!-- features-list -->
          </div><!-- collapse -->
        </div><!-- features-list-wrap -->
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-search btn-secondary btn-full-width ">Search</button>
      </div>

    </div><!-- row -->
  </form>
</section>

<script src="<?php echo base_url('vendor/almasaeed2010/adminlte/'); ?>plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

    $("#state").change(function() {
      var city = $('#city');
      $.ajax({
        url: '<?= base_url('houzez/get_city') ?>',
        type: 'post',
        dataType: 'JSON',
        data: {
          '<?= $this->security->get_csrf_token_name(); ?>': '<?= $this->security->get_csrf_hash(); ?>',
          state_id: $(this).val(),
          state_name: $("#state option:selected").text()
        },
        success: function(data) {
          // debugger;
          console.log(data.states);
          if (data.status == true) {
            city.html(data.message).selectpicker('refresh');
          } else {
            city.html('');

          }
        },
        error: function() {
          alert('failed to fetch the city.');
        }
      });
    });
  });
</script>