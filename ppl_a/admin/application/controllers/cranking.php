<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cranking extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mranking');
	}
 
	public function index() {
		$data='';
		
		$this->template->load('admin', 'content' , 'ranking/list_ranking',$data);
	}

	public function detranking()
    {
        $data = '';

        $this->template->load('admin', 'content' , 'ranking/det_ranking', $data);
    }
		
}