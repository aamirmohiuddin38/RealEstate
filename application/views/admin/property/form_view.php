  <!-- content START -->

  <div class="row">
    <!-- Save -->
    <div class="col-sm-12">
      <form role="form" action="<?php echo base_url('index.php/'); ?>admin/property/create" method="post" id="save_property_form">

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
                      <input name="property_title" class="form-control " type="text" placeholder="Property Title" id="property_title" value="">
                    </div>
                  </div>
                </div>

                <!-- content -->
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Content</label>
                      <textarea id="summernote" name="content" class="form-control summernote" rows="6" placeholder="Content"></textarea>

                    </div>
                  </div>
                </div>

                <!-- Property type, status, label -->
                <div class="row">
                  <!-- type -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Type</label>
                      <select name="type" class="form-control" id="type">
                        <option value="">Select Property Type</option>
                        <option value="3">Office</option>
                        <option value="4">Shop</option>
                        <option value="5">Appartment</option>
                        <option value="6">Multi Family Home</option>
                        <option value="7">Single Family Home</option>
                        <option value="8">Studio</option>
                        <option value="9">Villa</option>
                        <option value="15">Commercial</option>
                        <option value="17">Dummy Updated</option>
                      </select>
                    </div>
                  </div>
                  <!-- Status -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control" id="status">
                        <option value="">Select Property Type</option>
                        <option value="3">Office</option>
                        <option value="4">Shop</option>
                        <option value="5">Appartment</option>
                        <option value="6">Multi Family Home</option>
                        <option value="7">Single Family Home</option>
                        <option value="8">Studio</option>
                        <option value="9">Villa</option>
                        <option value="15">Commercial</option>
                        <option value="17">Dummy Updated</option>
                      </select>
                    </div>
                  </div>
                  <!-- label -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Label</label>
                      <select name="label" class="form-control" id="label">
                        <option value="">Select Property Type</option>
                        <option value="3">Office</option>
                        <option value="4">Shop</option>
                        <option value="5">Appartment</option>
                        <option value="6">Multi Family Home</option>
                        <option value="7">Single Family Home</option>
                        <option value="8">Studio</option>
                        <option value="9">Villa</option>
                        <option value="15">Commercial</option>
                        <option value="17">Dummy Updated</option>
                      </select>
                    </div>
                  </div>
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
                  <input name="bedrooms" class="form-control " type="text" placeholder="Bedrooms" id="bedrooms" value="">
                </div>
              </div>

              <!-- bathrooms -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="bathrooms">Bathrooms</label>
                  <input name="bathrooms" class="form-control " type="text" placeholder="Bathrooms" id="bathrooms" value="">
                </div>
              </div>

              <!-- area_size -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="area_size">Area Size</label> <small class="req text-danger"> *</small>
                  <input name="area_size" class="form-control " type="text" placeholder="Area Size" id="area_size" value="">
                </div>
              </div>

              <!-- size_postfix -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="size_postfix">Size Postfix</label> <small class="req text-danger"> *</small>
                  <input name="size_postfix" class="form-control " type="text" placeholder="Size Postfix" id="size_postfix" value="">
                </div>
              </div>
            </div>

            <!-- land area, postfix -->
            <div class="row">
              <!-- land area -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="land_area">Land Area</label> <small class="req text-danger"> *</small>
                  <input name="land_area" class="form-control " type="text" placeholder="Land Area" id="land_area" value="">
                </div>
              </div>

              <!-- land area postfix -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="land_area_postfix">Land Area Postfix</label> <small class="req text-danger"> *</small>
                  <input name="land_area_postfix" class="form-control " type="text" placeholder="Land Area Postfix" id="land_area_postfix" value="">
                </div>
              </div>

              <!-- Garages -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="garages">Garages</label>
                  <input name="garages" class="form-control " type="text" placeholder="Garages" id="garages" value="">
                </div>
              </div>

              <!-- garage_size -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="garage_size">Garage Size</label>
                  <input name="garage_size" class="form-control " type="text" placeholder="Garage Size" id="garage_size" value="">
                </div>
              </div>
            </div>

            <!-- Year Built -->
            <div class="row">
              <!-- year_built -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Year Built</label>
                  <input name="year_built" class="form-control " type="text" placeholder="Year Built" id="year_built" value="" requiredd="">
                </div>
              </div>

              <!-- price -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Price </label> <small class="req text-danger"> *</small>
                  <input name="price" class="form-control " type="text" placeholder="Price" id="price" value="" requiredd="">
                </div>
              </div>

              <!-- Facing -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="">Front Facing</label> <i class="req text-danger text-danger"> *</i>
                  <select name="front_facing" class="form-control select2-hidden-accessible" id="front_facing" data-select2-id="front_facing" tabindex="-1" aria-hidden="true">
                    <option value="" selected="selected" data-select2-id="8">Select facing direction</option>
                    <option value="1">East</option>
                    <option value="2">West</option>
                    <option value="3">North</option>
                    <option value="4">South</option>
                    <option value="5">South East</option>
                    <option value="6">South West</option>
                    <option value="7">North East</option>
                    <option value="8">North West</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 230.25px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-front_facing-container"><span class="select2-selection__rendered" id="select2-front_facing-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                  <textarea id="private_note" name="private_note" class="form-control summernote" rows="6" placeholder=""></textarea>

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
              <button type="submit" name="save" value="add_property" class="form-control btn btn-primary btn-sm  checkbox-toggle"><i class="fa fa-plus"> &nbsp;Save</i></button>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>


  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>