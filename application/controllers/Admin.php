<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_setting');
    }

    public function index()
    {
        $data = array(
            'title'  => 'Dashboard',
            'title2' => 'DASHBOARD',
            'isi'    => 'admin/v_home'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }

    public function setting()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nama_kampus', 'Nama Kampus', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Kampus', 'required');
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('pembina', 'Ketua Pembina Yayasan', 'required');
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');
        $this->form_validation->set_rules('sejarah', 'Sejarah', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_kampus/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 9000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_kampus')) {
                $data = array(
                    'title'     => 'Tentang',
                    'title2'    => 'TENTANG LAINNYA',
                    'setting'   => $this->m_setting->detail(),
                    'isi'       => 'admin/setting_v'
                );
                $this->load->view('admin/layout/wrapper_v', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_kampus/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus file foto lama
                $setting = $this->m_setting->detail();
                if ($setting->foto_kampus != "") {
                    unlink('./foto_kampus/' . $setting->foto_kampus);
                }
                //end menghapus foto 
                $data = array(
                    'id'                => '1',
                    'email'             => $this->input->post('email'),
                    'pembina'           => $this->input->post('pembina'),
                    'nama_kampus'       => $this->input->post('nama_kampus'),
                    'alamat'            => $this->input->post('alamat'),
                    'no_telepon'        => $this->input->post('no_telepon'),
                    'visi'              => $this->input->post('visi'),
                    'misi'              => $this->input->post('misi'),
                    'sejarah'           => $this->input->post('sejarah'),
                    'foto_kampus'       => $upload_data['uploads']['file_name']
                );
                $this->m_setting->save_setting($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate Dan Telah Disimpan !!');
                redirect('admin/setting');
            }
            $data = array(
                'id'                => '1',
                'email'               => $this->input->post('email'),
                'pembina'           => $this->input->post('pembina'),
                'nama_kampus'       => $this->input->post('nama_kampus'),
                'alamat'            => $this->input->post('alamat'),
                'no_telepon'        => $this->input->post('no_telepon'),
                'visi'              => $this->input->post('visi'),
                'misi'              => $this->input->post('misi'),
                'sejarah'           => $this->input->post('sejarah'),

            );
            $this->m_setting->save_setting($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate Dan Telah Disimpan !!');
            redirect('admin/setting');
        }
        $data = array(
            'title'     => 'Tentang',
            'title2'    => 'TENTANG LAINNYA',
            'setting'   => $this->m_setting->detail(),
            'isi'       => 'admin/setting_v'
        );
        $this->load->view('admin/layout/wrapper_v', $data, FALSE);
    }
}
