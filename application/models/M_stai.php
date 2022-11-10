<?php

defined('BASEPATH') or exit('No direct script access alowed');

class M_stai extends CI_Model
{
    public function stai()
    {
        $this->db->select('*');
        $this->db->from('tbl_stai');
        $this->db->where('id', 1);
        return $this->db->get()->row();
    }
}
