<?php

class Kodesurat_model extends CI_model
{
    public function getAll()
    {
        return $this->db->get('kode_surat')->result_array();
    }

    public function add()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "nama" => $this->input->post('namaSurat', true),
            "uraian" => $this->input->post('uraian', true),
        ];

        $this->db->insert('kode_surat', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('kode_surat', ['id' => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where('kode_surat', ['id' => $id])->row_array();
    }

    public function edit()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "nama" => $this->input->post('namaSurat', true),
            "uraian" => $this->input->post('uraian', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kode_surat', $data);
    }
}
