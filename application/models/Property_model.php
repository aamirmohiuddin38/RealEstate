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
  public function get($id)
  {
    $result = $this->db
      ->select("*")
      ->from($this->table)
      ->where('p_id', $id)
      ->get()
      ->row();
    return $result;
    // echo("<pre>");
    // print_r($result);  
    // echo("</pre>");
  }

  public function update_data($data = [], $id)
  {

    $this->db->where('p_id', $id);
    return $this->db->update($this->table, $data);
  }
  public function delete_data($id)
  {
    $this->db->where('p_id', $id);
    return $this->db->delete($this->table);
  }
  public function getCountries()
  {

    $countries = $this->db->get('countries')->result_array();
    return $countries;
  }
  public function getStatesOfCountry($country_id)
  {
    $this->db->where('country_id', $country_id);
    $states = $this->db->get('states')->result_array();
    return $states;
  }
  public function getCitiesOfState($state_id)
  {
    $this->db->where('state_id', $state_id);
    $cities = $this->db->get('cities')->result_array();
    return $cities;
  }
  public function getFacingDirections()
  {
    $facing_directions = $this->db->get('property_facing')->result_array();
    return $facing_directions;
  }
  public function getStatus()
  {
    return $this->db->get('property_status')->result_array();
  }
  public function getType()
  {
    return $this->db->get('property_type')->result_array();
  }
  public function getLabel()
  {
    return $this->db->get('property_label')->result_array();
  }

  public function getProperties()
  {
    return $this->db->get('property_tbl')->result_array();
  }
}
