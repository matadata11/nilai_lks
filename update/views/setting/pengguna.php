<!-- start page title -->


<?php echo $this->session->set_flashdata('notif_true'); ?>

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

<div class="row">
	<div class="col-12">
		<div class="card" style='margin-bottom:1.9rem;'>
			<div class="table-responsive p-3">

				<h4 class="card-title mb-2">Data Pengguna</h4>
				<div class="col-lg-12 d-none d-lg-block">
                    <div class="clearfix mt-4 mt-lg-0">
                        <div class="dropdown float-end">
						<?php if ($this->session->userdata('level') == 'Super'  OR $this->session->userdata('level') == 'Admin' ) { ?>
                            <!-- <a class="btn btn-outline-warning"  href="<?= site_url('excel-export');?>" style="position:relative;top:-1.5rem;margin-bottom:1rem;">
                                <i class="bx bx-download align-middle me-1"></i> Export
                            </a> -->

                            <button class="btn btn-outline-danger mt-4" type="button" data-bs-toggle="modal"  data-bs-target="#import" style="position:relative;top:-1.5rem;margin-bottom:1rem;"><i class="bx bx-upload align-middle me-1"></i> Import</button>
							

                            <a href="#add" data-toggle="modal">
							<button class="btn btn-outline-info mt-4" type="button" style="position:relative;top:-1.5rem;margin-bottom:1rem;">
                                <i class="bx bx-plus align-middle me-1"></i> Tambah
                            </button>
							</a>
							<?php } ?>
                        </div>
                    </div>
                </div>

				<table id="datatable" class="table table-bordered nowrap w-100">
					<thead>
					<tr>
						<th class="text-center align-middle">#</th>
						<th class="text-center align-middle">Nama</th>
						<th class="text-center align-middle">Level</th>
						<th class="text-center align-middle">Email</th>
						<th class="text-center align-middle">status</th>
						<th class="text-center align-middle">Aksi</th>
					</tr>
					</thead>
					<tbody>

					<?php if ($this->session->userdata('level') == 'Super' OR $this->session->userdata('level') == 'Admin' ) { ?>
					<?php $no=1; foreach($useradmin as $usr): ?>
					<tr>
						<td class="text-center align-middle"><?=$no++;?></td>
						<td class="text-center align-middle"><?= $usr['fullname'];?></td>
						<td class="text-center align-middle"><?= $usr['level'];?></td>
						<td class="text-center align-middle"><?= $usr['email'];?></td>

						<?php if($usr['is_active'] == '1' ): ?>
							<td class="text-success text-center align-middle"><b>Aktif</b></td>
						<?php elseif($usr['is_active'] == '0' ): ?>
							<td class="text-danger text-center align-middle"><b>Tidak Aktif</b></td>
						<?php endif; ?>


						<td class="text-center align-middle">
							<button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$usr['id_admin']?>">Edit</button>
							
							<?php if ($this->session->userdata('level') == 'Super' ) { ?>
							<button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#hapus<?=$usr['id_admin']?>">Remove</button>
							<?php } ?>
						</td>
						
					</tr>
					<?php endforeach; ?>
					<?php } ?>

					<!-- sekolah -->
					<?php if ($this->session->userdata('level') == 'Sekolah' ) { ?>
						<?php $no=1;foreach($user as $usr): ?>
					<tr>
						<td class="text-center align-middle"><?=$no++;?></td>
						<td class="text-center align-middle"><?= $usr['admin'];?></td>
						<td class="text-center align-middle"><?= $usr['level'];?></td>
						<td class="text-center align-middle"><?= $usr['fullname'];?></td>
						<td class="text-center align-middle"><?= $usr['email'];?></td>

						<?php if($usr['is_active'] == '1' ): ?>
							<td class="text-success text-center align-middle"><b>Aktif</b></td>
						<?php elseif($usr['is_active'] == '0' ): ?>
							<td class="text-danger text-center align-middle"><b>Tidak Aktif</b></td>
						<?php endif; ?>


						<td class="text-center align-middle">
							<button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editsekolah<?=$usr['id_admin']?>">Edit</button>
						</td>
						
					</tr>
					<?php endforeach; ?>
					<?php } ?>

				</tbody>
				</table>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->

<?php require_once('modals/_pengguna.php'); ?>
<?php require_once('modals/_penggunasekolah.php'); ?>
