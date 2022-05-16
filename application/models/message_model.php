<?php defined('BASEPATH') or exit('No direct script access allowed');

class message_model extends CI_Model
{
  private $msg_tbl = 'messages_tbl';
  public function save_msg($data = [])
  {
    return $this->db->insert($this->msg_tbl, $data);
  }
}
