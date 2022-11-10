<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_olahraga extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_olahraga');
        $this->db->order_by('kd_olahraga', 'asc');
        return $this->db->get()->result();
    }

    public function detail($kd_olahraga)
    {
        $this->db->select('*');
        $this->db->from('tbl_olahraga');
        $this->db->where('kd_olahraga', $kd_olahraga);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_olahraga', $data);
    }

    public function edit($data)
    {
        $this->db->where('kd_olahraga', $data['kd_olahraga']);
        $this->db->update('tbl_olahraga', $data);
    }

    public function delete($data)
    {
        $this->db->where('kd_olahraga', $data['kd_olahraga']);
        $this->db->delete('tbl_olahraga', $data);
    }
}
