<!-- Register Page Controller -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('register_model');
        $this->load->helper('url');
    }

    public function index()
    {

        echo date('y-m-d');
        echo "<br>";
        echo date('Y-m-d');
        echo "<br>";
        echo date('D, Y-M-d H:m:s');
        // Store input data
        $inputPostData = [
            'u_id' => NULL,
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

        if ($this->input->post('register') == 1) {

            $this->register_model->insertDb($inputPostData);

            $this->load->view('register', $data);
            // redirect('/index');
        } else {
            // Load the register form.
            $this->load->view('register', $data);
        }
    }

    // public function getDbData(){
    //     $temp['users'] = $this->db->select('*')->from('user_tbl')->get()->result();
    //     echo "<pre>";
    //     print_r($temp);
    //     echo "</pre>";
    // }
}


/**
 * Get reques ->
 *  if get request then 
 *      display form/view
 *      exit 
 *  if post request then
 *      - Prepare data
 *      - Validate data
 *      - if valdatation success
 *          - Then database call
 *              if(sucess)
 *                  - then display view with sucess message
 *              else
 *                  - display view with error message.
 *      - if validation fails
 *          - Display view again with error message.
 */
