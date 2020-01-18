<?php

class Suratmasuk_model extends CI_model
{
    public function getAll()
    {
        return $this->db->get('surat_masuk')->result_array();
    }

    public function add()
    {
        $data = [
            "asal_surat" => $this->input->post('asalSurat', true),
            "nomor_surat" => $this->input->post('nomorSurat', true),
            "perihal" => $this->input->post('perihal', true),
            "tanggal_surat" => $this->input->post('tanggalSurat', true),
            "keterangan" => $this->input->post('keterangan'),
            "file_surat" => $this->input->post('fileSurat', true),
        ];

        $this->db->insert('surat_masuk', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('surat_masuk', ['id' => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where('surat_masuk', ['id' => $id])->row_array();
    }

    public function edit()
    {
        $data = [
            "asal_surat" => $this->input->post('asalSurat', true),
            "nomor_surat" => $this->input->post('nomorSurat', true),
            "perihal" => $this->input->post('perihal', true),
            "tanggal_surat" => $this->input->post('tanggalSurat', true),
            "keterangan" => $this->input->post('keterangan'),
            "file_surat" => $this->input->post('fileSurat', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('surat_masuk', $data);
    }
}
