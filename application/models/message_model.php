<?php defined('BASEPATH') or exit('No direct script access allowed');

class message_model extends CI_Model
{
  private $msg_tbl = 'messages_tbl';
  public function save_msg($data = [])
  {
    return $this->db->insert($this->msg_tbl, $data);
  }
  public function get_user_messages()
  {
    return $this->db
      ->select("*")
      ->from($this->msg_tbl)
      ->limit(1)
      ->order_by('msg_date', 'DESC')
      ->where('read_status', 0)
      ->get()
      ->row();
  }
}
