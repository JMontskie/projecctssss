<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Various_C extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('various_m');
	}

	//VIEWS
	public function view_incoming()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/incoming_var');
		$this->load->view('admin/footer');
	}//end of view_incoming

	public function view_outgoing(){
		$this->load->view('admin/header');
		$this->load->view('admin/outgoing_var');
		$this->load->view('admin/footer');
		
	}//end of view_outgoing

	//CREATE
	public function saveIncoming()
	{
		$data = $this->various_m->addIncoming();
		echo json_decode($data);
	}//end of saveIncoming

	public function saveOutgoing()
	{
		$data = $this->various_m->addOutgoing();
		echo json_decode($data);
	}

	//READ
	public function incomingData()
	{
		$data=$this->various_m->getIncoming();
		echo json_encode($data);
	}//end of incomingData

	public function outgoingData()
	{
		$data=$this->various_m->getOutgoing();
		echo json_encode($data);
	}//end of outgoingData


	//UPDATE
	public function updateIncoming()
	{
		$data=$this->various_m->editIncoming();
		echo json_encode($data);
	}//end of updateIncoming

	public function updateOutgoing()
	{
		$data=$this->various_m->editOutgoing();
		echo json_encode($data);
	}//end of uodateOutgoing

	//RECEIVE FILES
	public function receive_Incoming()
	{
		$data=$this->various_m->receiveIncoming();
		echo json_encode($data);
	}

	public function receive_Outgoing()
	{
		$data=$this->various_m->receiveOutgoing();
		echo json_encode($data);
	}

}//end of Controller
