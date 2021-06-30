<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Challengemodels extends CI_Model {

	function get_gm()
	{
		$role = 'Pelanggan';
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_user !=',$role);
        $query = $this->db->get();
        
		return $query->num_rows();
	}

	function get_pelanggan()
	{
		$role = 'Game Master';
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_user !=',$role);
        $query = $this->db->get();
        
		return $query->num_rows();
	}
	function getjc() // List User
	{ 
		$this->db->select('*');
        $this->db->from('jenis_challenge');
        $this->db->order_by('nama_jc','ASC');
        $query = $this->db->get();

        return $query;
	}

	function det_jc($id_jc) 
	{ 
		$this->db->select('*'); 
        $this->db->from('jenis_challenge');

        $this->db->where('id_jc',$id_jc);
        
        $query = $this->db->get();
        return $query;
	}
			
}