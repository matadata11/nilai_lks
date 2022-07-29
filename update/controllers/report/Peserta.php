<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('peserta/M_peserta', 'peserta');
		// $this->load->model('lomba/M_lomba', 'lomba');	
	}

	public function index()
	{
		$pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();

        // Mengambil data data dari database
        $cetak = $this->formulir->getPDF();

        // Kop Surat Sekolah
        $pdf->Cell(40,2,'',0,1,'L');
        $pdf->SetFont('Times','B',12);
        $pdf->Image('./public/img/logo.png',20,11,24);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(120,5.5,'KARTU PESERTA',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(132,5.5,'PPDB Daring SMK Se- Aceh',0,1,'C');
		$pdf->SetFont('Arial','',12);
        $pdf->Cell(170,5.5,'Bidang Pembinaan SMK. Dinas Pendidikan Aceh',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(131,5,'Tahun Pelajaran 2022/2023',0,1,'C');
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(105.8,4,'https://ppdb.radiwa.id',0,1,'C');
        // $pdf->Image('./public/img/logo.png',173,11,24);

        // Garis Bawah
        $pdf->Line(19.5,38,196.5,38);             
        $pdf->SetLineWidth(1); 
        $pdf->Line(20,39,196,39);             
        $pdf->SetLineWidth(0);                                                 
        $pdf->Ln();

        // Tulisan Biodata data
        // $pdf->Line(70,47.3,128,47.3);             
        $pdf->SetLineWidth(0);                                                 
        $pdf->Ln();


        // Biodata data
        $pdf->Image('./public/formulir/peserta/'.$cetak['photo_peserta'],161,55,35);


        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'No Peserta',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(40,7,$cetak['no_peserta'],0,1);

        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Kabupaten / Kota',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['nama_kabupaten'],0,1);

        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Sekolah Pilihan I',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['sekolah_id'],0,1);

        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Jurusan Pilihan I',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['jurusan_1'],0,1);

        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Sekolah Pilihan II',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['sekolah_id1'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Jurusan Pilihan II',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['jurusan_2'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,12,'',0,0,'L');
        $pdf->Cell(50,12,'BIODATA CALON PESERTA DIDIK',0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nama Lengkap',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['fullname'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Tempat Lahir',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['t_lahir'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(50,8,'Tanggal Lahir',0,0);
        $pdf->Cell(5,8,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,8,$cetak['tgl_lahir'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Jenis Kelamin',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        // $pdf->Cell(40,7,$cetak['j_kelamin'],0,1);

        if($cetak['j_kelamin'] == 'L'){
            $pdf->Cell(40,7,'Laki-laki',0,1);
        }elseif($cetak['j_kelamin'] == 'P'){
            $pdf->Cell(40,7,'Perempuan',0,1);
        }

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Agama',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['agama'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'No Handphone',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['hp'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Alamat',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['alamat'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,12,'',0,0,'L');
        $pdf->Cell(50,12,'DATA SEKOLAH (SMP/MTSn)',0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nomor Peserta UN',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['no_un'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nomor SKHUN',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['skhun'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Asal Sekolah',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['asal_sekolah'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Alamat Sekolah',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['alamat_sekolah'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,12,'',0,0,'L');
        $pdf->Cell(50,12,'DATA ORANG TU',0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nama Ayah / Wali',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['nama_ayah'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nama Ibu / Wali',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['nama_ibu'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Pekerjaan Ayah / Wali',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['pekerjaan_ayah'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Pekerjaan Ibu / Wali',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['pekerjaan_ibu'],0,1);

		$pdf->Ln();
		$pdf->Ln();
		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,12,'',0,0,'L');
        $pdf->Cell(50,12,'PERHATIAN',0,0);

		$pdf->SetLineWidth(0); 
		$pdf->Line(20,253,196,253);             
        $pdf->Ln();

		$pdf->SetFont('Arial','',10);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->MultiCell(180,4,'* Simpan dan Cetak Kartu Pendaftaran Anda Dan Serahkan Ke Panitia Pendaftaran Pada Saat Daftar Ulang Sesuai Dengan Jadwal Yang Telah Ditentukan.',0,1);


        $pdf->SetTitle('Kartu_Peserta_PPDB_Online_'.$cetak['fullname']);
        $pdf->Output('/Kartu_Peserta_PPDB_Online_'.$cetak['fullname'].' | '.date('Y-m-d').strtolower('.pdf'),'I');
        

	}

	public function download()
	{
		$pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();

        // Mengambil data data dari database
        $cetak = $this->formulir->getDataPDF();

        // Kop Surat Sekolah
        $pdf->Cell(40,2,'',0,1,'L');
        $pdf->SetFont('Times','B',12);
        $pdf->Image('./public/img/logo.png',20,11,24);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(120,5.5,'KARTU PESERTA',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(132,5.5,'PPDB Daring SMK Se- Aceh',0,1,'C');
		$pdf->SetFont('Arial','',12);
        $pdf->Cell(170,5.5,'Bidang Pembinaan SMK. Dinas Pendidikan Aceh',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(131,5,'Tahun Pelajaran 2022/2023',0,1,'C');
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(105.8,4,'https://ppdb.radiwa.id',0,1,'C');
        // $pdf->Image('./public/img/logo.png',173,11,24);

        // Garis Bawah
        $pdf->Line(19.5,38,196.5,38);             
        $pdf->SetLineWidth(1); 
        $pdf->Line(20,39,196,39);             
        $pdf->SetLineWidth(0);                                                 
        $pdf->Ln();

        // Tulisan Biodata data
        // $pdf->Line(70,47.3,128,47.3);             
        $pdf->SetLineWidth(0);                                                 
        $pdf->Ln();


        // Biodata data
        $pdf->Image('./public/formulir/peserta/'. $cetak['photo_peserta'],161,55,35);


        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'No Peserta',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(40,7,$cetak['no_peserta'],0,1);

        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Kabupaten / Kota',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['nama_kabupaten'],0,1);

        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Sekolah Pilihan I',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['sekolah_id'],0,1);

        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Jurusan Pilihan I',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['jurusan_1'],0,1);

        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Sekolah Pilihan II',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['sekolah_id1'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Jurusan Pilihan II',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['jurusan_2'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,12,'',0,0,'L');
        $pdf->Cell(50,12,'BIODATA CALON PESERTA DIDIK',0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nama Lengkap',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['fullname'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Tempat Lahir',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['t_lahir'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(50,8,'Tanggal Lahir',0,0);
        $pdf->Cell(5,8,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,8,$cetak['tgl_lahir'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Jenis Kelamin',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        // $pdf->Cell(40,7,$cetak['j_kelamin'],0,1);

        if($cetak['j_kelamin'] == 'L'){
            $pdf->Cell(40,7,'Laki-laki',0,1);
        }elseif($cetak['j_kelamin'] == 'P'){
            $pdf->Cell(40,7,'Perempuan',0,1);
        }

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Agama',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['agama'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'No Handphone',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['hp'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Alamat',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['alamat'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,12,'',0,0,'L');
        $pdf->Cell(50,12,'DATA SEKOLAH (SMP/MTSn)',0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nomor Peserta UN',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['no_un'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nomor SKHUN',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['skhun'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Asal Sekolah',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['asal_sekolah'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Alamat Sekolah',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['alamat_sekolah'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,12,'',0,0,'L');
        $pdf->Cell(50,12,'DATA ORANG TU',0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nama Ayah / Wali',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['nama_ayah'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Nama Ibu / Wali',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['nama_ibu'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Pekerjaan Ayah / Wali',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['pekerjaan_ayah'],0,1);

		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,7,'',0,0,'L');
        $pdf->Cell(50,7,'Pekerjaan Ibu / Wali',0,0);
        $pdf->Cell(5,7,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,7,$cetak['pekerjaan_ibu'],0,1);

		$pdf->Ln();
		$pdf->Ln();
		$pdf->SetFont('Arial','B',11);
        $pdf->Cell(8.5,12,'',0,0,'L');
        $pdf->Cell(50,12,'PERHATIAN',0,0);

		$pdf->SetLineWidth(0); 
		$pdf->Line(20,253,196,253);             
        $pdf->Ln();

		$pdf->SetFont('Arial','',10);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->MultiCell(180,4,'* Simpan dan Cetak Kartu Pendaftaran Anda Dan Serahkan Ke Panitia Pendaftaran Pada Saat Daftar Ulang Sesuai Dengan Jadwal Yang Telah Ditentukan.',0,1);


        $pdf->SetTitle('Biodata_Peserta'. $cetak['fullname']);
        $pdf->Output('/Biodata_Peserta'. $cetak['fullname'].' | '.date('Y-m-d').strtolower('.pdf'),'D');
        

	}



	// ++++++++++++++++++++++++
	// export data
	public function export_excel(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		// Panggil class PHPExcel nya
		$excel = new PHPExcel();
		// Settingan awal fil excel
		$excel->getProperties()->setCreator('My Notes Code')
			->setLastModifiedBy('My Notes Code')
			->setTitle("Data Peserta Didik Baru")
			->setSubject("Data SMK")
			->setDescription("Laporan Data Peserta Didik Baru")
			->setKeywords("Data Peserta Didik Baru");
		// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$style_col = array(
		  	'font' => array('bold' => true), // Set font nya jadi bold
			'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
		),
			'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);
	// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
	$style_row = array(
		'alignment' => array(
		'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
		),
		'borders' => array(
		'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
		'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
		'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
		'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
		)
		);
		$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA PESERTA DIDIK BARU"); // Set kolom A1 dengan tulisan "DATA KORE REKENING ANGGARAN"
		$excel->getActiveSheet()->mergeCells('A1:W1'); // Set Merge Cell pada kolom A1 sampai E1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
		// Buat header tabel nya pada baris ke 3
		$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); // Set kolom B3 dengan tulisan "nisn"
		$excel->setActiveSheetIndex(0)->setCellValue('C3', "Nama Peserta Didik"); // Set kolom C3 dengan tulisan "fullname"
		$excel->setActiveSheetIndex(0)->setCellValue('D3', "kabupaten_id"); // Set kolom D3 dengan tulisan "kabupaten_id"
		$excel->setActiveSheetIndex(0)->setCellValue('E3', "sekolah_id"); // Set kolom E3 dengan tulisan "sekolah_id"
		$excel->setActiveSheetIndex(0)->setCellValue('F3', "jurusan_1"); // Set kolom E3 dengan tulisan "jurusan_1"
		$excel->setActiveSheetIndex(0)->setCellValue('G3', "sekolah_id1"); // Set kolom E3 dengan tulisan "sekolah_id1"
		$excel->setActiveSheetIndex(0)->setCellValue('H3', "jurusan_2"); // Set kolom E3 dengan tulisan "jurusan_2"
		$excel->setActiveSheetIndex(0)->setCellValue('I3', "t_lahir"); // Set kolom E3 dengan tulisan "t_lahir"
		$excel->setActiveSheetIndex(0)->setCellValue('J3', "tgl_lahir"); // Set kolom F3 dengan tulisan "tgl_lahir"
		$excel->setActiveSheetIndex(0)->setCellValue('K3', "j_kelamin"); // Set kolom F3 dengan tulisan "j_kelamin"
		$excel->setActiveSheetIndex(0)->setCellValue('L3', "agama"); // Set kolom F3 dengan tulisan "agama"
		$excel->setActiveSheetIndex(0)->setCellValue('M3', "hp"); // Set kolom F3 dengan tulisan "hp"
		$excel->setActiveSheetIndex(0)->setCellValue('N3', "alamat"); // Set kolom F3 dengan tulisan "alamat"
		$excel->setActiveSheetIndex(0)->setCellValue('O3', "no_un"); // Set kolom F3 dengan tulisan "no_un"
		$excel->setActiveSheetIndex(0)->setCellValue('P3', "skhun"); // Set kolom F3 dengan tulisan "skhun"
		$excel->setActiveSheetIndex(0)->setCellValue('Q3', "asal_sekolah"); // Set kolom F3 dengan tulisan "asal_sekolah"
		$excel->setActiveSheetIndex(0)->setCellValue('R3', "alamat_sekolah"); // Set kolom F3 dengan tulisan "alamat_sekolah"
		$excel->setActiveSheetIndex(0)->setCellValue('S3', "nama_ayah"); // Set kolom F3 dengan tulisan "nama_ayah"
		$excel->setActiveSheetIndex(0)->setCellValue('T3', "nama_ibu"); // Set kolom F3 dengan tulisan "nama_ibu"
		$excel->setActiveSheetIndex(0)->setCellValue('U3', "pekerjaan_ayah"); // Set kolom F3 dengan tulisan "pekerjaan_ayah"
		$excel->setActiveSheetIndex(0)->setCellValue('V3', "pekerjaan_ibu"); // Set kolom F3 dengan tulisan "pekerjaan_ibu"
		$excel->setActiveSheetIndex(0)->setCellValue('W3', "kelulusan"); // Set kolom F3 dengan tulisan "kelulusan"





		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);


		// Panggil function view yang ada di Modelsekolah untuk menampilkan semua data formulir
		$getformulir = $this->formulir->view();
		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
		foreach($getformulir as $data){ // Lakukan looping pada variabel siswa
		$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
		$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
		$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->fullname);
		$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->kabupaten_id);
		$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->sekolah_id);
		$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->jurusan_1);
		$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->sekolah_id1);
		$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->jurusan_2);
		$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->t_lahir);
		$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->tgl_lahir);
		$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->j_kelamin);
		$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->agama);
		$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->hp);
		$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->alamat);
		$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->no_un);
		$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->skhun);
		$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data->asal_sekolah);
		$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data->alamat_sekolah);
		$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data->nama_ayah);
		$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data->nama_ibu);
		$excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data->pekerjaan_ayah);
		$excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data->pekerjaan_ibu);
		$excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data->kelulusan);
		
		// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
		$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
		
		  $no++; // Tambah 1 setiap kali looping
		  $numrow++; // Tambah 1 setiap kali looping
		}
		// Set width kolom
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(25); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(15); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(30); // Set width kolom F
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(30); // Set width kolom G
		$excel->getActiveSheet()->getColumnDimension('H')->setWidth(30); // Set width kolom H
		$excel->getActiveSheet()->getColumnDimension('I')->setWidth(40); // Set width kolom I
		$excel->getActiveSheet()->getColumnDimension('J')->setWidth(10); // Set width kolom J
		$excel->getActiveSheet()->getColumnDimension('K')->setWidth(10); // Set width kolom K
		$excel->getActiveSheet()->getColumnDimension('L')->setWidth(12); // Set width kolom L
		$excel->getActiveSheet()->getColumnDimension('M')->setWidth(27); // Set width kolom M
		$excel->getActiveSheet()->getColumnDimension('N')->setWidth(57); // Set width kolom N
		$excel->getActiveSheet()->getColumnDimension('O')->setWidth(27); // Set width kolom O
		$excel->getActiveSheet()->getColumnDimension('P')->setWidth(27); // Set width kolom P
		$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(27); // Set width kolom Q
		$excel->getActiveSheet()->getColumnDimension('R')->setWidth(57); // Set width kolom R
		$excel->getActiveSheet()->getColumnDimension('S')->setWidth(27); // Set width kolom S
		$excel->getActiveSheet()->getColumnDimension('T')->setWidth(27); // Set width kolom T
		$excel->getActiveSheet()->getColumnDimension('U')->setWidth(27); // Set width kolom U
		$excel->getActiveSheet()->getColumnDimension('V')->setWidth(27); // Set width kolom V
		$excel->getActiveSheet()->getColumnDimension('W')->setWidth(10); // Set width kolom W
		
		// Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
		// Set orientasi kertas jadi LANDSCAPE
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		// Set judul file excel nya
		$excel->getActiveSheet(0)->setTitle("Laporan Data Peserta Didik Baru");
		$excel->setActiveSheetIndex(0);
		// Proses file excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Data PPDB.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	}
	

	
}

/* End of file Peserta.php */
