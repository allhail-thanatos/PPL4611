<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cprofile extends CI_Controller { 
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('mprofile');
		$this->load->library('encryption');
	}

	// Index login
	public function index($id_user) {
		$data['page']     = 'cprofile';

        $this->template->load('admin', 'content' , 'profile/det_profile', $data);
	}

	public function detprofile($id_user)
    {
        $data['detail'] = $this->mprofile->det_profile($this->encrypt->decode($id_user));
		$data['id_user'] = $id_user;
		$data['page']     = 'cprofile';
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		// exit();

        $this->template->load('admin', 'content' , 'profile/det_profile', $data);
    }

	public function updateprofile($id_user)
    {
        $this->id = uniqid();
        $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp_user', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email', 'trim|required');

        $this->form_validation->set_message('required', '*) Lengkapi Data Anda!');

        if ($this->form_validation->run() == FALSE)
        {    
    		$data['edit']=$this->mprofile->det_profile($this->encrypt->decode($id_user));
    		$data['id_user'] = $id_user;
    		$data['page']     = 'cprofile';

            // echo "<pre>";
            // print_r($data);
            // echo "<pre>";
            // exit();
            $this->template->load('admin', 'content' , 'profile/update_profile',$data);
        }
        else
        {       
            $data['nama_user']		= $this->input->post('nama_user');
			$data['jk_user']		= $this->input->post('jk_user');
			$data['alamat_user']	= $this->input->post('alamat_user');
			$data['telp_user']		= $this->input->post('telp_user');
			$data['email_user']		= $this->input->post('email_user');


			$config['upload_path']          = '../upload/foto_profile/';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$config['file_name']            = $this->id.'-'.$this->encrypt->decode($id_user).'-'.$this->input->post('nama_user');
			// $config['encrypt_name'] 		= true;
			$config['overwrite']            = true;
			$config['max_size']             = 2048; // 1MB
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$this->load->library('upload', $config);

			if (!empty($_FILES["foto_user"]["name"])) {
	          if ($this->upload->do_upload('foto_user')) {
				$data['foto_user'] = $this->upload->data('file_name');
				$this->session->set_userdata('foto_user', $this->upload->data('file_name'));
				}
	        } else {
	          $data['foto_user'] = $this->input->post('old_foto');
	          $this->session->set_userdata('foto_user', $this->input->post('old_foto'));
	        }
			$this->session->set_userdata('nama_user', $this->input->post('nama_user'));
			$this->session->set_userdata('email_user', $this->input->post('email_user'));
			// echo "<pre>";
			// print_r($data);
			// echo "<pre>";
			// exit();

            $this->mprofile->update_profile($data, $this->encrypt->decode($id_user));
        	$this->detprofile($id_user);
        }
    }
		
}