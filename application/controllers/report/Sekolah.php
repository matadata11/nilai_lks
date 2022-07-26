<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('M_sekolah', 'sekolah');
        $this->load->model('M_kab','kab');
        $this->load->model('M_kec');
	}

	public function index()
	{
		$pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();

        // Mengambil data data dari database
        $cetak = $this->sekolah->getPDF();

        // Kop Surat Sekolah
        $pdf->Cell(40,2,'',0,1,'L');
        $pdf->SetFont('Times','B',12);
        $pdf->Image('./public/img/pancacita.png',20,11,21);
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(192,6,'PEMERINTAH ACEH',0,1,'C');
        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(192,6,'D I N A S  P E N D I D I K A N',0,1,'C');
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(192,4,'Jalan Tgk. H. Mohd Daud Beureueh Nomor 12 banda Aceh Kode Pos 23121',0,1,'C');
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(192,4,'Telepon (0651) 22620,, Faks (0651) 32386',0,1,'C');
		$pdf->SetFont('Arial','',10);
        $pdf->Cell(192,4,'Website: disdik.acehprov.go.id, Email : disdik@acehprov.go.id',0,1,'C');
        // $pdf->Image('./public/img/logo.png',173,11,24);

        // Garis Bawah
        $pdf->Line(20,37,196,37);             
        $pdf->SetLineWidth(1); 
        $pdf->Line(20,37,196,37);             
        $pdf->SetLineWidth(0);                                                 
        $pdf->Ln();
        $pdf->Ln();

        // Tulisan Biodata data
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(192,6,'SURAT PERNYATAAN PPDB',0,1,'C');
        // $pdf->Line(70,47.3,128,47.3);             
        $pdf->SetLineWidth(0);                                                 
        $pdf->Ln();


        // Biodata data
        // $pdf->Image('./public/img/qr/'.$cetak['qr_code'],162,55,35);

        $pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(40,8,'Saya yang bertanda tangan di bawah ini :',0,1);

        $pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(50,8,'Nama Lengkap',0,0);
        $pdf->Cell(5,8,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,8,$cetak['fullname'],0,1);

        $pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(50,8,'Nomor Identitas Pegawai',0,0);
        $pdf->Cell(5,8,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,8,$cetak['nip'],0,1);

        $pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(50,8,'Jabatan',0,0);
        $pdf->Cell(5,8,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,8,$cetak['jabatan'],0,1);

        $pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(50,8,'Satuan Pendidikan',0,0);
        $pdf->Cell(5,8,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,8,$cetak['nama_sek'],0,1);

        $pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(50,8,'NPSN',0,0);
        $pdf->Cell(5,8,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,8,$cetak['npsn'],0,1);

		$pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(50,8,'Rombel',0,0);
        $pdf->Cell(5,8,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,8,$cetak['rombel'].' Rombel',0,1);

		$pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(50,8,'Kuota',0,0);
        $pdf->Cell(5,8,':',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(40,8,$cetak['kuota'].' Peserta',0,1);

        $pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,10,'',0,0,'L');
        $pdf->MultiCell(180,8,'Menyatakan bahwa Data di atas benar adanya, dan siap melaksanakan penerimaan Peserta Didik Baru di '.$cetak['nama_sek']. ' sesuai dengan Kuota yang kami ajukan. Jika terjadi ketidak samaan saya siap menerima Sangsi.',0,1);

        $pdf->SetFont('Arial','',11);
        $pdf->Cell(8.5,8,'',0,0,'L');
        $pdf->Cell(40,8,'Demikian surat ini saya buat dengan penuh kesadaran.',0,1);

        // TTD 
        $pdf->Cell(10,20,'',0,1);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(123.5,6,'',0,0);
        $pdf->Cell(10,6,$cetak['nama_desa'].', '.indo_date(date('Y-m-d')),0,1, 'L');
        $pdf->Cell(123.5,6,'',0,0);
        $pdf->Cell(10,6,'Kepala Sekolah',0,1, 'L');
        $pdf->Cell(123.5,5,'',0,1);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(100,8,'',0,0,'C');
        $pdf->Cell(21,12,'Materai',1,1, 'C');
        $pdf->Cell(123.5,19,'',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(10,8,$cetak['fullname'],0,1, 'L');
        $pdf->Cell(123.5,6,'',0,0);
        $pdf->Cell(10,3,'NIP.'. $cetak['nip'],0,1, 'L');

        $pdf->SetTitle($cetak['nama_sek'].'-'.$cetak['npsn']);
        $pdf->Output($cetak['nama_sek'].'-'.$cetak['npsn'].' '.date('Y-m-d').strtolower('.pdf'),'I');
        

	}
	

}

/* End of file Biodata_data.php */
