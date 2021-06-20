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

	public function insertUPN($data) {
		return $this->db->insert('tb_students', $data);
	}

	public function insertOxford($data) {
		$this->db_oxford = $this->load->database('oxford', TRUE);
		return $this->db_oxford->insert('tb_students', $data);
	}

	public function deleteUPN($id) {
		return $this->db->delete('tb_students', ['nim' => $id]);
	}

	public function deleteOxford($id) {
		$this->db_oxford = $this->load->database('oxford', TRUE);
		return $this->db_oxford->delete('tb_students', ['nim' => $id]);
	}

	public function updateUPN($id, $data) {
		return $this->db->update('tb_students', $data, ['nim' => $id]);
	}

	public function updateOxford($id, $data) {
		$this->db_oxford = $this->load->database('oxford', TRUE);
		return $this->db_oxford->update('tb_students', $data, ['nim' => $id]);
	}
}

?>