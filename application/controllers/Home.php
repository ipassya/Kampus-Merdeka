<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('M_home', 'home');
		$this->db_oxford = $this->load->database('oxford', TRUE);
	}
	
	public function index() {
		$upn = $this->home->get();
		$oxford = $this->db_oxford->query('select * from tb_students')->result_array();
		$data['students'] = array_merge($upn, $oxford);
		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}