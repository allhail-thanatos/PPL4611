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
        $data['page']='cgamemaster'; 
		
		$this->template->load('admin', 'content' , 'game_master/list_gm',$data);
	}

	public function detgm($id_user)
    {
        $data['page']='cgamemaster';
        $data['detail'] = $this->Mgamemaster->det_user($this->encrypt->decode($id_user));

        $this->template->load('admin', 'content' , 'game_master/det_gm', $data);
    }

    public function addgm()
    { 
        $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp_user', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email', 'trim|required');
        $this->form_validation->set_rules('pass_user', 'Password', 'trim|required');

        $this->form_validation->set_message('required', '*) Lengkapi Data Anda!');

        if ($this->form_validation->run() == FALSE)
        {    
    		$data['page']='cgamemaster';

            // echo "<pre>";
            // print_r($data);
            // echo "<pre>";
            // exit();
            $this->template->load('admin', 'content' , 'game_master/add_gm',$data);
        }
        else
        {       
            $this->id = uniqid();
            $data['nama_user']		= $this->input->post('nama_user');
			$data['jk_user']		= $this->input->post('jk_user');
			$data['alamat_user']	= $this->input->post('alamat_user');
			$data['telp_user']		= $this->input->post('telp_user');
            $data['email_user']     = $this->input->post('email_user');
			$data['pass_user']		= $this->input->post('pass_user');
            $data['role_user']      = 'Game Master';

            $id_user = $this->Mgamemaster->insert_gm($data);

            $config['upload_path']          = '../upload/foto_profile/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['file_name']            = $this->id.'-'.$id_user.'-'.$this->input->post('nama_user');
            // $config['encrypt_name']      = true;
            $config['overwrite']            = true;
            $config['max_size']             = 2048; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if (!empty($_FILES["foto_user"]["name"])) {
              if ($this->upload->do_upload('foto_user')) {
                $data1['foto_user'] = $this->upload->data('file_name');
                }
            } else {
              $data1['foto_user'] = $this->input->post('old_foto');
            }

            $this->Mgamemaster->update_gm($data1, $id_user);
        	$this->detgm($this->encrypt->encode($id_user));
        }

    }

    public function updategm($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp_user', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email', 'trim|required');
        $this->form_validation->set_rules('pass_user', 'Password', 'trim|required');

        $this->form_validation->set_message('required', '*) Lengkapi Data Anda!');

        if ($this->form_validation->run() == FALSE)
        {    
    		$data['page']='cgamemaster';
            $data['edit']=$this->Mgamemaster->det_user($this->encrypt->decode($id_user));
            $data['id_user'] = $id_user;
            $this->template->load('admin', 'content' , 'game_master/update_gm',$data);
        }
        else
        {       
            $this->id = uniqid();
            $data['nama_user']		= $this->input->post('nama_user');
			$data['jk_user']		= $this->input->post('jk_user');
			$data['alamat_user']	= $this->input->post('alamat_user');
			$data['telp_user']		= $this->input->post('telp_user');
            $data['email_user']     = $this->input->post('email_user');
			$data['pass_user']		= $this->input->post('pass_user');

            $config['upload_path']          = '../upload/foto_profile/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['file_name']            = $this->id.'-'.$this->encrypt->decode($id_user).'-'.$this->input->post('nama_user');
            // $config['encrypt_name']      = true;
            $config['overwrite']            = true;
            $config['max_size']             = 2048; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if (!empty($_FILES["foto_user"]["name"])) {
              if ($this->upload->do_upload('foto_user')) {
                $data['foto_user'] = $this->upload->data('file_name');
                }
            } else {
              $data['foto_user'] = $this->input->post('old_foto');
            }

            $this->Mgamemaster->update_gm($data, $this->encrypt->decode($id_user));
        	$this->detgm($id_user);
        }
    }

    public function deletegm($id_user)
    {
        $this->Mgamemaster->deleteUser_gm($this->encrypt->decode($id_user));
        redirect("admin/cgamemaster","refresh");
    }

    function aktif($id_user)
    { 
        // echo "<pre>";
        // print_r($this->encrypt->decode($id_user));
        // echo "<pre>";
        // exit();
        $this->Mgamemaster->aktifgm($this->encrypt->decode($id_user));
        redirect("admin/cgamemaster","refresh");       
    }

    function nonaktif($id_user)
    {
        // echo "<pre>";
        // print_r($this->encrypt->decode($id_user));
        // echo "<pre>";
        // exit();
        $this->Mgamemaster->nonaktifgm($this->encrypt->decode($id_user));
        redirect("admin/cgamemaster","refresh");       
    }
    
		
}