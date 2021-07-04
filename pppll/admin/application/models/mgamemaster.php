<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgamemaster extends CI_Model {

	function getUser() // List User
	{ 
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_user','Game Master');
        $this->db->order_by('nama_user','ASC');
        $query = $this->db->get();

        return $query;
	}

	function insert_gm($data)
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

	function update_gm($data, $id_user) 
	{ 
		$this->db->where('id_user',$id_user);
        $this->db->update('user', $data);
	}

	function deleteUser_gm($id_user)
    {
        $this->db->delete('user', array('id_user' => $id_user));
    }

    function aktifgm($id_user) 
    {
        $status['status_user']='Aktif';
        $this->db->where('id_user',$id_user);
        $this->db->update('user', $status);
    }

    function nonaktifgm($id_user)
    {
        $status['status_user']='Nonaktif';
        $this->db->where('id_user',$id_user);
        $this->db->update('user', $status);
    }
			
}