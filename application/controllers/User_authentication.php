<?php

//session_start(); //we need to start session in order to access it through CI

Class User_authentication extends CI_Controller {

	public function __construct() {
	parent::__construct();

	
   // Load session library
	$this->load->library('session');
	$this->load->library('form_validation');
	$this->load->model('login_database');
	// Load database
	//$this->load->model('login_database');
	}
	
	// Show login page
	public function index() 
	{
	
	$this->load->view('login_form');
	
	}

	// Check for user login process
	public function user_login_process() 
	{
		//$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
        $data['title']="Login Form";
		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['log_del'])){
			redirect('main');
			}
			else{
			$this->load->view('login_form');
			}
		}
		else
		{
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			$result = $this->login_database->login($data);
			if ($result == TRUE) {
				$username = $this->input->post('username');
				$result = $this->login_database->read_user_information($username);
				if ($result != false) {
					$session_data = array(
					'username' => $result[0]->del_username,
					'user_id' => $result[0]->del_id,
					'name' => $result[0]->del_name
					/*'empname' => $result[0]->emp_name,
					'upload' => $result[0]->upload,*/
					);
					// Add user data in session
					$this->session->set_userdata('log_del', $session_data);
					redirect('main', 'refresh');
				}
            }
			else {
			
			//redirect('user_authentication', 'refresh');
			$data['error']="Invalid Credentials";
			$this->load->view('login_form',$data);
			}
			
		}
		
	}
	
	// Logout from admin page
	public function logout() {
		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('log_del', $sess_array);
		
		$this->load->view('login_form');
		//redirect('user_authentication', 'refresh');
	}

}
?>
