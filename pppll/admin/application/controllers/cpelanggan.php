<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cpelanggan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mpelanggan');
    } 
 
    // Index login
    public function index() {
        $data['query'] = $this->Mpelanggan->getUser(); 
        
        $this->template->load('admin', 'content' , 'pelanggan/list_p',$data);
    }

    public function detp($id_user)
    {
        $data['detail'] = $this->Mpelanggan->det_user($this->encrypt->decode($id_user));
        $data['chl'] = $this->Mpelanggan->get_chl($this->encrypt->decode($id_user));

        $this->template->load('admin', 'content' , 'pelanggan/det_p', $data);
    }

    public function addp()
    { 
        $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp_user', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email', 'trim|required');

        $this->form_validation->set_message('required', '*) Lengkapi Data Anda!');

        if ($this->form_validation->run() == FALSE)
        {    
            $data='';
            // echo "<pre>";
            // print_r($data);
            // echo "<pre>";
            // exit();
            $this->template->load('admin', 'content' , 'pelanggan/add_p',$data);
        }
        else
        {       
            $this->id = uniqid();
            $data['nama_user']      = $this->input->post('nama_user');
            $data['jk_user']        = $this->input->post('jk_user');
            $data['alamat_user']    = $this->input->post('alamat_user');
            $data['telp_user']      = $this->input->post('telp_user');
            $data['email_user']     = $this->input->post('email_user');
            $data['role_user']      = 'Game Master';

            $id_user = $this->Mpelanggan->insert_p($data);

            $config['upload_path']          = '../upload/foto_profile/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['file_name']            = $this->id.'-'.$id_user.'-'.$this->input->post('nama_user');
            // $config['encrypt_name']      = true;
            $config['overwrite']            = true;
            $config['max_size']             = 2048; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if (!empty($_FILES["foto_user"]["name"])) {
              if ($this->upload->do_upload('foto_user')) {
                $data1['foto_user'] = $this->upload->data('file_name');
                }
            } else {
              $data1['foto_user'] = $this->input->post('old_foto');
            }

            $this->Mpelanggan->update_user($data1, $id_user);
            $this->detp($this->encrypt->encode($id_user));
        }
    }

    public function updatep($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp_user', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email', 'trim|required');

        $this->form_validation->set_message('required', '*) Lengkapi Data Anda!');

        if ($this->form_validation->run() == FALSE)
        {    
            $data['edit']=$this->Mpelanggan->det_user($this->encrypt->decode($id_user));
            $data['id_user'] = $id_user;
            $this->template->load('admin', 'content' , 'pelanggan/update_p',$data);
        }
        else
        {       
            $this->id = uniqid();
            $data['nama_user']      = $this->input->post('nama_user');
            $data['jk_user']        = $this->input->post('jk_user');
            $data['alamat_user']    = $this->input->post('alamat_user');
            $data['telp_user']      = $this->input->post('telp_user');
            $data['email_user']     = $this->input->post('email_user');

            $config['upload_path']          = '../upload/foto_profile/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['file_name']            = $this->id.'-'.$this->encrypt->decode($id_user).'-'.$this->input->post('nama_user');
            // $config['encrypt_name']      = true;
            $config['overwrite']            = true;
            $config['max_size']             = 2048; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if (!empty($_FILES["foto_user"]["name"])) {
              if ($this->upload->do_upload('foto_user')) {
                $data['foto_user'] = $this->upload->data('file_name');
                }
            } else {
              $data['foto_user'] = $this->input->post('old_foto');
            }

            $this->Mpelanggan->update_user($data, $this->encrypt->decode($id_user));
            $this->detp($id_user);
        }
    }

    public function deletep($id_user)
    {
        $this->Mpelanggan->deleteUser_p($this->encrypt->decode($id_user));
        $this->index();
    }
    
        
}