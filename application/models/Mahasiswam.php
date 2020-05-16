<?php 

class Mahasiswam extends CI_Model {
    public function insert($data)
    {
        // datanya itu berupa array, dan diinsert ke tabel mahasiswa 
        return $this->db->insert('mahasiswa', $data);
    }

    public function hapus($id)
    {
        // Ingat kalau mau update atau delete data, where jangan dilupakan
        // YNWA kalau gak ada where, BOOM :D
        return $this->db->where('id_pendaftaran', $id)->delete('mahasiswa');
    }

    public function detail($id)
    {
        // Jika datanya berupa single row menggunakan row_array(). jangan lupa untuk get tablenya
        return $this->db->where('id_pendaftaran', $id)->get('mahasiswa')->row_array();
    }

    public function all()
    {
        // Jika datanya berupa multiple row menggunakan row_array()
        return $this->db->get('mahasiswa')->result_array();
    }

    public function update($id, $data)
    {
        // Kalau mau update, jangan lupa id (primary key) dan isi data yang mau diupdate. Gak harus semua kok diupdate :D
        return $this->db->where('id_pendaftaran', $id)->update('mahasiswa', $data);
    }
}