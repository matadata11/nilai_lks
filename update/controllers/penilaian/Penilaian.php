<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_penilaian', 'nilai');
		$this->load->model('lomba/M_lomba', 'lomba');
		$this->load->model('penilaian/M_nilai_it', 'nilai_it');
		$this->load->model('penilaian/M_cloud', 'cloud');
		$this->load->model('penilaian/M_cabinet', 'cabinet');
		$this->load->model('penilaian/M_electrical', 'electrical');
		$this->load->model('penilaian/M_mobile', 'mobile');
		$this->load->model('penilaian/M_electronics', 'electronics');
		$this->load->model('penilaian/M_farmacy', 'farmacy');
	}
	

	public function index()
	{
		$this->vars['total']	    = $this->nilai_it->getTotal();
		$this->vars['penilaian']	= $this->nilai->getData();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_nilai';
        $this->load->view('backend/main', $this->vars);
	}

    // cloud
    public function cloud()
	{
		$this->vars['total']	    = $this->cloud->getTotal();
		// $this->vars['penilaian']	= $this->nilai->getData();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_cloud';
        $this->load->view('backend/main', $this->vars);
	}

    public function cabinet()
	{
		$this->vars['total']	    = $this->cabinet->getTotal();
		// $this->vars['penilaian']	= $this->nilai->getData();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_cabinet';
        $this->load->view('backend/main', $this->vars);
	}

    public function electrical()
	{
		$this->vars['total']	    = $this->electrical->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_electrical';
        $this->load->view('backend/main', $this->vars);
	}

    public function mobile()
	{
		$this->vars['total']	    = $this->mobile->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_mobile';
        $this->load->view('backend/main', $this->vars);
	}

    public function electronics()
	{
		$this->vars['total']	    = $this->electronics->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_electronics';
        $this->load->view('backend/main', $this->vars);
	}

    public function farmacy()
	{
		$this->vars['total']	    = $this->farmacy->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_electronics';
        $this->load->view('backend/main', $this->vars);
	}

	public function store()
    {
        if(isset($_POST['submit'])){
            $admin 					= $this->input->post('admin', TRUE);
            $lomba_id 				= $this->input->post('lomba_id', TRUE);

            $data = [
                'admin'           	=> $admin,
                'lomba_id'          => $lomba_id,
                'tanggal'    		=> date('Y-m-d')
            ];
        }
        $save = $this->db->get_where('mt_penilaian', ['lomba_id' => $lomba_id])->row_array();
        if($save){
            $this->session->set_flashdata('notif_false', '<div class="alert alert-danger  alert-dismissible fade show" role="alert" id="notifications"><i class="mdi mdi-check-all me-2"></i> Hanya Boleh Absen satu kali . </div>..');
        }else{
            $flashdata  = $this->nilai->entry($data);
            
        }
        if($flashdata){
            $this->session->set_flashdata('notif_true', 'Terima Kasih');
            $this->session->set_flashdata('audio', site_url('public/audio/terimakasih.mp3'));
            
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function destroy()
    {
        $save = $this->nilai->delete();
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Dihapus.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Dihapus.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Penilaian.php */