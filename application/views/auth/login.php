<!DOCTYPE html>
<html lang="en">
<head>
    <title>Masuk | Portal Data Berbasis Cloud</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?=__css('login.css')?>">

	<link rel="stylesheet" type="text/css" href="<?= __css('bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= __css('components.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= __css('all.min.css');?>">

    <link href="<?= __img('logo_nilai.png');?>" rel="shortcut icon">

</head>
<body>

    <div class="login-wrap">
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-4 col-md-6 col-10">
                <div class="card p-3 text-center">
                    <h4>Selamat <span class="text-pds">Datang</span></h4>
                    <p>Silahkan login menggunakan Email dan Password yang anda miliki</p>
                    <div class="card-body p-2">
                    <form method="post" action="<?=site_url('checkdulu')?>">
                            <div class="form-group">
                                <input type="email" name="kuusername" class="form-control" placeholder="Enter Your Email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="password" name="kupassword" class="form-control" placeholder="Enter Your Password" autocomplete="off">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-fw fa-lock"></i> Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-3 text-center">
				<p>&copy; 2022 - Powered by <a href="https://notfound.id"><?= __bidang('Aauthor');?></a></p>
                </div>
            </div>
        </div>
    </div>    
    

    <script src="<?=__js('jquery-3.5.1.min.js')?>"></script> 
    <script src="<?=__js('bootstrap.min.js')?>"></script> 
</body>
</html>
