<?php defined('BASEPATH') or exit('No direct script access allowed');

class Common_model extends CI_Model
{
	private $user_role_tbl = "user_role_tbl";
	public function district_list()
	{
		//''  => "Select District",
		$district_list = array(
			''			=> 'Select District',
			'Anantnag' 	=> 'Anantnag',
			'Bandipore' => 'Bandipore',
			'Baramulla' => 'Baramulla',
			'Budgam' 	=> 'Budgam',
			'Doda' 		=> 'Doda',
			'Ganderbal' => 'Ganderbal',
			'Jammu' 	=> 'Jammu',
			'Kargil' 	=> 'Kargil',
			'Kathua' 	=> 'Kathua',
			'Kishtwar' 	=> 'Kishtwar',
			'Kulgam' 	=> 'Kulgam',
			'Kupwara' 	=> 'Kupwara',
			'Leh' 		=> 'Leh',
			'Poonch' 	=> 'Poonch',
			'Pulwama' 	=> 'Pulwama',
			'Rajouri' 	=> 'Rajouri',
			'Ramban' 	=> 'Ramban',
			'Reasi' 	=> 'Reasi',
			'Samba' 	=> 'Samba',
			'Shopian' 	=> 'Shopian',
			'Srinagar' 	=> 'Srinagar',
			'Udhampur' 	=> 'Udhampur'
		);
		return $district_list;
	}

	/*
    |----------------------------------------------
    |        id genaretor
    |----------------------------------------------     
    */
	public function randStrGen($mode = null, $len = null)
	{
		$result = "";
		if ($mode == 1) :
			$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		elseif ($mode == 2) :
			$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		elseif ($mode == 3) :
			$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
		elseif ($mode == 4) :
			$chars = "0123456789";
		endif;

		$charArray = str_split($chars);
		for ($i = 0; $i < $len; $i++) {
			$randItem = array_rand($charArray);
			$result .= "" . $charArray[$randItem];
		}
		return $result;
	}
	/*
    |----------------------------------------------
    |         Ends of id genaretor
    |----------------------------------------------
  */

	public function treeViewArray($array, $parent_id = 0, $strCurrentKeyId, $strParentKeyId, $strSubCategoryKeyName = 'subs')
	{
		$temp_array = array();
		foreach ($array as $element) {
			if ($element[$strParentKeyId] == $parent_id) {
				$element[$strSubCategoryKeyName] = $this->treeViewArray($array, $element[$strCurrentKeyId], $strCurrentKeyId, $strParentKeyId, $strSubCategoryKeyName);
				$temp_array[] = $element;
			}
		}
		return $temp_array;
	}

	public function treeViewHtml($array, $parent_id = 0, $parents = array(), $strCurrentKeyId, $strParentKeyId, $strFieldName)
	{
		if ($parent_id == 0) {
			foreach ($array as $element) {
				if (($element[$strParentKeyId] != 0) && !in_array($element[$strParentKeyId], $parents)) {
					$parents[] = $element[$strParentKeyId];
				}
			}
		}
		$menu_html = '';
		foreach ($array as $element) {
			if ($element[$strParentKeyId] == $parent_id) {
				$menu_html .= '<li><a href="#">' . $element[$strFieldName] . '</a>';
				if (in_array($element[$strCurrentKeyId], $parents)) {
					$menu_html .= '<ul>';
					$menu_html .= $this->treeViewHtml($array, $element[$strCurrentKeyId], $parents, $strCurrentKeyId, $strParentKeyId, $strFieldName);
					$menu_html .= '</ul>';
				}
				$menu_html .= '</li>';
			}
		}
		$menu_html .= '';
		return $menu_html;
	}

	public function valArr($arrmixValues, $intCount = 1, $boolCheckForEquality = false)
	{
		$boolIsValid = (true == is_array($arrmixValues) && $intCount <= count($arrmixValues)) ? true : false;
		if (true == $boolCheckForEquality && true == $boolIsValid) {
			$boolIsValid = ($intCount == count($arrmixValues)) ? true : false;
		}

		return $boolIsValid;
	}

	public function show($strMixVar)
	{
		foreach (func_get_args() as $strMixVar) {
			echo '<pre style="background-color:white; color:rgb(32, 56, 18);padding:5px; border: 1px solid black; border-radius: 4px;">', htmlentities(print_r($strMixVar, true)), '</pre>';
		}
		exit;
	}
	public function getCountryName($country_id)
	{
		//echo $country_id;
		//$this->db->where('country_id',$country_id);
		//$country= $this->db->get('countries')->row();
		//return $country;
		$result = $this->db
			->select("*")
			->from('countries')
			->where('country_id', $country_id)
			->get()
			->row();
		return $result->country_name;
	}
	public function getStateName($state_id)
	{
		//echo $country_id;
		//$this->db->where('country_id',$country_id);
		//$country= $this->db->get('countries')->row();
		//return $country;
		$result = $this->db
			->select("*")
			->from('states')
			->where('state_id', $state_id)
			->get()
			->row();
		return $result->state_name;
	}
	public function getCityName($city_id)
	{
		//echo $country_id;
		//$this->db->where('country_id',$country_id);
		//$country= $this->db->get('countries')->row();
		//return $country;
		$result = $this->db
			->select("*")
			->from('cities')
			->where('city_id', $city_id)
			->get()
			->row();
		return $result->city_name;
	}
	public function getPropertyFacing($facing_id)
	{
		//echo $country_id;
		//$this->db->where('country_id',$country_id);
		//$country= $this->db->get('countries')->row();
		//return $country;
		$result = $this->db
			->select("*")
			->from('property_facing')
			->where('facing_id', $facing_id)
			->get()
			->row();
		return $result->facing_direction;
	}
}
