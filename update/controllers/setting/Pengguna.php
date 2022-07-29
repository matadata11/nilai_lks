<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('setting/M_user', 'user');
		
	}
	

	public function index()
	{
		$this->vars['user']			= $this->user->getUser();
		$this->vars['useradmin']	= $this->user->getUserAdmin();

		$get_prov = $this->db->select('*')->from('wilayah_provinsi')->get();
        $this->vars['provinsi'] = $get_prov->result();

		$this->vars['title']         = "Pengguna | Verval Kurikulum";
        $this->vars['content']       = 'setting/pengguna';
        $this->load->view('backend/main', $this->vars);
	}

	public function register()
	{
		if(isset($_POST['submit'])){
			$fullname 		= $this->input->post('fullname');
			$email 			= $this->input->post('email');
			$kupassword 		= $this->input->post('kupassword');
			$kupassword2 		= $this->input->post('kupassword2');
			$level 			= $this->input->post('level');

			if($kupassword != $kupassword2){
				echo "kuPassword Tidak Sama";
			}elseif($kupassword == $kupassword2){
				$data = array(
					'fullname' 		=> $fullname,
					'email' 		=> $email,
					'level' 		=> $level,
					'kupassword'      => password_hash($kupassword, PASSWORD_DEFAULT),
					'is_active' 	=> 1
				);
			
			$this->load->model('M_user');
			$id = $this->user->register_user($data);


			// Enkripsi $id
			$encrypted_id = md5($id);

			$this->load->library('email');
				$config = array();
				$config['charset'] 		= 'utf-8';
				$config['useragent'] 	= 'Codeigniter';
				$config['protocol']		= "smtp";
				$config['mailtype']		= "html";
				$config['smtp_host']	= "mail.notfound.id"; //pengaturan smtp
				$config['smtp_port']	= "587";
				$config['smtp_timeout']	= "400";
				$config['smtp_user']	= "lks@notfound.id"; // isi dengan email kamu
				$config['smtp_pass']	= "@matadata3010"; // isi dengan password kamu
				$config['crlf']			= "\r\n";
				$config['newline']		= "\r\n";
				$config['wordwrap'] 	= TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email

			
			// $htmlContent = '<div><a style="text-decoration: none;" href=' . site_url('./setting/Pengguna/verification/' . $encrypted_id) . '> Verifikasi</a></div>';


			// $htmlContent2 = '<div> <img src=' . base_url('login.svg') . '> alt="logo" width="180" class="mb-1 mt-2"></div>';


			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user']);
			$this->email->to($email);
			$this->email->subject("LKS");
			// $this->email->message($htmlContent);
			$this->email->message(
			// " $htmlContent2 <br>
			"
			Selamat Bergabung, berikut tercantum data akun anda. <br>
			Nama : $fullname <br>
			Email: $email <br>
			Password: $kupassword <br><br>
			url : https://lks.notfound.id
			<br><br><br><br>
			developer of TIM IT PSMK"
			// <br>Untuk Melakukan Login Silahkan Verifikasi Akun Anda Dengan Cara Klik Tautan Dibawah Ini.
			// <br> <button class='btn btn-block btn-md btn-primary'>$htmlContent</button> "
		);


		if ($this->email->send()) {
			echo $this->session->set_flashdata('notif_true', '<div class="alert alert-primary  alert-dismissible fade show" role="alert" id="notifications">
			<i class="mdi mdi-check-all me-2"></i>
			Email Terkirim ke <b Style="text-transform: capitalize;">' . $fullname . '</b> email <b>' . $email . '</b>.
		</div>');
		} else {
			echo $this->session->set_flashdata('notif_false', '<div class="alert alert-primary  alert-dismissible fade show" role="alert" id="notifications">
			<i class="mdi mdi-check-all me-2"></i>
			Email Gagal Terkirim ke <b Style="text-transform: capitalize;">' . $fullname . '</b> email <b>' . $email . '</b>.
		</div>');
			}
			redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function verification($id_admin)
	{
		$this->user->changeActiveState($id_admin);
		redirect('/');
	}

	public function update()
    {
        if(isset($_POST['submit'])){
                $id_admin 		= $this->input->post('id_admin', TRUE);
                $fullname    	= $this->input->post('fullname', TRUE);
                $email    		= $this->input->post('email', TRUE);
                $password    	= $this->input->post('password', TRUE);
                $password2    	= $this->input->post('password2', TRUE);
                $level    		= $this->input->post('level', TRUE);

                if($password != $password2){
                    echo "Password Tidak Sama";
                }elseif($password == $password2){
                $data = [
                    'id_admin'      => $id_admin,
                    'fullname'      => $fullname,
                    'email'        	=> $email,
                    'level'        	=> $level,
                    'password'   	=> password_hash($password, PASSWORD_DEFAULT),
					'status' 		=> 1,
                    'updated_at'    => date('Y-m-d H:m:s')
                ];
            }
            $save = $this->user->update($data, $id_admin);
            if($save){
                $this->session->set_flashdata('notif_true', '<div class="alert alert-primary  alert-dismissible fade show" role="alert" id="notifications"><i class="mdi mdi-check-all me-2"></i> Data Berhasil Diupload. </div>');
            }else{
                $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
            }
            redirect('/');
        }
    }

	public function updateadmin()
    {
        if(isset($_POST['submit'])){
                $id_admin 		= $this->input->post('id_admin', TRUE);
                $fullname    	= $this->input->post('fullname', TRUE);
                $email    		= $this->input->post('email', TRUE);
                $password    	= $this->input->post('password', TRUE);
                $password2    	= $this->input->post('password2', TRUE);
                $level    		= $this->input->post('level', TRUE);

                if($password != $password2){
                    echo "Password Tidak Sama";
                }elseif($password == $password2){
                $data = [
                    'id_admin'      => $id_admin,
                    'fullname'      => $fullname,
                    'email'        	=> $email,
                    'level'        	=> $level,
                    'password'   	=> password_hash($password, PASSWORD_DEFAULT),
                    'updated_at'    => date('Y-m-d H:m:s')
                ];
            }
            $save = $this->user->update($data, $id_admin);
            if($save){
                $this->session->set_flashdata('notif_true', '<div class="alert alert-primary  alert-dismissible fade show" role="alert" id="notifications"><i class="mdi mdi-check-all me-2"></i> Data Berhasil Diupdate. </div>');
            }else{
                $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


	public function destroy()
	{
		$notif = $this->user->delete();
		if ($notif) {
			$this->session->set_flashdata('notif_true', '<div class="alert alert-primary  alert-dismissible fade show" role="alert" id="notifications"><i class="mdi mdi-check-all me-2"></i> Data Berhasil Dihapus. </div>');
		} else {
			$this->session->set_flashdata('notif_false', 'Data Gagal Dihapus.');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}

}

/* End of file Pengguna.php */
