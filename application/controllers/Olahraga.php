<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Olahraga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_olahraga');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Ukm Olahraga',
            'title2'    => 'DATA UKM OLAHRAGA',
            'olahraga'  => $this->m_olahraga->lists(),
            'isi'       => 'admin/olahraga/list_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nm_olahraga', 'Nama Olahraga', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal Latihan', 'required');
        //$this->form_validation->set_rules('foto_olga', 'Foto Olahraga', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_olahraga/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_olga')) {
                $data = array(
                    'title'     => 'Ukm Olahraga',
                    'title2'    => 'DATA UKM OLAHRAGA',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/olahraga/add_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_olahraga/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nm_olahraga'   => $this->input->post('nm_olahraga'),
                    'jadwal'        => $this->input->post('jadwal'),
                    'foto_olga'     => $upload_data['uploads']['file_name']
                );
                $this->m_olahraga->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
                redirect('olahraga');
            }
        }
        $data = array(
            'title'     => 'Ukm Olahraga',
            'title2'    => 'ADD DATA UKM OLAHRAGA',
            'isi'       => 'admin/olahraga/add_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function edit($kd_olahraga)
    {
        $this->form_validation->set_rules('nm_olahraga', 'Nama Olahraga', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal Latihan', 'required');
        //$this->form_validation->set_rules('foto_olga', 'Foto Olahraga', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_olahraga/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_olga')) {
                $data = array(
                    'title'         => 'Ukm Olahraga',
                    'title2'        => 'EDIT DATA UKM OLAHRAGA',
                    'error'         => $this->upload->display_errors(),
                    'olahraga'      => $this->m_olahraga->detail($kd_olahraga),
                    'isi'           => 'admin/olahraga/edit_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_olahraga/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus file foto lama
                $olahraga = $this->m_olahraga->detail($kd_olahraga);
                if ($olahraga->foto_olga != "") {
                    unlink('./foto_olahraga/' . $olahraga->foto_olga);
                }
                //end menghapus foto 
                $data = array(
                    'kd_olahraga'   => $kd_olahraga,
                    'nm_olahraga'   => $this->input->post('nm_olahraga'),
                    'jadwal'        => $this->input->post('jadwal'),
                    'foto_olga'     => $upload_data['uploads']['file_name']
                );
                $this->m_olahraga->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
                redirect('olahraga');
            }
            $upload_data                = array('uploads' => $this->upload->data());
            $config['image_library']    = 'gd2';
            $config['source_image']     = './foto_olahraga/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'kd_olahraga'   => $kd_olahraga,
                'nm_olahraga'   => $this->input->post('nm_olahraga'),
                'jadwal'        => $this->input->post('jadwal'),
            );
            $this->m_olahraga->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
            redirect('olahraga');
        }
        $data = array(
            'title'         => 'Ukm Olahraga',
            'title2'        => 'EDIT DATA UKM OLAHRAGA',
            'olahraga'      => $this->m_olahraga->detail($kd_olahraga),
            'isi'           => 'admin/olahraga/edit_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function delete($kd_olahraga)
    {
        //menghapus file foto lama
        $olahraga = $this->m_olahraga->detail($kd_olahraga);
        if ($olahraga->foto_olga != "") {
            unlink('./foto_olahraga/' . $olahraga->foto_olga);
        }

        $data = array('kd_olahraga' => $kd_olahraga);
        $this->m_olahraga->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('olahraga');
    }
}
