<?php
defined('BASEPATH') or exit('No direct script access allowed');

class message extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(array(
      'message_model',
    ));
  }
  public function index()
  {
    $this->save_message();
  }
  public function save_message()
  {
    // validation rules
    // $this->form_validation->set_rules('username', 'UserName', 'required');
    // $this->form_validation->set_rules('address', 'Address', 'required');
    // $this->form_validation->set_rules('phone', 'Phone No', 'required|numeric|max_length[15]|min_length[10]');
    // $this->form_validation->set_rules('email', 'Email', 'required|email');
    // $this->form_validation->set_rules('subject', 'Subject', 'required');
    // $this->form_validation->set_rules('user_query', 'Message', 'required|max_length[500]');
    // check validation
    // if ($this->form_validation->run() == FALSE) {
    //   //redirect('index.php/front/property_details');
    // } else {
    $data['input_msg'] = (object) $postData = [
      "msg_id"           => null,
      "p_id"           => $this->input->post('p_id'),
      "username"        => ucfirst($this->input->post('username')),
      "address"      => $this->input->post('address'),
      "phone"         => $this->input->post('phone'),
      "email"        => $this->input->post('email'),
      "subject"       => $this->input->post('subject'),
      "message"      => $this->input->post('user_query'),
      "read_status"   => 0,
      "msg_date"     =>  date('Y-m-d H:m:s'),
    ];
    if ($this->message_model->save_msg($postData)) {
      echo ('Message Sent Successfully!');
      // $this->session->set_flashdata('success', 'Message Sent Successfully!');
      // redirect('index.php/front/property_details');
    } else {
      echo ('Message Not Sent!');
      // $this->session->set_flashdata('failure', 'Message Not Sent!');
      // redirect('index.php/front/property_details');
    }
    // }
  }
}
