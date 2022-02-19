  <!-- content START -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><i class="fa fa-list"></i> List Properties</h3>
    </div>
    <div class="card-body">
      <div class="row">
        <?php if (!empty($properties)) {
          foreach ($properties as $index => $property) { ?>
            <!-- card 1 -->
            <div class=" col-sm-12 col-md-6 col-lg-4">
              <div class="card">
                <img class="card-img-top" height="200px" src="https://picsum.photos/200/200" alt="Card image cap">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h5 class="card-title"><?php echo $property->p_title; ?></h5>
                    </div>
                  </div>
                  <!-- <p class="card-text d-none">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  <div class="row">
                    <div class="col-sm-6">Type</div>
                    <div class="col-sm-6">
                      <strong>Residential</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">Type</div>
                    <div class="col-sm-6">
                      <strong>Residential</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">Type</div>
                    <div class="col-sm-6">
                      <strong>Residential</strong>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row mt-2">
                    <div class="col-sm-12 text-center">
                      <span class="dtr-data">
                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-outline-warning btn-sm"><i class="fa fa-file"></i></button>
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-image"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure') "><i class="fa fa-trash"></i></button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php /*<div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card card-widget widget-user">
                <div class="widget-user-header text-white" style="background: url('https://picsum.photos/200/300') center center;height: 200px;"></div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-12 text-center mb-2">
                      <h4><?php echo $property->p_title; ?></h4>
                    </div>
                  </div>
                  <!-- Type -->
                  <div class="row">
                    <div class="col-sm-6">Type</div>
                    <div class="col-sm-6">
                      <strong>Residential</strong>
                    </div>
                  </div>

                  <!-- Type -->
                  <div class="row">
                    <div class="col-sm-6">Label</div>
                    <div class="col-sm-6">
                      <strong>Hot Offer</strong>
                    </div>
                  </div>

                  <!-- Type -->
                  <div class="row">
                    <div class="col-sm-6">Status</div>
                    <div class="col-sm-6">
                      <strong>Appartment</strong>
                    </div>
                  </div>

                  <!-- Type -->
                  <div class="row">
                    <div class="col-sm-6">Price</div>
                    <div class="col-sm-6">
                      <strong>Appartment</strong>
                    </div>
                  </div>

                  <!-- Type -->
                  <div class="row">
                    <div class="col-sm-6">Featured</div>
                    <div class="col-sm-6">
                      <strong>Yes</strong>
                    </div>
                  </div>

                  <!-- Type -->
                  <div class="row">
                    <div class="col-sm-6">Publish</div>
                    <div class="col-sm-6">
                      <strong>No</strong>
                    </div>
                  </div>
                  <!-- Type -->
                  <div class="row d-none">
                    <div class="col-sm-6">Type</div>
                    <div class="col-sm-6">
                      <div class="form-group">
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
                  </div>

                  <!-- Type -->
                  <div class="row mt-2">
                    <div class="col-sm-12 text-center">
                      <span class="dtr-data">
                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                        <a href="https://www.hyunkunun.com/admin/property/addDocumentToProperty/65" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Add Property Documents"><i class="fa fa-file"></i></a>

                        <a href="https://www.hyunkunun.com/admin/property/addimagesToProperty/65" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Add Property Images"><i class="fa fa-image"></i></a>

                        <a href="https://www.hyunkunun.com/admin/property/edit_property/65" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Edit Property"><i class="fa fa-edit"></i></a>


                        <a href="https://www.hyunkunun.com/admin/property/delete_property/65" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure') " data-toggle="tooltip" data-placement="top" title="Delete Property"><i class="fa fa-trash"></i></a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div> */ ?>
          <?php }
        } else { ?>
        <?php } ?>


      </div>

    </div>
  </div>