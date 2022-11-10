<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_setting extends CI_Model
{
    public function detail()
    {
        $this->db->select('*');
        $this->db->from('tbl_setting');
        $this->db->where('id', 1);
        return $this->db->get()->row();
    }

    public function save_setting($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_setting', $data);
    }

    public function pimpinan()
    {
        $this->db->select('*');
        $this->db->from('tbl_pimpinan');
        $this->db->where('id', 1);
        return $this->db->get()->row();
    }
}
