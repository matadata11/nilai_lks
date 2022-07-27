<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_penilaian', 'nilai');
		
	}
	

	public function index()
	{
		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_nilai';
        $this->load->view('backend/main', $this->vars);
	}

}

/* End of file Penilaian.php */
