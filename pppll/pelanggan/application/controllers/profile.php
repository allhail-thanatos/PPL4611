<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('profilemodels');
	}
 
	// Index login
	public function index() {
		$data['gm']=$this->profilemodels->get_gm();
		$data['pelanggan']=$this->profilemodels->get_pelanggan();
		// 	echo "<pre>";
		//  print_r($data);
		//  echo "<pre>";
		//  exit();
		
		$this->load->view('profile',$data);
	}

	public function update($id_user)
    {
        
		$this->id = uniqid();
		$data['nama_user']		= $this->input->post('nama_user');
		$data['alamat_user']	= $this->input->post('alamat_user');
		$data['telp_user']		= $this->input->post('telp_user');
		$data['email_user']		= $this->input->post('email_user');
		$data['pass_user']		= $this->input->post('pass_user');

		// $this->profilemodels->update_user($data, $id_user);

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
			$data['foto_user'] = $this->upload->data('file_name');
			$this->session->set_userdata('foto_user', $this->upload->data('file_name'));
			}
        } else {
          $data['foto_user'] = $this->input->post('old_foto');
          $this->session->set_userdata('foto_user', $this->input->post('old_foto'));
        }
  		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		// exit();
		$this->session->set_userdata('nama_user', $this->input->post('nama_user'));

        $this->profilemodels->update_user($data, $id_user);	
	
		$this->load->view('profile',$data);
        
    }
		
}
?>