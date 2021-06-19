<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('M_home', 'home');
	}
	
	public function index() {
		$upn = $this->home->getUPN();
		$oxford = $this->home->getOxford();
		$data['students'] = array_merge($upn, $oxford);
		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}