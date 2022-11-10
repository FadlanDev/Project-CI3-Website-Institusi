<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dosen');
        $this->load->model('m_mapel');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Dosen',
            'title2'    => 'DATA DOSEN',
            'dosen'     => $this->m_dosen->lists(),
            'isi'       => 'admin/dosen/list_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        //$this->form_validation->set_rules('foto_dosen', 'Foto Dosen', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './asset/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max-size'] = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_dosen')) {
                $data = array(
                    'title' => 'Dosen',
                    'title2' => 'DATA DOSEN',
                    'error' => $this->upload->display_errors(),
                    'mapel' => $this->m_mapel->lists(),
                    'isi' => 'admin/dosen/add_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './asset/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nip' => $this->input->post('nip'),
                    'nama_dosen' => $this->input->post('nama_dosen'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'id_mapel' => $this->input->post('id_mapel'),
                    'pendidikan' => $this->input->post('pendidikan'),
                    'foto_dosen' => $upload_data['uploads']['file_name']
                );
                $this->m_dosen->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
                redirect('dosen');
            }
        }
        $data = array(
            'title' => 'Dosen',
            'title2' => 'ADD DATA DOSEN',
            'mapel' => $this->m_mapel->lists(),
            'isi' => 'admin/dosen/add_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function edit($id_dosen)
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './asset/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 6000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_dosen')) {
                $data = array(
                    'title'         => 'Dosen',
                    'title2'        => 'EDIT DATA DOSEN',
                    'error'         => $this->upload->display_errors(),
                    'dosen'         => $this->m_dosen->detail($id_dosen),
                    'mapel'         => $this->m_mapel->lists(),
                    'isi'           => 'admin/dosen/edit_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './asset/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus file foto lama
                $dosen = $this->m_dosen->detail($id_dosen);
                if ($dosen->foto_dosen != "") {
                    unlink('./asset/' . $dosen->foto_dosen);
                }
                //end menghapus foto 
                $data = array(
                    'id_dosen'      => $id_dosen,
                    'nip'           => $this->input->post('nip'),
                    'nama_dosen'    => $this->input->post('nama_dosen'),
                    'tempat_lahir'  => $this->input->post('tempat_lahir'),
                    'tgl_lahir'     => $this->input->post('tgl_lahir'),
                    'id_mapel'      => $this->input->post('id_mapel'),
                    'pendidikan'    => $this->input->post('pendidikan'),
                    'foto_dosen'    => $upload_data['uploads']['file_name']
                );
                $this->m_dosen->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
                redirect('dosen');
            }
            $upload_data                = array('uploads' => $this->upload->data());
            $config['image_library']    = 'gd2';
            $config['source_image']     = './asset/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'id_dosen'      => $id_dosen,
                'nip'           => $this->input->post('nip'),
                'nama_dosen'    => $this->input->post('nama_dosen'),
                'tempat_lahir'  => $this->input->post('tempat_lahir'),
                'tgl_lahir'     => $this->input->post('tgl_lahir'),
                'id_mapel'      => $this->input->post('id_mapel'),
                'pendidikan'    => $this->input->post('pendidikan'),
            );
            $this->m_dosen->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
            redirect('dosen');
        }
        $data = array(
            'title'         => 'Dosen',
            'title2'        => 'EDIT DATA DOSEN',
            'mapel'         => $this->m_mapel->lists(),
            'dosen'         => $this->m_dosen->detail($id_dosen),
            'isi'           => 'admin/dosen/edit_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function delete($id_dosen)
    {
        //menghapus file foto lama
        $dosen = $this->m_dosen->detail($id_dosen);
        if ($dosen->foto_dosen != "") {
            unlink('./asset/' . $dosen->foto_dosen);
        }

        $data = array('id_dosen' => $id_dosen);
        $this->m_dosen->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('dosen');
    }
}
