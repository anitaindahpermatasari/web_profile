<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('About_MeModel');
        $this->load->model('History_PendidikanModel');
        $this->load->model('PengalamanModel');
        $this->load->model('Contact_MeModel');
    }
	public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('about_me/user', $data);
    }
	public function about_me()
    {
        $data['title'] = 'About Me';

        $data['about_me_list'] = $this->About_MeModel->get_list_about_me();

        $this->load->view('about_me/user', $data, FALSE);
    }
    public function history_pendidikan()
    {
        $data['title'] = 'History Pendidikan';

        $data['history_pendidikan_list'] = $this->History_PendidikanModel->get_list_history_pendidikan();

        $this->load->view('history_pendidikan/user', $data, FALSE);
    }
	public function detail_history_pendidikan($id_pendidikan)
    {
        $data['title'] = "Detail History Pendidikan";
        $data['history_pendidikan_list'] = $this->db->get_where('history_pendidikan', ['id_pendidikan' => $id_pendidikan])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('history_pendidikan/detail', $data);
        $this->load->view('templates/footer');
    }
    public function pengalaman()
    {
        $data['title'] = 'Pengalaman';

        $data['pengalaman_list'] = $this->PengalamanModel->get_list_pengalaman();

        $this->load->view('pengalaman/user', $data, FALSE);
    }
	public function detail_pengalaman($id_pengalaman)
    {
        $data['title'] = "Detail Pengalaman";
        $data['pengalaman_list'] = $this->db->get_where('pengalaman', ['id_pengalaman' => $id_pengalaman])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('pengalaman/detail', $data);
        $this->load->view('templates/footer');
    }
    public function contact_me()
    {
        $data['title'] = 'Contact Me';

        $data['contact_me_list'] = $this->Contact_MeModel->get_list_contact_me();

        $this->load->view('contact_me/user', $data, FALSE);
    }
}
