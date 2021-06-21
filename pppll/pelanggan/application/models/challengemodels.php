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
			
}