<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/header.php');
		$this->load->view('admin/dashboard.php');
		$this->load->view('admin/footer.php');
	}
}
