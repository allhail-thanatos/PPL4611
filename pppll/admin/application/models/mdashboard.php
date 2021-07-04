<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdashboard extends CI_Model {

	function get_gm()
	{
		$role = 'Pelanggan';
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_user !=',$role);
        $query = $this->db->get();
        
		return $query->num_rows();
	}

	function get_gm_a()
	{
		$role = 'Pelanggan';
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_user !=',$role);
        $this->db->where('status_user =','Aktif');
        $query = $this->db->get();
        
		return $query->num_rows();
	}

	function get_gm_n()
	{
		$role = 'Pelanggan';
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_user !=',$role);
        $this->db->where('status_user =','Nonaktif');
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

	function get_pelanggan_a()
	{
		$role = 'Game Master';
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_user !=',$role);
        $this->db->where('status_user =','Aktif');
        $query = $this->db->get();
        
		return $query->num_rows();
	}

	function get_pelanggan_n()
	{
		$role = 'Game Master';
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_user !=',$role);
        $this->db->where('status_user =','Nonaktif');
        $query = $this->db->get();
        
		return $query->num_rows();
	}

	function get_verif()
	{
		$this->db->select('*');
        $this->db->from('perhitungan');
        $this->db->where('status_per =', 'Belum Diverifikasi');
        $query = $this->db->get();
        
		return $query->num_rows();
	}
			
}