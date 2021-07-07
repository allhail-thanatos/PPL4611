<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cregister extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mregister');
	}
 
	// Index login
	public function index() {
       
        $this->load->view('layout/regis');

	}

	public function register() {
		$this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
        $this->form_validation->set_rules('pass_user', 'Password', 'trim|required');
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
            $this->load->view('layout/regis',$data);
        }
        else
        {       
            $this->id = uniqid();
            $data['nama_user']		= $this->input->post('nama_user');
            $data['pass_user']		= $this->input->post('pass_user');
			$data['jk_user']		= $this->input->post('jk_user');
			$data['alamat_user']	= $this->input->post('alamat_user');
			$data['telp_user']		= $this->input->post('telp_user');
			$data['email_user']		= $this->input->post('email_user');
            $data['role_user']      = 'Pelanggan';
            $data['status_user']    = 'Aktif';

            $id_user = $this->mregister->register($data);

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

            $data2['id_user'] = $id_user;
            $data2['score'] = 0;

			// echo "<pre>";
			// print_r($data);
   //          print_r($data1);
			// echo "<pre>";
			// exit();

            $this->mregister->insert_rank($data2);
            $this->mregister->update_user($data1, $id_user);
            $this->load->view('layout/login',$data);
        }

    }	
}