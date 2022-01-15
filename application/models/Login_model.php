<!-- Login Page Model -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function checkUser($userinfo)
	{
        print_r($userinfo);
        echo '8';
		if (empty($userinfo['mail']) || empty($userinfo['pwd'])){
            echo "10";
            return false;
        }
        else{
            if ($userinfo['mail'] == 'admin@admin.com' && $userinfo['pwd'] == '1234'){
                echo '14'; 
                return true;
            }
            else{
                echo '18';
                return false;

            }
            echo 'something';
        }
        // echo "<pre>";
		// print_r($userinfo); 
		// echo "</pre>";
    } 
}
