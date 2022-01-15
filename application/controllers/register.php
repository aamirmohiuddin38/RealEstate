<!-- Register Page Controller -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index(){

        $inputPostData = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];

        $data['info'] = (object) $inputPostData;

        $this->load->view('register',$data);
        print_r($data);
    }
}