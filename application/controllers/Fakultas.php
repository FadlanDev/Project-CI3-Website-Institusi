<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fakultas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_fakultas');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Program Studi',
            'title2'    => 'DATA STUDY',
            'fakultas'  => $this->m_fakultas->list(),
            'isi'       => 'admin/fakultas_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function add()
    {
        $data = array(
            'nm_jurusan' => $this->input->post('nm_jurusan'),
            'jenjang_studi' => $this->input->post('jenjang_studi')
        );
        $this->m_fakultas->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('fakultas');
    }

    public function edit($kd_jurusan)
    {
        $data = array(
            'kd_jurusan' => $kd_jurusan,
            'nm_jurusan' => $this->input->post('nm_jurusan'),
            'jenjang_studi' => $this->input->post('jenjang_studi')
        );
        $this->m_fakultas->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
        redirect('fakultas');
    }

    public function delete($kd_jurusan)
    {
        $data = array(
            'kd_jurusan' => $kd_jurusan,
        );
        $this->m_fakultas->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('fakultas');
    }
}
