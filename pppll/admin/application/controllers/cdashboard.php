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
		$data['gm_a']=$this->mdashboard->get_gm_a();
		$data['gm_n']=$this->mdashboard->get_gm_n();
		$data['pelanggan']=$this->mdashboard->get_pelanggan();
		$data['pelanggan_a']=$this->mdashboard->get_pelanggan_a();
		$data['pelanggan_n']=$this->mdashboard->get_pelanggan_n();
		$data['verif']=$this->mdashboard->get_verif();
		$data['page']='cdashboard';
		// 	echo "<pre>";
		//  print_r($data); 
		//  echo "<pre>";
		//  exit();
		
		$this->template->load('admin', 'content' , 'dashboard/data',$data);
	}
		
}