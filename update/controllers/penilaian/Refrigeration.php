<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Refrigeration extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_refrigeration', 'refrigeration');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $refrigeration1 					= $this->input->post('refrigeration1', TRUE);
            $refrigeration2 					= $this->input->post('refrigeration2', TRUE);
            $refrigeration3 					= $this->input->post('refrigeration3', TRUE);
            $refrigeration4 					= $this->input->post('refrigeration4', TRUE);
            $j_refrigeration 					= $this->input->post('j_refrigeration', TRUE);
            $admin 				        = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'refrigeration1'           	=> $refrigeration1,
                'refrigeration2'           	=> $refrigeration2,
                'refrigeration3'           	=> $refrigeration3,
                'refrigeration4'           	=> $refrigeration4,
                'j_refrigeration'           	=> $j_refrigeration,
                'admin'                 => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian refrigeration");
        $save = $this->refrigeration->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file refrigeration.php */
