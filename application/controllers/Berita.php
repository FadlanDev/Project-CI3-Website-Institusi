<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_berita');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Berita',
            'title2'    => 'DATA BERITA',
            'berita'     => $this->m_berita->lists(),
            'isi'       => 'admin/berita/lists_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required' => '%s Harus Diisi'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './gambar_berita/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max-size'] = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_berita')) {
                $data = array(
                    'title'  => 'Berita',
                    'title2' => 'ADD BERITA',
                    'error'  => $this->upload->display_errors(),
                    'isi'    => 'admin/berita/add_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './gambar_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'judul_berita'  => $this->input->post('judul_berita'),
                    'slug_berita'   => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                    'isi_berita'    => $this->input->post('isi_berita'),
                    'tgl_berita'    => $this->input->post('tgl_berita'),
                    'id_user'       => $this->session->userdata('id_user'),
                    'gambar_berita' => $upload_data['uploads']['file_name']
                );
                $this->m_berita->add($data);
                $this->session->set_flashdata('pesan', 'Berita Berhasil Diposting !!');
                redirect('berita');
            }
        }

        $data = array(
            'title'     => 'Berita',
            'title2'    => 'ADD BERITA',
            'isi'       => 'admin/berita/add_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function edit($id_berita)
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required' => '%s Harus Diisi'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './gambar_berita/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max-size'] = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_berita')) {
                $data = array(
                    'title'  => 'Berita',
                    'title2' => 'EDIT BERITA',
                    'berita' => $this->m_berita->detail($id_berita),
                    'error'  => $this->upload->display_errors(),
                    'isi'    => 'admin/berita/edit_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './gambar_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                //menghapus file foto lama
                $berita = $this->m_berita->detail($id_berita);
                if ($berita->gambar_berita != "") {
                    unlink('./gambar_berita/' . $berita->gambar_berita);
                }

                $data = array(

                    'id_berita'     => $id_berita,
                    'judul_berita'  => $this->input->post('judul_berita'),
                    'slug_berita'   => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                    'isi_berita'    => $this->input->post('isi_berita'),
                    'tgl_berita'    => $this->input->post('tgl_berita'),
                    'id_user'       => $this->session->userdata('id_user'),
                    'gambar_berita' => $upload_data['uploads']['file_name']
                );
                $this->m_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Berita Berhasil Diedit !!');
                redirect('berita');
            }

            $data = array(

                'id_berita'     => $id_berita,
                'judul_berita'  => $this->input->post('judul_berita'),
                'slug_berita'   => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                'isi_berita'    => $this->input->post('isi_berita'),
                'tgl_berita'    => $this->input->post('tgl_berita'),
                'id_user'       => $this->session->userdata('id_user'),
            );
            $this->m_berita->edit($data);
            $this->session->set_flashdata('pesan', 'Berita Berhasil Diedit !!');
            redirect('berita');
        }

        $data = array(
            'title'     => 'Berita',
            'title2'    => 'EDIT BERITA',
            'berita'    => $this->m_berita->detail($id_berita),
            'isi'       => 'admin/berita/edit_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function delete($id_berita)
    {
        //menghapus file foto lama
        $berita = $this->m_berita->detail($id_berita);
        if ($berita->gambar_berita != "") {
            unlink('./gambar_berita/' . $berita->gambar_berita);
        }

        $data = array('id_berita' => $id_berita);
        $this->m_berita->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('berita');
    }
}
