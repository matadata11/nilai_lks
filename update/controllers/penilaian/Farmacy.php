<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmacy extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_farmacy', 'farmacy');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $farmacy1 					= $this->input->post('farmacy1', TRUE);
            $farmacy2 					= $this->input->post('farmacy2', TRUE);
            $farmacy3 					= $this->input->post('farmacy3', TRUE);
            $farmacy4 					= $this->input->post('farmacy4', TRUE);
            $farmacy5 					= $this->input->post('farmacy5', TRUE);
            $farmacy6 					= $this->input->post('farmacy6', TRUE);
            $farmacy7 					= $this->input->post('farmacy7', TRUE);
            $farmacy8 					= $this->input->post('farmacy8', TRUE);
            $farmacy9 					= $this->input->post('farmacy9', TRUE);
            $farmacy10 					= $this->input->post('farmacy10', TRUE);
            $j_farmacy 					= $this->input->post('j_farmacy', TRUE);
            $admin 				= $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'farmacy1'           	    => $farmacy1,
                'farmacy2'           	    => $farmacy2,
                'farmacy3'           	    => $farmacy3,
                'farmacy4'           	    => $farmacy4,
                'farmacy5'           	    => $farmacy5,
                'farmacy6'           	    => $farmacy6,
                'farmacy7'           	    => $farmacy7,
                'farmacy8'           	    => $farmacy8,
                'farmacy9'           	    => $farmacy9,
                'farmacy10'           	    => $farmacy10,
                'j_farmacy'           	=> $j_farmacy,
                'admin'           => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian farmacy");
        $save = $this->farmacy->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}