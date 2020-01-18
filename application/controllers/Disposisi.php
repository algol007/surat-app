<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Disposisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Disposisi_model');
    }

    public function index()
    {
        $data['title'] = 'Disposisi Surat';
        $data['disposisi'] = $this->Disposisi_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('disposisi/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Tambah Disposisi';

        $this->form_validation->set_rules('catatan', 'Catatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('disposisi/add', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Disposisi_model->add();
            $this->session->set_flashdata('flashdata', 'ditambahkan');
            redirect('disposisi');
        }
    }

    public function delete($id)
    {
        $this->Disposisi_model->delete($id);

        $this->session->set_flashdata('flashdata', 'dihapus');

        redirect('disposisi');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Disposisi';

        $data['disposisi'] = $this->Disposisi_model->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('disposisi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Disposisi';
        $data['disposisi'] = $this->Disposisi_model->getById($id);

        $this->form_validation->set_rules('catatan', 'Catatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('disposisi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Disposisi_model->edit();

            $this->session->set_flashdata('flashdata', 'diedit');

            redirect('disposisi');
        }
    }
}
