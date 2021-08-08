<?php

class History_PendidikanModel extends CI_Model
{
    public function get_all_data_history_pendidikan()
    {
        $query = "SELECT * FROM history_pendidikan";
        return $this->db->query($query)->result_array();
    }

	public function get_list_history_pendidikan($where = null)
    {
        if ($where) {
            $this->db->where($where);
        }
        $q = $this->db->get('history_pendidikan');
        return $result = $q->num_rows() > 0 ? $q->result_array() : array();
    }

    public function get_id_pendidikan($id_pendidikan)
    {
        return $this->db->get_where('history_pendidikan', ['id_pendidikan'=> $id_pendidikan])->row_array();
    }

    public function cari_history_pendidikan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_pendidikan', $keyword);
        $this->db->or_like('id_user', $keyword);
        $this->db->or_like('jenjang', $keyword);
        $this->db->or_like('nama_instansi', $keyword);
        return $this->db->get('history_pendidikan')->result_array();
    }
}
