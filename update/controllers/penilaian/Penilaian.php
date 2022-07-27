<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_penilaian', 'nilai');
		$this->load->model('lomba/M_lomba', 'lomba');
		
	}
	

	public function index()
	{
		$this->vars['penilaian']	= $this->nilai->getData();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_nilai';
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
        $save = $this->nilai->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Penilaian.php */
