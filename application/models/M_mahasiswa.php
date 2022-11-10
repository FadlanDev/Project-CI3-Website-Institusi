<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{
    public function list()
    {
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa');
        $this->db->order_by('id_mahasiswa');
        return $this->db->get()->result();
    }

    public function detail($id_mahasiswa)
    {
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa');
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_mahasiswa', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_mahasiswa', $data['id_mahasiswa']);
        $this->db->update('tbl_mahasiswa', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_mahasiswa', $data['id_mahasiswa']);
        $this->db->delete('tbl_mahasiswa', $data);
    }
}
