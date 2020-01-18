<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratkeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Suratkeluar_model');
    }

    public function index()
    {
        $data['title'] = 'Surat Keluar';
        $data['surat_keluar'] = $this->Suratkeluar_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('suratkeluar/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Tambah Surat Keluar';

        $this->form_validation->set_rules('perihal', 'Perihal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('suratkeluar/add', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Suratkeluar_model->add();
            $this->session->set_flashdata('flashdata', 'ditambahkan');
            redirect('suratkeluar');
        }
    }

    public function delete($id)
    {
        $this->Suratkeluar_model->delete($id);

        $this->session->set_flashdata('flashdata', 'dihapus');

        redirect('suratkeluar');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Surat Keluar';

        $data['surat_keluar'] = $this->Suratkeluar_model->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('suratkeluar/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Surat Keluar';
        $data['surat_keluar'] = $this->Suratkeluar_model->getById($id);

        $this->form_validation->set_rules('perihal', 'Perihal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('suratkeluar/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Suratkeluar_model->edit();

            $this->session->set_flashdata('flashdata', 'diedit');

            redirect('suratkeluar');
        }
    }
}
