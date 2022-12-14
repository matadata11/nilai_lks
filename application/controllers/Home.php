<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('peserta/M_peserta', 'peserta');
		$this->load->model('juri/M_juri', 'juri');
		$this->load->model('penilaian/M_nilai_it', 'nilai_it');
		$this->load->model('penilaian/M_wall', 'wall');
		$this->load->model('penilaian/M_cloud', 'cloud');
		$this->load->model('penilaian/M_cabinet', 'cabinet');
		$this->load->model('penilaian/M_electrical', 'electrical');
		$this->load->model('penilaian/M_mobile', 'mobile');
		$this->load->model('penilaian/M_electronics', 'electronics');
		$this->load->model('penilaian/M_farmacy', 'farmacy');
		$this->load->model('penilaian/M_fashion', 'fashion');
		$this->load->model('penilaian/M_landscape', 'landscape');
		$this->load->model('penilaian/M_livestock', 'livestock');
		$this->load->model('penilaian/M_mechanical', 'mechanical');
		$this->load->model('penilaian/M_motor', 'motor');
		$this->load->model('penilaian/M_nautica', 'nautica');
		$this->load->model('penilaian/M_pemasaran', 'pemasaran');
		$this->load->model('penilaian/M_refrigeration', 'refrigeration');
		$this->load->model('penilaian/M_restaurant', 'restaurant');
		$this->load->model('penilaian/M_design', 'design');
		$this->load->model('penilaian/M_welding', 'welding');
	}
	

	public function index()
	{
		$this->vars['peserta']	    = $this->peserta->getDataJuri();
		$this->vars['juri']	    	= $this->juri->getData();
		$this->vars['nilai']	    = $this->nilai_it->getData();
		$this->vars['wall']	    	= $this->wall->getData();
		$this->vars['cloud']	    = $this->cloud->getData();
		$this->vars['cabinet']	    = $this->cabinet->getData();
		$this->vars['electrical']	= $this->electrical->getData();
		$this->vars['mobile']	    = $this->mobile->getData();
		$this->vars['electronics']	= $this->electronics->getData();
		$this->vars['farmacy']	    = $this->farmacy->getData();
		$this->vars['fashion']	    = $this->fashion->getData();
		$this->vars['landscape']	= $this->landscape->getData();
		$this->vars['livestock']	= $this->livestock->getData();
		$this->vars['landscape']	= $this->landscape->getData();
		$this->vars['livestock']	= $this->livestock->getData();
		$this->vars['mechanical']	= $this->mechanical->getData();
		$this->vars['motor']	    = $this->motor->getData();
		$this->vars['nautica']	    = $this->nautica->getData();
		$this->vars['pemasaran']	= $this->pemasaran->getData();
		$this->vars['refrigeration']= $this->refrigeration->getData();
		$this->vars['restaurant']	= $this->restaurant->getData();
		$this->vars['design']		= $this->design->getData();
		$this->vars['welding']		= $this->welding->getData();

		$this->vars['title']    	= 'Mata Lomba LKS | LKS 2022';
        $this->vars['content']  	= 'home/read';
        $this->load->view('backend/main', $this->vars);
	}

}

/* End of file Home.php */
