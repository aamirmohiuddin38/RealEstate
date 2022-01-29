<!-- Login Page Controller -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->database();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		if ($this->session->userdata('isLogin') == true) {
			redirect('home');
		} else {
			$this->load->view('login2');
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
		$userData = $this->login_model->checkUser($info);

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
			redirect('home');
		} else {
			$this->session->set_flashdata('exception', "Invalid email/password.");
			// echo "<h2>Sorry, not a User</h2>";
			redirect('login/index');
		}
	}

	public function register()
	{
		// Define validation rules.
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('user_role', 'User Role', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|min_length[10]|max_length[12]|numeric');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		// Store/Prepare input data
		$inputPostData = [
			'u_id' => NULL,
			'u_ur_id' => $this->input->post('user_role'),
			'u_name' => $this->input->post('name'),
			'u_email' => $this->input->post('email'),
			'u_phone' => $this->input->post('phone'),
			'u_username' => $this->input->post('username'),
			'u_password' => md5($this->input->post('password')),
			'u_doc' => date('Y-m-d H:m:s'),
			'u_dou' => date('Y-m-d H:m:s'),
			'u_status' => 1
		];

		// Prepare data for view
		$data['info'] = (object) $inputPostData; //sent to value attributes
		// $data['user_role_list'] = ['1' => "Admin", '2' => "Client"];
		$data['user_role_list'] = $this->login_model->get_user_role_list_as_array();

		// Check validation 
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register2', $data);
		} else {
			if ($this->login_model->insertDb($inputPostData)) {
				$this->session->set_flashdata('success', "User Registered Sucessfully");
				redirect('login/index');
			} else {
				$this->session->set_flashdata('exception', "Failed to insert data into the database.");
			}

			$this->load->view('register2', $data);
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('login/index');
	}
}
