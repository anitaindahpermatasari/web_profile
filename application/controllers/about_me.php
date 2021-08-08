<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_Me extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('About_MeModel');
	}
	public function index()
	{

		$data['allabout_me'] = $this->About_MeModel->get_all_data_about_me();
		$data['title'] = "About Me";

		$this->load->view('templates/header', $data);
		$this->load->view('about_me/index', $data);
		$this->load->view('templates/footer');
	}
	public function print()
	{

		$data['allabout_me'] = $this->About_MeModel->get_all_data_about_me();
		$data['title'] = "Print About Me";

		$this->load->view('about_me/print', $data);
	}
	public function create()
	{
		$data['title'] = "Tambah About Me";

		$this->load->view('templates/header', $data);
		$this->load->view('about_me/create', $data);
		$this->load->view('templates/footer');
	}

	public function simpanabout_me()
	{
		$data = [
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'umur' => $this->input->post('umur'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'nomor_telepon' => $this->input->post('nomor_telepon'),
			'tinggi_badan' => $this->input->post('tinggi_badan'),
			'berat_badan' => $this->input->post('berat_badan'),
			'nama_orang_tua' => $this->input->post('nama_orang_tua'),
			'status' => $this->input->post('status'),
		];
		$this->db->insert('about_me', $data);

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
			<strong>Selamat</strong> About Me Telah Berhasil Di Tambahkan.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('about_me');
	}

	public function edit($id_user)
	{
		$data['title'] = "Edit About Me";
		$data['about_me'] = $this->db->get_where('about_me', ['id_user' => $id_user])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('id_user/edit', $data);
		$this->load->view('templates/footer');
	}

	public function editabout_me()
	{

		$this->db->set('nama_lengkap', $this->input->post('nama_lengkap'));
		$this->db->set('umur', $this->input->post('umur'));
		$this->db->set('jenis_kelamin', $this->input->post('jenis_kelamin'));
		$this->db->set('tempat_lahir', $this->input->post('tempat_lahir'));
		$this->db->set('tanggal_lahir', $this->input->post('tanggal_lahir'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('nomor_telepon', $this->input->post('nomor_telepon'));
		$this->db->set('tinggi_badan', $this->input->post('tinggi_badan'));
		$this->db->set('berat_badan', $this->input->post('berat_badan'));
		$this->db->set('nama_orang_tua', $this->input->post('nama_orang_tua'));
		$this->db->set('status', $this->input->post('status'));
		$this->db->where('id_user', $id_user);
		$this->db->update('about_me');

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
			<strong>Selamat</strong> About Me Telah Berhasil Di Edit.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('about_me');
	}

	public function hapus($id_user)
	{

		$this->db->where('id_user', $id_user);
		$this->db->delete('about_me');

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
			<strong>Selamat</strong> About Me Telah Berhasil Di Hapus.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('about_me');
	}
}
?>
