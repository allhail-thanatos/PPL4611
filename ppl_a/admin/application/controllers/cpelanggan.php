<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cpelanggan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mpelanggan');
	} 
 
	public function index() { 
		$data['query'] = $this->Mpelanggan->getUser(); 
		
		$this->template->load('admin', 'content' , 'pelanggan/list_p',$data);
	}

	public function detp($id_user)
    {
        $data['detail'] = $this->Mpelanggan->det_user($id_user);

        $this->template->load('admin', 'content' , 'pelanggan/det_p', $data);
    }

    public function addp()
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
            $this->template->load('admin', 'content' , 'pelanggan/add_p',$data);
        }
        else
        {       
            $data['nama_user']		= $this->input->post('nama_user');
			$data['jk_user']			= $this->input->post('jk_user');
			$data['alamat_user']		= $this->input->post('alamat_user');
			$data['telp_user']		= $this->input->post('telp_user');
			$data['email_user']		= $this->input->post('email_user');
			$data['uname_user']		= $this->input->post('uname_user');
            $data['role_user']      = 'Pelanggan';

			// echo "<pre>";
			// print_r($data);
			// echo "<pre>";
			// exit();

            $id_user = $this->Mpelanggan->insert_p($data);
        	$this->detp($id_user);
        }

    }

    public function updatep($id_user)
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
    		$data['edit']=$this->Mpelanggan->det_user($id_user);

            // echo "<pre>";
            // print_r($data);
            // echo "<pre>";
            // exit();
            $this->template->load('admin', 'content' , 'pelanggan/update_p',$data);
        }
        else
        {       
            $data['nama_user']		= $this->input->post('nama_user');
			$data['jk_user']		= $this->input->post('jk_user');
			$data['alamat_user']	= $this->input->post('alamat_user');
			$data['telp_user']		= $this->input->post('telp_user');
			$data['email_user']		= $this->input->post('email_user');
			$data['uname_user']		= $this->input->post('uname_user');
			

			// echo "<pre>";
			// print_r($data);
			// echo "<pre>";
			// exit();

            $this->Mpelanggan->update_user($data, $id_user);
        	$this->detp($id_user);
        }

    }

    public function deletep($id_user)
    {
        $this->Mpelanggan->deleteUser_p($id_user);
        $this->index();
    }
		
}