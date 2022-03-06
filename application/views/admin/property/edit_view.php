    		<!-- Content Wrapper. Contains page content -->

  <?php      
      $type=[
                        "1"=>"Office",
                        "2"=>"Shop",
                        "3"=>"Appartment",
                        "4"=>"Multi Family Home",
                        "5"=>"Single Family Home",
                        "6"=>"Studio",
                        "7"=>"Villa",
                        "8"=>"Commercial",
                        "9"=>"Dummy Updated",
                    ];
        $status=[
                       "1"=>"For Rent",
                       "2"=>"For Sale",
                       "3"=>"New Construction",
                       "4"=>"New listing",
                       "5"=>"Open House",
                       "6"=>"Reduced Price",
                       "7"=>"Pesale",
                      
                   ];
        $label=[
                       "1"=>"Hot Offer",
                       "2"=>"Sold",  
        ];   
        $country=[
          '1'  =>'Pakistan',
          '2'  =>'India',
          '3'  =>'Afganistan',
          '4'  =>'Saudi Arabia',
          ];
          $state=[
          '1'  =>'Jammu&Kashmir',
          '2'  =>'Bihar',
          '3'  =>'Asaam',
          '4'  =>'Andra Pradesh',
          ];
          $city=[
          '1'  =>'MUmbai',
          '2'  =>'Banglore',
          '3'  =>'Jaipur',
          '4'  =>'Delhi',
          '5'  =>'Srinagar',
          ];  
          $facing=[
          "1"  => 'East',
          "2"  => 'West',
          "3"  => 'North',
          "4"  => 'South',
          "5"  => 'South East',
          "6"  => 'South West',
          "7"  => 'North East',
          "8"  => 'North West',
          ];     
       ?>           
  <div class="row ">
    <!-- Save -->
    <div class="col-sm-12">
      <form role="form" action="<?php echo base_url('index.php/'); ?>admin/property/modify?id=<?php echo $result->p_id;?>" method="post" id="save_property_form">

        <!-- property_title, content, Property type, status, label -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title"><i class="fa fa-plus"></i> Add Property</h3>
            <div class="card-tools">
              <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>

          <div class="card-body">


            <!-- property_title, content, Property type, status, label -->
            <div class="row">
              <div class="col-md-12">

                <input type="hidden" name="unique_id" value="PFG3OU9E">

                <!-- property_title -->
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="property_title">Property Title</label> <small class="req text-danger"> *</small>
                      <input name="property_title" class="form-control " type="text" placeholder="Property Title" id="property_title" value="<?php echo $result->p_title;?>">
                      <!-- validation errors -->
                      <span class="badge badge-danger">
                        <?php echo form_error('property_title');?>
                      </span>  
                    </div>
                  </div>
                </div>

                <!-- content -->
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea id="summernote" name="content" class="form-control summernote" rows="6" placeholder="Content" ><?php echo $result->p_content;?></textarea>

                    </div>
                  </div>
                </div>

                <!-- Property type, status, label -->
                <div class="row">
                  <!-- type -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Type</label><i class="req text-danger text-danger"> *</i>
                      <select name="type" class="form-control" id="type" >
                        <option value="<?php echo $result->p_type;?>"><?php echo $type[$result->p_type];?></option>
                        <option value="1">Office</option>
                        <option value="2">Shop</option>
                        <option value="3">Appartment</option>
                        <option value="4">Multi Family Home</option>
                        <option value="5">Single Family Home</option>
                        <option value="6">Studio</option>
                        <option value="7">Villa</option>
                        <option value="8">Commercial</option>
                        <option value="9">Dummy Updated</option>
                      </select>
                      <!-- validation errors -->
                      <span class="badge badge-danger">
                        <?php echo form_error('type');?>
                      </span> 
                    </div>
                  </div>
                  <!-- Status -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control" id="status">
                        <option value="<?php echo $result->p_status;?>"><?php echo $status[$result->p_status];?></option>
                        <option value="1">For Rent</option>
                        <option value="2">For Sale</option>
                        <option value="3">New Construction</option>
                        <option value="4">New listing</option>
                        <option value="5">Open House</option>
                        <option value="6">Reduced Price</option>
                        <option value="7">Resale</option>
                      </select>
                    </div>
                  </div>
                  <!-- label -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Label</label>
                      <select name="label" class="form-control" id="label">
                        <option value="<?php echo $result->p_label;?>"><?php echo $label[$result->p_label];?></option>
                        <option value="1">Hot Offer</option>
                        <option value="2">Sold</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card ">
  <div class="card-header bg-dark">
    <h3 class="card-title"> Location</h3>
    <div class="card-tools">
      <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <div class="row">

      <!-- pa_id	pa_address	pa_postal_code	pa_country	pa_state	pa_city	pa_area -->
     
      <!-- Country -->
      <div class="col-sm-4">
        <div class="form-group">
          <label for="">Country</label> <i class="req text-danger text-danger"> *</i>
          <select name="country" class="form-control" id="country">
        <option value="<?php echo $result->p_country;?>"><?php echo $country[$result->p_country];?></option>
        <option value="1">Pakistan</option>
        <option value="2">India</option>
        <option value="3">Afganistan</option>
        <option value="4">Saudi Arabia</option></select>
         <!-- validation errors -->
         <span class="badge badge-danger">
              <?php echo form_error('country');?>
          </span> 
        </div>
      </div>
        
      <!-- State -->
      <div class="col-sm-4">
        <div class="form-group">
          <label for="">State</label> <i class="req text-danger text-danger"> *</i>
          <select name="state" class="form-control" id="state">
          <option value="<?php echo $result->p_state;?>"><?php echo $state[$result->p_state];?></option>
        <option value="1">Jammu&Kashmir</option>
        <option value="2">Bihar</option>
        <option value="3">Asaam</option>
        <option value="4">Andra Pradesh</option></select>
           <!-- validation errors -->
         <span class="badge badge-danger">
              <?php echo form_error('state');?>
          </span>
        </div>
      </div>

      <!-- City -->
      <div class="col-sm-4">
        <div class="form-group">
          <label for="">City</label> <i class="req text-danger text-danger"> *</i>
          <select name="city" class="form-control" id="city">
          <option value="<?php echo $result->p_city;?>" selected="selected"><?php echo $city[$result->p_city];?></option>
            <option value="1">Mumbai</option>
            <option value="2">Banglore</option>
            <option value="3">jaipur</option>
            <option value="4">Delhi</option>
            <option value="5">Srinagar</option>
          </select>
           <!-- validation errors -->
         <span class="badge badge-danger">
              <?php echo form_error('city');?>
          </span>
        </div>
      </div>
      <!-- address -->
      <div class="col-sm-4">
        <div class="form-group">
          <label for="address">Address</label> <small class="req text-danger"> *</small>
          <input name="address" class="form-control " type="text" placeholder="Address" id="address" value="<?php echo $result->p_address;?>">
              <!-- validation errors -->
         <span class="badge badge-danger">
              <?php echo form_error('address');?>
          </span>
        </div>
      </div>
      <!-- Zip/Postal Code -->
      <div class="col-sm-4">
        <div class="form-group">
          <label for="postal_code">Postal Code</label> <small class="req text-danger"> *</small>
          <input name="postal_code" class="form-control " type="text" placeholder="Postal Code" id="postal_code" value="<?php echo $result->p_postal_code;?>">
           <!-- validation errors -->
         <span class="badge badge-danger">
              <?php echo form_error('postal_code');?>
          </span>  
        </div>
      </div>
    </div>
  </div>
