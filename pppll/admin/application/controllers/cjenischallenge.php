<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cjenischallenge extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mjenischallenge');
	}
 
	// Index login
	public function index() {
		$data['query'] = $this->mjenischallenge->getjc();
		
		$this->template->load('admin', 'content' , 'jenis_challenge/list_jc',$data);
	}

    public function detjc($id_jc)
    {
        $data['detail'] = $this->mjenischallenge->det_jc($id_jc);

        $this->template->load('admin', 'content' , 'jenis_challenge/det_jc', $data);
    }

	public function addjc()
    { 
        $this->form_validation->set_rules('nama_jc', 'Nama', 'trim|required');
        $this->form_validation->set_rules('desc_jc', 'Deskripsi', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {    
    		$data			= '';

            // echo "<pre>";
            // print_r($data);
            // echo "<pre>";
            // exit();
            $this->template->load('admin', 'content' , 'jenis_challenge/add_jc',$data);
        }
        else
        {       
            $data['nama_jc']		= $this->input->post('nama_jc');
            $data['desc_jc']        = $this->input->post('desc_jc');

			// echo "<pre>";
			// print_r($data);
			// echo "<pre>";
			// exit();

            $this->mjenischallenge->insert_jc($data);
        	$this->index();
        }

    }

	public function updatejc($id_jc)
    { 
        $this->form_validation->set_rules('nama_jc', 'Nama', 'trim|required');
        $this->form_validation->set_rules('desc_jc', 'Deskripsi', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {    
    		$data['edit']			= $this->mjenischallenge->det_jc($id_jc);

            // echo "<pre>";
            // print_r($data);
            // echo "<pre>";
            // exit();
            $this->template->load('admin', 'content' , 'jenis_challenge/update_jc',$data);
        }
        else
        {       
            $data['nama_jc']		= $this->input->post('nama_jc');
            $data['desc_jc']        = $this->input->post('desc_jc');

			// echo "<pre>";
			// print_r($data);
			// echo "<pre>";
			// exit();

            $this->mjenischallenge->update_jc($data, $id_jc);
        	$this->index();
        }

    }

    public function deletejc($id_jc)
    {
        $this->mjenischallenge->deletejc($id_jc);
        $this->index();
    }
		
}