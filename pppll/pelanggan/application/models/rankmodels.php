<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankmodels extends CI_Model {


	function get_rank(){
		$sql = "SELECT  id_user, score FROM rank ORDER BY score DESC LIMIT 5";
		return $this->db->query($sql);
	}

	
	
			
}
?>