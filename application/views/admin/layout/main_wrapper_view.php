<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/nav'); ?>
<?php $this->load->view('admin/layout/leftsidebar_view'); ?>
<?php echo !empty($content) ? $content : null; ?>
<?php $this->load->view('admin/layout/footer'); ?>



