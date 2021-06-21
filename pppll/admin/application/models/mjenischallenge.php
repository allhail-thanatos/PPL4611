<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjenischallenge extends CI_Model {

 	function getjc() // List User
	{ 
		$this->db->select('*');
        $this->db->from('jenis_challenge');
        $this->db->order_by('nama_jc','ASC');
        $query = $this->db->get();

        return $query;
	}

	function insert_jc($data)
    {
        $this->db->insert('jenis_challenge',$data);
    }

    function det_jc($id_jc) 
	{ 
		$this->db->select('*'); 
        $this->db->from('jenis_challenge');

        $this->db->where('id_jc',$id_jc);
        
        $query = $this->db->get();
        return $query;
	}

	function update_jc($data, $id_jc) 
	{ 
		$this->db->where('id_jc',$id_jc);
        $this->db->update('jenis_challenge', $data);
	}

 	function deletejc($id_jc)
    {
        $this->db->delete('jenis_challenge', array('id_jc' => $id_jc));
    }
			
}