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
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Setting</h3>
    </div>
    <form class="form-horizontal">
      <div class="card-body">
        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputEmail3" class="">Title</label>
            <input type="text" class="form-control" id="inputEmail3" placeholder="Title">
          </div>
          <div class="col-md-6">
            <label for="inputPassword3" class="">Address</label>
            <input type="text" class="form-control" id="inputPassword3" placeholder="Address">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputEmail3" class="">Email</label>
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
          </div>
          <div class="col-md-6">
            <label for="inputPassword3" class="">Phone No</label>
            <input type="text" class="form-control" id="inputPassword3" placeholder="Phone No">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputEmail3" class="">Fevicon</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            </div>
          </div>
          <div class="col-md-6">
            <label for="inputPassword3" class="">Logo</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputEmail3" class="">Language</label>
            <input type="text" class="form-control" id="inputEmail3" placeholder="Language">
          </div>
          <div class="col-md-6">
            <label for="inputPassword3" class="">Footer Text</label>
            <input type="text" class="form-control" id="inputPassword3" placeholder="Footer Text">
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