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

  public function list()
  {
    $data = [];
    $data['properties'] = $this->property_model->read();
    // print_r($data['property']);
    $data['content'] = $this->load->view('admin/property/list_view', $data, true);
    $this->load->view('admin/layout/main_wrapper_view', $data);
  }

  public function create()
  {
    // echo "<pre>";
    // print_r($_REQUEST);
    // die();

    #----------- Validation ----------------#
    {
      $this->form_validation->set_rules('property_title', ('Propety Title'),  'required|max_length[50]');
      $this->form_validation->set_rules('type', ('Type'),    'required');
    }


    $data['input'] = (object) $postData = [
      "p_id"           => null,
      "p_title"        => $this->input->post('property_title'),
      "p_content"      => $this->input->post('content'),
      "p_type"         => $this->input->post('type'),
      "p_label"        => $this->input->post('status'),
      "p_status"       => $this->input->post('label'),
      "p_bathrooms"    => $this->input->post('bedrooms'),
      "p_bedrooms"     => $this->input->post('bathrooms'),
      "p_area"         => $this->input->post('area_size'),
      "p_area_unit"    => $this->input->post('size_postfix'),
      "p_land"         => $this->input->post('land_area'),
      "p_land_unit"    => $this->input->post('land_area_postfix'),
      "p_garage"       => $this->input->post('garages'),
      "p_garages_unit" => $this->input->post('garage_size'),
      "p_year"         => $this->input->post('year_built'),
      "p_price"        => $this->input->post('price'),
      "p_private_note" => $this->input->post('private_note'),
      "p_featured"     => $this->input->post('featured'),
      "p_published"    => $this->input->post('published'),
    ];

    if ($this->form_validation->run() == TRUE) {
      if ($this->property_model->create($postData)) {
        $this->session->set_flashdata('message', ('save_successfully'));
        redirect('index.php/admin/property/list');
      } else {
        $this->session->set_flashdata('exception', ('please_try_again'));
        $data['content'] = $this->load->view('admin/property/form_view', $data, true);
        $this->load->view('admin/layout/main_wrapper_view', $data);
      }
    } else {
      $this->session->set_flashdata('exception', ('please_try_again'));
      $data['content'] = $this->load->view('admin/property/form_view', $data, true);
      $this->load->view('admin/layout/main_wrapper_view', $data);
    }
  }
}
