<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cverif extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mverif');
	} 
 
	public function index() {
		$data='';
		
		$this->template->load('admin', 'content' , 'verif/list_verif',$data);
	}

	public function detverif()
    {
        $data = '';

        $this->template->load('admin', 'content' , 'verif/det_verif', $data);
    }
		
}