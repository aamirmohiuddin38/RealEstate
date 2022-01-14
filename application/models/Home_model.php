<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	public function getData()
	{
        return ("Data sent Successfully");
	}

	public function getTableData(){
		$info = [
			"Aamir Mohiuddin" => ["MCA",24],
			"Zaid Javeed" => ["MCA", 24],
			"Irfan" => ["MCA", 24],
			"Aamir" => ["MCA", 24]
		];
		return $info;
	}
}
