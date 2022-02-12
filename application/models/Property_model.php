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
}
