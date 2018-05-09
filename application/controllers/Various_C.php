<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Various_C extends CI_Controller{
	public function__construct(){
		parent::__construct();
		$this->load->model('various_m');
		$this->load->library('form_validation');
	}

	// public function index(){
	// 	$data = array('' => , );
	// }

	public function view_incoming(){
		$this->load->view('header');
		$this->load->view('incoming_var');
		$this->load->view('footer');
	}

	public function view_outgoing(){
		$this->load->view('header');
		$this->load->view('outgoing_var');
		$this->load->view('footer');
	}

	// public function fetchVarData(){
	// 	$result = array('data' => array());

	// 	$data = $this->various_m->get_view_
	// }
}//end of Controller