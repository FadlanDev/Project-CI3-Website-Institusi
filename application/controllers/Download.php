<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_download');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Download',
            'title2'    => 'DATA DOWNLOAD',
            'download'  => $this->m_download->lists(),
            'isi'       => 'admin/download/lists_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('ket_file', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './berkas/';
            $config['allowed_types']    = 'doc|docx|ppt|pptx|pdf|txt';
            $config['max-size']         = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('berkas')) {
                $data = array(
                    'title'         => 'Download',
                    'title2'        => 'ADD DATA FILE',
                    'error_upload'  => 'File tidak sesuai format / files not supported',
                    'isi'           => 'admin/download/add_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './berkas/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(

                    'ket_file'   => $this->input->post('ket_file'),
                    'berkas'     => $upload_data['uploads']['file_name']
                );
                $this->m_download->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
                redirect('download');
            }
        }
        $data = array(
            'title' => 'Download',
            'title2' => 'ADD DATA FILE',
            'isi'   => 'admin/download/add_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function edit($id_file)
    {
        $this->form_validation->set_rules('ket_file', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './berkas/';
            $config['allowed_types']    = 'doc|docx|ppt|pptx|pdf|txt';
            $config['max-size']         = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('berkas')) {
                $data = array(
                    'title'         => 'Download',
                    'title2'        => 'EDIT DATA FILE',
                    'download'      => $this->m_download->detail($id_file),
                    'error_upload'  => 'File tidak sesuai format / files not supported',
                    'isi'           => 'admin/download/edit_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './berkas/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                //menghapus file  lama
                $download = $this->m_download->detail($id_file);
                if ($download->berkas != "") {
                    unlink('./berkas/' . $download->berkas);
                }
                //end menghapus file lama

                $data = array(

                    'id_file'    => $id_file,
                    'ket_file'   => $this->input->post('ket_file'),
                    'berkas'     => $upload_data['uploads']['file_name']
                );
                $this->m_download->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
                redirect('download');
            }
            $data = array(

                'id_file'    => $id_file,
                'ket_file'   => $this->input->post('ket_file'),
            );
            $this->m_download->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
            redirect('download');
        }

        $data = array(
            'title'      => 'Download',
            'title2'     => 'EDIT DATA FILE',
            'download'   => $this->m_download->detail($id_file),
            'isi'        => 'admin/download/edit_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function delete($id_file)
    {
        //menghapus file foto lama
        $download = $this->m_download->detail($id_file);
        if ($download->berkas != "") {
            unlink('./berkas/' . $download->berkas);
        }

        $data = array('id_file' => $id_file);
        $this->m_download->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('download');
    }
}
