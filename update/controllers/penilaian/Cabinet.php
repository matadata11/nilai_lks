<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabinet extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_cabinet', 'cabinet');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $cabinet1 					= $this->input->post('cabinet1', TRUE);
            $cabinet2 					= $this->input->post('cabinet2', TRUE);
            $cabinet3 					= $this->input->post('cabinet3', TRUE);
            $cabinet4 					= $this->input->post('cabinet4', TRUE);
            $cabinet5 					= $this->input->post('cabinet5', TRUE);
            $cabinet6 					= $this->input->post('cabinet6', TRUE);
            $cabinet7 					= $this->input->post('cabinet7', TRUE);
            $j_cabinet 					= $this->input->post('j_cabinet', TRUE);
            $admin_cabinet 				= $this->input->post('admin_cabinet', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'cabinet1'           	    => $cabinet1,
                'cabinet2'           	    => $cabinet2,
                'cabinet3'           	    => $cabinet3,
                'cabinet4'           	    => $cabinet4,
                'cabinet5'           	    => $cabinet5,
                'cabinet6'           	    => $cabinet6,
                'cabinet7'           	    => $cabinet7,
                'j_cabinet'           	=> $j_cabinet,
                'admin_cabinet'           => $admin_cabinet,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian Cabinet");
        $save = $this->cabinet->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Cabinet.php */
