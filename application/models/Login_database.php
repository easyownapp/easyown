<?php

class Login_database extends CI_Model {

	function __construct() {
        parent::__construct();
    }
	
	// Read data using username and password
	public function login($data) {

	$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . '29353f3b5eb749ae0afb3d88b810f05c' . "'";
	$this->db->select('*');
	$this->db->from('login_table');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
		return true;
		} 
		else {
		return false;
		}
	}
	
	public function read_user_information($username) {
	
		$condition = "user_name =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('login_table');
		
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
			} 
			else 
			{
			return false;
			}
	}
	
}
?>
