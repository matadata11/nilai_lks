<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('peserta/M_peserta', 'peserta');
		$this->load->model('juri/M_juri', 'juri');
	}
	

	public function index()
	{
		$this->vars['peserta']	    = $this->peserta->getDataJuri();
		$this->vars['juri']	    	= $this->juri->getData();

		$this->vars['title']    	= 'Mata Lomba LKS | LKS 2022';
        $this->vars['content']  	= 'home/read';
        $this->load->view('backend/main', $this->vars);
	}

}

/* End of file Home.php */
