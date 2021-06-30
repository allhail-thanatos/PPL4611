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
		$data['query'] = $this->challengemodels->getjc();
		// 	echo "<pre>";
		//  print_r($data);
		//  echo "<pre>";
		//  exit();
		
		$this->load->view('challenge',$data);
	}

	public function detjc($id_jc)
    {
        $data['detail'] = $this->challengemodels->det_jc($id_jc);
        $this->load->view('detailchallenge',$data);
    }


	function getjc() // List User
	{ 
		$this->db->select('*');
        $this->db->from('jenis_challenge');
        $this->db->order_by('nama_jc','ASC');
        $query = $this->db->get();

        return $query;
	}
	
}
?>