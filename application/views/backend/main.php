<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title;?> - Portal Data Berbasis Cloud</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= __css('bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('nku-styles.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= __css('components.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= __css('all.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('datatables.css')?>">
    <link href="<?= __img('logo_nilai.png');?>" rel="shortcut icon">

    <style>
        #notifications {

            cursor: pointer;
            position: fixed;
            right: 0px;
            z-index: 9999;
            top: 20px;
            margin-bottom: 22px;
            margin-right: 15px;
            min-width: 50px;
        }

        #notif_hapus {
            cursor: pointer;
            position: fixed;
            right: 0px;
            z-index: 9999;
            bottom: -20px;
            margin-bottom: 22px;
            margin-right: 15px;
            min-width: 30px;
        }
    </style>

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->

</head>
<body>

<?php
            //ubah timezone menjadi jakarta
            date_default_timezone_set("Asia/Jakarta");

            //ambil jam dan menit
            $jam = date('H:i');

            //atur salam menggunakan IF
            if ($jam > '05:30' && $jam < '10:00') {
                $salam = 'Pagi';
            } elseif ($jam >= '10:00' && $jam < '15:00') {
                $salam = 'Siang';
            } elseif ($jam >= '15:00' && $jam < '18:00' ) {
                $salam = 'Sore';
            } elseif ($jam >= '18:00' && $jam < '24:00' ) {
                $salam = 'Malam';
            } else {
                $salam = 'Dini Hari';
            }

            ?>

            <?php
                function tanggal_indonesia($tanggal){
                    $bulan = array (
                    1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                    );
                    
                    $pecahkan = explode('-', $tanggal);
                    
                    // variabel pecahkan 0 = tanggal
                    // variabel pecahkan 1 = bulan
                    // variabel pecahkan 2 = tahun
                    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                }
                
                // echo tanggal_indonesia(date('Y-m-d')); // Hasilnya menampilkan format tanggal 11 Oktober 2017
            ?>

            <?php 
            
            function hari_ini(){
                $hari = date ("D");
            
                switch($hari){
                    case 'Sun':
                        $hari_ini = "Minggu";
                    break;
            
                    case 'Mon':			
                        $hari_ini = "Senin";
                    break;
            
                    case 'Tue':
                        $hari_ini = "Selasa";
                    break;
            
                    case 'Wed':
                        $hari_ini = "Rabu";
                    break;
            
                    case 'Thu':
                        $hari_ini = "Kamis";
                    break;
            
                    case 'Fri':
                        $hari_ini = "Jumat";
                    break;
            
                    case 'Sat':
                        $hari_ini = "Sabtu";
                    break;
                    
                    default:
                        $hari_ini = "Tidak di ketahui";		
                    break;
                }
            
                return "<b>" . $hari_ini . "</b>";
            
            }
            
            // echo "Hari ini adalah ". hari_ini();
            
            ?> 
    
    <div id="app">
        <div class="main-wrapper main-wrapper-2">

            <?php $this->load->view($navbar) ?>
            <?php $this->load->view($sidebar) ?>
            
            <div class="main-content">
                <?php $this->load->view($content) ?>
            </div>

            <footer class="main-footer">
                <div class="row">
                    <div class="col-6">
                            Copyright &copy; 2022 - <?=__bidang('Aauthor')?>.
                    </div>
                    <div class="col-6 text-right">
                        Version <?=__bidang('version')?>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <!-- Scripta -->
    <script src="<?=__js('jquery-3.5.1.min.js')?>"></script> 
    <script src="<?=__js('jquery.dataTables.min.js')?>"></script> 
    <script src="<?=__js('bootstrap.min.js')?>"></script> 
    <script src="<?=__js('scripts.js')?>"></script> 
    <script src="<?=__js('jquery.nicescroll.min.js')?>"></script> 
    <script src="<?=__js('stisla.js')?>"></script> 
    <script src="<?=__js('dataTables.bootstrap4.min.js')?>"></script> 
    <script src="<?=__js('network.js')?>"></script> 
    <script src="<?=__js('wall.js')?>"></script> 
    <script src="<?=__js('cloud.js')?>"></script> 
    <script src="<?=__js('cabinet.js')?>"></script> 
    <script src="<?=__js('electrical.js')?>"></script> 
    <script src="<?=__js('mobile.js')?>"></script> 
    <script src="<?=__js('Electronics.js')?>"></script> 
    <script src="<?=__js('farmacy.js')?>"></script> 
    <script src="<?=__js('fashion.js')?>"></script> 
    <script src="<?=__js('landscape.js')?>"></script> 
=======
<<<<<<< HEAD
    <script src="<?=__js('fashion.js')?>"></script> 
    <script src="<?=__js('landscape.js')?>"></script> 
    <script src="<?=__js('livestock.js')?>"></script> 
