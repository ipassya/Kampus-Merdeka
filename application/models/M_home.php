<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model {
	public function getUPN() {
		return $this->db->get('tb_students')->result_array();
	}

	public function getOxford() {
		$this->db_oxford = $this->load->database('oxford', TRUE);
		return $this->db_oxford->get('tb_students')->result_array();
	}

}

?>