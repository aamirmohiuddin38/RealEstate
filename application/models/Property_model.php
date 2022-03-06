<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property_model extends CI_Model
{

  private $table = "property_tbl";

  public function create($data = [])
  {
    return $this->db->insert($this->table, $data);
  }

  public function read()
  {
    return $this->db->select("*")->from($this->table)->get()->result();
  }
  public function get($id){
    $result=$this->db
                ->select("*")
                ->from($this->table)
                ->where('p_id',$id)
                ->get()
                ->row();
                return $result;
    // echo("<pre>");
    // print_r($result);  
    // echo("</pre>");
  }

  public function update_data($data = [],$id){
    
    $this->db->where('p_id', $id);
   return $this->db->update($this->table,$data);

  }
  public function delete_data($id){
    $this->db->where('p_id', $id);
    return $this->db->delete($this->table);
  }
}
