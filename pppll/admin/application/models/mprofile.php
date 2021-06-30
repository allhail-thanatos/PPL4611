<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofile extends CI_Model {

    function det_profile($id_user) 
    { 
        $this->db->select('*'); 
        $this->db->from('user');

        $this->db->where('id_user',$id_user);
        
        $query = $this->db->get();
        return $query;
    }

    function update_profile($data, $id_user) 
    { 
        $this->db->where('id_user',$id_user);
        $this->db->update('user', $data);
    }
            
}