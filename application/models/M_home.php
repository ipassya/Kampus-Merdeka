<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model {
	public function get() {
		return $this->db->get('tb_students')->result_array();
	}

}

?>