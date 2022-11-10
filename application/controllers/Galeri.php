<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_galeri');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Galeri',
            'title2'    => 'ADD GALERI',
            'galeri'    => $this->m_galeri->lists(),
            'isi'       => 'admin/galeri/lists_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './sampul/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max-size']         = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('sampul')) {
                $data = array(
                    'title'  => 'Galeri',
                    'title2' => 'ADD GALERI',
                    'error'  => $this->upload->display_errors(),
                    'isi'    => 'admin/galeri/add_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './sampul/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_galeri'   => $this->input->post('nama_galeri'),
                    'sampul'        => $upload_data['uploads']['file_name']
                );
                $this->m_galeri->add($data);
                $this->session->set_flashdata('pesan', 'Galeri Berhasil Ditambahkan !!');
                redirect('galeri');
            }
        }

        $data = array(
            'title'     => 'Galeri',
            'title2'    => 'ADD GALERI',
            'isi'       => 'admin/galeri/add_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function edit($id_galeri)
    {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './sampul/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max-size']         = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('sampul')) {
                $data = array(
                    'title'  => 'Galeri',
                    'title2' => 'EDIT GALERI',
                    'error'  => $this->upload->display_errors(),
                    'galeri' => $this->m_galeri->detail($id_galeri),
                    'isi'    => 'admin/galeri/edit_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './sampul/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus file foto lama
                $galeri = $this->m_galeri->detail($id_galeri);
                if ($galeri->sampul != "") {
                    unlink('./sampul/' . $galeri->sampul);
                }
                //end menghapus foto 
                $data = array(

                    'id_galeri'     => $id_galeri,
                    'nama_galeri'   => $this->input->post('nama_galeri'),
                    'sampul'        => $upload_data['uploads']['file_name']
                );
                $this->m_galeri->edit($data);
                $this->session->set_flashdata('pesan', 'Galeri Berhasil Diedit !!');
                redirect('galeri');
            }
            $data = array(

                'id_galeri'     => $id_galeri,
                'nama_galeri'   => $this->input->post('nama_galeri'),
            );
            $this->m_galeri->edit($data);
            $this->session->set_flashdata('pesan', 'Galeri Berhasil Diedit !!');
            redirect('galeri');
        }

        $data = array(
            'title'     => 'Galeri',
            'title2'    => 'EDIT GALERI',
            'galeri'    => $this->m_galeri->detail($id_galeri),
            'isi'       => 'admin/galeri/edit_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function delete($id_galeri)
    {
        //menghapus file foto lama
        $galeri = $this->m_galeri->detail($id_galeri);
        if ($galeri->sampul != "") {
            unlink('./sampul/' . $galeri->sampul);
        }
        //end menghapus foto 
        $data = array('id_galeri' => $id_galeri);
        $this->m_galeri->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('galeri');
    }

    public function add_foto($id_galeri)
    {
        $this->form_validation->set_rules('keterangan', 'Keterangan Foto', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './gambar/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max-size']         = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {

                $galeri = $this->m_galeri->detail($id_galeri);
                $data   = array(
                    'title'  => 'STMIK BANI SALEH',
                    'title2' => 'ADD FOTO GALERI : ' . $galeri->nama_galeri,
                    'error'  => $this->upload->display_errors(),
                    'galeri' => $galeri,
                    'foto' => $this->m_galeri->list_foto($id_galeri),
                    'isi'    => 'admin/galeri/add_foto_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(

                    'id_galeri'     => $id_galeri,
                    'keterangan'    => $this->input->post('keterangan'),
                    'gambar'          => $upload_data['uploads']['file_name']
                );
                $this->m_galeri->add_foto($data);
                $this->session->set_flashdata('pesan', 'Foto Berhasil Ditambahkan !!');
                redirect('galeri/add_foto/' . $id_galeri);
            }
        }

        $galeri = $this->m_galeri->detail($id_galeri);
        $data   = array(
            'title'     => 'STMIK BANI SALEH',
            'title2'    => 'ADD FOTO GALERI : ' . $galeri->nama_galeri,
            'galeri'    => $galeri,
            'foto'      => $this->m_galeri->list_foto($id_galeri),
            'isi'       => 'admin/galeri/add_foto_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function delete_foto($id_galeri, $id_foto)
    {
        //menghapus file foto lama
        $gambar = $this->m_galeri->detail_foto($id_foto);
        if ($gambar->gambar != "") {
            unlink('./gambar/' . $gambar->gambar);
        }
        //end menghapus foto 

        $data = array('id_foto' => $id_foto);
        $this->m_galeri->delete_foto($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Dihapus !!');
        redirect('galeri/add_foto/' . $id_galeri);
    }
}
