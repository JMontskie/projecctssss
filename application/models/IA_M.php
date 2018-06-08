<?php  

class IA_M extends CI_Model
{
	//VIEWS
	//CREATE
	public function addRegSupply()//adds data to the database, uses array to store items for adding.
	{	
		$num = $this->db->count_all_results('regsupply');
		$val = sprintf("%'.03d", $num + 1);
		$control = date('Ymd').$val;

		$data = array(
			'regSupDate' => $this->input->post('regSupDate'),
			'regSupControl' => $control,
			'regSupRecipient' => $this->input->post('regSupRecipient'),
			'regSupQuantity' => $this->input->post('regSupQuantity'),
			'regSupDescript' => $this->input->post('regSupDescript'),
			'regsupRecevier' => $this->input->post('regsupRecevier'),
			'regSupAmount' => $this->input->post('regSupAmount'),
			'regSupStat' => $this->input->post('regSupStat'),
		);
		$result = $this->db->insert('regsupply',$data);
		return $result;
	}

	public function addPettyCash()//adds data to the database, uses array to store items for adding.
	{
		$num = $this->db->count_all_results('pettycash');
		$val = sprintf("%'.03d", $num + 1);
		$control = date('Ymd').$val;

		$data = array(
			
			'pettyDate' => $this->input->post('pettyDate'),
			'pettyControl' => $control,
			'pettySupplier' => $this->input->post('pettySupplier'),
			'pettyQuantity' => $this->input->post('pettyQuantity'),
			'pettyDescript' => $this->input->post('pettyDescript'),
			'pettyReceiver' => $this->input->post('pettyReceiver'),
			'pettyAmount' => $this->input->post('pettyAmount'),
			'pettyStat' => $this->input->post('pettyStat'),
		);
		$result = $this->db->insert('pettycash',$data);
		return $result;
	}


	//READ
	public function getRegSupply()//this function gets regsupply data from database
	{
		$query = $this->db->get("regsupply");
		return $query->result();
	}

	public function getPettyCash()//this function gets pettycash data from database
	{
		$query = $this->db->get("pettycash");
		return $query->result();
	}
	//UPDATE
	//DELETE
}//end of model
?>