<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_restaurant', 'restaurant');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
                $peserta_id 				    = $this->input->post('peserta_id', TRUE);
                $sekolah_asal 				    = $this->input->post('sekolah_asal', TRUE);
                $restaurant1 					= $this->input->post('restaurant1', TRUE);
                $restaurant2 					= $this->input->post('restaurant2', TRUE);
                $restaurant3 					= $this->input->post('restaurant3', TRUE);
                $j_restaurant 					= $this->input->post('j_restaurant', TRUE);
                $admin 				            = $this->input->post('admin', TRUE);

            $data = [
                'peserta_id'           	    => $peserta_id,
                'sekolah_asal'              => $sekolah_asal,
                'restaurant1'           	=> $restaurant1,
                'restaurant2'           	=> $restaurant2,
                'restaurant3'           	=> $restaurant3,
                'j_restaurant'           	=> $j_restaurant,
                'admin'                     => $admin,
                'tanggal'    	            => date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian restaurant");
        $save = $this->restaurant->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file restaurant.php */
