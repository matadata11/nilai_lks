<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('peserta/M_peserta', 'peserta');
		$this->load->model('lomba/M_lomba', 'lomba');	
	}

	function add_ajax_kab($id_prov)
	{
    	$query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
    	$data = "<option value=''>- Select Kabupaten -</option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id_kabupaten."'>".$value->nama_kabupaten."</option>";
    	}
    	echo $data;
	}

	function add_ajax_kec($id_kab)
	{
    	$query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
    	$data = "<option value=''> - Pilih Kecamatan - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id_kecamatan."'>".$value->nama_kecamatan."</option>";
    	}
    	echo $data;
	}

	function add_ajax_des($id_kec)
	{
    	$query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
    	$data = "<option value=''> - Pilih Desa - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id_desa."'>".$value->nama_desa."</option>";
    	}
    	echo $data;
	}

	function add_ajax_sek($id_des)
	{
    	$query = $this->db->get_where('wilayah_sekolah',array('desa_id'=>$id_des));
    	$data = "<option value=''> - Pilih sekolah - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama_sek."</option>";
    	}
    	echo $data;
	}

    function add_ajax_jur($id_jur)
	{
    	$query = $this->db->get_where('wilayah_jurusan',array('sekolah_id'=>$id_jur));
    	$data = "<option value=''> - Pilih jurusan - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama_jur."</option>";
    	}
    	echo $data;
	}
	

	public function index()
	{

		$get_prov = $this->db->select('*')->from('wilayah_provinsi')->get();
        $this->vars['provinsi'] = $get_prov->result();

		$this->vars['peserta']	    = $this->peserta->getData();
		$this->vars['lomba']	    = $this->lomba->getData();

		$this->vars['title']    	= 'Peserta Terdaftar LKS | LKS 2022';
        $this->vars['content']  	= 'peserta/read_peserta';
        $this->load->view('backend/main', $this->vars);
	}

	public function store()
	{
		if(isset($_POST['submit'])){
			$bidang 				= $this->input->post('bidang');
			$fullname 				= $this->input->post('fullname');
			$nis 					= $this->input->post('nis');
			$tmp_lahir 				= $this->input->post('tmp_lahir');
			$tgl_lahir 				= $this->input->post('tgl_lahir');
			$kelamin 				= $this->input->post('kelamin');
			$agama 					= $this->input->post('agama');
			$hp 					= $this->input->post('hp');
			$sekolah_asal 			= $this->input->post('sekolah_asal');
			$kelas 					= $this->input->post('kelas');
			$alamat 				= $this->input->post('alamat');
			$no_tlp 				= $this->input->post('no_tlp');
			$email 					= $this->input->post('email');
			$bank 					= $this->input->post('bank');
			$nama 					= $this->input->post('nama');
			$no_rek 				= $this->input->post('no_rek');
			$provinsi_id 			= $this->input->post('provinsi_id');
			$kabupaten_id 			= $this->input->post('kabupaten_id');

			// if($password != $password2){
			// 	echo "Password Tidak Sama";
			// }elseif($password == $password2){
				$data = array(
					'bidang' 		=> $bidang,
					'fullname' 		=> $fullname,
					'nis' 			=> $nis,
					'tmp_lahir' 	=> $tmp_lahir,
					'tgl_lahir' 	=> $tgl_lahir,
					'kelamin' 		=> $kelamin,
					'agama' 		=> $agama,
					'hp' 			=> $hp,
					'sekolah_asal' 	=> $sekolah_asal,
					'kelas' 		=> $kelas,
					'alamat' 		=> $alamat,
					'no_tlp' 		=> $no_tlp,
					'email' 		=> $email,
					'bank' 			=> $bank,
					'nama' 			=> $nama,
					'no_rek' 		=> $no_rek,
					'provinsi_id' 	=> $provinsi_id,
					'kabupaten_id' 	=> $kabupaten_id,
					// 'password'   => password_hash($password, PASSWORD_DEFAULT),
					'tanggal'		=> date('Y-m-d')
				);
			
			$this->load->model('peserta/M_peserta');
			$id = $this->peserta->register_user($data);


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

			
			$htmlContent = '<div><a style="text-decoration: none;" href=' . site_url('./report/Peserta/getPDF/' . $encrypted_id) . '> Cetak</a></div>';


			// $htmlContent2 = '<div> <img src=' . base_url('login.svg') . '> alt="logo" width="180" class="mb-1 mt-2"></div>';


			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user']);
			$this->email->to($email);
			$this->email->subject("NILAIKU");
			$this->email->message($htmlContent);
			$this->email->message(
			// " $htmlContent2 <br>
			"
			Terima Kasih Sudah Mendaftar LOMBA KOMPETENSI SISWA PROVINSI ACEH 2022, berikut tercantum data akun anda. <br>
			Nama : $fullname <br>
			Email: $email <br>
			Mata Lomba: $bidang <br>
			Alas Sekolah: $sekolah_asal <br>
			Kelas: $kelas <br><br>
			developer of Not Found dot Indonesia (notfound.id)
			<br><br><br><br>
			<br>Untuk Melakukan Mencetak Karti Biodata Anda Dengan Cara Klik Tautan Dibawah Ini.
			<br> <button class='btn btn-block btn-md btn-primary'>$htmlContent</button> "
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

		public function destroy()
    {
        $save = $this->peserta->delete();
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Dihapus.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Dihapus.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Peserta.php */
