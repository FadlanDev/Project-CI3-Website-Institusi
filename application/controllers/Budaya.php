<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Budaya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_budaya');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Ukm Seni Budaya',
            'title2'    => 'DATA UKM SENI DAN BUDAYA',
            'budaya'    => $this->m_budaya->list(),
            'isi'       => 'admin/budaya/list_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nm_seni', 'Nama Seni', 'required');
        $this->form_validation->set_rules('agenda', 'Agenda Latihan', 'required');
        //$this->form_validation->set_rules('foto', 'Foto', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_budaya/';
            $config['allowed_types']    = 'gif|png|jpg|jpeg';
            $config['max_size']         = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'title'     => 'Ukm Seni Budaya',
                    'title2'    => 'DATA UKM SENI DAN BUDAYA',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/budaya/add_v'

                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_budaya/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nm_seni' => $this->input->post('nm_seni'),
                    'agenda'  => $this->input->post('agenda'),
                    'foto'    => $upload_data['uploads']['file_name']

                );
                $this->m_budaya->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
                redirect('budaya');
            }
        }

        $data = array(
            'title'     => 'Ukm Seni Budaya',
            'title2'    => 'ADD DATA UKM SENI DAN BUDAYA',
            'isi'       => 'admin/budaya/add_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function edit($kode_seni)
    {
        $this->form_validation->set_rules('nm_seni', 'Nama Seni', 'required');
        $this->form_validation->set_rules('agenda', 'Agenda Latihan', 'required');
        //$this->form_validation->set_rules('foto_olga', 'Foto Olahraga', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_budaya/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'title'         => 'Ukm Seni Budaya',
                    'title2'        => 'EDIT DATA UKM SENI DAN BUDAYA',
                    'error'         => $this->upload->display_errors(),
                    'budaya'        => $this->m_budaya->detail($kode_seni),
                    'isi'           => 'admin/budaya/edit_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_budaya/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus file foto lama
                $budaya = $this->m_budaya->detail($kode_seni);
                if ($budaya->foto != "") {
                    unlink('./foto_budaya/' . $budaya->foto);
                }
                //end menghapus foto 
                $data = array(
                    'kode_seni'     => $kode_seni,
                    'nm_seni'       => $this->input->post('nm_seni'),
                    'agenda'        => $this->input->post('agenda'),
                    'foto'          => $upload_data['uploads']['file_name']
                );
                $this->m_budaya->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
                redirect('budaya');
            }
            $upload_data                = array('uploads' => $this->upload->data());
            $config['image_library']    = 'gd2';
            $config['source_image']     = './foto_budaya/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'kode_seni'     => $kode_seni,
                'nm_seni'       => $this->input->post('nm_seni'),
                'agenda'        => $this->input->post('agenda'),
            );
            $this->m_budaya->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
            redirect('budaya');
        }
        $data = array(
            'title'         => 'Ukm Seni Budaya',
            'title2'        => 'EDIT DATA UKM SENI DAN BUDAYA',
            'budaya'        => $this->m_budaya->detail($kode_seni),
            'isi'           => 'admin/budaya/edit_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function delete($kode_seni)
    {
        //menghapus file foto lama
        $budaya = $this->m_budaya->detail($kode_seni);
        if ($budaya->foto != "") {
            unlink('.foto_budaya/' . $budaya->foto);
        }

        $data = array('kode_seni' => $kode_seni);
        $this->m_budaya->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('budaya');
    }
}
