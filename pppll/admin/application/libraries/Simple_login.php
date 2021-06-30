<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Simple_login {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() { 
		$this->CI =& get_instance();
	}
	// Fungsi login
	public function login($email_user, $pass_user) {
		$admin = $this->CI->db->get_where('user',array('email_user'=>$email_user,'pass_user' => $pass_user, 'role_user'=>'Game Master' , 'status_user'=> 'Aktif'));
		$query = $this->CI->db->get_where('user',array('email_user'=>$email_user));
		$user =$this->CI->db->get_where('user',array('email_user'=>$email_user,'pass_user' => $pass_user, 'role_user'=>'Pelanggan' , 'status_user'=> 'Aktif'));
		// $admin2 = $admin->result();
		// echo "<pre>";
  //       print_r($admin2);
  //       echo "<pre>";
  //       exit();
		if($admin->num_rows() == 1 )
		{
			$row 	= $this->CI->db->query('SELECT * FROM user where email_user = "'.$email_user.'" AND pass_user="'.$pass_user.'" ');
			$id 	= $row->row()->id_user;
			$nama 	= $row->row()->nama_user;
			$role 	= $row->row()->role_user;
			$foto 	= $row->row()->foto_user;
			$this->CI->session->set_userdata('email_user', $email_user);
			$this->CI->session->set_userdata('nama_user', $nama);
			$this->CI->session->set_userdata('role_user', $role);
			$this->CI->session->set_userdata('foto_user', $foto);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id_user', $id);
			
			redirect(base_url('/admin')); 
		}
		else if($user->num_rows()==1)
		{
			$row 	= $this->CI->db->query('SELECT * FROM user where email_user = "'.$email_user.'" AND pass_user="'.$pass_user.'" ');
			$id 	= $row->row()->id_user;
			$nama 	= $row->row()->nama_user;
			$role 	= $row->row()->role_user;
			$password= $row->row()->password_user;
			$alamat_user=$row->row()->alamat_user;
			$jk_user=$row->row()->jk_user;
			$this->CI->session->set_userdata('email_user', $email_user);
			$this->CI->session->set_userdata('nama_user', $nama);
			$this->CI->session->set_userdata('role_user', $role);
			$this->CI->session->set_userdata('password_user', $password);
			$this->CI->session->set_userdata('jk_user', $jk_user);
			$this->CI->session->set_userdata('alamat_user', $alamat_user);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id_user', $id);
			redirect(base_url('/pelanggan')); 
		}
		else
			if($query->num_rows() < 1 ) {
			$this->CI->session->set_flashdata('sukses','User Belum Terdaftar!');
			redirect(base_url('/index.php/clogin'));			
		}
		else
			if($query->row()->pass_user != $pass_user) {

			$this->CI->session->set_flashdata('sukses','pass_user Salah!');
			redirect(base_url('/index.php/clogin'));
		}
		 else
			if($query->row()->status != 'Aktif' ) {

			$this->CI->session->set_flashdata('sukses','Akun Anda Belum Aktif!');
			redirect(base_url('/index.php/clogin'));
		}
		return false;
	}

	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('role_user') != 'Game Master') {
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			redirect(base_url('index.php/clogin'));
		}

	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('idc_user');
		$this->CI->session->unset_userdata('nama_user');
		$this->CI->session->unset_userdata('jk_user');
		$this->CI->session->unset_userdata('alamat_user');
		$this->CI->session->unset_userdata('telp_user');
		$this->CI->session->unset_userdata('email_user');
		$this->CI->session->unset_userdata('uname_user');
		$this->CI->session->unset_userdata('pass_user');
		$this->CI->session->unset_userdata('foto_user');
		$this->CI->session->unset_userdata('role_user');
		redirect(base_url());
	}
}