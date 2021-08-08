<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/index', $data);
    }
	//controllers about_me
	public function about_me()
	{
        $this->load->model('About_MeModel');

		$data['allabout_me'] = $this->About_MeModel->get_all_data_about_me();
		$data['title'] = "About Me";

		$this->load->view('templates/header', $data);
		$this->load->view('about_me/index', $data);
		$this->load->view('templates/footer');
	}
	public function print_about_me()
	{

		$data['allabout_me'] = $this->About_MeModel->get_all_data_about_me();
		$data['title'] = "Print About Me";

		$this->load->view('about_me/print', $data);
	}
	public function create_about_me()
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

	public function edit_about_me($id_user)
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

	public function hapus_about_me($id_user)
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

//controllers history pendidikan
    public function history_pendidikan()
    {
        $this->load->model('History_PendidikanModel');

        $data['allhistory_pendidikan'] = $this->History_PendidikanModel->get_all_data_history_pendidikan();
        $data['title'] = "History Pendidikan";

        $this->load->view('templates/header', $data);
        $this->load->view('history_pendidikan/index', $data);
        $this->load->view('templates/footer');
    }
	public function print_history_pendidikan()
	{

		$data['allhistory_pendidikan'] = $this->History_PendidikanModel->get_all_data_history_pendidikan();
		$data['title'] = "Print History Pendidikan";

		$this->load->view('history_pendidikan/print', $data);
	}
    public function create_history_pendidikan()
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

    public function edit_history_pendidikan($id_pendidikan)
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

    public function hapus_history_pendidikan($id_pendidikan)
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

	//controllers pengalaman
	    public function pengalaman()
    {
        $this->load->model('PengalamanModel');

        $data['allpengalaman'] = $this->PengalamanModel->get_all_data_pengalaman();
        $data['title'] = "Pengalaman";

        $this->load->view('templates/header', $data);
        $this->load->view('pengalaman/index', $data);
        $this->load->view('templates/footer');
    }
	public function print_pengalaman()
	{

		$data['allpengalaman'] = $this->PengalamanModel->get_all_data_pengalaman();
		$data['title'] = "Print Pengalaman";

		$this->load->view('pengalaman/print', $data);
	}
    public function create_pengalaman()
    {
        $data['title'] = "Tambah Pengalaman";

        $this->load->view('templates/header', $data);
        $this->load->view('pengalaman/create', $data);
        $this->load->view('templates/footer');
    }

    public function simpanpengalaman()
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'nama_instansi' => $this->input->post('nama_instansi'),
			'jenis_instansi' => $this->input->post('jenis_instansi'),
			'jabatan' => $this->input->post('jabatan'),
			'tahun' => $this->input->post('tahun'),
			'tanggung_jawab' => $this->input->post('tanggung_jawab'),
        ];
        $this->db->insert('pengalaman', $data);

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
			<strong>Selamat</strong> Pengalaman Telah Berhasil Di Tambahkan.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('pengalaman');
    }

    public function edit_pengalaman($id_pengalaman)
    {
        $data['title'] = "Edit Pengalaman";
        $data['pengalaman'] = $this->db->get_where('pengalaman', ['id_pengalaman' => $id_pengalaman])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('pengalaman/edit', $data);
        $this->load->view('templates/footer');
    }

    public function editpengalaman()
    {

        $this->db->set('id_user', $this->input->post('id_user'));
        $this->db->set('nama_instansi', $this->input->post('nama_instansi'));
		$this->db->set('jenis_instansi', $this->input->post('jenis_instansi'));
		$this->db->set('jabatan', $this->input->post('jabatan'));
		$this->db->set('tahun', $this->input->post('tahun'));
		$this->db->set('tanggung_jawab', $this->input->post('tanggung_jawab'));
        $this->db->where('id_pengalaman', $id_pengalaman);
        $this->db->update('pengalaman');

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
			<strong>Selamat</strong> Pengalaman Telah Berhasil Di Edit.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('pengalaman');
    }

    public function hapus_pengalaman($id_pengalaman)
    {

        $this->db->where('id_pengalaman', $id_pengalaman);
        $this->db->delete('pengalaman');

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
			<strong>Selamat</strong> Pengalaman Telah Berhasil Di Hapus.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('pengalaman');
    }

	//controller contact me
	public function contact_me()
    {
        $this->load->model('Contact_MeModel');

        $data['allcontact_me'] = $this->Contact_MeModel->get_all_data_contact_me();
        $data['title'] = "Contact Me";

        $this->load->view('templates/header', $data);
        $this->load->view('contact_me/index', $data);
        $this->load->view('templates/footer');
    }
	public function print_contact_me()
	{

		$data['allcontact_me'] = $this->Contact_MeModel->get_all_data_contact_me();
		$data['title'] = "Print Contact Me";

		$this->load->view('contact_me/print', $data);
	}
    public function create_contact_me()
    {
        $data['title'] = "Tambah Contact Me";

        $this->load->view('templates/header', $data);
        $this->load->view('contact_me/create', $data);
        $this->load->view('templates/footer');
    }

    public function simpancontact_me()
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'email' => $this->input->post('email'),
			'github' => $this->input->post('github'),
			'nomor_telepon' => $this->input->post('nomor_telepon'),
			'instagram' => $this->input->post('instagram'),
			'youtube' => $this->input->post('youtube'),
        ];
        $this->db->insert('contact_me', $data);

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
			<strong>Selamat</strong> Contact Me Telah Berhasil Di Tambahkan.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('contact_me');
    }

    public function edit_contact_me($id_contact)
    {
        $data['title'] = "Edit Contact Me";
        $data['contact_me'] = $this->db->get_where('contact_me', ['id_contact' => $id_contact])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('contact_me/edit', $data);
        $this->load->view('templates/footer');
    }

    public function editcontact_me()
    {

        $this->db->set('id_user', $this->input->post('id_user'));
        $this->db->set('email', $this->input->post('email'));
		$this->db->set('github', $this->input->post('github'));
		$this->db->set('nomor_telepon', $this->input->post('nomor_telepon'));
		$this->db->set('instagram', $this->input->post('instagram'));
		$this->db->set('youtube', $this->input->post('youtube'));
        $this->db->where('id_contact', $id_contact);
        $this->db->update('contact_me');

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
			<strong>Selamat</strong> Contact Me Telah Berhasil Di Edit.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('contact_me');
    }

    public function hapus_contact_me($id_contact)
    {

        $this->db->where('id_contact', $id_contact);
        $this->db->delete('contact_me');

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
			<strong>Selamat</strong> Contact Me Telah Berhasil Di Hapus.
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('contact_me');
    }
}
?>
