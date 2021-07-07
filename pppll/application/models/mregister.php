<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mregister extends CI_Model {
    public function register( $data)
    {
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }   
    function update_user($data, $id_user) 
	{ 
		$this->db->where('id_user',$id_user);
        $this->db->update('user', $data);
	}

    function insert_rank($data){
        $this->db->insert('rank', $data);
    }
}
