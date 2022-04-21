<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model(array(
			'common_model',
			'login_model',
			'setting_model',
		));
	}
	public function index()
	{
		$this->login();
	}
	public function login()
	{

		if ($this->session->userdata('isLogIn'))
			$this->user_redirect($this->session->userdata('user_role'));

		$this->form_validation->set_rules('email', display('email'), 'required|max_length[50]|valid_email');
		$this->form_validation->set_rules('password', display('password'), 'required|max_length[32]|md5');
		$this->form_validation->set_rules('user_role', display('user_role'), 'required');

		#-------------------------------#
		$setting = $this->setting_model->read();
		$data['title']   = (!empty($setting->title) ? $setting->title : null);

		$data['logo']    = (!empty($setting->logo) ? $setting->logo : null);
		$data['favicon'] = (!empty($setting->favicon) ? $setting->favicon : null);
		$data['footer_text'] = (!empty($setting->footer_text) ? $setting->footer_text : null);

		$data['user'] = (object)$postData = [
			'email'     => $this->input->post('email', true),
			'password'  => md5($this->input->post('password', true)),
			'user_role' => $this->input->post('user_role', true),
		];
		#-------------------------------#

		if ($this->form_validation->run() === true) {
			$check_user = $this->login_model->check_user($postData);
			//print_r($check_user->row());die;
			if ($check_user->num_rows() === 1) {
				$this->session->set_userdata([
					'isLogIn'       => true,
					'user_id'       => $check_user->row()->user_id,
					'acc_id'         => $check_user->row()->acc_id,
					'email'         => $check_user->row()->email,
					'fullname'      => $check_user->row()->firstname,
					'user_role'     => $check_user->row()->user_role,
					// Fixme:
					'picture'       => !empty($check_user->row()->picture) ? $check_user->row()->picture : 'uploads/noimageold.png',
					'create_date'     => $check_user->row()->doc,
					/* Saving Setting Into Session*/
					'title'         => (!empty($setting->title) ? $setting->title : null),
					'address'       => (!empty($setting->description) ? $setting->description : null),
					'logo'          => (!empty($setting->logo) ? $setting->logo : null),
					'favicon'          => (!empty($setting->favicon) ? $setting->favicon : null),
					'footer_text'     => (!empty($setting->footer_text) ? $setting->footer_text : null),
				]);
				$this->user_redirect($postData['user_role']);
				// can directy redirect here
			} else {
				$this->session->set_flashdata('exception', display('incorrect_email_password'));
				redirect('index.php/login');
			}
		} else {
			$this->load->view('login/login_wrapper', $data);
		}
	}

	public function user_redirect($user_role)
	{
		//$this->save_login_time();
		switch ($user_role) {
			case 1:
				redirect('index.php/admin/home/index');    // Admin
				break;
			case 2:
				redirect('index.php/houzez');     // worker
				break;
			default:
				$this->logout();
				//redirect('login');
				break;
		}
	}

	public function developer()
	{
		$this->load->view('profile3');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('index.php/login');
	}
	public function register()
	{
		$this->load->view('login/register_view');
	}
	public function register_data()
	{
		//print_r($_POST); ( [uname] => zaid [uemail] => zaid@123 [upass] => zaid [uphone] => 99999 [uaddr] => zjs )
		$this->form_validation->set_rules('uname', 'UserName', 'required|max_length[30]');
		$this->form_validation->set_rules('uemail', 'email', 'required|max_length[50]|valid_email');
		$this->form_validation->set_rules('upass', 'password', 'required|max_length[32]');
		$this->form_validation->set_rules('uphone', 'Phone No', 'required');
		$this->form_validation->set_rules('uaddr', 'Address ', 'required');
		if ($this->form_validation->run() == true) {
			$data = array(
				'username' => $this->input->post('uname'),
				'password' => md5($this->input->post('upass')),
				'email' => $this->input->post('uemail'),
				'address' => $this->input->post('uaddr'),
				'mobile' => $this->input->post('uphone'),
				'user_role' => 2
			);
			if ($this->login_model->register($data)) {
				$this->session->set_flashdata('success', 'User Added!');
				redirect('index.php/login');
			} else {
				$this->session->set_flashdata('failure', 'Unable to Add!');
				$this->register();
			}
		} else {
			$this->register();
		}
	}
}
