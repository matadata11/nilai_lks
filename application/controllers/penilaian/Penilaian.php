<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian/M_penilaian', 'nilai');
		$this->load->model('lomba/M_lomba', 'lomba');
		$this->load->model('penilaian/M_nilai_it', 'nilai_it');
		$this->load->model('penilaian/M_cloud', 'cloud');
		$this->load->model('penilaian/M_cabinet', 'cabinet');
		$this->load->model('penilaian/M_electrical', 'electrical');
		$this->load->model('penilaian/M_mobile', 'mobile');
		$this->load->model('penilaian/M_electronics', 'electronics');
		$this->load->model('penilaian/M_farmacy', 'farmacy');
		$this->load->model('penilaian/M_fashion', 'fashion');
		$this->load->model('penilaian/M_landscape', 'landscape');
		$this->load->model('penilaian/M_livestock', 'livestock');
		$this->load->model('penilaian/M_mechanical', 'mechanical');
		$this->load->model('penilaian/M_motor', 'motor');
		$this->load->model('penilaian/M_nautica', 'nautica');
		$this->load->model('penilaian/M_pemasaran', 'pemasaran');
		$this->load->model('penilaian/M_refrigeration', 'refrigeration');
		$this->load->model('penilaian/M_restaurant', 'restaurant');
		$this->load->model('penilaian/M_design', 'design');
		$this->load->model('penilaian/M_wall', 'wall');
		$this->load->model('penilaian/M_welding', 'welding');
	}
	

	public function index()
	{
		$this->vars['total']	    = $this->nilai_it->getTotal();
		$this->vars['penilaian']	= $this->nilai->getData();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_nilai';
        $this->load->view('backend/main', $this->vars);
	}

    // cloud
    public function cloud()
	{
		$this->vars['total']	    = $this->cloud->getTotal();
		// $this->vars['penilaian']	= $this->nilai->getData();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_cloud';
        $this->load->view('backend/main', $this->vars);
	}

    public function cabinet()
	{
		$this->vars['total']	    = $this->cabinet->getTotal();
		// $this->vars['penilaian']	= $this->nilai->getData();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_cabinet';
        $this->load->view('backend/main', $this->vars);
	}

    public function electrical()
	{
		$this->vars['total']	    = $this->electrical->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_electrical';
        $this->load->view('backend/main', $this->vars);
	}

    public function mobile()
	{
		$this->vars['total']	    = $this->mobile->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_mobile';
        $this->load->view('backend/main', $this->vars);
	}

    public function electronics()
	{
		$this->vars['total']	    = $this->electronics->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_electronics';
        $this->load->view('backend/main', $this->vars);
	}

    public function farmacy()
	{
		$this->vars['total']	    = $this->farmacy->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_electronics';
        $this->load->view('backend/main', $this->vars);
	}

    public function fashion()
	{
		$this->vars['total']	    = $this->fashion->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_fashion';
        $this->load->view('backend/main', $this->vars);
	}

    public function landscape()
	{
		$this->vars['total']	    = $this->landscape->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_landscape';
        $this->load->view('backend/main', $this->vars);
	}


	public function livestock()
	{
		$this->vars['total']	    = $this->livestock->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_livestock';
        $this->load->view('backend/main', $this->vars);
	}
    
	public function mechanical()
	{
		$this->vars['total']	    = $this->mechanical->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_mechanical';
        $this->load->view('backend/main', $this->vars);
	}

    public function motor()
	{
		$this->vars['total']	    = $this->motor->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_motor';
		$this->load->view('backend/main', $this->vars);
    }

    
    public function nautica()
	{
		$this->vars['total']	    = $this->nautica->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_nautica';
		$this->load->view('backend/main', $this->vars);
    }

    public function pemasaran()
	{
		$this->vars['total']	    = $this->pemasaran->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_pemasaran';
		$this->load->view('backend/main', $this->vars);
    }

    public function refrigeration()
	{
		$this->vars['total']	    = $this->refrigeration->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_refrigeration';
		$this->load->view('backend/main', $this->vars);
    }

	public function restaurant()
	{
		$this->vars['total']	    = $this->restaurant->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_restaurant';
		$this->load->view('backend/main', $this->vars);
    }

	public function design()
	{
		$this->vars['total']	    = $this->design->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_design';
		$this->load->view('backend/main', $this->vars);
    }

    public function wall()
	{
		$this->vars['total']	    = $this->wall->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_wall';
<<<<<<< HEAD
=======
		$this->load->view('backend/main', $this->vars);
    }

	public function welding()
	{
		$this->vars['total']	    = $this->welding->getTotal();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'NILAI LKS | LKS 2022';
        $this->vars['content']  	= 'nilai/read_welding';
>>>>>>> fdca46ec892d2c96ab1f979f00cd4fe08900c66a
		$this->load->view('backend/main', $this->vars);
    }

	public function store()
    {
        if(isset($_POST['submit'])){
            $admin 					= $this->input->post('admin', TRUE);
            $lomba_id 				= $this->input->post('lomba_id', TRUE);

            $data = [
                'admin'           	=> $admin,
                'lomba_id'          => $lomba_id,
                'tanggal'    		=> date('Y-m-d')
            ];
        }
        $save = $this->db->get_where('mt_penilaian', ['lomba_id' => $lomba_id])->row_array();
        if($save){
            $this->session->set_flashdata('notif_false', '<div class="alert alert-danger  alert-dismissible fade show" role="alert" id="notifications"><i class="mdi mdi-check-all me-2"></i> Hanya Boleh Absen satu kali . </div>..');
        }else{
            $flashdata  = $this->nilai->entry($data);
            
        }
        if($flashdata){
            $this->session->set_flashdata('notif_true', 'Terima Kasih');
            $this->session->set_flashdata('audio', site_url('public/audio/terimakasih.mp3'));
            
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function destroy()
    {
        $save = $this->nilai->delete();
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Dihapus.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Dihapus.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Penilaian.php */
