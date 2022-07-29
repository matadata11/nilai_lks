<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Electrical extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_electrical', 'electrical');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $electrical1 					= $this->input->post('electrical1', TRUE);
            $electrical2 					= $this->input->post('electrical2', TRUE);
            $electrical3 					= $this->input->post('electrical3', TRUE);
            $electrical4 					= $this->input->post('electrical4', TRUE);
            $j_electrical 					= $this->input->post('j_electrical', TRUE);
            $admin 				= $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'electrical1'           	    => $electrical1,
                'electrical2'           	    => $electrical2,
                'electrical3'           	    => $electrical3,
                'electrical4'           	    => $electrical4,
                'j_electrical'           	=> $j_electrical,
                'admin'           => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian electrical");
        $save = $this->electrical->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file electrical.php */
