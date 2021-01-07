<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semua_bisa_model extends CI_Model {
	// Untuk mengambil data
 	public function mengambil($tabel, $where = null)
    {
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get($tabel);
    }
    // Untuk mengubah data di suatu tabel
    public function mengubah($tabel, $dimana, $data)
    {
        $this->db->where($dimana);
        if ($this->db->update($tabel, $data)) {
            return array('status' => 'berhasil');
        } else {
            return array('status' => 'gagal');
        }
    }
	// Untuk menambah data
    public function menambah($tabel, $data)
    {
        if ($this->db->insert($tabel, $data)) {
            return array(
                'status' => 'berhasil',
                'nilai'  => $this->db->insert_id()
            );
        } else {
            return array('status' => 'gagal');
        }
    }
	// digunakan ketika bukan berupa user
    public function menghapus($tabel, $dimana)
    {
        $this->db->where($dimana);
        if ($this->db->delete($tabel)) {
            return array('status' => 'berhasil');
        } else {
            return array('status' => 'gagal');
        }
    }
}

/* End of file Semua_bisa_model.php */
/* Location: ./application/models/Semua_bisa_model.php */