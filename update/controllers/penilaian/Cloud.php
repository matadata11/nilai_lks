<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cloud extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_cloud', 'cloud');
		
	}

    public function index()
    {
        
    }

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta_id 				= $this->input->post('peserta_id', TRUE);
            $sekolah_asal 				= $this->input->post('sekolah_asal', TRUE);
            $cloud1 					= $this->input->post('cloud1', TRUE);
            $cloud2 					= $this->input->post('cloud2', TRUE);
            $j_cloud 					= $this->input->post('j_cloud', TRUE);
            $admin_cloud 				= $this->input->post('admin_cloud', TRUE);

            $data = [
                'peserta_id'           	=> $peserta_id,
                'sekolah_asal'          => $sekolah_asal,
                'cloud1'           	    => $cloud1,
                'cloud2'           	    => $cloud2,
                'j_cloud'           	=> $j_cloud,
                'admin_cloud'           => $admin_cloud,
                'tanggal'    	        => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian Cloud");
        $save = $this->cloud->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Cloud.php */
