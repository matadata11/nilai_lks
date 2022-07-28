<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_it extends Admin_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_nilai_it', 'nilai_it');
		
	}

    public function store()
    {
        if(isset($_POST['submit'])){
            $peserta 					= $this->input->post('peserta', TRUE);
            $sekolah_asal 					= $this->input->post('sekolah_asal', TRUE);
            $n1 					    = $this->input->post('n1', TRUE);
            $n2 					    = $this->input->post('n2', TRUE);
            $n3 					    = $this->input->post('n3', TRUE);
            $n4 					    = $this->input->post('n4', TRUE);
            $n5 					    = $this->input->post('n5', TRUE);
            $n6 					    = $this->input->post('n6', TRUE);
            $n7 					    = $this->input->post('n7', TRUE);
            $n8 					    = $this->input->post('n8', TRUE);
            $n9 					    = $this->input->post('n9', TRUE);
            $n10 					    = $this->input->post('n10', TRUE);
            $n11 					    = $this->input->post('n11', TRUE);
            $n12 					    = $this->input->post('n12', TRUE);
            $n13 					    = $this->input->post('n13', TRUE);
            $n14 					    = $this->input->post('n14', TRUE);
            $n16 					    = $this->input->post('n16', TRUE);
            $n17 					    = $this->input->post('n17', TRUE);
            $n18 					    = $this->input->post('n18', TRUE);
            $n19 					    = $this->input->post('n19', TRUE);
            $n20 					    = $this->input->post('n20', TRUE);
            $n21 					    = $this->input->post('n21', TRUE);
            $n22 					    = $this->input->post('n22', TRUE);
            $n23 					    = $this->input->post('n23', TRUE);
            $n24 					    = $this->input->post('n16', TRUE);
            $n25 					    = $this->input->post('n25', TRUE);
            $n26 					    = $this->input->post('n26', TRUE);
            $n27 					    = $this->input->post('n27', TRUE);
            $n28 					    = $this->input->post('n28', TRUE);
            $n29 					    = $this->input->post('n29', TRUE);
            $n30 					    = $this->input->post('n30', TRUE);
            $n31 					    = $this->input->post('n31', TRUE);
            $n32 					    = $this->input->post('n32', TRUE);
            $n33 					    = $this->input->post('n33', TRUE);
            $n34 					    = $this->input->post('n34', TRUE);
            $n35 					    = $this->input->post('n35', TRUE);
            $n36 					    = $this->input->post('n36', TRUE);
            $n37 					    = $this->input->post('n37', TRUE);
            $n38 					    = $this->input->post('n38', TRUE);
            $n39 					    = $this->input->post('n39', TRUE);
            $n40 					    = $this->input->post('n40', TRUE);
            $n41 					    = $this->input->post('n41', TRUE);
            $n42 					    = $this->input->post('n42', TRUE);
            $n43 					    = $this->input->post('n43', TRUE);
            $n44 					    = $this->input->post('n44', TRUE);
            $total 					    = $this->input->post('total', TRUE);
            $admin 					    = $this->input->post('admin', TRUE);

            $data = [
                'peserta'           	=> $peserta,
                'sekolah_asal'           	=> $sekolah_asal,
                'n1'           	         => $n1,
                'n2'           	        => $n2,
                'n3'           	        => $n3,
                'n4'           	        => $n4,
                'n5'           	        => $n5,
                'n6'           	        => $n6,
                'n7'           	        => $n7,
                'n8'           	        => $n8,
                'n9'           	        => $n9,
                'n10'           	        => $n10,
                'n11'           	        => $n11,
                'n12'           	        => $n12,
                'n13'           	        => $n13,
                'n14'           	        => $n14,
                'n16'           	        => $n16,
                'n17'           	        => $n17,
                'n18'           	        => $n18,
                'n19'           	        => $n19,
                'n20'           	        => $n20,
                'n21'           	        => $n21,
                'n22'           	        => $n22,
                'n23'           	        => $n23,
                'n24'           	        => $n24,
                'n25'           	        => $n25,
                'n26'           	        => $n26,
                'n27'           	        => $n27,
                'n28'           	        => $n28,
                'n29'           	        => $n29,
                'n30'           	        => $n30,
                'n31'           	        => $n31,
                'n32'           	        => $n32,
                'n33'           	        => $n33,
                'n34'           	        => $n34,
                'n35'           	        => $n35,
                'n36'           	        => $n36,
                'n37'           	        => $n37,
                'n38'           	        => $n38,
                'n39'           	        => $n39,
                'n40'           	        => $n40,
                'n41'           	        => $n41,
                'n42'           	        => $n42,
                'n43'           	        => $n43,
                'n44'           	        => $n44,
                'total'           	        => $total,
                'admin'           	        => $admin,
                'tanggal'    	=> date('Y-m-d')
            ];
        }
        helper_log("add", "Menambah Penilaian");
        $save = $this->nilai_it->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Nilai_it.php */
