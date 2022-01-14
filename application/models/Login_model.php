<!-- Login Page Model -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function checkUser($userinfo)
	{
		// if (empty($userinfo['mail']) || empty($userinfo['pwd'])){
        //     return false;
        // }
        // else{
        //     if ($userinfo['mail'] == 'admin@admin.com' && $userinfo['pwd'] == '1234'){
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }
        // }
        echo "<pre>";
		print_r($userinfo); 
		echo "</pre>";
    } 
}
