<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {
    public function getDbData(){
            return $temp['users'] = $this->db->select('*')->from('user_tbl')->get()->result();
        }

    public function insertDb($data){
            $this->db->insert('user_tbl', $data);
    }

    public function get_user_role(){
        $data = $this->db->select('*')->from('user_role_tbl')->get()->result();
        //print_r($data); //we get complex array here i.e multidimensiional associative , so we need to extract only our desired information as:
        //$list = [];    //empty array which we will populate with our desired information

        foreach($data as $key => $value){
            $list[$value->ur_id] = ucfirst($value->ur_role);
        }
        // print_r($list);
        // die();
        return $list ?? NULL;
    }    
}