<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/login');
		
	}

    public function checklogin()
    {
        if(isset($_POST['submit'])){
			$kuusername 	    = htmlspecialchars($this->input->post('kuusername', TRUE));
			$kupassword 		= $this->input->post('kupassword', TRUE);

			$account = $this->db->get_where('mt_admin', ['kuusername' => $kuusername])->row_array();

			if($account){
				// admin ada
				if($account['is_active'] == 1){
					// Cek Password
					if(password_verify($kupassword, $account['kupassword'])){
						$data = [
							'id_admin'	        => $account['id_admin'],
							'fullname'	        => $account['fullname'],
							'kuusername'	    => $account['kuusername'],
							'bidang'	        => $account['bidang'],
							'level'	        	=> $account['level'],
							'login'		        => 'KuOke',
						];
						$this->session->set_userdata($data);
						redirect('dashboard');
					}else{
						// Password Salah
						$this->session->set_flashdata('notif_false','Maaf, Password Yang Anda Masukan Salah.');
						redirect($_SERVER['HTTP_REFERER']);
					}
				}else{
					// Email belum di aktivasi
					$this->session->set_flashdata('notif_false','Email Belum Aktif');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}else{
				// Email Tidak Terdaftar
				$this->session->set_flashdata('notif_false','Maaf, Email Anda Gunakan Belum Terdaftar.');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

	public function logout2()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

	public function checkjuri()
    {
        if(isset($_POST['submit'])){
			$no_reg 	    = htmlspecialchars($this->input->post('no_reg', TRUE));

			$account = $this->db->get_where('mt_juri', ['no_reg' => $no_reg])->row_array();

			if($account){
				// admin ada
				if($account['is_active'] == 1){
					$data = [
						'id_juri'	        => $account['id_juri'],
						'lomba_id'	        => $account['lomba_id'],
						'fullname'	        => $account['fullname'],
						'email'	            => $account['email'],
						'bidang'	        => $account['bidang'],
						'level'	        	=> $account['level'],
						'login'		        => 'JuriOk',
					];
					$this->session->set_userdata($data);
					redirect('home');
				}else{
					// Email belum di aktivasi
					$this->session->set_flashdata('notif_false','Email Belum Aktif');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}else{
				// Email Tidak Terdaftar
				$this->session->set_flashdata('notif_false','Maaf, Email Anda Gunakan Belum Terdaftar.');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

}

/* End of file Login.php */
