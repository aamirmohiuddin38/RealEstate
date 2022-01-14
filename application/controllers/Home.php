<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model('Home_model');
		$temp['message'] = $this->Home_model->getData();
		$temp['tableData'] = $this->Home_model->getTableData();
		$this->load->view('home_message' , $temp);
		//echo var_dump($temp);
	}
}
