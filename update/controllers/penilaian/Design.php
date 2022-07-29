<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Design extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_design', 'design');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
                $peserta_id 				    = $this->input->post('peserta_id', TRUE);
                $sekolah_asal 				    = $this->input->post('sekolah_asal', TRUE);
                $design1 					    = $this->input->post('design1', TRUE);
                $design2 					    = $this->input->post('design2', TRUE);
                $design3 					    = $this->input->post('design3', TRUE);
                $j_design 					    = $this->input->post('j_design', TRUE);
                $admin 				            = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	    => $peserta_id,
                'sekolah_asal'              => $sekolah_asal,
                'design1'           	    => $design1,
                'design2'           	    => $design2,
                'design3'           	    => $design3,
                'j_design'           	    => $j_design,
                'admin'                     => $admin,
                'tanggal'    	            => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian design");
        $save = $this->design->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file design.php */
