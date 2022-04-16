<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	 function __construct() {
    	parent::__construct();

	
	}
	public function index()
	{
            $this->template->write('title',"Cake");
			$this->template->write_view('header','header');
			$this->template->write_view('sidebar','sidebar');
            $this->template->write_view('content','dashboard');
			$this->template->write_view('footer', 'footer');
            $this->template->render();
    }
}
