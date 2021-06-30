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
		$data['ranking'] = $this->rankmodels->get_rank();
		
		$this->load->view('rank', $data);
		//$this->template->load('pelanggan', 'content' , 'rank',$data);
	}

		
}
?>