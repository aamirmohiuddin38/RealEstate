<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model(array('front_model', 'property_model'));
    }

    public function index()
    {
        $data = [];
        $data['slider_properties'] = $this->front_model->get_slider_properties();
        $data['property_sale'] = $this->front_model->property_sale();
        $data['images'] = $this->property_model->front_img_list();
        $data['content'] = $this->load->view('frontend/pages/home', $data, true);
        $this->load->view('frontend/layout/main_wrapper', $data);
    }

    public function property_grids(){
        $data['properties'] = $this->front_model->read_properties();
        $data['images'] = $this->property_model->front_img_list();
        $data['content'] = $this->load->view('frontend/pages/property_grid_view', $data, true);
        $this->load->view('frontend/layout/main_wrapper', $data);
    }

    public function property_details(){
        $id = $_GET['id'];
        $data['property'] = $this->front_model->read_property_by_id($id);
        $data['images'] = $this->property_model->img_list($id);
        $data['content'] = $this->load->view('frontend/pages/property_view', $data, true);
        $this->load->view('frontend/layout/main_wrapper', $data);
    }

    public function about()
    {
        $data['content'] = $this->load->view('frontend/pages/about_view', '', true);
        $this->load->view('frontend/layout/main_wrapper', $data);
    }
    public function contactUs()
    {
        $data['content'] = $this->load->view('frontend/pages/contact_view', '', true);
        $this->load->view('frontend/layout/main_wrapper', $data);
    }
}
