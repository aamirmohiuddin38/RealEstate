<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {
    public function getDbData(){
            return $temp['users'] = $this->db->select('*')->from('user_tbl')->get()->result();
        }

    public function insertDb($data){
            $this->db->insert('user_tbl', $data);
    }
}