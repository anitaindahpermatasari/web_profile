<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_MeModel extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public $id_user;
    public $nama_lengkap;
    public $umur;
    public $jenis_kelamin;
    public $tempat_lahir;
	public $tanggal_lahir;
    public $alamat;
    public $nomor_telepon;
    public $tinggi_badan;
    public $berat_badan;
    public $nama_orang_tua;
    public $status;

    public function get_all_data_about_me()
    {
        $query = "SELECT * FROM about_me";
        return $this->db->query($query)->result_array();
    }

	public function get_list_about_me($where = null)
    {
        if ($where) {
            $this->db->where($where);
        }
        $q = $this->db->get('about_me');
        return $result = $q->num_rows() > 0 ? $q->result_array() : array();
    }
}
