<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class cverif extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mverif'); 
	} 
 
	public function index() {
		$data['query'] = $this->mverif->getverif();
        $data['page']     = 'cverif';
		
		$this->template->load('admin', 'content' , 'verif/list_verif',$data);
	}

	public function detverif($id_per)
    {
        $data['page']='cgamemaster';
        $data['detail'] = $this->mverif->det_verif($this->encrypt->decode($id_per));
        // echo "<pre>";
        // print_r($data);
        // echo "<pre>";
        // exit();

        $this->template->load('admin', 'content' , 'verif/det_verif', $data);
    }

    function verif($id_per)
    { 
        $this->mverif->verif($this->encrypt->decode($id_per));
        redirect("admin/cverif","refresh");       
    }

    function tolak($id_per)
    {
        $this->mverif->tolak($this->encrypt->decode($id_per));
        redirect("admin/cverif","refresh");       
    }
		
}