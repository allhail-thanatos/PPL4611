<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mranking extends CI_Model {

	function getrank() 
	{ 
		$this->db->select('*');
        $this->db->from('rank');
        $this->db->join('user','user.id_user=rank.id_user');
        $this->db->order_by('score','DESC');
        // $this->db->from('user');
        // $this->db->join('perhitungan','perhitungan.id_user=user.id_user');
        // $this->db->join('rank','rank.id_user=user.id_user');
        // $this->db->join('user','user.id_user=rank.id_user');
        // $this->db->where('id_user',$id);
        // $this->db->order_by('tgl_submit_per','ASC');
         
        $query = $this->db->get();

        return $query;
	}

	function get_chl($id_user) 
	{ 
		$this->db->select('*'); 
        $this->db->from('perhitungan');
        $this->db->join('jenis_challenge','jenis_challenge.id_jc=perhitungan.id_jc');

        $this->db->where('id_user',$id_user);
        
        $query = $this->db->get();
        return $query;
	}

	function get_jml($id_user) 
	{ 
		$this->db->select('*'); 
        $this->db->from('perhitungan');

        $this->db->where('id_user',$id_user);
        $this->db->where('status_per','Diverifikasi');
        
        $query = $this->db->get();
        return $query;
	}

	function det_user($id_user) 
	{ 
		$this->db->select('*'); 
        $this->db->from('user');
        $this->db->join('rank','rank.id_user=user.id_user');

        $this->db->where('user.id_user',$id_user);
        
        $query = $this->db->get();
        return $query;
	}
			
}