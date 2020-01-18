<?php

class Disposisi_model extends CI_model
{
    public function getAll()
    {
        return $this->db->get('disposisi')->result_array();
    }

    public function add()
    {
        $data = [
            "tujuan_disposisi" => $this->input->post('tujuanDisposisi', true),
            "isi_disposisi" => $this->input->post('isiDisposisi', true),
            "batas_waktu" => $this->input->post('batasWaktu', true),
            "catatan" => $this->input->post('catatan', true),
            "sifat_disposisi" => $this->input->post('sifatDisposisi'),
        ];

        $this->db->insert('disposisi', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('disposisi', ['id' => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where('disposisi', ['id' => $id])->row_array();
    }

    public function edit()
    {
        $data = [
            "tujuan_disposisi" => $this->input->post('tujuanDisposisi', true),
            "isi_disposisi" => $this->input->post('isiDisposisi', true),
            "batas_waktu" => $this->input->post('batasWaktu', true),
            "catatan" => $this->input->post('catatan', true),
            "sifat_disposisi" => $this->input->post('sifatDisposisi'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('disposisi', $data);
    }
}
