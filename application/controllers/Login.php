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
			$this->redirectTo($this->session->userdata('user_role'));

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
				$this->redirectTo($postData['user_role']);
				// can directy redirect here
			} else {
				$this->session->set_flashdata('exception', display('incorrect_email_password'));
				redirect('login');
			}
		} else {
			$data['user_role_list'] = $this->common_model->get_user_roles();

			$this->load->view('login/login_wrapper', $data);
		}
	}

	public function redirectTo($user_role = null)
	{
		//$this->save_login_time();
		switch ($user_role) {
			case 1:
				redirect('admin/home/index');    // Admin
				break;
				// case 2:
				//     redirect('dashboard_worker/home/index');     // worker
				//     break;
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
		redirect('login');
	}
}
