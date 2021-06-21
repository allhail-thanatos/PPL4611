<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rank extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('rankmodels');
	}
 
	// Index login
	public function index() {
		$data['gm']=$this->rankmodels->get_gm();
		$data['pelanggan']=$this->rankmodels->get_pelanggan();
		// 	echo "<pre>";
		//  print_r($data);
		//  echo "<pre>";
		//  exit();
		
		$this->load->view('rank',$data);
	}
		
}
?>