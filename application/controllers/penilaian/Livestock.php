<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Livestock extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_live', 'live');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
                $peserta_id 				    = $this->input->post('peserta_id', TRUE);
                $sekolah_asal 				    = $this->input->post('sekolah_asal', TRUE);
                $livestock1 					= $this->input->post('livestock1', TRUE);
                $livestock2 					= $this->input->post('livestock2', TRUE);
                $livestock3 					= $this->input->post('livestock3', TRUE);
                $livestock4 					= $this->input->post('livestock4', TRUE);
                $livestock5 					= $this->input->post('livestock5', TRUE);
                $livestock6 					= $this->input->post('livestock6', TRUE);
                $j_livestock 					= $this->input->post('j_livestock', TRUE);
                $admin 				            = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	    => $peserta_id,
                'sekolah_asal'              => $sekolah_asal,
                'livestock1'           	    => $livestock1,
                'livestock2'           	    => $livestock2,
                'livestock3'           	    => $livestock3,
                'livestock4'           	    => $livestock4,
                'livestock5'           	    => $livestock5,
                'livestock6'           	    => $livestock6,
                'j_livestock'           	=> $j_livestock,
                'admin'                 => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian live");
        $save = $this->live->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file live.php */
