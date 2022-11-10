<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_budaya extends CI_Model
{
    public function list()
    {
        $this->db->select('*');
        $this->db->from('tbl_seni');
        $this->db->order_by('kode_seni', 'asc');
        return $this->db->get()->result();
    }

    public function detail($kode_seni)
    {
        $this->db->select('*');
        $this->db->from('tbl_seni');
        $this->db->where('kode_seni', $kode_seni);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_seni', $data);
    }

    public function edit($data)
    {
        $this->db->where('kode_seni', $data['kode_seni']);
        $this->db->update('tbl_seni', $data);
    }

    public function delete($data)
    {
        $this->db->where('kode_seni', $data['kode_seni']);
        $this->db->delete('tbl_seni', $data);
    }
}
