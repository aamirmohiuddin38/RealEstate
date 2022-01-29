<!-- Login Page Model -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function insertDb($data)
    {
        return $this->db->insert('user_tbl', $data);
    }
    public function checkUser($userinfo)
    {
        $result = $this->db->select("u_name,u_email,u_phone, u_username")
            ->from('user_tbl')
            ->where('u_email', $userinfo['mail'])
            ->where('u_password', $userinfo['pwd'])
            ->get()
            ->row();

        if (empty($result)) {
            $data['status'] = false;
            return $data;
        } else {
            $data['status'] = true;
            $data['user'] = $result;
            return $data;
        }
    }

    public function get_user_role_list_as_array()
    {
        $data = $this->db->select('*')->from('user_role_tbl')->where('ur_status', 1)->get()->result();

        foreach ($data as $key => $user_role) {
            $list[$user_role->ur_id] = ucfirst($user_role->ur_role);
        }
        return $list ?? NULL;
    }

    public function getDbData()
    {
        return $temp['users'] = $this->db->select('*')->from('user_tbl')->get()->result();
    }
}
