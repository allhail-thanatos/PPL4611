<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clogin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
	}
 
	// Index login
	public function index() {
		// Fungsi Login
		$valid 		= $this->form_validation;
		$email_user = $this->input->post('email_user');
		$pass_user 	= $this->input->post('pass_user');
 		// echo "<pre>";
   //      print_r($email_user);
   //      echo "<pre>";
   //      exit();
		$valid->set_rules('email_user','Email','required');
		$valid->set_rules('pass_user','Password','required');
		$valid->set_message('required','Harap Isi %s! ');
		if($valid->run()) {
			$this->Simple_login->login($email_user,$pass_user);
		}
		// End fungsi login
		$data='';
		
		$this->load->view('layout/login',$data);
	}

	public function login() {
		// Fungsi Login
		$valid 		= $this->form_validation;
		$email_user = $this->input->post('email_user');
		$pass_user 	= $this->input->post('pass_user');
 		// echo "<pre>";
   //      print_r($email_user);
   //      echo "<pre>";
   //      exit();
		$valid->set_rules('email_user','Email','required');
		$valid->set_rules('pass_user','Password','required');
		$valid->set_message('required','Harap Isi %s! ');
		if($valid->run()) {
			$this->simple_login->login($email_user,$pass_user);
		}
		// End fungsi login
		$data='';
		
		$this->load->view('layout/login',$data);
	}

	public function logout() {
		$this->simple_login->logout();	
	}
		
}