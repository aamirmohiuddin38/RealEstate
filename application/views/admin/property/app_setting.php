<!-- !-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/admin/home/index'); ?>">Admin</a></li>
            <li class="breadcrumb-item active">Setting</li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- Flash data Success -->
  <?php if ($this->session->flashdata('success') != null) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong><?php echo $this->session->flashdata('success'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php } ?>
  <!-- Flash data Failure -->
  <?php if ($this->session->flashdata('failure') != null) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong><?php echo $this->session->flashdata('failure'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php } ?>
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Setting</h3>
    </div>
    <form class="form-horizontal" action="<?php echo base_url('index.php/admin/property/app_setting_data'); ?>" method="post" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputEmail3" class="">Title</label>
            <input type="text" class="form-control" id="inputEmail3" name="title" value="<?php echo $setting_data->title; ?>">
          </div>
          <div class="col-md-6">
            <label for="inputPassword3" class="">Address</label>
            <input type="text" class="form-control" id="inputPassword3" name="address" value="<?php echo $setting_data->description; ?>">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputEmail3" class="">Email</label>
            <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $setting_data->email; ?>">
          </div>
          <div class="col-md-6">
            <label for="inputPassword3" class="">Phone No</label>
            <input type="text" class="form-control" id="inputPassword3" name="phone" value="<?php echo $setting_data->phone; ?>">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-6">
            <img src="<?php echo base_url() . $setting_data->favicon; ?>" alt="favicon" style="height:40px;width:40px; border:1px solid green; border-radius:25%; padding:5px">
            <div class="custom-file mt-2">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="favicon">
              <label class="custom-file-label" for="validatedCustomFile">Choose favicon...</label>
            </div>
          </div>
          <div class="col-md-6">
            <img src="<?php echo base_url() . $setting_data->logo; ?>" alt="logo" style="height:40px;width:40px; border:1px solid green;border-radius:25%; padding:5px">
            <div class="custom-file mt-2">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="logo">
              <label class="custom-file-label" for="validatedCustomFile">Choose logo...</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputEmail3" class="">Language</label>
            <input type="text" class="form-control" id="inputEmail3" name="language" value="<?php echo $setting_data->language; ?>">
          </div>
          <div class="col-md-6">
            <label for="inputPassword3" class="">Footer Text</label>
            <input type="text" class="form-control" id="inputPassword3" value="<?php echo $setting_data->footer_text; ?>">
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Save</button>
        <button type="reset" class="btn btn-default">Reset</button>
      </div>

    </form>
  </div>

</div>
</body>

</html>