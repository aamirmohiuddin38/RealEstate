<!-- Login Page Controller -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->database('realestate_db');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function checklogin(){
		//prepare data first to pass to checkUser() func
        $info = [
			'mail' => $this->input->post('email'),
			'pwd' => $this->input->post('pswd'),
			'rem' => $this->input->post('remember')
		];
        //   print_r($info);
		//   print_r($_POST);
		$isValid = $this->Login_model->checkUser($info);
		if($isValid == true){
			echo "<h1>Welcome back user</h1>";
			echo "Form Successfully Submitted";
		}
		else{
			//echo var_dump($isValid);
		    echo "<h2>Sorry, not a User</h2>";
		}
		// echo "<pre>";
		// print_r($this->input->post()); //using codeigniter utility , it can be also displayed as print_r($_POST)
		// echo "</pre>";
		// echo "Form Successfully Submitted";
	}
}
