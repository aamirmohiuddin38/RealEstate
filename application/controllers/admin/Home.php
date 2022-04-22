<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('property_model');
		// $this->load->database();
		$this->load->library('session');
		// $this->load->library('form_validation');
		$this->load->helper(array('form', 'url', 'number'));


		// if ($this->session->userdata('isLogin') != true) {
		// 	redirect('login');
		// }
	}
	public function index()
	{
		if (!($this->session->userdata('isLogIn')))
			redirect('index.php/login');
		else {
			$this->load->model('Home_model');
			$temp['message'] = $this->Home_model->getData();
			$temp['value'] = $this->property_model->read();
			// print_r($temp);
			$temp['content'] = $this->load->view('admin/home_view', $temp, true);
			$this->load->view('admin/layout/main_wrapper_view', $temp);
			//echo var_dump($temp);
		}
	}

	public function form()
	{
		if (!($this->session->userdata('isLogIn')))
			redirect('index.php/login');
		else {
			$this->load->model('Home_model');
			$temp['message'] = $this->Home_model->getData();
			$temp['tableData'] = $this->Home_model->getTableData();
			$temp['content'] = $this->load->view('admin/form', '', true);
			$this->load->view('admin/layout/main_wrapper_view', $temp);
			//echo var_dump($temp);
		}
	}
}
