<?php

class Contact_MeModel extends CI_Model
{
    public function get_all_data_contact_me()
    {
        $query = "SELECT * FROM contact_me";
        return $this->db->query($query)->result_array();
    }

	public function get_list_contact_me($where = null)
    {
        if ($where) {
            $this->db->where($where);
        }
        $q = $this->db->get('contact_me');
        return $result = $q->num_rows() > 0 ? $q->result_array() : array();
    }
}
