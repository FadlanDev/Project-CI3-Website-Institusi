<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
    public function download()
    {
        $this->db->select('*');
        $this->db->from('tbl_file');
        $this->db->order_by('id_file', 'asc');
        return $this->db->get()->result();
    }

    public function dosen()
    {
        $this->db->select('*');
        $this->db->from('tbl_dosen');
        $this->db->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_dosen.id_mapel', 'left');
        $this->db->order_by('id_dosen', 'asc');
        return $this->db->get()->result();
    }

    public function berita($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get()->row();
    }

    public function latest_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(10);
        return $this->db->get()->result();
    }

    public function galery()
    {
        $this->db->select('tbl_galeri.*,count(tbl_foto.id_galeri) as jml_foto');
        $this->db->from('tbl_galeri');
        $this->db->join('tbl_foto', 'tbl_foto.id_galeri = tbl_galeri.id_galeri', 'left');
        $this->db->group_by('tbl_galeri.id_galeri');
        $this->db->order_by('tbl_galeri.id_galeri', 'desc');
        return $this->db->get()->result();
    }

    public function detail_galery($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tbl_foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }

    public function nama_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

    public function mahasiswa()
    {
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa');
        $this->db->order_by('id_mahasiswa');
        return $this->db->get()->result();
    }

    public function slider_foto()
    {
        $this->db->select('*');
        $this->db->from('tbl_kampus');
        $this->db->order_by('id_gambar', 'asc');
        $this->db->limit(4);
        return $this->db->get()->result();
    }

    public function slider_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(3);
        return $this->db->get()->result();
    }
}
