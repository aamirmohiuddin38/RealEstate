<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/nav'); ?>
<?php $this->load->view('admin/layout/leftsidebar_view'); ?>
<!-- !-- Content Wrapper. Contains page content -->
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
  <!-- Main content -->
  <section class="content bg-light p-2">
    <div class="container-fluid ">
      <?php echo validation_errors(); ?>
      <?php echo !empty($content) ? $content : null; ?>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php $this->load->view('admin/layout/footer'); ?>