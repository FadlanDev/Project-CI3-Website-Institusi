<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengumuman');
    }

    public function index()
    {
        $data = array(
            'title'         => 'Pengumuman',
            'title2'        => 'PENGUMUMAN',
            'pengumuman'    => $this->m_pengumuman->lists(),
            'isi'           => 'admin/pengumuman/lists_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuan', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title'     => 'Pengumuman',
                'title2'    => 'ADD PENGUMUMAN',
                'isi'       => 'admin/pengumuman/add_v'
            );
            $this->load->view('admin/layout/wrapper_v', $data, FALSE);
        } else {
            $data = array(
                'judul_pengumuman' => $this->input->post('judul_pengumuman'),
                'isi_pengumuman'   => $this->input->post('isi_pengumuman'),
                'tgl'              => date('Y-m-d'),
            );
            $this->m_pengumuman->add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
            redirect('pengumuman');
        }
    }

    public function edit($id_pengumuman)
    {
        $this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuan', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Posting', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title'         => 'Pengumuman',
                'title2'        => 'EDIT PENGUMUMAN',
                'pengumuman'    => $this->m_pengumuman->detail($id_pengumuman),
                'isi'           => 'admin/pengumuman/edit_v'
            );
            $this->load->view('admin/layout/wrapper_v', $data, FALSE);
        } else {
            $data = array(

                'id_pengumuman'    => $id_pengumuman,
                'judul_pengumuman' => $this->input->post('judul_pengumuman'),
                'isi_pengumuman'   => $this->input->post('isi_pengumuman'),
                'tgl'              => $this->input->post('tgl')
            );
            $this->m_pengumuman->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
            redirect('pengumuman');
        }
    }

    public function delete($id_pengumuman)
    {
        $data = array(
            'id_pengumuman' => $id_pengumuman,
        );
        $this->m_pengumuman->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('pengumuman');
    }
}
