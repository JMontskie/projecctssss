<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Various_M extends CI_Model
{
	//CREATE
	public function addIncoming()//adds data to the database, uses array to store items for adding.
	{
		$data = array(
			'inVarDate' => $this->input->post('inVarDate'),
			'inVarSource' => $this->input->post('inVarSource'),
			'inVarPart' => $this->input->post('inVarPart'),
			'inVarAdree' => $this->input->post('inVarAdree'),
			'inVarStat' => $this->input->post('inVarStat'),
		);
		$result = $this->db->insert('invarious',$data);
		return $result;
	}

	public function addOutgoing()//same function as addOutgoing
	{	
		$num = $this->db->count_all_results('outvarious');
		$val = sprintf("%'.03d", $num + 1);
		$control = date('Ymd').$val;

		$data = array(
			'outDate' => $this->input->post('outDate') ,
			'out_track_control' => $control,
			'outRecipient' => $this->input->post('outRecipient'),
			'outContent' => $this->input->post('outContent'),
			'outStatus' => $this->input->post('outStatus'), 
		);
		$result = $this->db->insert('outvarious',$data);
		return $result;
	}


	//READ
	public function getIncoming()//this function gets invarious data from database
	{
		$query = $this->db->get("invarious");
		return $query->result();
	}

	public function getOutgoing()//gets outvarious data from database
	{
		$query = $this->db->get("outvarious");
		return $query->result();
	}


	//UPDATE
	public function editIncoming()//updates data to the database from the data in the edit modal.
	{
		$inVar_id=$this->input->post('inVar_id');
		$inVarDate=$this->input->post('inVarDate');
		$inVarSource=$this->input->post('inVarSource');
		$inVarPart=$this->input->post('inVarPart');
		$inVarAdree=$this->input->post('inVarAdree');
		

		$this->db->set('inVarDate', $inVarDate);
		$this->db->set('inVarSource', $inVarSource);
		$this->db->set('inVarPart', $inVarPart);
		$this->db->set('inVarAdree', $inVarAdree);
		$this->db->where('inVar_id', $inVar_id);

		$result=$this->db->update('invarious');
		return $result;
	}//end of editIncoming

	public function editOutgoing()//same as editIncoming but for outgoing various.
	{
		$out_track_id=$this->input->post('out_track_id');
		$outDate = $this->input->post('outDate');
		$out_track_control = $this->input->post('out_track_control');
		$outRecipient = $this->input->post('outRecipient');
		$outContent = $this->input->post('outContent');

		$this->db->set('outDate', $outDate);
		$this->db->set('out_track_control', $out_track_control);
		$this->db->set('outRecipient', $outRecipient);
		$this->db->set('outContent', $outContent);
		$this->db->where('out_track_id', $out_track_id);

		$result=$this->db->update('outvarious');
		return $result;
	}


	//DELETE





	//RECEIVE

	public function receiveIncoming()
	{
		$inVar_id = $this->input->post('inVar_id');
		$query= $this->db->query("UPDATE invarious SET inVarStat = 'Received' WHERE inVar_id = '$inVar_id'");
		return $query;
	}

	public function receiveOutgoing()
	{
		$out_track_id = $this->input->post('out_track_id');
		$query= $this->db->query("UPDATE outvarious SET outStatus = 'Received' WHERE out_track_id = '$out_track_id'");
		return $query;
	}

}//end of Modal
