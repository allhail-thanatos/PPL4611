<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('homemodels');
	}
 
	// Index login
	public function index() {
		$data['gm']=$this->homemodels->get_gm();
		$data['pelanggan']=$this->homemodels->get_pelanggan();
		// 	echo "<pre>";
		//  print_r($data);
		//  echo "<pre>";
		//  exit();
		
		$this->load->view('home',$data);
	}
		
}
?>