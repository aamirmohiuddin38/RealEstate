<!-- Login Page Controller -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		if ($this->session->userdata('isLogin') == true) {
			echo "You have already logged in.";
			echo "<a href='" . base_url('index.php/login/logout') . "'>Logout</a>";
		} else {
			$this->load->view('login');
		}
	}

	public function checklogin()
	{
		//prepare data first to pass to checkUser() func
		$info = [
			'mail' => $this->input->post('email'),
			'pwd' => md5($this->input->post('pswd')),
			'rem' => $this->input->post('remember')
		];

		// Check user exists in our database or not.
		$userData = $this->Login_model->checkUser($info);

		if ($userData['status'] == true) {
			$userData['user'];
			$user = [
				'isLogin' => true,
				'UserFullName' => $userData['user']->u_name,
				'UserEmail' => $userData['user']->u_email,
				'UserPhone' => $userData['user']->u_phone,
				'Username' => $userData['user']->u_username,
			];

			$this->session->set_userdata($user);


			echo "<h1>Welcome back user</h1>";
			echo "Form Successfully Submitted";
		} else {
			$this->session->set_flashdata('exception', "Invalid email/password.");
			// echo "<h2>Sorry, not a User</h2>";
			redirect('login/index');
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('login/index');
	}
}
