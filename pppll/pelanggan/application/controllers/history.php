<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('historymodels');
	}
 
	// Index login
	public function index() {
		$data['gm']=$this->historymodels->get_gm();
		$data['pelanggan']=$this->historymodels->get_pelanggan();
		// 	echo "<pre>";
		//  print_r($data);
		//  echo "<pre>";
		//  exit();
		
		$this->load->view('history',$data);
	}
		
}
?>