</div>

        <!-- Bedrooms, Bathrooms, area size -->
        <!-- Bedrooms, Bathrooms, area size -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title"> Property Details</h3>
            <div class="card-tools">
              <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <!-- bedrooms -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="bedrooms">Bedrooms</label>
                  <input name="bedrooms" class="form-control " type="text" placeholder="Bedrooms" id="bedrooms" value="<?php echo $result->p_bedrooms;?>">
                </div>
              </div>

              <!-- bathrooms -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="bathrooms">Bathrooms</label>
                  <input name="bathrooms" class="form-control " type="text" placeholder="Bathrooms" id="bathrooms" value="<?php echo $result->p_bathrooms;?>">
                </div>
              </div>

              <!-- area_size -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="area_size">Area Size</label> <small class="req text-danger"> *</small>
                  <input name="area_size" class="form-control " type="text" placeholder="Area Size" id="area_size" value="<?php echo $result->p_area;?>">
                     <!-- validation errors -->
                     <span class="badge badge-danger">
                        <?php echo form_error('area_size');?>
                      </span>   
                </div>
              </div>
            

              <!-- size_postfix -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="size_postfix">Size Postfix</label> <small class="req text-danger"> *</small>
                  <input name="size_postfix" class="form-control " type="text" placeholder="Size Postfix" id="size_postfix" value="<?php echo $result->p_area_unit;?>">
                       <!-- validation errors -->
                       <span class="badge badge-danger">
                        <?php echo form_error('size_postfix');?>
                      </span>   
                </div>
              </div>
            </div>
           

            <!-- land area, postfix -->
            <div class="row">
              <!-- land area -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="land_area">Land Area</label> <small class="req text-danger"> *</small>
                  <input name="land_area" class="form-control " type="text" placeholder="Land Area" id="land_area" value="<?php echo $result->p_land;?>">
                        <!-- validation errors -->
                        <span class="badge badge-danger">
                        <?php echo form_error('land_area');?>
                      </span> 
                </div>
              </div>
           

              <!-- land area postfix -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="land_area_postfix">Land Area Postfix</label> <small class="req text-danger"> *</small>
                  <input name="land_area_postfix" class="form-control " type="text" placeholder="Land Area Postfix" id="land_area_postfix" value="<?php echo $result->p_land_unit;?>">
                  <!-- validation errors -->
                  <span class="badge badge-danger">
                        <?php echo form_error('land_area_postfix');?>
                      </span> 
                </div>
              </div>
             

              <!-- Garages -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="garages">Garages</label>
                  <input name="garages" class="form-control " type="text" placeholder="Garages" id="garages" value="<?php echo $result->p_garage;?>">
                </div>
              </div>

              <!-- garage_size -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="garage_size">Garage Size</label>
                  <input name="garage_size" class="form-control " type="text" placeholder="Garage Size" id="garage_size" value="<?php echo $result->p_garages_unit;?>">
                </div>
              </div>
            </div>

            <!-- Year Built -->
            <div class="row">
              <!-- year_built -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Year Built</label><i class="req text-danger text-danger"> *</i>
                  <input name="year_built" class="form-control " type="text" placeholder="Year Built" id="year_built" value="<?php echo $result->p_year;?>" requiredd="">
                   <!-- validation errors -->
                   <span class="badge badge-danger">
                        <?php echo form_error('year_built');?>
                      </span> 
                </div>
              </div>
              

              <!-- price -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Price </label> <small class="req text-danger"> *</small>
                  <input name="price" class="form-control " type="text" placeholder="Price" id="price" value="<?php echo $result->p_price;?>" requiredd="">
                  <!-- validation errors -->
                  <span class="badge badge-danger">
                        <?php echo form_error('price');?>
                      </span> 
                </div>
              </div>
             


              <!-- Facing -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="">Front Facing</label> 
                  <select name="front_facing" class="form-control select2-hidden-accessible" id="front_facing" data-select2-id="front_facing" tabindex="-1" aria-hidden="true">
                    <option value="<?php echo $result->p_front_facing?>" selected="selected" data-select2-id="8"><?php echo $facing[$result->p_front_facing];?></option>
                    <option value="1">East</option>
                    <option value="2">West</option>
                    <option value="3">North</option>
                    <option value="4">South</option>
                    <option value="5">South East</option>
                    <option value="6">South West</option>
                    <option value="7">North East</option>
                    <option value="8">North West</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- Features -->
