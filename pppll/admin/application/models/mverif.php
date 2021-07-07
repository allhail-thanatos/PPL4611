<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mverif extends CI_Model {

	function getverif() 
	{ 
		$this->db->select('*');
        $this->db->from('perhitungan');
        $this->db->join('user','user.id_user=perhitungan.id_user');
        $this->db->join('jenis_challenge','jenis_challenge.id_jc=perhitungan.id_jc');
        $this->db->where('status_per =','Belum Diverifikasi');
        $this->db->order_by('tgl_submit_per','ASC'); 
        $query = $this->db->get();

        return $query;
	}

	function det_verif($id_per) 
	{ 
		$this->db->select('*'); 
        $this->db->from('perhitungan');
        $this->db->join('user','perhitungan.id_user=user.id_user');
        $this->db->join('jenis_challenge','jenis_challenge.id_jc=perhitungan.id_jc');

        $this->db->where('id_per',$id_per);
        
        $query = $this->db->get();
        return $query;
	}

	function verif($id_per) 
    {
        $status['status_per']='Diverifikasi';
        $this->db->where('id_per',$id_per);
        $this->db->update('perhitungan', $status);
    }

    function tolak($id_per)
    {
        $status['status_per']='Ditolak';
        $this->db->where('id_per',$id_per);
        $this->db->update('perhitungan', $status);
    }
			
}