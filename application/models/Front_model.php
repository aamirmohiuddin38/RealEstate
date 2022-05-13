<?php defined('BASEPATH') or exit('No direct script access allowed');

class Front_model extends CI_Model
{
    public function read_properties()
    {
        $this->db->select("
			property_tbl.p_id,
            property_tbl.p_title,
            property_tbl.p_content,
            property_type.type_name ,
            property_label.label_name ,
            property_status.status_name,
            countries.country_name,
            property_tbl.p_address,
			states.state_name,
			cities.city_name,
            property_tbl.p_postal_code,
            property_tbl.p_bathrooms,
            property_tbl.p_bedrooms,
            property_tbl.p_area ,
            property_tbl.p_area_unit,
            property_tbl.p_garage,
            property_tbl.p_garages_unit,
            property_tbl.p_year,
            property_tbl.p_price,
            property_tbl.p_private_note,
            property_tbl.p_doc,
            property_tbl.p_dou
		");
        $this->db->from('property_tbl');

        $this->db->join('property_type',    'property_tbl.p_type   = property_type.type_id', 'left');
        $this->db->join('property_label',   'property_tbl.p_label  = property_label.label_id', 'left');
        $this->db->join('property_status',  'property_tbl.p_status = property_status.status_id', 'left');
        $this->db->join('countries',        'property_tbl.p_country = countries.country_id', 'left');
        $this->db->join('states',           'property_tbl.p_state 	= state_id', 'left');
        $this->db->join('cities',           'property_tbl.p_city 	= city_id', 'left');

        $this->db->order_by('property_tbl.p_dou', 'DESC');
        $this->db->group_by('property_tbl.p_id');
        // echo $this->db->get_compiled_select(); //For displaying db query
        // die();
        return $result = $this->db->get()->result();
    }

    public function read_property_by_id($id)
    {
        $this->db->select("
			property_tbl.p_id,
            property_tbl.p_title,
            property_tbl.p_content,
            property_type.type_name ,
            property_label.label_name ,
            property_status.status_name,
            countries.country_name,
            property_tbl.p_address,
			states.state_name,
			cities.city_name,
            property_tbl.p_postal_code,
            property_tbl.p_bathrooms,
            property_tbl.p_bedrooms,
            property_tbl.p_area ,
            property_tbl.p_area_unit,
            property_tbl.p_garage,
            property_tbl.p_garages_unit,
            property_tbl.p_year,
            property_tbl.p_price,
            property_tbl.p_private_note,
            property_tbl.p_doc,
            property_tbl.p_dou
		");
        $this->db->from('property_tbl');

        $this->db->join('property_type',    'property_tbl.p_type   = property_type.type_id', 'left');
        $this->db->join('property_label',   'property_tbl.p_label  = property_label.label_id', 'left');
        $this->db->join('property_status',  'property_tbl.p_status = property_status.status_id', 'left');
        $this->db->join('countries',        'property_tbl.p_country = countries.country_id', 'left');
        $this->db->join('states',           'property_tbl.p_state 	= state_id', 'left');
        $this->db->join('cities',           'property_tbl.p_city 	= city_id', 'left');

        $this->db->where('p_id', $id);
        $this->db->order_by('property_tbl.p_dou', 'DESC');
        $this->db->group_by('property_tbl.p_id');
        // echo $this->db->get_compiled_select(); //For displaying db query
        // die();
        return $result = $this->db->get()->row();
    }

    public function get_slider_properties()
    {
        $this->db->select("
			property_tbl.p_id,
            property_tbl.p_title,
            property_tbl.p_content,
            property_type.type_name ,
            property_label.label_name ,
            property_status.status_name,
            countries.country_name,
            property_tbl.p_address,
			states.state_name,
			cities.city_name,
            property_tbl.p_postal_code,
            property_tbl.p_bathrooms,
            property_tbl.p_bedrooms,
            property_tbl.p_area ,
            property_tbl.p_area_unit,
            property_tbl.p_year,
            property_tbl.p_price
		");
        $this->db->from('property_tbl');

        $this->db->join('property_type',    'property_tbl.p_type   = property_type.type_id', 'left');
        $this->db->join('property_label',   'property_tbl.p_label  = property_label.label_id', 'left');
        $this->db->join('property_status',  'property_tbl.p_status = property_status.status_id', 'left');
        $this->db->join('countries',        'property_tbl.p_country = countries.country_id', 'left');
        $this->db->join('states',           'property_tbl.p_state 	= state_id', 'left');
        $this->db->join('cities',           'property_tbl.p_city 	= city_id', 'left');

        $this->db->order_by('property_tbl.p_dou', 'DESC');
        $this->db->group_by('property_tbl.p_id');
        // echo $this->db->get_compiled_select(); //For displaying db query
        // die();
        return $result = $this->db->get()->result();
    }

    public function property_sale()
    {
        $this->db->select("
			property_tbl.p_id,
            property_tbl.p_title,
            property_type.type_name ,
            property_label.label_name ,
            property_status.status_name,
            countries.country_name,
            property_tbl.p_address,
			states.state_name,
			cities.city_name,
            property_tbl.p_postal_code,
            property_tbl.p_bathrooms,
            property_tbl.p_bedrooms,
            property_tbl.p_area ,
            property_tbl.p_area_unit,
            property_tbl.p_year,
            property_tbl.p_price
		");
        $this->db->from('property_tbl');

        $this->db->join('property_type',    'property_tbl.p_type   = property_type.type_id', 'left');
        $this->db->join('property_label',   'property_tbl.p_label  = property_label.label_id', 'left');
        $this->db->join('property_status',  'property_tbl.p_status = property_status.status_id', 'left');
        $this->db->join('countries',        'property_tbl.p_country = countries.country_id', 'left');
        $this->db->join('states',           'property_tbl.p_state 	= state_id', 'left');
        $this->db->join('cities',           'property_tbl.p_city 	= city_id', 'left');

        $this->db->where('p_status', 2);
        $this->db->order_by('property_tbl.p_dou', 'DESC');
        $this->db->group_by('property_tbl.p_id');
        // echo $this->db->get_compiled_select(); //For displaying db query
        // die();
        return $result = $this->db->get()->result();
    }
    public function get_type()
    {
        $result = $this->db
            ->select("*")
            ->from('property_type')
            ->get()
            ->result();
        return $result;
        // echo ('<pre>');
        // print_r($result);
        // die();
    }
    public function get_label()
    {
        $result = $this->db
            ->select("*")
            ->from('property_label')
            ->get()
            ->result();
        return $result;
    }
    public function get_status()
    {
        $result = $this->db
            ->select("*")
            ->from('property_status')
            ->get()
            ->result();
        return $result;
    }
    public function find_property($data)
    {
        // print_r($data);
        // die();
        $result = $this->db
            ->select("*")
            ->from('property_tbl')
            ->where('p_type', $data['type'], 'p_label', $data['label'], 'p_status', $data['label'], 'p_bedroom', $data['bedrooms'], 'p_bathroom', $data['bathrooms'])
            ->get()
            ->result();
        // echo ('<pre>');
        // print_r($result);
    }
}
