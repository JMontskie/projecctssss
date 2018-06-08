<?php  

/**
 * 
 */
class Login_M extends CI_Model
{
	
	public function register_user($user)
	{
		$this->db->insert('admin',$user);
	}


	public function login_user($username, $password)
	{
		$this->db->get("admin");
		$this->db->from("admin");
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		if ($query=$this->db->get()) {
			return $query->row_array();
		}else{
			return false;
		}
	}


	public function password_check($password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('password',$password);
		$query=$this->db->get();

		if($query->num_rows() > 0){
			return false;
		}else{
			return true;
		}
	}


}//end of login Model
?>