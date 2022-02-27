<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/nav'); ?>
<?php $this->load->view('admin/layout/leftsidebar_view'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <!-- alert message -->
      <?php if ($this->session->flashdata('message') != null) {  ?>
        <div class="alert alert-info alert-dismissible m-2">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-info"></i> Alert!</h5>
          <?php echo $this->session->flashdata('message');
          if (isset($_SESSION['message'])) {
            unset($_SESSION['message']);
          } ?>
        </div>
      <?php } ?>

      <?php if ($this->session->flashdata('exception') != null) {  ?>
        <div class="alert alert-danger alert-dismissable  m-2">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-ban"></i>Alert</h5>
          <?php echo $this->session->flashdata('exception');
          if (isset($_SESSION['exception'])) {
            unset($_SESSION['exception']);
          } ?>
        </div>
      <?php } ?>

      <?php if (0 && validation_errors()) {  ?>
        <div class="alert alert-danger alert-dismissable  m-2">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-ban"></i>Alert</h5>
          <?php echo validation_errors();
          ?>
        </div>
      <?php } ?>
      <?php echo !empty($content) ? $content : null; ?>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php $this->load->view('admin/layout/footer'); ?>