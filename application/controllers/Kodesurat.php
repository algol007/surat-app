<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kodesurat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Kodesurat_model');
    }

    public function index()
    {
        $data['title'] = 'Kode Surat';
        $data['kode_surat'] = $this->Kodesurat_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kodesurat/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Tambah Kode Surat';

        $this->form_validation->set_rules('kode', 'Kode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('kodesurat/add', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kodesurat_model->add();
            $this->session->set_flashdata('flashdata', 'ditambahkan');
            redirect('kodesurat');
        }
    }

    public function delete($id)
    {
        $this->Kodesurat_model->delete($id);

        $this->session->set_flashdata('flashdata', 'dihapus');

        redirect('kodesurat');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Surat Keluar';

        $data['kode_surat'] = $this->Kodesurat_model->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kodesurat/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Kode Surat';
        $data['kode_surat'] = $this->Kodesurat_model->getById($id);

        $this->form_validation->set_rules('perihal', 'Perihal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('kodesurat/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Suratkeluar_model->edit();

            $this->session->set_flashdata('flashdata', 'diedit');

            redirect('kodesurat');
        }
    }
}
