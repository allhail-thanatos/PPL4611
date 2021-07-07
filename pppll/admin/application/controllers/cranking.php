<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cranking extends CI_Controller {
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mranking');
	}
 
	public function index() {
		// $data1 = $this->mranking->getuser(); 
		// $data['query1'] = $this->mranking->getuser(); 
		$data['query'] = $this->mranking->getrank(); 
		$data['page']     = 'cranking';
		// echo "<pre>";
  //       print_r($data);
  //       echo "<pre>";
  //       exit();
		$this->template->load('admin', 'content' , 'ranking/list_ranking',$data);
	}

	public function detranking($id_user)
    {
        $data['page']='cranking';
        $data['detail'] = $this->mranking->det_user($this->encrypt->decode($id_user));
        $data['chl'] = $this->mranking->get_chl($this->encrypt->decode($id_user));
        $data['jml'] = $this->mranking->get_jml($this->encrypt->decode($id_user))->num_rows();
        $data['riwayat'] = $this->mranking->get_chl($this->encrypt->decode($id_user));

        $this->template->load('admin', 'content' , 'ranking/det_ranking', $data);
    }
		
}