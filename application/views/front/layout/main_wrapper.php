<?php $this->load->view("front/layout/header_view");
?>
<?php $this->load->view("front/layout/navbar_view");
?>

<!-- content START -->
<?php echo (!empty($content) ? $content : null) ?>
<!-- Content END -->
<?php $this->load->view("front/layout/footer_view");
?>