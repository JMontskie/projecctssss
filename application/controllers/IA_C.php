<?php  

class IA_C extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ia_m');
	}


	//VIEWS
	public function viewRegSupply()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/regular_supply');
		$this->load->view('admin/footer');
	}

	public function viewPettyCash()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/petty_cash');
		$this->load->view('admin/footer');
	}



	//CREATE
	public function createRegSupply()
	{
		$data = $this->ia_m->addRegSupply();
		echo json_decode($data);
	}

	public function createPettyCash()
	{
		$data = $this->ia_m->addPettyCash();
		echo json_decode($data);
	}



	//READ
	public function readRegSupply()
	{
		$data=$this->ia_m->getRegSupply();
		echo json_encode($data);
	}

	public function readPettyCash()
	{
		$data=$this->ia_m->getPettyCash();
		echo json_encode($data);
	}



	//UPDATE
	//DELETE
}//end of controller
?>