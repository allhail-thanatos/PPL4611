<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class challenge extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('challengemodels');
	}
 
	// Index login
	public function index() {
		$data['gm']=$this->challengemodels->get_gm();
		$data['pelanggan']=$this->challengemodels->get_pelanggan();
		// 	echo "<pre>";
		//  print_r($data);
		//  echo "<pre>";
		//  exit();
		
		$this->load->view('challenge',$data);
	}
		
}
?>