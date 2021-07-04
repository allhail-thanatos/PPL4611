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
		
		$this->template->load('admin', 'content' , 'verif/list_verif',$data);
	}

	public function detverif()
    {
        $data = '';

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