<!-- Register Page Controller -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('register_model');
        $this->load->helper(array('form','url')); 
        $this->load->library('form_validation');
    }

	public function index(){
        // Define Validation rules
        $this->form_validation->set_rules('name','Name','required', array('required' => 'Please provide your %s'));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Please provide your %s', 'valid_email' => 'This %s is not valid'));
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|min_length[10]|max_length[14]|numeric');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        // Store form data and prepare it to save into database
        $inputPostData = [
            'u_id' => NULL,
            'u_name' => $this->input->post('name'),
            'u_email' => $this->input->post('email'),
            'u_phone' => $this->input->post('phone'),
            'u_username' => $this->input->post('username'),
            'u_password' => md5($this->input->post('password')), //md5 function encrypts the password using md5 algorithm 
            'u_doc' => date('Y-m-d H:m:s'),
            'u_dou' => date('Y-m-d H:m:s'),
            'u_status' => 1
        ];
        $data['info'] = (object) $inputPostData; //sent to value attributes
    //Check validation
    if($this->form_validation->run() == FALSE){
        $this->load->view('register',$data);
    } else{
        $this->register_model->insertDb($inputPostData);
            $this->load->view('register',$data);
    }
    } 
}
    // echo "<pre>";
    // print_r($inputPostData); 
    // echo "</pre>";  
    // $data['users'] = $this->register_model->getDbData();
    // print_r($data['users']);
    // public function getDbData(){
    //     $temp['users'] = $this->db->select('*')->from('user_tbl')->get()->result();
    //     echo "<pre>";
    //     print_r($temp);
    //     echo "</pre>";
    // }
