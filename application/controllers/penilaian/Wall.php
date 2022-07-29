<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wall extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_wall', 'wall');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 					= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $n1 					    = $this->input->post('n1', TRUE);
            $n2 					    = $this->input->post('n2', TRUE);
            $n3 					    = $this->input->post('n3', TRUE);
            $n4 					    = $this->input->post('n4', TRUE);
            $n5 					    = $this->input->post('n5', TRUE);
            $n6 					    = $this->input->post('n6', TRUE);
            $n7 					    = $this->input->post('n7', TRUE);
            $n8 					    = $this->input->post('n8', TRUE);
            $j_wall					    = $this->input->post('j_wall', TRUE);
            $admin 					    = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'n1'           	        => $n1,
                'n2'           	        => $n2,
                'n3'           	        => $n3,
                'n4'           	        => $n4,
                'n5'           	        => $n5,
                'n6'           	        => $n6,
                'n7'           	        => $n7,
                'n8'           	        => $n8,
                'j_wall'           	    => $j_wall,
                'admin'           	    => $admin,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian Wall");
        $save = $this->wall->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Wall.php */
