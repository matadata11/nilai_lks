<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_mobile', 'mobile');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $mobile1 					= $this->input->post('mobile1', TRUE);
            $mobile2 					= $this->input->post('mobile2', TRUE);
            $mobile3 					= $this->input->post('mobile3', TRUE);
            $mobile4 					= $this->input->post('mobile4', TRUE);
            $mobile5 					= $this->input->post('mobile5', TRUE);
            $mobile6 					= $this->input->post('mobile6', TRUE);
            $j_mobile 					= $this->input->post('j_mobile', TRUE);
            $admin 				= $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'mobile1'           	    => $mobile1,
                'mobile2'           	    => $mobile2,
                'mobile3'           	    => $mobile3,
                'mobile4'           	    => $mobile4,
                'mobile5'           	    => $mobile5,
                'mobile6'           	    => $mobile6,
                'j_mobile'           	=> $j_mobile,
                'admin'           => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian mobile");
        $save = $this->mobile->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file mobile.php */
