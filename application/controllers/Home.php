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
		$computerScience = 0;
		$informationSystems = 0;
		$computerNetwork = 0;
		$totalStudents = 0;

		for ($i=0; $i < count($upn); $i++) { 
			if ($upn[$i]['major'] == 'Computer Science') {
				$computerScience++;
			} else if ($upn[$i]['major'] == 'Information Systems') {
				$informationSystems++;
			} else if ($upn[$i]['major'] == 'Computer Network') {
				$computerNetwork++;
			} 
		}

		for ($i=0; $i < count($oxford); $i++) { 
			if ($oxford[$i]['major'] == 'Computer Science') {
				$computerScience++;
			} else if ($oxford[$i]['major'] == 'Information Systems') {
				$informationSystems++;
			} else if ($oxford[$i]['major'] == 'Computer Network') {
				$computerNetwork++;
			} 
		}

		$totalStudents = $computerScience + $informationSystems + $computerNetwork;

		$data['students'] = array_merge($upn, $oxford);
		$data['count'] = array(
							'computerScience' => $computerScience,
							'informationSystems' => $informationSystems,
							'computerNetwork' => $computerNetwork,
							'totalStudents' => $totalStudents
						);
		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}

	public function addUPN() {
		$nim = $this->input->post('nim');
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$major = $this->input->post('major');
		$university = "UPN";

		$data = array(
			'nim' => $nim,
			'email' => $email,
			'name' => $name,
			'major' => $major,
			'university' => $university
			);

		$this->home->insertUPN($data);
		redirect('home');
	}

	public function addOxford() {
		$nim = $this->input->post('nim');
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$major = $this->input->post('major');
		$university = "Oxford";

		$data = array(
			'nim' => $nim,
			'email' => $email,
			'name' => $name,
			'major' => $major,
			'university' => $university
			);

		$this->home->insertOxford($data);
		redirect('home');
	}

	public function deleteUPN($id) {
		if (!$id) {
			redirect('home');
		} else {
			$this->home->deleteUPN($id);
			redirect('home');
		}
	}

	public function deleteOxford($id) {
		if (!$id) {
			redirect('home');
		} else {
			$this->home->deleteOxford($id);
			redirect('home');
		}
	}

	public function updateUPN() {
		$id = $this->input->post('id-nim');
		$nim = $this->input->post('nim');
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$major = $this->input->post('major');
		$university = "UPN";

		$data = array(
			'nim' => $nim,
			'email' => $email,
			'name' => $name,
			'major' => $major,
			'university' => $university
			);

		$this->home->updateUPN($id, $data);
		redirect('home');
	}

	public function updateOxford() {
		$id = $this->input->post('id-nim');
		$nim = $this->input->post('nim');
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$major = $this->input->post('major');
		$university = "Oxford";

		$data = array(
			'nim' => $nim,
			'email' => $email,
			'name' => $name,
			'major' => $major,
			'university' => $university
			);

		$this->home->updateOxford($id, $data);
		redirect('home');
	}
}