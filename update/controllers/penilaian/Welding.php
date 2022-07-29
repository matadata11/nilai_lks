<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welding extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_welding', 'welding');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
                $peserta_id 				    = $this->input->post('peserta_id', TRUE);
                $sekolah_asal 				    = $this->input->post('sekolah_asal', TRUE);
                $welding1 					    = $this->input->post('welding1', TRUE);
                $welding2 					    = $this->input->post('welding2', TRUE);
                $j_welding					    = $this->input->post('j_welding', TRUE);
                $admin 				            = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	    => $peserta_id,
                'sekolah_asal'              => $sekolah_asal,
                'welding1'           	    => $welding1,
                'welding2'           	    => $welding2,
                'j_welding'           	    => $j_welding,
                'admin'                     => $admin,
                'tanggal'    	            => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian welding");
        $save = $this->welding->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file welding.php */
