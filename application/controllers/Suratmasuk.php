<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Suratmasuk_model');
    }

    public function index()
    {
        $data['title'] = 'Surat Masuk';
        $data['surat_masuk'] = $this->Suratmasuk_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('suratmasuk/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Tambah Surat Masuk';

        $this->form_validation->set_rules('perihal', 'Perihal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('suratmasuk/add', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Suratmasuk_model->add();
            $this->session->set_flashdata('flashdata', 'ditambahkan');
            redirect('suratmasuk');
        }
    }

    public function delete($id)
    {
        $this->Suratmasuk_model->delete($id);

        $this->session->set_flashdata('flashdata', 'dihapus');

        redirect('suratmasuk');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Surat Masuk';

        $data['surat_masuk'] = $this->Suratmasuk_model->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('suratmasuk/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Surat Masuk';
        $data['surat_masuk'] = $this->Suratmasuk_model->getById($id);

        $this->form_validation->set_rules('perihal', 'Perihal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('suratmasuk/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Suratmasuk_model->edit();

            $this->session->set_flashdata('flashdata', 'diedit');

            redirect('suratmasuk');
        }
    }
}
