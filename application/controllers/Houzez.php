<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Houzez extends CI_Controller
{
	private $data;
	private $per_page_count = 6;
	private $p_config;
	private $search_text;
	private $arrmixfilter = [];
	// private $onlyPublished = true;

	public function __construct()
	{
		parent::__construct();

		$this->load->model(array(
			'common_model',
			'setting_model',
			// 'contactus_model',
			// 'address_model',
			'frontsite/property_model1' => 'p_model',
			// 'property_service_model' => 'psr_model',
			// 'admin/property_type_model' => 'pt_model',
			// 'admin/property_status_model' => 'ps_model',
			// 'admin/property_label_model' => 'pl_model',
			// 'admin/property_features_model' => 'pf_model',
			// 'admin/Property_images_model' => 'pi_model',
		));
		$this->load->helper(array('captcha'));
		$this->load->library('user_agent');
	}

	public function init_pagination($strBaseUrl, $intTotolRows, $intUrlSegment, $intNoOfResultsPerPage)
	{
		//pagination settings
		$this->p_config['base_url'] = $strBaseUrl;
		$this->p_config['total_rows'] = $intTotolRows;
		$this->p_config['per_page'] = $intNoOfResultsPerPage;
		$this->p_config["uri_segment"] = $intUrlSegment;
		$choice = $this->p_config["total_rows"] / $intNoOfResultsPerPage;
		$this->p_config["num_links"] = floor($choice);

		// integrate bootstrap pagination
		$this->p_config['full_tag_open'] = '<ul class="pagination pagination-md justify-content-center">';
		$this->p_config['full_tag_close'] = '</ul>';
		$this->p_config['first_link'] = 'First';
		$this->p_config['last_link'] = 'Last';
		$this->p_config['first_tag_open'] = '<li class="page-item">';
		$this->p_config['first_tag_close'] = '</li>';
		$this->p_config['prev_link'] = '«';
		$this->p_config['prev_tag_open'] = '<li class="page-item ">';
		$this->p_config['prev_tag_close'] = '</li>';
		$this->p_config['next_link'] = '»';
		$this->p_config['next_tag_open'] = '<li class="page-item">';
		$this->p_config['next_tag_close'] = '</li>';
		$this->p_config['last_tag_open'] = '<li class="page-item">';
		$this->p_config['last_tag_close'] = '</li>';
		$this->p_config['cur_tag_open'] = '<li class="active"><a class="page-link text-white bg-info" href="#">';
		$this->p_config['cur_tag_close'] = '</a></li>';
		$this->p_config['num_tag_open'] = '<li>';
		$this->p_config['num_tag_close'] = '</li>';
		// This setting will append the query sting data to each link
		$this->p_config['reuse_query_string'] = true;
		// $this->p_config['anchor_class'] = 'page-link';
		$this->p_config['attributes'] = array('class' => 'page-link ');
		$this->pagination->initialize($this->p_config);
	}

	private function load_common_data()
	{
		// Store query data into $_GET global variable
		parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

		// Load common data from database
		$this->data['type'] 			= $this->p_model->read_type_as_list();
		$this->data['status'] 		= $this->p_model->read_status_as_list();
		$this->data['label'] 			= $this->p_model->read_label_as_list();
		$this->data['bedrooms'] 	= [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5];
		$this->data['bathrooms'] 	= [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5];
		$this->data['sort_by']		= [
			'a_price' => 'Price - Low to High',
			'd_price' => 'Price - High to Low',
			'featured_first' => 'Featured Listings First',
			'a_date' => 'Date - Old to New',
			'd_date' => 'Date - New to Old',
		];
		$this->data['features'] 	= $this->p_model->read_features_as_list();
		$country = 101;
		// $country = $this->input->post('country');
		$state = $this->input->get('state');
		// $this->data['country_list'] = $this->address_model->read_country_as_list();
		// show($this->data['country_list']);
		$this->data['state_list']   = $this->address_model->read_state_country_as_list($country);
		// show($this->data['state_list']);

		$this->data['city_list']    = $this->address_model->read_city_state_as_list($state ?? $this->data['state_list'][1]);
	}

	private function load_get_data()
	{
		// Get the input data
		$this->data['input'] = (object)$filterDataInp = array(
			'keyword' 	=>  $this->input->get('keyword'),
			'type' 			=>  $this->input->get('type'),
			'status' 		=>  $this->input->get('status'),
			'label' 		=>  $this->input->get('label'),
			'bedrooms' 	=>	$this->input->get('bedrooms'),
			'bathrooms' =>	$this->input->get('bathrooms'),
			'sortby' 		=>	$this->input->get('sortby'),
			'state' 		=>	$this->input->get('state'),
			'city' 			=>	$this->input->get('city'),
			'min_area' 	=>	$this->input->get('min-area'),
			'max_area' 	=>	$this->input->get('max-area'),
			'property_id' =>	$this->input->get('property_id'),
			'min_price' =>	$this->input->get('min-price'),
			'max_price' =>	$this->input->get('max-price'),
			'feature' 	=>	$this->input->get('feature'),
		);

		$this->arrmixfilter = $filterDataInp;
	}

	public function index()
	{
		redirect('houzez/grid_default');
		$this->load_common_data();
		$this->load_get_data();
		$this->data['slider_property'] = $this->p_model->get_slider_properties();
		$this->data['featured'] = $this->p_model->get_featured_properties();
		$this->data['services'] = $this->psr_model->read();
		// $this->data['featured'] = array_merge($this->data['featured'], $this->data['featured']);

		$arrintSliderPropertyIds = valArr($this->data['slider_property']) ? array_keys(rekeyArray('p_id', $this->data['slider_property'])) : null;

		$arrintFeaturedPropertyIds = valArr($this->data['featured']) ? array_keys(rekeyArray('p_id', $this->data['featured'])) : null;

		$arrintFinalPropertyIds = array_unique(array_merge($arrintSliderPropertyIds, $arrintFeaturedPropertyIds));
		$this->data['property_images'] = rekeyArray('pi_p_id', $this->p_model->read_images_by_property_ids($arrintFinalPropertyIds), false, false);


		$this->data['body_class'] = "home";
		$this->data['content'] = $this->load->view('front/home', $this->data, true);
		$this->load->view('front/layout/main_wrapper', $this->data);
	}

	function search_results()
	{
		$this->load_common_data();

		$this->load_get_data();

		// ddisplay($this->arrmixfilter);
		// ddisplay($this->data['features']);
		// ddisplay($this->data);

		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data['properties'] = $this->p_model->read_by_filter($this->per_page_count, $data['page'], $this->arrmixfilter);
		$intTotolRows = $this->p_model->count_search_property($this->arrmixfilter);

		$this->init_pagination(site_url('houzez/search_results'), $intTotolRows, 3, $this->per_page_count);
		$this->data['featured'] = $this->p_model->get_featured_properties();

		$this->data['pagination'] = $this->pagination->create_links();
		// Fetch  property images
		$arrintFeaturedPropertyIds = array_keys(rekeyArray('p_id', $this->data['featured']));
		$arrintPropertyIds 	= array_keys(rekeyArray('p_id', $this->data['properties']));
		$arrintFinalPropertyIds = array_unique(array_merge($arrintFeaturedPropertyIds, $arrintPropertyIds));
		// ddisplay($arrintFeaturedPropertyIds);
		// show($arrintFinalPropertyIds);
		$this->data['property_images'] = rekeyArray('pi_p_id', $this->p_model->read_images_by_property_ids($arrintFinalPropertyIds), false, false);

		$this->data['total_property'] = $this->p_config['total_rows'];

		$this->data['body_class'] = "";
		$this->data['content'] = "<h1>Grid Default</h1>";
		// ddisplay($this->data);
		$this->data['content'] = $this->load->view('front/search_results_view', $this->data, true);
		$this->load->view('front/layout/main_wrapper', $this->data);
	}

	public function grid_default()
	{
		// $this->load_common_data();

		// $this->load_get_data();

		// ddisplay($_GET);
		// ddisplay($this->data['features']);
		// ddisplay($this->data);
		// $this->data['body_class'] = "";
		// $this->data['content'] = "<h1>Grid Default</h1>";

		// $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		// show($data['page']);
		// $this->init_pagination(false);
		// $intTotolRows = $this->p_model->count_search_property($this->arrmixfilter);
		// $this->init_pagination(site_url('houzez/grid_default'), $intTotolRows, 3, $this->per_page_count);
		// $this->data['properties'] = $this->p_model->read_by_filter($this->per_page_count, $data['page'], $this->arrmixfilter);
		// $this->data['featured'] = $this->p_model->get_featured_properties();
		// ddisplay($this->data['featured']);

		// $this->data['pagination'] = $this->pagination->create_links();
		// Fetch  property images
		// $arrintFeaturedPropertyIds = array_keys(rekeyArray('p_id', $this->data['featured']));
		// $arrintPropertyIds 	= array_keys(rekeyArray('p_id', $this->data['properties']));
		// $arrintFinalPropertyIds = array_unique(array_merge($arrintFeaturedPropertyIds, $arrintPropertyIds));
		// ddisplay($arrintFeaturedPropertyIds);
		// show($arrintFinalPropertyIds);
		// $this->data['property_images'] = rekeyArray('pi_p_id', $this->p_model->read_images_by_property_ids($arrintFinalPropertyIds), false, false);

		// $this->data['total_property'] = $this->p_config['total_rows'];
		// ddisplay($this->data);

		$this->data['properties'] = $this->p_model->read();
		print_r($this->data['properties']);
		$this->data['content'] = $this->load->view('front/grid_default_view', $this->data, true);
		$this->load->view('front/layout/main_wrapper', $this->data);
	}

	public function grid_full_width()
	{
		$data['body_class'] = "";
		$data['content'] = "<h1>Grid Full Width</h1>";
		$data['content'] = $this->load->view('front/grid_full_width_view', $data, true);
		$this->load->view('front/layout/main_wrapper', $data);
	}

	public function grid_full_width_2_cols()
	{
		$data['body_class'] = "";
		$data['content'] = "<h1>Grid Full Width 2 Cols</h1>";
		$data['content'] = $this->load->view('front/grid_full_width_2_cols_view', $data, true);
		$this->load->view('front/layout/main_wrapper', $data);
	}

	public function grid_full_width_4_cols()
	{
		$data['body_class'] = "";
		$data['content'] = "<h1>Grid Full Width 4 Cols</h1>";
		$data['content'] = $this->load->view('front/grid_full_width_4_cols_view', $data, true);
		$this->load->view('front/layout/main_wrapper', $data);
	}

	public function property($property_id = null)
	{
		if (empty($property_id) || null == $property_id) {
			$redirectTo =  $this->agent->referrer();
			redirect(!empty($redirectTo) ? $redirectTo : 'houzez/index');
		}

		$this->load_common_data();
		$this->data['property'] = $this->p_model->read_by_id_full($property_id);



		if (false == valArr((array) $this->data['property'])) {
			$redirectTo =  $this->agent->referrer();
			redirect(!empty($redirectTo) ? $redirectTo : 'houzez/index');
		}

		$this->data['property_documents']	= $this->p_model->read_document_by_property_id($property_id);
		$this->data['property_images']		= $this->p_model->read_image_by_property_id($property_id);
		$this->data['property_features'] 					= $this->p_model->read_feature_by_property_id($property_id);
		$this->data['additional_details'] = $this->p_model->read_additinal_details_by_property_id($property_id);

		// ddisplay($this->data);
		// $arrintFinalPropertyIds = valArr($this->data['featured']) ? array_keys(rekeyArray('p_id', $this->data['featured'])) : null;
		// $this->data['property_images'] = rekeyArray('pi_p_id', $this->p_model->read_images_by_property_ids($arrintFinalPropertyIds), false, false);
		$this->data['body_class'] = "home";
		$this->data['content'] = $this->load->view('front/property_view', $this->data, true);
		$this->load->view('front/layout/main_wrapper', $this->data);
	}

	public function services()
	{
		$data['body_class'] = "";
		$data['content'] = "<h1>Services</h1>";
		$data['content'] = $this->load->view('front/services_view', $data, true);
		$this->load->view('front/layout/main_wrapper', $data);
	}

	public function contactus()
	{
		// $data['captcha'] = _generateCaptcha($this);
		$data['body_class'] = "";
		$data['content'] = $this->load->view('front/contactus', $data, true);
		$this->load->view('front/layout/main_wrapper', $data);
	}

	public function save_message()
	{
		$this->form_validation->set_rules('first_name', display('first_name'), 'required|max_length[50]');
		$this->form_validation->set_rules('last_name', display('last_name'), 'required|max_length[50]');
		$this->form_validation->set_rules('email', display('email'), 'required|valid_email');
		$this->form_validation->set_rules('message', display('message'), 'required|max_length[500]');

		// 	 f_id f_name f_email f_phone f_subject f_message f_date f_read f_status
		$data['input'] = (object)$postDataInp = array(
			'f_name'		=> $this->input->post('first_name') . " " . $this->input->post('last_name'),
			'f_email'		=> $this->input->post('email'),
			'f_phone'		=> $this->input->post('f_phone'),
			'f_subject'	=> $this->input->post('f_subject'),
			'f_message'	=> $this->input->post('message'),
			'f_date'		=> date('Y-m-d H:m:s'),
			'f_read'		=> 0,
			'f_status'	=> 1
		);

		if ($this->form_validation->run() === true) {
			if ($this->contactus_model->create($postDataInp)) {
				$jsondata['success'] = true;
				$jsondata['msg'] = 'Message sent successfully.';
			} else {
				$jsondata['success'] = false;
				$jsondata['msg'] = 'Message failed to sent.' . implode(', ', $this->db->error());
			}
		} else {
			$jsondata['success'] = false;
			$jsondata['msg'] = validation_errors();
		}
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode($jsondata));
	}

	public function aboutus()
	{
		$data['body_class'] = "";
		$data['content'] = "<h1>Aboutus</h1>";
		$data['content'] = $this->load->view('front/aboutus', $data, true);
		$this->load->view('front/layout/main_wrapper', $data);
	}

	// public function get_states()
	// {
	// 	$country_id = $this->input->post('country_id');
	// 	return  $this->address_model->read_state_country_as_list_ajax($country_id);
	// }

	public function get_city()
	{
		$state_id = $this->input->post('state_id');
		$state_name = $this->input->post('state_name');
		return  $this->address_model->read_city_state_as_list_ajax($state_id, true, str_replace(' ', '_', $state_name), $state_name);
	}
}