<<<<<<< HEAD
=======
=======
>>>>>>> 0b0ce61444b71115582bda83ed338fd9631a3666
>>>>>>> 69fe1bb354b4c0f186256dfcc914b44c6fa27899
>>>>>>> 6ce961e1fd40e0c49b0db4ccf18501dccc7a6d64

	<script>
    $(document).ready(function(){
        $("#provinsi").change(function (){
            var url = "<?php echo site_url('peserta/Peserta/add_ajax_kab');?>/"+$(this).val();
            $('#kabupaten').load(url);
            return false;
        })

        $("#kabupaten").change(function (){
            var url = "<?php echo site_url('peserta/Peserta/add_ajax_kec');?>/"+$(this).val();
            $('#kecamatan').load(url);
            return false;
        })

        $("#kecamatan").change(function (){
            var url = "<?php echo site_url('peserta/Peserta/add_ajax_des');?>/"+$(this).val();
            $('#desa').load(url);
            return false;
        })

        $("#desa").change(function (){
            var url = "<?php echo site_url('peserta/Peserta/add_ajax_sek');?>/"+$(this).val();
            $('#sekolah').load(url);
            return false;
        })

        $("#sekolah").change(function (){
            var url = "<?php echo site_url('peserta/Peserta/add_ajax_jur');?>/"+$(this).val();
            $('#jurusan').load(url);
            return false;
        })

        $("#sekolah").change(function (){
            var url = "<?php echo site_url('peserta/Peserta/add_ajax_jur');?>/"+$(this).val();
            $('#jurusan2').load(url);
            return false;
        })
    });
</script>

	<script>
        $(function() {
            $("#table").DataTable({
                "responsive": true,
                "autoWidth": true,
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>
    
    <script type="text/javascript">
        window.setTimeout(function() {
            $(".alert").fadeIn(500, 0).fadeOut(500, function(){
            $(this).remove(); 
            });
        }, 3000);   
    </script>

    <script>
        $('#notifications').slideDown('slow').delay(4000).slideUp('slow');
    </script>
    <script>
        $('#notif_hapus').slideDown('slow').delay(2000).slideUp('slow');
    </script>

<script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
    
function clock()
{
    if (detik!=0 && detik%60==0) {
        menit++;
        detik=0;
    }
    second = detik;
        
    if (menit!=0 && menit%60==0) {
        jam++;
        menit=0;
    }
    minute = menit;
        
    if (jam!=0 && jam%24==0) {
        jam=0;
    }
    hour = jam;
        
    if (detik<10){
        second='0'+detik;
    }
    if (menit<10){
        minute='0'+menit;
    }
        
    if (jam<10){
        hour='0'+jam;
    }
    waktu = hour+':'+minute+':'+second;
        
    document.getElementById("clock").innerHTML = waktu;
    detik++;
}

    setInterval(clock,1000);
</script>

<script type="text/javascript">
	$(document).ready(function(){
			$('#lomba').on('input',function(){
			
			var lomba=$(this).val();
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('lomba/Mata_lomba/get_lomba')?>",
				dataType : "JSON",
				data : {lomba: lomba},
				cache:false,
				success: function(data){
					$.each(data,function(lomba, id_lomba){
						$('[name="lomba_id"]').val(data.id_lomba);
						// $('[name="satuan"]').val(data.satuan);
						// $('[name="harga"]').val(data.harga_jual);
						// $('[name="stok"]').val(data.stok);
						
					});
					
				}
			});
			return false;
		});

	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
			$('#lomba1').on('input',function(){
			
			var lomba=$(this).val();
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('lomba/Mata_lomba/get_lomba')?>",
				dataType : "JSON",
				data : {lomba: lomba},
				cache:false,
				success: function(data){
					$.each(data,function(lomba, id_lomba){
						$('[name="lomba_id"]').val(data.id_lomba);
						// $('[name="satuan"]').val(data.satuan);
						// $('[name="harga"]').val(data.harga_jual);
						// $('[name="stok"]').val(data.stok);
						
					});
					
				}
			});
			return false;
		});

	});
</script>




<script type="text/javascript">
	$(document).ready(function(){
			$('#id_peserta').on('input',function(){
			
			var id_peserta=$(this).val();
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('peserta/Peserta/get_peserta')?>",
				dataType : "JSON",
				data : {id_peserta: id_peserta},
				cache:false,
				success: function(data){
					$.each(data,function(id_peserta, sekolah_asal){
						$('[name="sekolah_asal"]').val(data.sekolah_asal);
						// $('[name="satuan"]').val(data.satuan);
						// $('[name="harga"]').val(data.harga_jual);
						// $('[name="stok"]').val(data.stok);
						
					});
					
				}
			});
			return false;
		});

	});
</script>


</body>
</html>
