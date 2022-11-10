<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }

    public function index()
    {
        $data = array(
            'title'         => 'Mahasiswa',
            'title2'        => 'DATA MAHASISWA',
            'mahasiswa'     => $this->m_mahasiswa->list(),
            'isi'           => 'admin/mahasiswa/list_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('npm', 'NPM', 'required');
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_mahasiswa/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_mahasiswa')) {
                $data = array(
                    'title'     => 'Mahasiswa',
                    'title2'    => 'DATA MAHASISWA',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/mahasiswa/add_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, false);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gs2';
                $config['source_image']     = './foto_mahasiswa/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'npm'              => $this->input->post('npm'),
                    'nama_mahasiswa'   => $this->input->post('nama_mahasiswa'),
                    'tempat_lahir'     => $this->input->post('tempat_lahir'),
                    'tgl_lahir'        => $this->input->post('tgl_lahir'),
                    'kelas'            => $this->input->post('kelas'),
                    'foto_mahasiswa'   => $upload_data['uploads']['file_name']
                );
                $this->m_mahasiswa->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
                redirect('mahasiswa');
            }
        }
        $data = array(
            'title'     => 'Mahasiswa',
            'title2'    => 'ADD DATA MAHASISWA',
            'isi'       => 'admin/mahasiswa/add_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function edit($id_mahasiswa)
    {
        $this->form_validation->set_rules('npm', 'NPM', 'required');
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_mahasiswa/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_mahasiswa')) {
                $data = array(
                    'title'         => 'Mahasiswa',
                    'title2'        => 'EDIT DATA MAHASISWA',
                    'error'         => $this->upload->display_errors(),
                    'mahasiswa'     => $this->m_mahasiswa->detail($id_mahasiswa),
                    'isi'           => 'admin/mahasiswa/edit_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_mahasiswa/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus file foto lama
                $mahasiswa = $this->m_mahasiswa->detail($id_mahasiswa);
                if ($mahasiswa->foto_mahasiswa != "") {
                    unlink('./foto_mahasiswa/' . $mahasiswa->foto_mahasiswa);
                }
                //end menghapus foto 
                $data = array(
                    'id_mahasiswa'      => $id_mahasiswa,
                    'npm'               => $this->input->post('npm'),
                    'nama_mahasiswa'    => $this->input->post('nama_mahasiswa'),
                    'tempat_lahir'      => $this->input->post('tempat_lahir'),
                    'tgl_lahir'         => $this->input->post('tgl_lahir'),
                    'kelas'             => $this->input->post('kelas'),
                    'foto_mahasiswa'    => $upload_data['uploads']['file_name']
                );
                $this->m_mahasiswa->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
                redirect('mahasiswa');
            }
            $upload_data                = array('uploads' => $this->upload->data());
            $config['image_library']    = 'gd2';
            $config['source_image']     = './foto_mahasiswa/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'id_mahasiswa'  => $id_mahasiswa,
                'npm'           => $this->input->post('npm'),
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'tempat_lahir'  => $this->input->post('tempat_lahir'),
                'tgl_lahir'     => $this->input->post('tgl_lahir'),
                'kelas'         => $this->input->post('kelas'),
            );
            $this->m_mahasiswa->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
            redirect('mahasiswa');
        }
        $data = array(
            'title'         => 'Mahasiswa',
            'title2'        => 'EDIT DATA MAHASISWA',
            'mahasiswa'     => $this->m_mahasiswa->detail($id_mahasiswa),
            'isi'           => 'admin/mahasiswa/edit_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function delete($id_mahasiswa)
    {
        //mengahpus file foto lama
        $mahasiswa = $this->m_mahasiswa->detail($id_mahasiswa);
        if ($mahasiswa->foto_mahasiswa != "") {
            unlink('./foto_mahasiswa/' . $mahasiswa->foto_mahasiswa);
        }
        //end menghapus foto

        $data = array('id_mahasiswa' => $id_mahasiswa);
        $this->m_mahasiswa->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('mahasiswa');
    }
}
