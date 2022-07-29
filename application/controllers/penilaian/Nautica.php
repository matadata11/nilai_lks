<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Nautica extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_nautica', 'nautica');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
                $peserta_id 				    = $this->input->post('peserta_id', TRUE);
                $sekolah_asal 				    = $this->input->post('sekolah_asal', TRUE);
                $nautica1 					    = $this->input->post('nautica1', TRUE);
                $nautica2 					    = $this->input->post('nautica2', TRUE);
                $nautica3 					    = $this->input->post('nautica3', TRUE);
                $nautica4 					    = $this->input->post('nautica4', TRUE);
                $nautica5 					    = $this->input->post('nautica5', TRUE);
                $nautica6 					    = $this->input->post('nautica6', TRUE);
                $nautica7 					    = $this->input->post('nautica7', TRUE);
                $j_nautica 					    = $this->input->post('j_nautica', TRUE);
                $admin 				            = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	    => $peserta_id,
                'sekolah_asal'              => $sekolah_asal,
                'nautica1'           	    => $nautica1,
                'nautica2'           	    => $nautica2,
                'nautica3'           	    => $nautica3,
                'nautica4'           	    => $nautica4,
                'nautica5'           	    => $nautica5,
                'nautica6'           	    => $nautica6,
                'nautica7'           	    => $nautica7,
                'j_nautica'           	    => $j_nautica,
                'admin'                     => $admin,
                'tanggal'    	            => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian nautica");
        $save = $this->nautica->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file nautica.php */