<div class="card ">
  <div class="card-header bg-dark">
    <h3 class="card-title"> Features</h3>
    <div class="card-tools">
      <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="1" class="custom-control-input" type="checkbox" id="customCheckbox_1" >
                <label for="customCheckbox_1" class="custom-control-label">Air Conditioning</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="2" class="custom-control-input" type="checkbox" id="customCheckbox_2" >
                <label for="customCheckbox_2" class="custom-control-label">Lawn</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="3" class="custom-control-input" type="checkbox" id="customCheckbox_3" >
                <label for="customCheckbox_3" class="custom-control-label">Swimming Pool</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="4" class="custom-control-input" type="checkbox" id="customCheckbox_4" >
                <label for="customCheckbox_4" class="custom-control-label">Barbeque</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="5" class="custom-control-input" type="checkbox" id="customCheckbox_5" >
                <label for="customCheckbox_5" class="custom-control-label">Microwave</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="6" class="custom-control-input" type="checkbox" id="customCheckbox_6" >
                <label for="customCheckbox_6" class="custom-control-label">TV Cable</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="7" class="custom-control-input" type="checkbox" id="customCheckbox_7" >
                <label for="customCheckbox_7" class="custom-control-label">Dryer</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="8" class="custom-control-input" type="checkbox" id="customCheckbox_8" >
                <label for="customCheckbox_8" class="custom-control-label">Outdoor Shower</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="9" class="custom-control-input" type="checkbox" id="customCheckbox_9" >
                <label for="customCheckbox_9" class="custom-control-label">Washer</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="10" class="custom-control-input" type="checkbox" id="customCheckbox_10" >
                <label for="customCheckbox_10" class="custom-control-label">Gym</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="11" class="custom-control-input" type="checkbox" id="customCheckbox_11" >
                <label for="customCheckbox_11" class="custom-control-label">Refrigerator</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="12" class="custom-control-input" type="checkbox" id="customCheckbox_12" >
                <label for="customCheckbox_12" class="custom-control-label">WiFi</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="13" class="custom-control-input" type="checkbox" id="customCheckbox_13" >
                <label for="customCheckbox_13" class="custom-control-label">Laundry</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="14" class="custom-control-input" type="checkbox" id="customCheckbox_14" >
                <label for="customCheckbox_14" class="custom-control-label">Sauna</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="15" class="custom-control-input" type="checkbox" id="customCheckbox_15" >
                <label for="customCheckbox_15" class="custom-control-label">Window Coverings</label>
              </div>

            </div>
          </div>
                <div class="col-sm-3">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input name="features[]" value="21" class="custom-control-input" type="checkbox" id="customCheckbox_21" >
                <label for="customCheckbox_21" class="custom-control-label">Hammam</label>
              </div>

            </div>
          </div>
          </div>
        </div>
      </div>  
        <!-- Private Note -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title"> Property Setting</h3>
            <div class="card-tools">
              <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Write private note for this property, it will not display for public. </label>
                  <textarea id="private_note" name="private_note" class="form-control summernote" rows="6" placeholder="">
                  <?php echo $result->p_private_note;?>
                  </textarea>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group clearfix">

                  <label for="">Do you want to mark this property as featured?</label>
                  <div class="icheck-danger d-inline float-right">
                    <input type="radio" name="featured" id="featured_property2" value="0">
                    <label for="featured_property2"> No
                    </label>
                  </div>

                  <div class="icheck-primary d-inline float-right">
                    <input type="radio" name="featured" checked="" id="featured_property1" value="1">
                    <label for="featured_property1"> Yes &nbsp;&nbsp;&nbsp;
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group clearfix">

                  <label for="">Do you want to publish this property else it will be saved in draft?</label>
                  <div class="icheck-danger d-inline float-right">
                    <input type="radio" name="published" id="published" value="0">
                    <label for="published"> No
                    </label>
                  </div>

                  <div class="icheck-primary d-inline float-right">
                    <input type="radio" name="published" checked="" id="published" value="1">
                    <label for="published"> Yes &nbsp;&nbsp;&nbsp;
                    </label>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group clearfix">

                  <label for="">Do you want this property to be shown in a home slider?</label>
                  <div class="icheck-danger d-inline float-right">
                    <input type="radio" name="slided" id="slided" value="0">
                    <label for="slided"> No
                    </label>
                  </div>

                  <div class="icheck-primary d-inline float-right">
                    <input type="radio" name="slided" checked="" id="slided" value="1">
                    <label for="slided"> Yes &nbsp;&nbsp;&nbsp;
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Save Button -->
        <div class="card">

          <div class="card-footer ">
            <div class="form-group offset-sm-8 col-sm-4">
              <!-- <label>Submit</label> -->
              <button type="submit" name="save" value="add_property" class="form-control btn btn-success btn-sm  checkbox-toggle"><i class="fa fa-plus"> &nbsp;Update</i></button>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>


 