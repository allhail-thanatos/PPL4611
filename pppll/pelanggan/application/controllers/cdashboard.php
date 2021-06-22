<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cdashboard extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('mdashboard');
	}
 
	// Index login
	public function index() {
		$data['gm']=$this->mdashboard->get_gm();
		$data['pelanggan']=$this->mdashboard->get_pelanggan();
		// 	echo "<pre>";
		//  print_r($data);
		//  echo "<pre>";
		//  exit();
		
		$this->template->load('pelanggan', 'content' , 'home',$data);
	}
		
}