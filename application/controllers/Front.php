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
        $data['property_sale'] = $this->front_model->property_sale();
        $data['images'] = $this->property_model->front_img_list();
        $data['content'] = $this->load->view('frontend/pages/home', $data, true);
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
