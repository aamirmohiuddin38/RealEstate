<?php defined('BASEPATH') or exit('No direct script access allowed');

class Front_model extends CI_Model
{
    public function read_properties($limit, $offset)
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
        $this->db->limit($limit, $offset);
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
    public function get_tls_list()
    {
        $this->db->select("
        property_tbl.p_type,
        property_tbl.p_label,
        property_tbl.p_status,
        property_type.type_name ,
        property_label.label_name ,
        property_status.status_name,
    ");
        $this->db->from('property_tbl');
        $this->db->join('property_type',    'property_tbl.p_type   = property_type.type_id', 'let');
        $this->db->join('property_label',   'property_tbl.p_label  = property_label.label_id', 'left');
        $this->db->join('property_status',  'property_tbl.p_status = property_status.status_id', 'left');
        $this->db->order_by('property_status.status_id', 'DESC');
        // echo $this->db->get_compiled_select(); //For displaying db query
        // die();
        return $result = $this->db->get()->result();
        // print_r($result);
    }
    public function find_property($data)
    {
        // print_r($data);
        // die();
        if ($data['keyword'] != null) {
            $result = $this->db
                ->select("*")
                ->from('property_tbl')
                ->like('p_title', $data['keyword'])
                ->or_like('p_type', $data['keyword'])
                ->or_like('p_label', $data['keyword'])
                ->or_like('p_content', $data['keyword'])
                ->get()
                ->result();
        } else {
            $result = $this->db
                ->select("*")
                ->from('property_tbl')
                ->where('p_price<=', $data['price'])
                ->or_where('p_address', $data['location'])
                ->or_where('p_type', $data['type'])
                ->or_where('p_label', $data['label'])
                ->or_where('p_status', $data['status'])
                ->or_where('p_bedrooms', $data['bedrooms'])
                ->or_where('p_bathrooms', $data['bathrooms'])
                //echo $this->db->get_compiled_select(); //For displaying db query
                //die();
                ->get()
                ->result();
        }
        return $result;
        // echo ('<pre>');
        // print_r($result);
        // die();
    }

    public function total_properties()
    {
        return $this->db
            ->from('property_tbl')
            ->count_all_results();
    }
}
