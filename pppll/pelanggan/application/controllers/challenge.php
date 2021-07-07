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

	public function uploadbukti($id_user)
    {
        
		$this->id = uniqid();
		$data['id_jc']		= $this->input->post('id_jc');
		$data['id_user']	= $id_user;
		$data['status_per']		= "Belum Diverifikasi";
		$data['score_jc']		= $this->input->post('score_jc');
		

		// $this->profilemodels->update_user($data, $id_user);

		$config['upload_path']          = '../upload/foto_profile/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        //$config['file_name']            = $this->id.'-'.$id_user.'-'.$this->input->post('nama_user');
        // $config['encrypt_name']      = true;
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!empty($_FILES["bukti_per"]["name"])) {
          if ($this->upload->do_upload('bukti_per')) {
			$data['bukti_per'] = $this->upload->data('file_name');
			}
        } else {
          $data['bukti_per'] = '';
        }
  		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		// exit();
		//$this->session->set_userdata('nama_user', $this->input->post('nama_user'));

        $this->challengemodels->upload_bukti($data);	
	
		$this->load->view('home');
        
    }
	
}
?>