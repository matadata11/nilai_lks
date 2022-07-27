<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi Kehadiran Pegawai - Hadeer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?=__css('bootstrapp.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('styles.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('components.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('all.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('login.css')?>">
    <link href="<?=site_url('public/img/h.png')?>" rel="shortcut icon">

</head>
<body>

    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 my-4">
                <div class="text-center">
                    <img src="<?=__img('header-w.png')?>" class="img-fluid" width="220" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <form method="post" action="<?=site_url('checkpiket')?>">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Piket Hadeer" name="piket" autofocus required>
                        <div class="input-group-append">
                            <button class="btn btn-primary px-2" type="submit" name="submit"><i class="fas fa-fw fa-paper-plane"></i> Masuk</button>
                        </div>
                    </div>
                </form>
                <div class="my-2 text-center text-white">
                    <p>&copy; 2021 - asda.dev. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    

    <script src="<?=__js('jquery-3.5.1.min.js')?>"></script> 
    <script src="<?=__js('bootstrap.min.js')?>"></script> 
</body>
</html>