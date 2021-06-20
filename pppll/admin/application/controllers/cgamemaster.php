<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cgamemaster extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mgamemaster');
	}
 
	// Index login
	public function index() {
		$data['query'] = $this->Mgamemaster->getUser(); 
		
		$this->template->load('admin', 'content' , 'game_master/list_gm',$data);
	}

	public function detgm($id_user)
    {
        $data['detail'] = $this->Mgamemaster->det_user($id_user);

        $this->template->load('admin', 'content' , 'game_master/det_gm', $data);
    }

    public function addgm()
    { 
        $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp_user', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email', 'trim|required');
        $this->form_validation->set_rules('uname_user', 'Username', 'trim|required');

        $this->form_validation->set_message('required', '*) Lengkapi Data Anda!');

        if ($this->form_validation->run() == FALSE)
        {    
    		$data='';

            // echo "<pre>";
            // print_r($data);
            // echo "<pre>";
            // exit();
            $this->template->load('admin', 'content' , 'game_master/add_gm',$data);
        }
        else
        {       
            $data['nama_user']		= $this->input->post('nama_user');
			$data['jk_user']			= $this->input->post('jk_user');
			$data['alamat_user']		= $this->input->post('alamat_user');
			$data['telp_user']		= $this->input->post('telp_user');
			$data['email_user']		= $this->input->post('email_user');
			$data['uname_user']		= $this->input->post('uname_user');
            $data['role_user']      = 'Game Master';

			// echo "<pre>";
			// print_r($data);
			// echo "<pre>";
			// exit();

            $id_user = $this->Mgamemaster->insert_gm($data);
        	$this->detgm($id_user);
        }

    }

    public function updategm($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp_user', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email', 'trim|required');
        $this->form_validation->set_rules('uname_user', 'Username', 'trim|required');

        $this->form_validation->set_message('required', '*) Lengkapi Data Anda!');

        if ($this->form_validation->run() == FALSE)
        {    
    		$data['edit']=$this->Mgamemaster->det_user($id_user);

            // echo "<pre>";
            // print_r($data);
            // echo "<pre>";
            // exit();
            $this->template->load('admin', 'content' , 'game_master/update_gm',$data);
        }
        else
        {       
            $data['nama_user']		= $this->input->post('nama_user');
			$data['jk_user']			= $this->input->post('jk_user');
			$data['alamat_user']		= $this->input->post('alamat_user');
			$data['telp_user']		= $this->input->post('telp_user');
			$data['email_user']		= $this->input->post('email_user');
			$data['uname_user']		= $this->input->post('uname_user');

			// echo "<pre>";
			// print_r($data);
			// echo "<pre>";
			// exit();

            $this->Mgamemaster->update_gm($data, $id_user);
        	$this->detgm($id_user);
        }
    }

    public function deletegm($id_user)
    {
        $this->Mgamemaster->deleteUser_gm($id_user);
        $this->index();
    }
    
		
}