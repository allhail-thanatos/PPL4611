<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilemodels extends CI_Model {

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

	function update_user($data, $id_user) 
	{ 
		$this->db->where('id_user',$id_user);
        $this->db->update('user', $data);
	}

			
}
?>