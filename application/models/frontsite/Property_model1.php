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
            property_tbl.p_doc,
            property_tbl.p_dou
		");
		$this->db->from('property_tbl');
		$this->db->join('property_type',   	'property_tbl.p_type  = property_type.type_id', 'left');
		$this->db->join('property_label',   'property_tbl.p_label = property_label.label_id', 'left');
		$this->db->join('property_status',  'property_tbl.p_status = property_status.status_id', 'left');
		$this->db->join('countries',       'property_tbl.p_country 	= countries.country_id', 'left');
		$this->db->join('states',         'property_tbl.p_state 		= state_id', 'left');
		$this->db->join('cities',          'property_tbl.p_city 		= city_id', 'left');
        
		$this->db->group_by('property_tbl.p_id');
		return $this->db->get()->result();
	}

	public function read_slider($limit, $start = 0, $onlyPublished = false, $returnAsArray = false)
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
			states.state_name,
			cities.city_name,
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
            property_tbl.p_doc,
            property_tbl.p_dou
		");
		$this->db->from('property_tbl');

		$this->db->join('property_type',   	'property_tbl.p_type  = property_type.type_id', 'left');
		$this->db->join('property_label',   'property_tbl.p_label = property_label.label_id', 'left');
		$this->db->join('property_status',  'property_tbl.p_status = property_status.status_id', 'left');
		$this->db->join('countries',       'property_tbl.p_country 	= countries.country_id', 'left');
		$this->db->join('states',         'property_tbl.p_state 		= state_id', 'left');
		$this->db->join('cities',          'property_tbl.p_city 		= city_id', 'left');

		$this->db->group_by('property_tbl.p_id');
		$this->db->order_by('property_tbl.p_dou', 'DESC');
		$this->db->limit($limit, $start);
		// echo $this->db->get_compiled_select(); //For displaying db query
		if ($returnAsArray == true) {
			return $result = $this->db->get()->result_array();
		} else {
			return $result = $this->db->get()->result();
		}
	}

	public function read_by_id_full($p_id = null)
	{
		$this->db->select("
		property_tbl.p_id,
		property_tbl.p_title, 
		property_tbl.p_content, 
		property_tbl.p_price, 
		property_tbl.p_status, 
		property_tbl.p_doc, 
		property_tbl.p_dou, 
		property_type.type_id, 
		property_type.type_name, 
		property_label.label_id, 
		property_label.label_name, 
		property_status.status_id, 
		property_status.status_name,
		property_tbl.p_address,
		property_tbl.p_postal_code, 
		property_address_tbl.pa_area,
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
		property_tbl.p_doc,
		property_tbl.p_dou, 
		countries.country_name as country, 
		states.state_name,
		cities.city_name,");
		$this->db->from($this->table);
		$this->db->join('property_facing',  'facing_id= p_front_facing', 'left');
		$this->db->join('property_type',    			'property_tbl.p_type= property_type.type_id', 'left');
		$this->db->join('property_label',   			'property_tbl.p_label= property_label.label_id', 'left');
		$this->db->join('property_status',  			'property_tbl.p_status= property_status.status_id', 'left');
		$this->db->join('property_address_tbl', 			'property_tbl.p_address= property_address_tbl.pa_id', 'left');
		$this->db->join('countries',       'property_tbl.p_country 	= countries.country_id', 'left');
		$this->db->join('states',         'property_tbl.p_state 		= state_id', 'left');
		$this->db->join('cities',          'property_tbl.p_city 		= city_id', 'left');
		$this->db->where('property_tbl.p_id', $p_id);
		// $this->db->where('property_tbl.p_status', 1);

		$this->db->group_by('property_tbl.p_id');
		$this->db->order_by('property_tbl.p_doc', 'DESC');

		// $this->db->limit($limit, $start);
		// echo $this->db->get_compiled_select();
		// die();
		return $result = $this->db->get()->row();
		// print_r($result);
		// die();
	}

	public function read_sale_property($limit, $start = 0, $onlyPublished = false, $returnAsArray = false)
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
			states.state_name,
			cities.city_name,
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
            property_tbl.p_doc,
            property_tbl.p_dou
		");
		$this->db->from('property_tbl');

		$this->db->join('property_type',   	'property_tbl.p_type  = property_type.type_id', 'left');
		$this->db->join('property_label',   'property_tbl.p_label = property_label.label_id', 'left');
		$this->db->join('property_status',  'property_tbl.p_status = property_status.status_id', 'left');
		$this->db->join('countries',       'property_tbl.p_country 	= countries.country_id', 'left');
		$this->db->join('states',         'property_tbl.p_state 		= state_id', 'left');
		$this->db->join('cities',          'property_tbl.p_city 		= city_id', 'left');

		$this->db->where('p_status',2);
		$this->db->order_by('property_tbl.p_dou', 'DESC');
		$this->db->group_by('property_tbl.p_id');
		$this->db->limit($limit, $start);
		// echo $this->db->get_compiled_select(); //For displaying db query
		if ($returnAsArray == true) {
			return $result = $this->db->get()->result_array();
		} else {
			return $result = $this->db->get()->result();
		}
	}

	public function read_images_by_property_ids($arrintPropertyIds = null)
	{
		$result =  $this->db->select("*")
			->from('property_images_tbl')
			->where_in('img_p_id', $arrintPropertyIds)
			->get();
		// ->get_compiled_select();
		// ->result_array();

		if ($result !== FALSE && $result->num_rows() > 0) {
			return $result->result_array();
		}
		// return $result;
	}

	public function readImages()
	{
		return $this->db->select("*")
			->from('property_images_tbl')
			->get()
			->result();
	}

    // Property document
    public function read_document_by_property_id($p_id)
    {
	return $this->db->select("*")
		->from('property_documents_tbl')
		->where('pd_p_id', $p_id)
		->get()
		->result();
    }

	// Property Images
	public function read_image_by_property_id($p_id)
	{
		return $this->db->select("*")
			->from('property_images_tbl')
			->where('img_p_id', $p_id)
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
				$list[$obj_p_image->img_p_id] = $obj_p_image;
			}
		}
		return $list;
	}

	public function total_properties()
	{
		return $this->db
			->from('property_tbl')
			->count_all_results();
	}

	// Property type
	public function read_type_as_list()
	{
		$result = $this->db->select("*")
			->from('property_type')
			//->where('page_name',$page_name)
			->order_by('type_id', 'asc')
			->get()
			->result();
		$list[''] = display('select_property_type');
		foreach ($result as $row) {
			$list[$row->type_id] = $row->type_name; //." - ".$row->firstname;
		}
		return $list;
	}

	// Property Status
	public function read_status_as_list()
	{
		$result = $this->db->select("*")
			->from('property_status')
			//->where('page_name',$page_name)
			->order_by('status_id', 'asc')
			->get()
			->result();
		$list[''] = display('select_property_type');
		foreach ($result as $row) {
			$list[$row->status_id] = $row->status_name; //." - ".$row->firstname;
		}
		return $list;
	}

	// Property Label
	public function read_label_as_list()
	{
		$result = $this->db->select("*")
			->from('property_label')
			//->where('page_name',$page_name)
			->order_by('label_id', 'asc')
			->get()
			->result();
		$list[''] = display('select_property_type');
		foreach ($result as $row) {
			$list[$row->label_id] = $row->label_name; //." - ".$row->firstname;
		}
		return $list;
	}

	//Slider Properties
	public function get_slider_properties($intLimit = 20)
	{
		// $this->load->model('property_images_model', 'pi_model');
		$data = $this->read_slider($intLimit, 0, true, false);
		// foreach ($data as $key => $property) {
		// 	$data[$key]['images'] = $this->pi_model->read_by_property_id($property['p_id']);
		// }
		return $data;
	}

	// Sale Properties
	public function read_sale()
	{
		return $this->db->select("*")
			->from($this->table)
			//->order_by('firstname', 'asc')
			//->join($this->pro_status, 'p_ps_id=ps_id', 'left')
			->where('p_ps_id', 2)
			->limit(5)
			->get()
			->result_array();
	}
}
