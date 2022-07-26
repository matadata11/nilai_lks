<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('', '');
		
	}
	

	public function index()
	{
		$this->vars['title']    	= 'Mata Lomba LKS | LKS 2022';
        $this->vars['content']  	= 'home/read';
        $this->load->view('backend/main', $this->vars);
	}

}

/* End of file Home.php */
