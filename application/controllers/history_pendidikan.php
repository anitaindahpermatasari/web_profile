<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History_Pendidikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('History_PendidikanModel');
    }
    public function index()
    {
        $this->load->model('History_PendidikanModel');

        $data['allhistory_pendidikan'] = $this->History_PendidikanModel->get_all_data_history_pendidikan();
        $data['title'] = "History Pendidikan";

        $this->load->view('templates/header', $data);
        $this->load->view('history_pendidikan/index', $data);
        $this->load->view('templates/footer');
    }
	public function print()
	{

		$data['allhistory_pendidikan'] = $this->History_PendidikanModel->get_all_data_history_pendidikan();
		$data['title'] = "Print History Pendidikan";

		$this->load->view('history_pendidikan/print', $data);
	}
    public function create()
    {
        $data['title'] = "Tambah History Pendidikan";

        $this->load->view('templates/header', $data);
        $this->load->view('history_pendidikan/create', $data);
        $this->load->view('templates/footer');
    }

    public function simpanhistory_pendidikan()
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'jenjang' => $this->input->post('jenjang'),
            'nama_instansi' => $this->input->post('nama_instansi'),
			'jurusan' => $this->input->post('jurusan'),
			'tahun' => $this->input->post('tahun'),
			'nilai_akhir' => $this->input->post('nilai_akhir'),
			'prestasi' => $this->input->post('prestasi'),
        ];
        $this->db->insert('history_pendidikan', $data);

        $this->session->set_flashdata('message', '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
		</symbol>
		<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
		</symbol>
		<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</symbol>
		</svg>
		<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="15" height="15" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
			<strong>Selamat</strong> History Pendidikan Telah Berhasil Di Tambahkan.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('history_pendidikan');
    }

    public function edit($id_pendidikan)
    {
        $data['title'] = "Edit History Pendidikan";
        $data['history_pendidikan'] = $this->db->get_where('history_pendidikan', ['id_pendidikan' => $id_pendidikan])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('history_pendidikan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function edithistory_pendidikan()
    {

        $this->db->set('id_user', $this->input->post('id_user'));
        $this->db->set('jenjang', $this->input->post('jenjang'));
        $this->db->set('nama_instansi', $this->input->post('nama_instansi'));
		$this->db->set('jurusan', $this->input->post('jurusan'));
		$this->db->set('tahun', $this->input->post('tahun'));
		$this->db->set('nilai_akhir', $this->input->post('nilai_akhir'));
		$this->db->set('prestasi', $this->input->post('prestasi'));
        $this->db->where('id_pendidikan', $id_pendidikan);
        $this->db->update('history_pendidikan');

        $this->session->set_flashdata('message', '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
		</symbol>
		<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
		</symbol>
		<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</symbol>
		</svg>
		<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="15" height="15" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
			<strong>Selamat</strong> History Pendidikan Telah Berhasil Di Edit.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('history_pendidikan');
    }

    public function hapus($id_pendidikan)
    {

        $this->db->where('id_pendidikan', $id_pendidikan);
        $this->db->delete('history_pendidikan');

        $this->session->set_flashdata('message', '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
		</symbol>
		<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
		</symbol>
		<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</symbol>
		</svg>
		<div class="alert alert-success d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="15" height="15" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
			<strong>Selamat</strong> History Pendidikan Telah Berhasil Di Hapus.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('history_pendidikan');
    }
}
