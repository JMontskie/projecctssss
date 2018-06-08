<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ord_M extends CI_Model
{
	
	//CREATE
	public function addIncomingOrd()//adds data to the database, uses array to store items for adding.
	{
		$data = array(
			'inOrdDate' => $this->input->post('inOrdDate'),
			'inOrdSource' => $this->input->post('inOrdSource'),
			'inOrdContent' => $this->input->post('inOrdContent'),
			'inOrdAdree' => $this->input->post('inOrdAdree'),
			'inOrdStat' => $this->input->post('inOrdStat'),
		);
		$result = $this->db->insert('inord',$data);
		return $result;
	}

	public function addOutgoingOrd()//adds data to the database, uses array to store items for adding.
	{
		$num = $this->db->count_all_results('outord');
		$val = sprintf("%'.03d", $num + 1);
		$control = date('Ymd').$val;

		$data = array(
			'outOrdDate' => $this->input->post('outOrdDate'),
			'outOrdControl' => $control,
			'outOrdRecipient' => $this->input->post('outOrdRecipient'),
			'outOrdContent' => $this->input->post('outOrdContent'),
			'outOrdStat' => $this->input->post('outOrdStat'),
		);


		$result = $this->db->insert('outord',$data);
		return $result;
	}

	public function code()
	{

	}

	//READ
	public function getIncomingOrd()//this function gets inord data from database
	{
		$query = $this->db->get("inord");
		return $query->result();
	}
	public function getOutgoingOrd()//this function gets outord data from database
	{
		$query = $this->db->get("outord");
		return $query->result();
	}



	//UPDATE
	public function updateIncomingOrd()
	{
		$inOrd_id=$this->input->post('inOrd_id');
		$inOrdDate=$this->input->post('inOrdDate');
		$inOrdSource=$this->input->post('inOrdSource');
		$inOrdContent=$this->input->post('inOrdContent');
		$inOrdAdree=$this->input->post('inOrdAdree');
		

		$this->db->set('inOrdDate', $inOrdDate);
		$this->db->set('inOrdSource', $inOrdSource);
		$this->db->set('inOrdContent', $inOrdContent);
		$this->db->set('inOrdAdree', $inOrdAdree);
		$this->db->where('inOrd_id', $inOrd_id);

		$result=$this->db->update('inord');
		return $result;
	}

	public function updateOutgoingOrd()
	{
		$outOrd_id=$this->input->post('outOrd_id');
		$outOrdDate=$this->input->post('outOrdDate');
		$outOrdControl=$this->input->post('outOrdControl');
		$outOrdRecipient=$this->input->post('outOrdRecipient');
		$outOrdContent=$this->input->post('outOrdContent');
		

		$this->db->set('outOrdDate', $outOrdDate);
		$this->db->set('outOrdControl', $outOrdControl);
		$this->db->set('outOrdRecipient', $outOrdRecipient);
		$this->db->set('outOrdContent', $outOrdContent);
		$this->db->where('outOrd_id', $outOrd_id);

		$result=$this->db->update('outord');
		return $result;
	}



	//DELETE
	//RECEIVE
	public function receiveIncomingOrd()
	{
		$inOrd_id = $this->input->post('inOrd_id');

		$query= $this->db->query("UPDATE inord SET inOrdStat = 'Received' WHERE inOrd_id = '$inOrd_id'");
		return $query;
	}

	public function receiveOutgoingOrd()
	{
		$outOrd_id = $this->input->post('outOrd_id');

		$query= $this->db->query("UPDATE outord SET outOrdStat = 'Received' WHERE outOrd_id = '$outOrd_id'");
		return $query;
	}


}//END OF MODEL

?>