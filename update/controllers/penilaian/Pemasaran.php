<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasaran extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_pemasaran', 'pemasaran');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $pemasaran1 					= $this->input->post('pemasaran1', TRUE);
            $pemasaran2 					= $this->input->post('pemasaran2', TRUE);
            $pemasaran3 					= $this->input->post('pemasaran3', TRUE);
            $j_pemasaran 					= $this->input->post('j_pemasaran', TRUE);
            $admin 				        = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'pemasaran1'           	=> $pemasaran1,
                'pemasaran2'           	=> $pemasaran2,
                'pemasaran3'           	=> $pemasaran3,
                'j_pemasaran'           	=> $j_pemasaran,
                'admin'                 => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian pemasaran");
        $save = $this->pemasaran->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file pemasaran.php */
