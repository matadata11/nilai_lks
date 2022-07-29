<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Landscape extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_landscape', 'landscape');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $landscape1 				= $this->input->post('landscape1', TRUE);
            $landscape2 				= $this->input->post('landscape2', TRUE);
            $landscape3 				= $this->input->post('landscape3', TRUE);
            $landscape4 				= $this->input->post('landscape4', TRUE);
            $landscape5 				= $this->input->post('landscape5', TRUE);
            $landscape6 				= $this->input->post('landscape6', TRUE);
            $landscape7 				= $this->input->post('landscape7', TRUE);
            $landscape8 				= $this->input->post('landscape8', TRUE);
            $j_landscape 				= $this->input->post('j_landscape', TRUE);
            $admin 				        = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'landscape1'           	=> $landscape1,
                'landscape2'           	=> $landscape2,
                'landscape3'           	=> $landscape3,
                'landscape4'           	=> $landscape4,
                'landscape5'           	=> $landscape5,
                'landscape6'           	=> $landscape6,
                'landscape7'           	=> $landscape7,
                'landscape8'           	=> $landscape8,
                'j_landscape'           	=> $j_landscape,
                'admin'                 => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian landscape");
        $save = $this->landscape->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file landscape.php */
