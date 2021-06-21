<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpelanggan extends CI_Model { 
 
	function getUser() // List User
	{ 
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_user','Pelanggan');
        $this->db->order_by('nama_user','ASC');
        $query = $this->db->get();

        return $query;
	}

	function insert_p($data)
    {
        $this->db->insert('user',$data);
        return $this->db->insert_id();
    }

	function det_user($id_user) 
	{ 
		$this->db->select('*'); 
        $this->db->from('user');

        $this->db->where('id_user',$id_user);
        
        $query = $this->db->get();
        return $query;
	}

	function update_user($data, $id_user) 
	{ 
		$this->db->where('id_user',$id_user);
        $this->db->update('user', $data);
	}

	function deleteUser_p($id_user)
    {
        $this->db->delete('user', array('id_user' => $id_user));
    }
			
}