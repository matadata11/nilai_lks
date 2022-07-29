<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Electronics extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_electronics', 'electronics');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $electronics1 					= $this->input->post('electronics1', TRUE);
            $electronics2 					= $this->input->post('electronics2', TRUE);
            $electronics3 					= $this->input->post('electronics3', TRUE);
            $j_electronics 					= $this->input->post('j_electronics', TRUE);
            $admin 				= $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'electronics1'           	    => $electronics1,
                'electronics2'           	    => $electronics2,
                'electronics3'           	    => $electronics3,
                'j_electronics'           	=> $j_electronics,
                'admin'           => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian electronics");
        $save = $this->electronics->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}