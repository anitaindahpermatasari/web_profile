<?php

class PengalamanModel extends CI_Model
{
    public function get_all_data_pengalaman()
    {
        $query = "SELECT * FROM pengalaman";
        return $this->db->query($query)->result_array();
    }

	public function get_list_pengalaman($where = null)
    {
        if ($where) {
            $this->db->where($where);
        }
        $q = $this->db->get('pengalaman');
        return $result = $q->num_rows() > 0 ? $q->result_array() : array();
    }

    public function get_id_pengalaman($id_pengalaman)
    {
        return $this->db->get_where('pengalaman', ['id_pengalaman'=> $id_pengalaman])->row_array();
    }

    public function cari_pengalaman()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_pengalaman', $keyword);
        $this->db->or_like('id_user', $keyword);
        $this->db->or_like('jabatan', $keyword);
        $this->db->or_like('nama_instansi', $keyword);
        return $this->db->get('pengalaman')->result_array();
    }
}
