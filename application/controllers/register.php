<!-- Register Page Controller -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model(['register_model', 'login_model']);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
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
            $this->load->view('register', $data);
        } else {
            if ($this->register_model->insertDb($inputPostData)) {
                $this->session->set_flashdata('success', "User Registered Sucessfully");
            } else {
                $this->session->set_flashdata('exception', "Failed to insert data into the database.");
            }

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


/**
 * Prepare data (When we post request)
 * Validate
 *      - Success
 *          then DB call (if success)
 *      - Fail ()
 *            - display view
 *              
 */
