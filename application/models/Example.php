<?php

class Mahasiswa_model extends CI_model
{

    public function getAllMahasiswa()
    {
        //menampilkan semua data mahasiswa yang ada dalam database
        return $this->db->get('mahasiswa')->result_array();
    }

    public function add_mahasiswa()
    {

        //$data menampung data mahasiswa yang ada dalam form di halaman add_mahasiswa
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        //memasukkan data mahasiswa ke database
        $this->db->insert('mahasiswa', $data);
    }

    public function delete_mahasiswa($id_mahasiswa)
    {

        //id_mahasiswa (refer to database) $id_mahasiswa adalah parameter
        // cara pertama
        // $this->db->where('id_mahasiswa', $id_mahasiswa);

        //mahasiswa (refer to table database) || menghapus data mahasiswa dari tabel mahasiswa
        //cara pertama
        // $this->db->delete('mahasiswa');

        return $this->db->delete('mahasiswa', ['id_mahasiswa' => $id_mahasiswa]);
    }

    public function getMahasiswaById($id_mahasiswa)
    {

        return $this->db->get_where('mahasiswa', ['id_mahasiswa' => $id_mahasiswa])->row_array();
    }

    public function edit_mahasiswa()
    {

        //$data menampung data mahasiswa yang ada dalam form di halaman add_mahasiswa
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        //memasukkan data mahasiswa ke database
        $this->db->where('id_mahasiswa', $this->input->post('id_mahasiswa'));
        $this->db->update('mahasiswa', $data);
    }

    public function searchMahasiswa()
    {

        $keyword = $this->input->post('keyword', true);

        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
