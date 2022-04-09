<?php defined('BASEPATH') or exit('No direct script access allowed');

class Property_model extends CI_Model
{

	private $table        = "property_tbl";
	private $pro_details  = "property_details_tbl";
	private $pro_type     = "property_type_tbl";
	private $pro_status   = "property_status_tbl";
	private $pro_address  = "";


	public function read($limit, $start, $search = NULL, $onlyPublished = TRUE, $returnAsArray = FALSE)
	{
		$this->db->select(
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
		}
	}

	public function read_by_filter($limit, $start, $arrmixFilter = [], $onlyPublished = TRUE, $returnAsArray = FALSE, $boolApplayLimit = TRUE)
	{
		// ddisplay($arrmixFilter);
		$this->db->select(
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
			helper_city.name as city, 
			GROUP_CONCAT(property_feature_association_tbl.pfa_pf_id ) as features"
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
		$this->db->join('property_feature_association_tbl',  'property_tbl.p_id = property_feature_association_tbl.pfa_p_id', 'left');
		if ($onlyPublished == TRUE) {
			$this->db->where('property_tbl.p_status', 1);
		}
		if (valArr($arrmixFilter)) {
			// Property title
			if (isset($arrmixFilter['keyword']) && !empty($arrmixFilter['keyword'])) {
				$this->db->like('property_tbl.p_title', $arrmixFilter['keyword'], 'both');
				$this->db->or_like('property_tbl.p_content', $arrmixFilter['keyword'], 'both');
			}

			// Filter by Property Type
			if (isset($arrmixFilter['type']) && valArr($arrmixFilter['type'])) {
				$this->db->where_in('property_type_tbl.pt_id', $arrmixFilter['type']);
			}

			// Filter by Property Status
			if (isset($arrmixFilter['status']) && valArr($arrmixFilter['status'])) {
				$this->db->where_in('property_status_tbl.ps_id', $arrmixFilter['status']);
			}

			// Filter by Property Label
			if (isset($arrmixFilter['label']) && valArr($arrmixFilter['label'])) {
				$this->db->where_in('property_label_tbl.pl_id', $arrmixFilter['label']);
			}

			// Filter by Property details bedrooms
			if (isset($arrmixFilter['bedrooms']) && valId($arrmixFilter['bedrooms'])) {
				$this->db->where('property_details_tbl.pd_bedrooms', $arrmixFilter['bedrooms']);
			}

			// Filter by Property details bathrooms
			if (isset($arrmixFilter['bathrooms']) && valId($arrmixFilter['bathrooms'])) {
				$this->db->where('property_details_tbl.pd_bathrooms', $arrmixFilter['bathrooms']);
			}

			// Filter by Property details min area
			if (isset($arrmixFilter['min_area']) && valId($arrmixFilter['min_area'])) {
				$this->db->where('property_details_tbl.pd_area_size >=', $arrmixFilter['min_area']);
			}

			// Filter by Property details max area
			if (isset($arrmixFilter['max_area']) && valId($arrmixFilter['max_area'])) {
				$this->db->where('property_details_tbl.pd_area_size <=', $arrmixFilter['max_area']);
			}

			// Filter By country
			if (isset($arrmixFilter['country']) && valId($arrmixFilter['country'])) {
				$this->db->where('property_address_tbl.pa_country', $arrmixFilter['country']);
			}

			// Filter By State
			if (isset($arrmixFilter['state']) && valId($arrmixFilter['state'])) {
				$this->db->where('property_address_tbl.pa_state', $arrmixFilter['state']);
			}

			// Filter By State
			if (isset($arrmixFilter['city']) && valId($arrmixFilter['city'])) {
				$this->db->where('property_address_tbl.pa_city', $arrmixFilter['city']);
			}

			// Sort By
			if (isset($arrmixFilter['sortby']) && !empty($arrmixFilter['sortby'])) {
				switch ($arrmixFilter['sortby']) {
					case 'a_price':
						$this->db->order_by('property_tbl.p_price', 'ASC');
						break;
					case 'd_price':
						$this->db->order_by('property_tbl.p_price', 'DESC');
						break;
					case 'featured_first':
						$this->db->order_by('property_tbl.p_featured', 'DESC');
						break;
					case 'a_date':
						$this->db->order_by('property_tbl.p_doc', 'ASC');
						break;
					case 'd_date':
						$this->db->order_by('property_tbl.p_doc', 'DESC');
						break;
				}
			}

			// Filter by min Price
			if (isset($arrmixFilter['min_price']) && valId($arrmixFilter['min_price'])) {
				$this->db->where('property_tbl.p_price >=', $arrmixFilter['min_price']);
			}

			// Filter by max Price
			if (isset($arrmixFilter['max_price']) && valId($arrmixFilter['max_price'])) {
				$this->db->where('property_tbl.p_price <=', $arrmixFilter['max_price']);
			}

			// Filter by features
			if (isset($arrmixFilter['feature']) && valArr($arrmixFilter['feature'])) {
				// $this->db->where('features', $arrmixFilter['max_price'])
				// $featuresList = implode(', ', $arrmixFilter['feature']);
				// $this->db->where("FIND_IN_SET('features'," . $featuresList . ")", null, false);
			}

			// $this->db->or_where('property_details_tbl.pd_bathrooms', $arrmixFilter['bathrooms']);
			// $this->db->order_by('property_tbl.p_doc', 'DESC');
		}
		$this->db->group_by('property_tbl.p_id');

		// echo $this->db->get_compiled_select();
		// die();
		// $this->db->order_by('property_tbl.p_doc', 'DESC');

		if ($boolApplayLimit == TRUE) {
			$this->db->limit($limit, $start);
		}
		// echo $this->db->get_compiled_select();
		if ($returnAsArray == true) {
			return $result = $this->db->get()->result_array();
		} else {
			if (isset($arrmixFilter['feature']) && valArr($arrmixFilter['feature'])) {
				return $result = $this->filterByFeatures($this->db->get()->result(), $arrmixFilter['feature']);
			} else {
				return $result = $this->db->get()->result();
			}
		}
	}

	private function filterByFeatures($objProperties, $arrFeatures = [])
	{
		$finalobjProperties = [];
		// Loop throught every property
		foreach ($objProperties as $key => $objProperty) {
			// Get the associated property of current property 
			$arrAssociatedFeatures = explode(',', $objProperty->features);
			$allInputFeaturesPresent = true;
			// Loop through every filter property and check if it is present or not 
			foreach ($arrFeatures as $key => $inpfeature) {
				// if input feature is not present in this property then break
				if (!in_array($inpfeature, $arrAssociatedFeatures)) {
					$allInputFeaturesPresent = false;
					break;
				}
			}
			// if all features are present then store
			if ($allInputFeaturesPresent == true) {
				$finalobjProperties[] = $objProperty;
			}
		}
		return $finalobjProperties;
	}

	public function read_as_list()
	{
		$result = $this->db->select("p_id,p_title")
			->from($this->table)
			->order_by('p_title', 'asc')
			->get()
			->result();
		$list[''] = display('select_pro');
		foreach ($result as $row) {
			$list[$row->p_id] = $row->p_title;
		}
		return $list;
	}

	public function read_featured($limit, $start = 0, $onlyPublished = false, $returnAsArray = false)
	{
		$this->db->select(
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

		$this->db->from($this->table);
		$this->db->where('p_featured', 1);
		$this->db->join('property_type_tbl',    'property_tbl.p_pt_id= property_type_tbl.pt_id', 'left');
		$this->db->join('property_label_tbl',   'property_tbl.p_pl_id= property_label_tbl.pl_id', 'left');
		$this->db->join('property_status_tbl',  'property_tbl.p_ps_id= property_status_tbl.ps_id', 'left');
		$this->db->join('property_details_tbl', 'property_tbl.p_pd_id= property_details_tbl.pd_id', 'left');
		$this->db->join('property_address_tbl', 'property_tbl.p_pa_id= property_address_tbl.pa_id', 'left');
		$this->db->join('helper_country',       'property_address_tbl.pa_country = helper_country.ID', 'left');
		$this->db->join('helper_state',         'property_address_tbl.pa_state = helper_state.ID', 'left');
		$this->db->join('helper_city',          'property_address_tbl.pa_city = helper_city.ID', 'left');
		if ($onlyPublished == TRUE) {
			$this->db->where('property_tbl.p_status', 1);
		}

		$this->db->order_by('property_tbl.p_dou', 'DESC');

		$this->db->limit($limit, $start);
		// echo $this->db->get_compiled_select();
		if ($returnAsArray == true) {
			return $result = $this->db->get()->result_array();
		} else {
			return $result = $this->db->get()->result();
		}
	}

	public function read_slider($limit, $start = 0, $onlyPublished = false, $returnAsArray = false)
	{
		$this->db->select(
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

		$this->db->from($this->table);
		$this->db->where('p_slider', 1);
		$this->db->join('property_type_tbl',    'property_tbl.p_pt_id= property_type_tbl.pt_id', 'left');
		$this->db->join('property_label_tbl',   'property_tbl.p_pl_id= property_label_tbl.pl_id', 'left');
		$this->db->join('property_status_tbl',  'property_tbl.p_ps_id= property_status_tbl.ps_id', 'left');
		$this->db->join('property_details_tbl', 'property_tbl.p_pd_id= property_details_tbl.pd_id', 'left');
		$this->db->join('property_address_tbl', 'property_tbl.p_pa_id= property_address_tbl.pa_id', 'left');
		$this->db->join('helper_country',       'property_address_tbl.pa_country = helper_country.ID', 'left');
		$this->db->join('helper_state',         'property_address_tbl.pa_state = helper_state.ID', 'left');
		$this->db->join('helper_city',          'property_address_tbl.pa_city = helper_city.ID', 'left');
		if ($onlyPublished == TRUE) {
			$this->db->where('property_tbl.p_status', 1);
		}

		$this->db->order_by('property_tbl.p_dou', 'DESC');

		$this->db->limit($limit, $start);
		// echo $this->db->get_compiled_select();
		if ($returnAsArray == true) {
			return $result = $this->db->get()->result_array();
		} else {
			return $result = $this->db->get()->result();
		}
	}

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

	public function read_rent()
	{
		return $this->db->select("*")
			->from($this->table)
			//->order_by('firstname', 'asc')
			//->join($this->pro_status, 'p_ps_id=ps_id', 'left')
			->where('p_ps_id', 1)
			->limit(5)
			->get()
			->result_array();
	}

	public function get_featured_properties($intLimit = 5)
	{
		// $this->load->model('property_images_model', 'pi_model');
		$data = $this->read_featured($intLimit, 0, true, false);
		// foreach ($data as $key => $property) {
		// 	$data[$key]['images'] = $this->pi_model->read_by_property_id($property['p_id']);
		// }
		return $data;
	}

	public function get_slider_properties($intLimit = 20)
	{
		// $this->load->model('property_images_model', 'pi_model');
		$data = $this->read_slider($intLimit, 0, true, false);
		// foreach ($data as $key => $property) {
		// 	$data[$key]['images'] = $this->pi_model->read_by_property_id($property['p_id']);
		// }
		return $data;
	}

	public function get_sale_properties()
	{
		$CI = &get_instance();
		$CI->load->model([
			'property_details_model' => 'pro_detail',
			'property_type_model' => 'pro_type',
			'property_status_model' => 'pro_status',
			'property_address_model' => 'pro_address',
			'property_images_model' => 'pro_images',
			'user_model' => 'user'
		]);
		$data = $this->read_sale();
		foreach ($data as $key => $property) {
			$data[$key]['p_pd_id'] = $CI->pro_detail->read_by_id_as_array($property['p_pd_id']);
			$data[$key]['p_pt_id'] = $CI->pro_type->read_by_id_as_array($property['p_pt_id']);
			$data[$key]['p_ps_id'] = $CI->pro_status->read_by_id_as_array($property['p_ps_id']);
			$data[$key]['p_pa_id'] = $CI->pro_address->read_by_id_as_array($property['p_pa_id']);
			$data[$key]['p_pi_id'] = $CI->pro_images->read_featured_image_of_property_as_array($property['p_id']);
			$data[$key]['p_user']  = $CI->user->read_by_id($property['p_created_by'])->firstname;
		}
		return $data;
	}

	public function get_rent_properties()
	{
		$CI = &get_instance();
		$CI->load->model([
			'property_details_model' => 'pro_detail',
			'property_type_model' => 'pro_type',
			'property_status_model' => 'pro_status',
			'property_address_model' => 'pro_address',
			'property_images_model' => 'pro_images',
			'user_model' => 'user'
		]);
		$data = $this->read_rent();
		foreach ($data as $key => $property) {
			$data[$key]['p_pd_id'] = $CI->pro_detail->read_by_id_as_array($property['p_pd_id']);
			$data[$key]['p_pt_id'] = $CI->pro_type->read_by_id_as_array($property['p_pt_id']);
			$data[$key]['p_ps_id'] = $CI->pro_status->read_by_id_as_array($property['p_ps_id']);
			$data[$key]['p_pa_id'] = $CI->pro_address->read_by_id_as_array($property['p_pa_id']);
			$data[$key]['p_pi_id'] = $CI->pro_images->read_featured_image_of_property_as_array($property['p_id']);
			$data[$key]['p_user']  = $CI->user->read_by_id($property['p_created_by'])->firstname;
		}
		return $data;
	}

	public function get_properties_by_filter($data = null)
	{
		$CI = &get_instance();
		$CI->load->model([
			'property_details_model'  => 'pro_detail',
			'property_type_model'     => 'pro_type',
			'property_status_model'   => 'pro_status',
			'property_label_model'    => 'pro_label',
			'property_address_model'  => 'pro_address',
			'property_images_model'   => 'pro_images',
			'user_model'              => 'user'
		]);
		$data = $this->read_by_filter();
		foreach ($data as $key => $property) {
			$data[$key]['p_pd_id'] = $CI->pro_detail->read_by_id_as_array($property['p_pd_id']);
			$data[$key]['p_pt_id'] = $CI->pro_type->read_by_id_as_array($property['p_pt_id']);
			$data[$key]['p_ps_id'] = $CI->pro_status->read_by_id_as_array($property['p_ps_id']);
			$data[$key]['p_pl_id'] = $CI->pro_label->read_by_id_as_array($property['p_pl_id']);
			$data[$key]['p_pa_id'] = $CI->pro_address->read_by_id_as_array($property['p_pa_id']);
			$data[$key]['p_pi_id'] = $CI->pro_images->read_featured_image_of_property_as_array($property['p_id']);
			$data[$key]['p_user']  = $CI->user->read_by_id($property['p_created_by'])->firstname;
		}
		return $data;
	}

	public function update($data = [])
	{
		return $this->db->where('p_id', $data['p_id'])
			->update($this->table, $data);
	}

	public function delete($id = null)
	{
		$this->db->where('p_id', $id)
			->delete($this->table);

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	}

	public function read_by_id($p_id = null)
	{
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where('property_tbl.p_id', $p_id);
		return $result = $this->db->get()->row();
	}

	public function read_by_id_full($p_id = null)
	{
		$this->db->select("
		property_tbl.p_id,
		property_tbl.p_unique_id, 
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
		property_address_tbl.pa_area, 
		property_address_tbl.pa_postal_code, 
		helper_country.name as country, 
		helper_state.name as state, 
		helper_city.name as city");
		$this->db->from($this->table);
		$this->db->join('property_front_facing_tbl',  'p_pff_id= pff_id', 'left');
		$this->db->join('property_type_tbl',    			'property_tbl.p_pt_id= property_type_tbl.pt_id', 'left');
		$this->db->join('property_label_tbl',   			'property_tbl.p_pl_id= property_label_tbl.pl_id', 'left');
		$this->db->join('property_status_tbl',  			'property_tbl.p_ps_id= property_status_tbl.ps_id', 'left');
		$this->db->join('property_details_tbl', 			'property_tbl.p_pd_id= property_details_tbl.pd_id', 'left');
		$this->db->join('property_address_tbl', 			'property_tbl.p_pa_id= property_address_tbl.pa_id', 'left');
		$this->db->join('helper_country',       			'property_address_tbl.pa_country = helper_country.ID', 'left');
		$this->db->join('helper_state',         			'property_address_tbl.pa_state = helper_state.ID', 'left');
		$this->db->join('helper_city',          			'property_address_tbl.pa_city = helper_city.ID', 'left');
		//$this->db->join('property_images_tbl',  			'property_tbl.p_id = property_images_tbl.pi_p_id', 'left');
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

	public function count_property($search = null)
	{
		$this->db->select("property_tbl.p_id, property_tbl.p_title, property_tbl.p_content, property_tbl.p_price, property_tbl.p_featured, property_tbl.p_status, property_tbl.p_doc, property_tbl.p_dou, property_type_tbl.pt_name, property_label_tbl.pl_name, property_status_tbl.ps_name, property_details_tbl.*, property_address_tbl.pa_address, property_address_tbl.pa_postal_code, helper_country.name as country, helper_state.name as state, helper_city.name as city, GROUP_CONCAT(property_images_tbl.pi_path ) as images");

		$this->db->from($this->table);
		$this->db->join('property_type_tbl',    'property_tbl.p_pt_id= property_type_tbl.pt_id', 'left');
		$this->db->join('property_label_tbl',   'property_tbl.p_pl_id= property_label_tbl.pl_id', 'left');
		$this->db->join('property_status_tbl',  'property_tbl.p_ps_id= property_status_tbl.ps_id', 'left');
		$this->db->join('property_details_tbl', 'property_tbl.p_pd_id= property_details_tbl.pd_id', 'left');
		$this->db->join('property_address_tbl', 'property_tbl.p_pa_id= property_address_tbl.pa_id', 'left');
		$this->db->join('helper_country',       'property_address_tbl.pa_country = helper_country.ID', 'left');
		$this->db->join('helper_state',         'property_address_tbl.pa_state = helper_state.ID', 'left');
		$this->db->join('helper_city',          'property_address_tbl.pa_city = helper_city.ID', 'left');
		$this->db->join('property_images_tbl',  'property_tbl.p_id = property_images_tbl.pi_p_id', 'left');
		$this->db->where('property_tbl.p_status', 1);
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
		return $result = $this->db->count_all_results();
	}

	public function count_search_property($arrmixFilter = [])
	{
		$objProperties = $this->read_by_filter(NULL, NULL, $arrmixFilter, TRUE, FALSE, FALSE);
		if (valArr($objProperties)) {
			return count($objProperties);
		} else {
			return 0;
		}
	}

	public function total_properties()
	{
		return $this->db
			->from($this->table)
			->count_all_results();
	}

	public function total_properties_value()
	{
		$result = $this->db->select('sum(p_price) as price')
			->from($this->table)
			->get();

		if ($result->num_rows()) {
			return $result->row()->price;
		} else {
			return 0;
		}
	}

	public function total_unsold_properties()
	{
		return $this->db
			->from($this->table)
			->join('property_label_tbl', 'p_pl_id=pl_id')
			->where('lower(pl_name) NOT LIKE "%sold%"')
			->count_all_results();
	}

	public function total_unsold_properties_value()
	{
		$result = $this->db->select('sum(p_price) as price')
			->from($this->table)
			->join('property_label_tbl', 'p_pl_id=pl_id')
			->where('lower(pl_name) NOT LIKE "%sold%"')
			->get();

		if ($result->num_rows()) {
			return $result->row()->price;
		} else {
			return 0;
		}
	}

	public function total_sold_properties()
	{
		return $this->db
			->from($this->table)
			->join('property_label_tbl', 'p_pl_id=pl_id')
			->where('lower(pl_name) LIKE "%sold%"')
			->count_all_results();
	}

	public function total_sold_properties_value()
	{
		$result = $this->db->select('sum(p_price) as price')
			->from($this->table)
			->join('property_label_tbl', 'p_pl_id=pl_id')
			->where('lower(pl_name) LIKE "%sold%"')
			->get();

		if ($result->num_rows()) {
			return $result->row()->price;
		} else {
			return 0;
		}
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
			->where('pi_p_id', $p_id)
			->get()
			->result();
	}

	public function read_images_by_property_ids($arrintPropertyIds = null)
	{
		$result =  $this->db->select("*")
			->from('property_images_tbl')
			->where_in('pi_p_id', $arrintPropertyIds)
			->get();
		// ->get_compiled_select();
		// ->result_array();

		if ($result !== FALSE && $result->num_rows() > 0) {
			return $result->result_array();
		}
		// return $result;
	}

	// Property features
	public function read_feature_by_property_id($p_id)
	{
		return $this->db->select("pf_id, pf_name")
			->from('property_feature_association_tbl')
			->join('property_features_tbl', 'pfa_pf_id=pf_id', 'left')
			->where('pfa_p_id', $p_id)
			->get()
			->result();
	}
	// Property aditional details
	public function read_additinal_details_by_property_id($p_id)
	{
		return $this->db->select("pad_id,pad_p_id,pad_title,pad_value")
			->from('property_additional_details_tbl')
			->where('pad_p_id', $p_id)
			->get()
			->result();
	}
	// Property type
	public function read_type_as_list()
	{
		$result = $this->db->select("*")
			->from('property_type_tbl')
			//->where('page_name',$page_name)
			->order_by('pt_id', 'asc')
			->get()
			->result();
		$list[''] = display('select_property_type');
		foreach ($result as $row) {
			$list[$row->pt_id] = $row->pt_name; //." - ".$row->firstname;
		}
		return $list;
	}

	// Property Status
	public function read_status_as_list()
	{
		$result = $this->db->select("*")
			->from('property_status_tbl')
			//->where('page_name',$page_name)
			->order_by('ps_id', 'asc')
			->get()
			->result();
		$list[''] = display('select_property_type');
		foreach ($result as $row) {
			$list[$row->ps_id] = $row->ps_name; //." - ".$row->firstname;
		}
		return $list;
	}

	// Property Label
	public function read_label_as_list()
	{
		$result = $this->db->select("*")
			->from('property_label_tbl')
			//->where('page_name',$page_name)
			->order_by('pl_id', 'asc')
			->get()
			->result();
		$list[''] = display('select_property_type');
		foreach ($result as $row) {
			$list[$row->pl_id] = $row->pl_name; //." - ".$row->firstname;
		}
		return $list;
	}

	// Property Features
	public function read_features_as_list()
	{
		$result = $this->db->select("*")
			->from('property_features_tbl')
			->where('pf_status', 1)
			->order_by('pf_id', 'asc')
			->get()
			->result();
		$list[''] = display('select_property_feature');
		foreach ($result as $row) {
			$list[$row->pf_id] = $row->pf_name;
		}
		return $list;
	}
}
