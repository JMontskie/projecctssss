<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_m');
		$this->load->library('session');
	}
	
	public function index()
	{
		
		$this->load->view('welcome_message.php');
		
	}


	public function register_view()
	{
		$this->load->view('admin/register.php');
	}

	//REGISTER USERS
	public function register_user()
	{
		$user = array(
			'username' => $this->input->post('username') ,
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			're_password' => $this->input->post('re_password') 
		);
		print_r($user);
		$password_check=$this->login_m->password_check($user['re_password']);
		if ($password_check) {
			$this->login_m->register_user($user);
			$this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account.');
			http_redirect('login/index');
		}else{
			$this->session->set_flashdata('error_msg', 'Error occured, Try again.');
			http_redirect('user');
		
		}
	}

	//LOGIN USERS
	public function login_user()
	{
		$user_login=array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		$data = $this->login_m->login_user($user_login['username'], $user_login['password']);

		if($data)
		{
			$this->session->set_userdata('username', $data['username']);
			$this->session->set_userdata('password', $data['password']);
			$this->session->set_userdata('email', $data['email']);
			$this->session->set_userdata('status', $data['status']);

			$this->load->view('admin/header.php');
			$this->load->view('admin/dashboard.php');
			$this->load->view('admin/footer.php');
		}else{
			$this->session->set_flashdata('error_msg', 'Invalid Username Or Password');
			$this->load->view('welcome_message.php');
		}
	}//end of login_user


	public function user_logout()
	{
		session_destroy();
		return redirect()->to('login/index');
	}

}//end of login controller
