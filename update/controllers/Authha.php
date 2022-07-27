<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Authha extends CI_Controller {

	public function index()
	{
		$this->vars['title']    = 'Halaman Masuk';

		$this->load->view('auth/login');
	}

}

/* End of file Authha.php */
