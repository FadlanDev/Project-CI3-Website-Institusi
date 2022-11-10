<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_fakultas extends CI_Model
{
    public function list()
    {
        $this->db->select('*');
        $this->db->from('tbl_jurusan');
        $this->db->order_by('kd_jurusan', 'asc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tbl_jurusan', $data);
    }

    public function edit($data)
    {
        $this->db->where('kd_jurusan', $data['kd_jurusan']);
        $this->db->update('tbl_jurusan', $data);
    }

    public function delete($data)
    {
        $this->db->where('kd_jurusan', $data['kd_jurusan']);
        $this->db->delete('tbl_jurusan', $data);
    }
}
