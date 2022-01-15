<!-- Register Page Controller -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('register_model');
    }

	public function index(){
        $inputPostData = [
            'u_id' => NULL,
            'u_name' => $this->input->post('name'),
            'u_email' => $this->input->post('email'),
            'u_phone' => $this->input->post('phone'),
            'u_username' => $this->input->post('username'),
            'u_password' => $this->input->post('password'),
            'u_doc' => date('d-m-Y H:m:s'),
            'u_dou' => date('d-m-Y H:m:s'),
            'u_status' => 1
        ];

        $data['info'] = (object) $inputPostData; //sent to value attributes
        $this->load->view('register',$data);
        // echo "<pre>";
        // print_r($inputPostData);
        // echo "</pre>";
        
        $this->register_model->insertDb($inputPostData);
        // $data['users'] = $this->register_model->getDbData();
        // print_r($data['users']);
    }

    // public function getDbData(){
    //     $temp['users'] = $this->db->select('*')->from('user_tbl')->get()->result();
    //     echo "<pre>";
    //     print_r($temp);
    //     echo "</pre>";
    // }
}