
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Selamat Datang di Aplikasi Pilihanku</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="Aplikasi Penilaian Lomba Karya Siswa"/>
	<meta name="description" content="nilaiku adalah aplikasi pemilihan umum yang dibangun untuk membantu sekolah dalam melaksanakan penilaian."/>
	<meta name="subject" content="Situs Pendidikan">
	<meta name="copyright" content="Not Found Indonesia">
	<meta name="language" content="Indonesia">
	<meta name="robots" content="index,follow" />
	<meta name="revised" content="Monday, April 07th, 2022, 06:18 am" />
	<meta name="Classification" content="Education">
	<meta name="author" content="Dwi Satria Pangestu, no-reply@notfound.id">
	<meta name="designer" content="Dwi Satria Pangestu, no-reply@notfound.id">
	<meta name="reply-to" content="no-reply@notfound.id">
	<meta name="owner" content="Dwi Satria Pangestu">
	<meta name="url" content="https://notfound.id/">
	<meta name="identifier-URL" content="https://notfound.id/">
	<meta name="category" content="Admission, Education">
	<meta name="coverage" content="Worldwide">
	<meta name="distribution" content="Global">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Copyright" content="Not Found Indonesia" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="revisit-after" content="7" />
	<meta name="webcrawlers" content="all" />
	<meta name="rating" content="general" />
	<meta name="spiders" content="all" />
	<meta itemprop="name" content="Not Found Indonesia" />
	<meta itemprop="description" content="nilaiku adalah aplikasi pemilihan umum yang dibangun untuk membantu sekolah dalam melaksanakan penilaian." />

	<meta itemprop="image" content="<?= __img('logo_nilai.png');?>" />

     <!-- Stylesheet -->
     <link rel="stylesheet" type="text/css" href="<?= __css('bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= __css('style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= __css('components.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= __css('all.min.css');?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="<?= __img('logo_nilai.png');?>" rel="shortcut icon">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background: url(<?= __img('bg.jpg');?>);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

    </style>
</head>
<body>

    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form method="post" action="https://pilihanku.kandita.com/check-dpt">
                    <div class="text-center my-5">
                        <img src="<?= __img('nilaiku.png');?>" class="img-fluid w-50" alt="Aplikasi Penilaian LKS E-Voting">
                        <p class="mt-1">Selamat Datang di Aplikasi Nilai LKS (E-Voting)</p>
                    </div>
                    <div class="input-group my-3">
                        <input type="number" class="form-control" placeholder="No Registrasi Juri" name="nisn" autofocus required>
                        <div class="input-group-append">
                            <button class="btn btn-primary px-2" type="submit" name="submit"><i class="fas fa-fw fa-paper-plane"></i> MASUK</button>
                        </div>
                    </div>
                    <div class="my-5">
                        <div class="text-center">
                            <p>&copy; 2022 - Powered by <a href="https://notfound.id"><?= __bidang('Aauthor');?></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <!-- Scripta -->
    <script src="<?= __js('jquery-3.5.1.min.js');?>"></script> 
    <script src="<?= __js('bootstrap.min.js');?>"></script>  
    <script src="<?= __js('scripts.js');?>"></script> 
    <script src="<?= __js('jquery.nicescroll.min.js');?>"></script> 
    <script src="<?= __js('stisla.js');?>"></script> 
    <script src="<?= __js('sweetalert.min.js');?>"></script> 
    <script src="<?= __js('kandita.js');?>"></script>
</body>
</html>
