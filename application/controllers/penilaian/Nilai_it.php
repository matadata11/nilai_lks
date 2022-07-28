<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_it extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_nilai_it', 'nilai_it');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta 					= $this->input->post('peserta', TRUE);
        $sekolah_asal 					= $this->input->post('sekolah_asal', TRUE);
            $n1 					    = $this->input->post('n1', TRUE);
            $n2 					    = $this->input->post('n2', TRUE);
            $n3 					    = $this->input->post('n3', TRUE);
            $total 					    = $this->input->post('total', TRUE);
            $admin 					    = $this->input->post('admin', TRUE);

            $data = [
                'peserta'           	=> $peserta,
                'sekolah_asal'          => $sekolah_asal,
                'n1'           	        => $n1,
                'n2'           	        => $n2,
                'n3'           	        => $n3,
                'total'           	    => $total,
                'admin'           	    => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian");
        $save = $this->nilai_it->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Nilai_it.php */
