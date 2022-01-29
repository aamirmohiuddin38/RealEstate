<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('login_model');
		// $this->load->database();
		$this->load->library('session');
		// $this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$this->load->model('Home_model');
		$temp['message'] = $this->Home_model->getData();
		$temp['tableData'] = $this->Home_model->getTableData();
		$this->load->view('home_message', $temp);
		//echo var_dump($temp);
	}
}
