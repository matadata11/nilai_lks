<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('lomba/M_lomba', 'lomba');
		$this->load->model('peserta/M_peserta', 'peserta');
    }

    public function index()
    {
		$this->vars['count']	    = $this->lomba->getJumlahLomba();
        $this->vars['peserta']	    = $this->peserta->getData();
		$this->vars['lomba']	    = $this->lomba->getData();
		$this->vars['Summarize']	    = $this->lomba->getSummarize();

        $this->vars['title']    = 'Dashboard';
        $this->vars['content']  = 'backend/dashboard';
        $this->load->view('backend/main', $this->vars);
    }

}

/* End of file Dashboard.php */
