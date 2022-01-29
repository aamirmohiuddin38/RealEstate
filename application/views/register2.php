<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-15/css/A.style.css.pagespeed.cf.AxmTFBrhes.css">
</head>

<body>
  <section class="ftco-section" style="padding: 2em;">
    <div class="container">
      <?php if ($this->session->flashdata('success') != null) {  ?>
        <div class="offset-3 col-md-6 alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php } ?>

      <?php if ($this->session->flashdata('exception') != null) {  ?>
        <div class="offset-3 col-md-6 alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $this->session->flashdata('exception'); ?>
        </div>
      <?php } ?>
      <!-- TODO: FIx its style -->
      <?php echo validation_errors(); ?>

      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="wrap">
            <div class="img" style="background-image:url(https://preview.colorlib.com/theme/bootstrap/login-form-15/images/xbg-1.jpg.pagespeed.ic.EtoN2PmO7Y.webp)"></div>
            <div class="login-wrap p-4 p-md-5">

              <form action="<?php echo base_url('index.php/login/register'); ?>" class="signin-form" method="POST">
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="name">
                  <label class="form-control-placeholder" for="name">Name</label>
                  <!-- <span toggle="#username-field" class="fa fa-fw fa- field-icon"></span> -->
                </div>

                <div class="form-group mt-3">
                  <?php
                  //echo form_dropdown('user_role', $user_role_list);
                  ?>

                  <select name="user_role" class="form-control">
                    <?php foreach ($user_role_list as $key => $role) { ?>
                      <option value="<?php echo $key; ?>"><?php echo $role; ?></option>
                    <?php } ?>
                  </select>

                  <!-- <label class="form-control-placeholder" for="user_role">User Role</label> -->
                </div>

                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="email">
                  <label class="form-control-placeholder" for="email">Email</label>
                  <span toggle="#username-field" class="fa fa-fw fa-envelope field-icon"></span>
                </div>

                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="phone">
                  <label class="form-control-placeholder" for="phone">Phone</label>
                  <span toggle="#username-field" class="fa fa-fw fa-phone field-icon"></span>
                </div>

                <div class="form-group">
                  <input id="username-field" type="text" class="form-control" name="username">
                  <label class="form-control-placeholder" for="username">Username</label>
                  <span toggle="#username-field" class="fa fa-fw fa-user field-icon"></span>
                </div>
                <div class="form-group">
                  <input id="password-field" type="password" class="form-control" name="password">
                  <label class="form-control-placeholder" for="password">Password</label>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                </div>
                <!-- <div class="form-group d-md-flex">
                  <div class="w-50 text-left">
                    <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#">Forgot Password</a>
                  </div>
                </div> -->
              </form>
              <p class="text-center">Already a member? <a data-toggle="tab" href="<?php echo base_url('index.php/login/index'); ?>">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://preview.colorlib.com/theme/bootstrap/login-form-15/js/jquery.min.js"></script>
  <script src="https://preview.colorlib.com/theme/bootstrap/login-form-15/js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.3YxqA_kpjO.js"></script>

</body>

</html>