<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['content'] = $this->load->view('frontend/pageparts/property_sale_view', '', true);
        $this->load->view('frontend/layout/main_wrapper', $data);
    }
    public function about()
    {
        $data['content'] = $this->load->view('frontend/pages/about_view', '', true);
        $this->load->view('frontend/layout/main_wrapper', $data);
    }
}
