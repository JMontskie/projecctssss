<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ord_C extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ord_m');
	}

	//VIEW

	public function viewIncomingOrd()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/incoming_ord');
		$this->load->view('admin/footer');
	}
	public function viewOutgoingOrd()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/outgoing_ord');
		$this->load->view('admin/footer');
	}



	//CREATE

	public function createIncomingOrd()
	{
		$data = $this->ord_m->addIncomingOrd();
		echo json_decode($data);
	}

	public function createOutgoingOrd()
	{
		$data = $this->ord_m->addOutgoingOrd();
		echo json_decode($data);
	}
	


	//READ
	public function readIncomingOrd()
	{
		$data=$this->ord_m->getIncomingOrd();
		echo json_encode($data);	
	}
	public function readOutgoingOrd()
	{
		$data=$this->ord_m->getOutgoingOrd();
		echo json_encode($data);	
	}



	//UPDATE
	public function updateIncomingOrd()
	{
		$data=$this->ord_m->updateIncomingOrd();
		echo json_encode($data);
	}

	public function updateOutgoingOrd()
	{
		$data=$this->ord_m->updateOutgoingOrd();
		echo json_encode($data);
	}


	//DELETE
	//RECEIVE
	public function receiveIncomingOrd()
	{
		$data=$this->ord_m->receiveIncomingOrd();
		echo json_encode($data);
	}

	public function receiveOutgoingOrd()
	{
		$data=$this->ord_m->receiveOutgoingOrd();
		echo json_encode($data);
	}

}
?>