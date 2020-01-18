<?php

class Mahasiswa extends CI_Controller
{

	//__construct digunakan jika semua yang ada di controller memerlukan load yang sama
	public function __construct()
	{

		//parent:: adalah default dari __construct
		parent::__construct();

		//load models yang ada didalam file Mahasiswa_model
		$this->load->model('Mahasiswa_model');

		//load form_validation dari library || bisa juga ditambahkan library di file config/autoload
		$this->load->library('form_validation');
	}

	public function index()
	{
		//mengubah title yang ada pada header HTML
		$data['title'] = 'Data Mahasiswa';

		//menampilkan semua data mahasiswa (refer to models)
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Mahasiswa_model->searchMahasiswa();
		}
		//header HTML
		$this->load->view('templates/header', $data);

		//body HTML
		$this->load->view('mahasiswa/index', $data);

		//footer HTML
		$this->load->view('templates/footer');
	}

	public function add_mahasiswa()
	{
		//mengubah title yang ada pada header HTML
		$data['title'] = 'Tambah Data Mahasiswa';

		//validasi setiap field yang ada pada form
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		//validasi form yang sudah dibuat menggunakan libary form_validation
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/add_mahasiswa');
			$this->load->view('templates/footer');
		} else {
			// tambah mahasiswa (refer to models)
			$this->Mahasiswa_model->add_mahasiswa();

			// menampilkan alert mahasiswa berhasil ditambahkan
			$this->session->set_flashdata('flashdata', 'ditambahkan');

			//redirect ke halaman mahasiswa
			redirect('mahasiswa');
		}
	}

	public function delete_mahasiswa($id_mahasiswa)
	{
		// delete mahasiswa berdasarkan id_mahasiswa (refer to models) || $id_mahasiswa adalah parameter
		$this->Mahasiswa_model->delete_mahasiswa($id_mahasiswa);

		// menampilkan alert mahasiswa berhasil dihapus        
		$this->session->set_flashdata('flashdata', 'dihapus');

		//redirect ke halaman mahasiswa
		redirect('mahasiswa');
	}

	public function detail_mahasiswa($id_mahasiswa)
	{
		//mengubah title yang ada pada header HTML
		$data['title'] = 'Detail Data Mahasiswa';

		//menampilkan data mahasiswa sesuai id (refer to models)
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id_mahasiswa);

		//header HTML
		$this->load->view('templates/header', $data);

		//body HTML
		$this->load->view('mahasiswa/detail_mahasiswa', $data);

		//footer HTML
		$this->load->view('templates/footer');
	}

	public function edit_mahasiswa($id_mahasiswa)
	{
		//mengubah title yang ada pada header HTML
		$data['title'] = 'Edit Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id_mahasiswa);
		$data['jurusan'] = ['Teknik Informatika', 'Teknik Kimia', 'Teknik Mesin', 'Teknik Elektro', 'Teknik Sipil'];

		//validasi setiap field yang ada pada form
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		//validasi form yang sudah dibuat menggunakan libary form_validation
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/edit_mahasiswa', $data);
			$this->load->view('templates/footer');
		} else {
			// tambah mahasiswa (refer to models)
			$this->Mahasiswa_model->edit_mahasiswa();

			// menampilkan alert mahasiswa berhasil ditambahkan
			$this->session->set_flashdata('flashdata', 'diedit');

			//redirect ke halaman mahasiswa
			redirect('mahasiswa');
		}
	}
}
