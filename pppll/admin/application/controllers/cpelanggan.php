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
        $data['page']     = 'cpelanggan';
        
        $this->template->load('admin', 'content' , 'pelanggan/list_p',$data);
    }

    public function detp($id_user)
    {
        $data['page']     = 'cpelanggan';
        $data['detail'] = $this->Mpelanggan->det_user($this->encrypt->decode($id_user));
        $data['chl'] = $this->Mpelanggan->get_chl($this->encrypt->decode($id_user)); 
        $data['riwayat'] = $this->Mpelanggan->get_chl($this->encrypt->decode($id_user)); 
        // $data['riwayat'] = $this->Mpelanggan->get_riwayat($this->encrypt->decode($id_user)); 

        $this->template->load('admin', 'content' , 'pelanggan/det_p', $data);
    }

    public function addp()
    { 
        $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp_user', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email', 'trim|required');
        $this->form_validation->set_rules('pass_user', 'Password', 'trim|required');

        $this->form_validation->set_message('required', '*) Lengkapi Data Anda!');

        if ($this->form_validation->run() == FALSE)
        {    
            $data['page']     = 'cpelanggan';
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
            $data['pass_user']      = $this->input->post('pass_user');
            $data['role_user']      = 'Pelanggan';
            $data['status_user']    = 'Nonaktif';

            $id_user = $this->Mpelanggan->insert_p($data);

            $data2['id_user']   = $id_user;
            $data2['score']     = '0';

            $this->Mpelanggan->insert_rank($data2);

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
        $this->form_validation->set_rules('pass_user', 'Password', 'trim|required');

        $this->form_validation->set_message('required', '*) Lengkapi Data Anda!');

        if ($this->form_validation->run() == FALSE)
        {    
            $data['page']     = 'cpelanggan';
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
            $data['pass_user']     = $this->input->post('pass_user');

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
        redirect("admin/cpelanggan","refresh");
    }

    function aktif($id_user)
    { 
        // echo "<pre>";
        // print_r($this->encrypt->decode($id_user));
        // echo "<pre>";
        // exit();
        $this->Mpelanggan->aktifp($this->encrypt->decode($id_user));
        redirect("admin/cpelanggan","refresh");       
    }

    function nonaktif($id_user)
    {
        // echo "<pre>";
        // print_r($this->encrypt->decode($id_user));
        // echo "<pre>";
        // exit();
        $this->Mpelanggan->nonaktifp($this->encrypt->decode($id_user));
        redirect("admin/cpelanggan","refresh");       
    }
    
        
}