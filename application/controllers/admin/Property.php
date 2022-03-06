<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array(
      'property_model',
    ));
    $this->load->library('form_validation','session');
  }

  public function index()
  {
    $data = [];
    $data['content'] = $this->load->view('admin/property/form_view', $data, true);
    $this->load->view('admin/layout/main_wrapper_view', $data);
  }

  public function list()
  {
    $data = [];
    $data['properties'] = $this->property_model->read();
    // echo"<pre>";
    // print_r($data['properties']);
    // echo "</pre>";  
    $data['content'] = $this->load->view('admin/property/list_view', $data, true);
    $this->load->view('admin/layout/main_wrapper_view', $data);
  }
  public function create()
  {
   //  validation rules
          $this->form_validation->set_rules('property_title','Property Title','required|max_length[25]|min_length[5]');
          $this->form_validation->set_rules('type','Type','required');
          $this->form_validation->set_rules('label','Property Label','required');
          $this->form_validation->set_rules('area_size','Area Size','required|numeric');
          $this->form_validation->set_rules('size_postfix','Size Postfix','required|numeric');
          $this->form_validation->set_rules('land_area','Land Area','required|numeric');
          $this->form_validation->set_rules('land_area_postfix','Land Area Postfix','required|numeric');
          $this->form_validation->set_rules('year_built','Year Built','required|numeric');
          $this->form_validation->set_rules('country','Country','required');
          $this->form_validation->set_rules('state','State','required');
          $this->form_validation->set_rules('city','City','required');
          $this->form_validation->set_rules('address','Address','required');
          $this->form_validation->set_rules('postal_code','Postal Code','required|numeric|max_length[10]');
          // check validation
    if($this->form_validation->run()==FALSE){
        $this->index();
    }
       
    else{

                $data['input'] = (object) $postData = [
                  "p_id"           => null,
                  "p_title"        => ucfirst($this->input->post('property_title')),
                  "p_content"      => $this->input->post('content'),
                  "p_type"         => $this->input->post('type'),
                  "p_label"        => $this->input->post('label'),
                  "p_status"       => $this->input->post('status'),
                  "p_country"      => $this->input->post('country'),
                  "p_state"        => $this->input->post('state'),
                  "p_city"         => $this->input->post('city'),
                  "p_address"      => ucfirst($this->input->post('address')),
                  "p_postal_code"  => $this->input->post('postal_code'),
                  "p_bedrooms"     => $this->input->post('bedrooms'),
                  "p_bathrooms"    => $this->input->post('bathrooms'),
                  "p_area"         => $this->input->post('area_size'),
                  "p_area_unit"    => $this->input->post('size_postfix'),
                  "p_land"         => $this->input->post('land_area'),
                  "p_land_unit"    => $this->input->post('land_area_postfix'),
                  "p_garage"       => $this->input->post('garages'),
                  "p_garages_unit" => $this->input->post('garage_size'),
                  "p_year"         => $this->input->post('year_built'),
                  "p_price"        => $this->input->post('price'),
                  "p_front_facing" => $this->input->post('front_facing'),
                  "p_private_note" => $this->input->post('private_note'),
                  "p_featured"     => $this->input->post('featured'),
                  "p_published"    => $this->input->post('published'),

                ];


            if ($this->property_model->create($postData)) {
              
              $this->session->set_flashdata('success','Property Added');
              redirect('admin/property/list');
            } else {
              $this->session->set_flashdata('failure','Property not Added!');
              redirect('admin/property/list');
            }
          }
     }

     public function detail(){  
      $id=$_GET['id'];
      $data['result']=$this->property_model->get($id);
      //  echo "<pre>" ;
      //  print_r($data['result']);
      //  echo "</pre>" ;
      $data['content']=$this->load->view('admin/property/detail_view',$data,true);
      $this->load->view('admin/layout/main_wrapper_view',$data);
      }

      public function edit(){
        $id=$_GET['id'];
        $data['result']=$this->property_model->get($id);
        $data['content']=$this->load->view('admin/property/edit_view',$data,true);
        $this->load->view('admin/layout/main_wrapper_view',$data);
        
      }
      public function delete(){
            $id=$_GET['id'];
          if($this->property_model->delete_data($id)){
           $this->session->set_flashdata('success','Property Deleted!');
           redirect('admin/property/list');
          }
          else{
            $this->session->set_flashdata('failure','Property Not Deleted!');
            redirect('admin/property/list');
          }
      }
      public function modify(){
         //  validation rules
         $this->form_validation->set_rules('property_title','Property Title','required|max_length[25]|min_length[5]');
         $this->form_validation->set_rules('type','Type','required');
         $this->form_validation->set_rules('label','Property Label','required');
         $this->form_validation->set_rules('area_size','Area Size','required|numeric');
         $this->form_validation->set_rules('size_postfix','Size Postfix','required|numeric');
         $this->form_validation->set_rules('land_area','Land Area','required|numeric');
         $this->form_validation->set_rules('land_area_postfix','Land Area Postfix','required|numeric');
         $this->form_validation->set_rules('year_built','Year Built','required|numeric');
         $this->form_validation->set_rules('country','Country','required');
         $this->form_validation->set_rules('state','State','required');
         $this->form_validation->set_rules('city','City','required');
         $this->form_validation->set_rules('address','Address','required');
         $this->form_validation->set_rules('postal_code','Postal Code','required|numeric|max_length[10]');
         
        $id=$_GET['id'];
       
         // check validation
   if($this->form_validation->run()==FALSE){
       $this->edit();
   }
      
   else{

               $data['input'] = (object) $postData = [
                 "p_id"           => $id,
                 "p_title"        => ucfirst($this->input->post('property_title')),
                 "p_content"      => $this->input->post('content'),
                 "p_type"         => $this->input->post('type'),
                 "p_label"        => $this->input->post('label'),
                 "p_status"       => $this->input->post('status'),
                 "p_country"      => $this->input->post('country'),
                 "p_state"        => $this->input->post('state'),
                 "p_city"         => $this->input->post('city'),
                 "p_address"      => ucfirst($this->input->post('address')),
                 "p_postal_code"  => $this->input->post('postal_code'),
                 "p_bedrooms"     => $this->input->post('bedrooms'),
                 "p_bathrooms"    => $this->input->post('bathrooms'),
                 "p_area"         => $this->input->post('area_size'),
                 "p_area_unit"    => $this->input->post('size_postfix'),
                 "p_land"         => $this->input->post('land_area'),
                 "p_land_unit"    => $this->input->post('land_area_postfix'),
                 "p_garage"       => $this->input->post('garages'),
                 "p_garages_unit" => $this->input->post('garage_size'),
                 "p_year"         => $this->input->post('year_built'),
                 "p_price"        => $this->input->post('price'),
                 "p_front_facing" => $this->input->post('front_facing'),
                 "p_private_note" => $this->input->post('private_note'),
                 "p_featured"     => $this->input->post('featured'),
                 "p_published"    => $this->input->post('published'),

               ];
        

               if($this->property_model->update_data($postData,$id)){
                $this->session->set_flashdata('success','Property Updated!');
                redirect('admin/property/list');
               }
               else{
                 $this->session->set_flashdata('failure','Property Not Updated!');
                 redirect('admin/property/list');
               }
      
    } 
 }
}