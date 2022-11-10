<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_stikes extends CI_Model
{
    public function stikes()
    {
        $this->db->select('*');
        $this->db->from('tbl_stikes');
        $this->db->where('id', 1);
        return $this->db->get()->row();
    }
}
