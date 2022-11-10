<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_dosen');
        $this->load->model('m_stikes');
        $this->load->model('m_stai');
    }

    public function index()
    {
        $data = array(
            'title'           => 'Home',
            'slider_foto'     => $this->m_home->slider_foto(),
            'slider_berita'   => $this->m_home->slider_berita(),
            'dosen'           => $this->m_dosen->lists(),
            'isi'             => 'home_v'
        );
        $this->load->view('layout/wrapperhome_v', $data, FALSE);
    }

    public function download()
    {
        $data = array(
            'title'     => 'Download',
            'download'  => $this->m_home->download(),
            'isi'       => 'download_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function dosen()
    {
        $data = array(
            'title'     => 'Dosen',
            'dosen'     => $this->m_home->dosen(),
            'isi'       => 'dosen_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function berita()
    {
        $this->load->library('pagination');
        $config['base_url']     = base_url('home/berita');
        $config['total_rows']   = count($this->m_home->total_berita());
        $config['per_page']     = 6;
        $config['uri_segmen']   = 3;

        //start dan limit
        $limit = $config['per_page'];
        $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
        //---------------

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="text-center pagination_container d-flex flex-row align-items-center justify-content-start"><ul class="pagination_list">';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a>';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['firts_tag_open']   = '<li>';
        $config['firts_tag_close']  = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['full_tag_close']   = '</ul></div>';
        //==========================================
        $this->pagination->initialize($config);

        $data = array(
            'paginasi'          => $this->pagination->create_links(),
            'latest_berita'    => $this->m_home->latest_berita(),
            'berita'            => $this->m_home->berita($limit, $start),
            'title'             => 'Berita',
            'isi'               => 'berita_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function detail_berita($slug_berita)
    {
        $data = array(
            'title'         => 'Detail Berita',
            'latest_berita' => $this->m_home->latest_berita(),
            'berita'        => $this->m_home->detail_berita($slug_berita),
            'isi'           => 'detail_berita_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function galery()
    {
        $data = array(
            'title'     => 'Galery',
            'galery'    => $this->m_home->galery(),
            'isi'       => 'galery_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function detail_galery($id_galeri)
    {
        $data = array(
            'title'         => 'Galery',
            'galery'        => $this->m_home->detail_galery($id_galeri),
            'nama_galeri'   => $this->m_home->nama_galeri($id_galeri),
            'isi'           => 'detail_galery_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function mahasiswa()
    {
        $data = array(
            'title'     => 'Mahasiswa',
            'mahasiswa' => $this->m_home->mahasiswa(),
            'isi'       => 'mahasiswa_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function profile_kampus()
    {
        $data = array(
            'title'     => 'Profile Stmik Bani Saleh',
            'profile'   => $this->m_setting->detail(),
            'isi'       => 'profile_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function profile_pimpinan()
    {
        $data = array(
            'title'     => 'Profile Pimpinan',
            'pimpinan'  => $this->m_setting->pimpinan(),
            'isi'       => 'pimpinan_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function about()
    {
        $data = array(
            'title'     => 'About',
            'profile'   => $this->m_setting->detail(),
            'about'     => $this->m_setting->detail(),
            'isi'       => 'about_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function profile_stikes()
    {
        $data = array(
            'title'             => 'Profile Stikes Bani Saleh',
            'profile_stikes'    => $this->m_stikes->stikes(),
            'isi'               => 'stikes_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }

    public function profile_stai()
    {
        $data = array(
            'title'         => 'Profile Stai Bani saleh',
            'profile_stai'  => $this->m_stai->stai(),
            'isi'           => 'stai_v'
        );
        $this->load->view('layout/wrapper_v', $data, FALSE);
    }
}
