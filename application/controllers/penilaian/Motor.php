<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_motor', 'motor');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $motor1 					= $this->input->post('motor1', TRUE);
            $motor2 					= $this->input->post('motor2', TRUE);
            $motor3 					= $this->input->post('motor3', TRUE);
            $j_motor 					= $this->input->post('j_motor', TRUE);
            $admin 				        = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'motor1'           	=> $motor1,
                'motor2'           	=> $motor2,
                'motor3'           	=> $motor3,
                'j_motor'           	=> $j_motor,
                'admin'                 => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian motor");
        $save = $this->motor->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file motor.php */
