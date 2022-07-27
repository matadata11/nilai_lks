<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Juri extends admin_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('juri/M_juri', 'juri');
		$this->load->model('lomba/M_lomba', 'lomba');
    }

	public function index()
	{
		$this->vars['juri']	    	= $this->juri->getData();
		$this->vars['kode'] 		= $this->juri->kode();
		$this->vars['lomba']	    = $this->lomba->getData();
		
		$this->vars['title']    	= 'Data Juri | LKS 2022';
        $this->vars['content']  	= 'juri/read_juri';
        $this->load->view('backend/main', $this->vars);
	}

	public function store()
	{
		if(isset($_POST['submit'])){
			$admin_juri 	= $this->input->post('admin_juri');
			$fullname 		= $this->input->post('fullname');
			$instansi 		= $this->input->post('instansi');
			$email 			= $this->input->post('email');
			$no_reg 		= $this->input->post('no_reg');
			$bidang 		= $this->input->post('bidang');
			$level 			= $this->input->post('level');
			$lomba_id 		= $this->input->post('lomba_id');

			// if($password != $password2){
			// 	echo "Password Tidak Sama";
			// }elseif($password == $password2){
				$data = array(
					'admin_juri' 	=> $admin_juri,
					'fullname' 		=> $fullname,
					'instansi' 		=> $instansi,
					'email' 		=> $email,
					'no_reg' 		=> $no_reg,
					'bidang' 		=> $bidang,
					'level' 		=> $level,
					'lomba_id' 		=> $lomba_id,
					// 'password'      => password_hash($password, PASSWORD_DEFAULT),
					'is_active' 	=> 1,
					'created_at'	=> date('Y-m-d')
				);
			
			$this->load->model('juri/M_juri');
			$id = $this->juri->register_user($data);


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
				$config['smtp_user']	= "no-reply@notfound.id"; // isi dengan email kamu
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
			$this->email->subject("Verifikasi Akun NilaiKU Lomba Karya Siswa. Bidang Pembinaan SMK Dinas Pendidikan Aceh");
			$this->email->message($htmlContent);
			$this->email->message(
			// " $htmlContent2 <br>
			"
			Selamat Bergabung Sebagai JURI LOMBA KARYA SISWA PROVINSI ACEH 2022, berikut tercantum data akun anda. <br>
			Nama : $fullname <br>
			Email: $email <br>
			No Reg: $no_reg <br><br>
			url : https://nilaiku.notfound.id
			<br><br><br><br>
			developer of Not Found dot Indonesia (notfound.id)"
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

		public function update()
		{
			if(isset($_POST['submit'])){
				$id_juri 				= $this->input->post('id_juri', TRUE);
				$admin_juri 			= $this->input->post('admin_juri');
				$fullname 				= $this->input->post('fullname');
				$instansi 				= $this->input->post('instansi');
				$email 					= $this->input->post('email');
				$no_reg 				= $this->input->post('no_reg');
				$bidang 				= $this->input->post('bidang');
				$lomba_id 				= $this->input->post('lomba_id');

				$data = [
					'id_juri'   		=> $id_juri,
					'admin_juri' 		=> $admin_juri,
					'fullname' 			=> $fullname,
					'instansi' 			=> $instansi,
					'email' 			=> $email,
					'no_reg' 			=> $no_reg,
					'bidang' 			=> $bidang,
					'lomba_id' 			=> $lomba_id,
					'updated_at'    	=> date('Y-m-d')
				];
			}
			$save = $this->juri->update($data, $id_juri);
			if($save){
				$this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
			}else{
				$this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}

		public function destroy()
		{
			$save = $this->juri->delete();
			if($save){
				$this->session->set_flashdata('notif_true', 'Data Berhasil Dihapus.');
			}else{
				$this->session->set_flashdata('notif_false', 'Data Gagal Dihapus.');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}

}
/* End of file Juri.php */
