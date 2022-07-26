<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_lomba extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('lomba/M_lomba', 'lomba');
		
	}
	
	public function index()
	{
		$this->vars['lomba']	    = $this->lomba->getData();
		$this->vars['count']	    = $this->lomba->getJumlahLomba();

		$this->vars['title']    	= 'Mata Lomba LKS | LKS 2022';
        $this->vars['content']  	= 'lomba/read_lomba';
        $this->load->view('backend/main', $this->vars);
	}

	public function store()
    {
        if(isset($_POST['submit'])){
            $lomba 					= $this->input->post('lomba', TRUE);

            $data = [
                'lomba'           	=> $lomba,
                'created_at'    	=> date('Y-m-d')
            ];
        }
        $save = $this->lomba->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

	public function update()
    {
        if(isset($_POST['submit'])){
            $id_lomba 				= $this->input->post('id_lomba', TRUE);
            $lomba    				= $this->input->post('lomba', TRUE);

            $data = [
                'id_lomba'   		=> $id_lomba,
                'lomba'          	=> $lomba,
                'updated_at'    	=> date('Y-m-d')
            ];
        }
        $save = $this->lomba->update($data, $id_lomba);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

	public function destroy()
    {
        $save = $this->lomba->delete();
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Dihapus.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Dihapus.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


	// Import Data Menggunakan Excel
	public function import_excel()
	{
		$id_lomba    			= $this->input->post('id_lomba', TRUE);

		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$config['upload_path'] 		= realpath('public/excel/');
		$config['allowed_types'] 	= 'xlsx|xls|csv';
		$config['max_size'] 		= 0;
		$config['encrypt_name'] 	= false;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('dataexcel')) {
			$this->session->set_flashdata('notif_false', 'Ditambahkan');
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$data_upload       = $this->upload->data();
			$excelreader       = new PHPExcel_Reader_Excel2007();
			$loadexcel         = $excelreader->load('public/excel/' . $data_upload['file_name']);
			$sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

			$data = array();
			$numrow = 1;
			foreach ($sheet as $row) {
				if ($numrow > 1) {
					array_push($data, array(
						'id_lomba'   			=> $id_lomba,
						'lomba'					=> $row['A'],
						'peserta'				=> $row['B'],
						'created_at'    		=> date('Y-m-d H:m:s')
					));
				}
				$numrow++;
			}
			$notif = $this->db->insert_batch('mt_lomba', $data);
			unlink(realpath('public/excel/' . $data_upload['file_name']));
			if ($notif) {
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"id="notifications"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<p> Data Lomba Berhasil Di Upload</p></div>');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"id="notifications"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<p> Data Lomba Gagal di Upload</p></div>');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

}

/* End of file Mata_lomba.php */
