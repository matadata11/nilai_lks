
<?php echo $this->session->flashdata('notif_true'); ?>

<?php echo $this->session->flashdata('notif_false'); ?>

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

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <h5 class="text-center">Saat ini anda menggunakan versi <span class="badge text-white bg-primary"><?=__bidang('version')?></span></h5>
                <form method="post" action="<?=site_url('patching')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Upload Patch File <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="patching">
                    </div>
					<div class="text-center mt-4">
                        <button type="submit" name="submit" class="btn btn-block btn-outline-info"><i class="bx bx-cog bx-spin"></i> Patching System</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
