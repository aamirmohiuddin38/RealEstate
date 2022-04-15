<?php defined('BASEPATH') or exit('No direct script access allowed');

class Property_model1 extends CI_Model
{

	private $table        = "property_tbl";
	private $pro_details  = "property_details_tbl";
	private $pro_type     = "property_type_tbl";
	private $pro_status   = "property_status_tbl";
	private $pro_address  = "";


	public function read()
	{
		$this->db->select("
						property_tbl.p_id,
            property_tbl.p_title,
            property_tbl.p_content,
            property_type.type_name as pt_name,
            property_label.label_name as pl_name,
            property_status.status_name as ps_name,
            countries.country_name,
            property_tbl.p_address,
			property_tbl.p_state,
			property_tbl.p_city,
            property_tbl.p_postal_code,
            property_tbl.p_bathrooms as pd_bathrooms,
            property_tbl.p_bedrooms as pd_bedrooms,
            property_tbl.p_area as pd_area_size,
            property_tbl.p_area_unit as pd_area_size_unit,
            property_tbl.p_land,
            property_tbl.p_land_unit,
            property_tbl.p_garage,
            property_tbl.p_garages_unit,
            property_tbl.p_year,
            property_tbl.p_price,
            property_tbl.p_front_facing,
            property_tbl.p_private_note,
            property_tbl.p_featured,
            property_tbl.p_published,
            property_tbl.p_doc,
            property_tbl.p_dou
		");

		$this->db->join('property_type',   	'property_tbl.p_type  = property_type.type_id', 'left');
		$this->db->join('property_label',   'property_tbl.p_label = property_label.label_id', 'left');
		$this->db->join('property_status',  'property_tbl.p_status = property_status.status_id', 'left');
		$this->db->join('countries',       'property_tbl.p_country 	= countries.country_id', 'left');
		$this->db->join('states',         'property_tbl.p_state 		= state_id', 'left');
		$this->db->join('cities',          'property_tbl.p_city 		= city_id', 'left');

		$this->db->from('property_tbl');


		return $this->db->get()->result();

		/* $this->db->select(
			"property_tbl.p_id, 
			property_tbl.p_title, 
			property_tbl.p_content, 
			property_tbl.p_price, 
			property_tbl.p_featured, 
			property_tbl.p_status, 
			property_tbl.p_doc, 
			property_tbl.p_dou, 
			property_type_tbl.pt_id, 
			property_type_tbl.pt_name, 
			property_label_tbl.pl_id, 
			property_label_tbl.pl_name, 
			property_status_tbl.ps_id, 
			property_status_tbl.ps_name, 
			property_details_tbl.*, 
			property_address_tbl.pa_address, 
			property_address_tbl.pa_postal_code, 
			helper_country.name as country, 
			helper_state.name as state, 
			helper_city.name as city"
		);
		// ,GROUP_CONCAT(property_images_tbl.pi_path ) as images"

		$this->db->from($this->table);
		$this->db->join('property_type_tbl',    'property_tbl.p_pt_id= property_type_tbl.pt_id', 'left');
		$this->db->join('property_label_tbl',   'property_tbl.p_pl_id= property_label_tbl.pl_id', 'left');
		$this->db->join('property_status_tbl',  'property_tbl.p_ps_id= property_status_tbl.ps_id', 'left');
		$this->db->join('property_details_tbl', 'property_tbl.p_pd_id= property_details_tbl.pd_id', 'left');
		$this->db->join('property_address_tbl', 'property_tbl.p_pa_id= property_address_tbl.pa_id', 'left');
		$this->db->join('helper_country',       'property_address_tbl.pa_country = helper_country.ID', 'left');
		$this->db->join('helper_state',         'property_address_tbl.pa_state = helper_state.ID', 'left');
		$this->db->join('helper_city',          'property_address_tbl.pa_city = helper_city.ID', 'left');
		//$this->db->join('property_images_tbl',  'property_tbl.p_id = property_images_tbl.pi_p_id', 'left');
		if ($onlyPublished == TRUE) {
			$this->db->where('property_tbl.p_status', 1);
		}
		if (!empty($search)) {
			$this->db->like('property_tbl.p_title', $search, 'both');
			$this->db->or_like('property_tbl.p_content', $search, 'both');
			$this->db->or_like('property_tbl.p_price', $search, 'both');
			$this->db->or_like('property_type_tbl.pt_name', $search, 'both');
			$this->db->or_like('property_label_tbl.pl_name', $search, 'both');
			$this->db->or_like('property_status_tbl.ps_name', $search, 'both');
			$this->db->or_like('property_details_tbl.pd_area_size', $search, 'both');
			$this->db->or_like('property_details_tbl.pd_land_area', $search, 'both');
			$this->db->or_like('property_address_tbl.pa_address', $search, 'both');
			$this->db->or_like('property_address_tbl.pa_postal_code', $search, 'both');
			$this->db->or_like('helper_country.name', $search, 'both');
			$this->db->or_like('helper_state.name', $search, 'both');
			$this->db->or_like('helper_city.name', $search, 'both');
		}
		$this->db->group_by('property_tbl.p_id');
		$this->db->order_by('property_tbl.p_doc', 'DESC');

		$this->db->limit($limit, $start);
		// echo $this->db->get_compiled_select();
		if ($returnAsArray == true) {
			return $result = $this->db->get()->result_array();
		} else {
			return $result = $this->db->get()->result();
		} */
	}

	public function readImages()
	{
		return $this->db->select("*")
			->from('property_images_tbl')
			->get()
			->result();
	}

	// Houzez
	public function getImagesByProperty()
	{
		$result = $this->readImages();

		$list = [];

		if (valArr($result)) {
			foreach ($result as $key => $obj_p_image) {
				// ddisplay($obj_p_image);
				$list[$obj_p_image->pi_p_id] = $obj_p_image;
			}
		}
		return $list;
	}
}
