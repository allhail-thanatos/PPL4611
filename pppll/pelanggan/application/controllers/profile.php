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
		$data['role_user']      = 'Pelanggan';
		$data['status_user']    = 'Aktif';

		

		// echo "<pre>";
		// print_r($data);
//          print_r($data1);
		// echo "<pre>";
		// exit();

		$this->profilemodels->update_user($data, $id_user);
		$this->load->view('profile',$data);
        
    }
		
}
?>