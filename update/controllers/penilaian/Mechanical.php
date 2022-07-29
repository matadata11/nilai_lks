<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mechanical extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_mechanical', 'mechanical');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
                $peserta_id 				    = $this->input->post('peserta_id', TRUE);
                $sekolah_asal 				    = $this->input->post('sekolah_asal', TRUE);
                $mechanical1 					= $this->input->post('mechanical1', TRUE);
                $mechanical2 					= $this->input->post('mechanical2', TRUE);
                $mechanical3 					= $this->input->post('mechanical3', TRUE);
                $j_mechanical					= $this->input->post('j_mechanical', TRUE);
                $admin 				            = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	    => $peserta_id,
                'sekolah_asal'              => $sekolah_asal,
                'mechanical1'           	=> $mechanical1,
                'mechanical2'           	=> $mechanical2,
                'mechanical3'           	=> $mechanical3,
                'j_mechanical'           	=> $j_mechanical,
                'admin'                     => $admin,
                'tanggal'    	            => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian mechanical");
        $save = $this->mechanical->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file mechanical.php */
