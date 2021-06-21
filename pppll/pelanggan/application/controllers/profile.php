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
		
}
?>