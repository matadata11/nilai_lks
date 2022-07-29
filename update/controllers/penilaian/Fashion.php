<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Fashion extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_fashion', 'fashion');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $fashion1 					= $this->input->post('fashion1', TRUE);
            $fashion2 					= $this->input->post('fashion2', TRUE);
            $j_fashion 					= $this->input->post('j_fashion', TRUE);
            $admin 				        = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'fashion1'           	=> $fashion1,
                'fashion2'           	=> $fashion2,
                'j_fashion'           	=> $j_fashion,
                'admin'                 => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian fashion");
        $save = $this->fashion->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file fashion.php */
