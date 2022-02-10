<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array(
      'property_model',
    ));
  }

  public function index()
  {
    $data = [];
    $data['content'] = $this->load->view('admin/property/form_view', $data, true);
    $this->load->view('admin/layout/main_wrapper_view', $data);
  }

  public function create()
  {
    echo "<pre>";
    print_r($_REQUEST);
  }
}
