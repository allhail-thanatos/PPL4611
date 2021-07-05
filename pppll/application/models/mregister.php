<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mregister extends CI_Model {
    public function register( $data)
    {
        return $this->db->insert('user', $data);
    }   
    function update_user($data, $id_user) 
	{ 
		$this->db->where('id_user',$id_user);
        $this->db->update('user', $data);
	}
}
