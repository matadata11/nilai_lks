<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Juri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form class="needs-validation" method="post" action="<?=site_url('add-juri')?>" novalidate="">
					<div class="form-group">
                        <label>Nama Juri</label>
						<input type="hidden" name="admin_juri" class="form-control" value="<?=__session('fullname')?>">
                        <input type="text" name="fullname" class="form-control" required="">
						<div class="invalid-feedback">
						Nama belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Instansi</label>
                        <input type="text" name="instansi" class="form-control" required="">
						<div class="invalid-feedback">
						Instansi belum diisi
						</div>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required="">
						<div class="invalid-feedback">
							Oh tidak! email tidak valid.
						</div>
					</div>
					<div class="form-group">
						<label>No Registrasi</label>
						<input type="text" class="form-control" name="no_reg"  value="<?php echo $kode; ?>" autocomplete="off" required="">
						<div class="valid-feedback">
							Good job!
						</div>
					</div>

					<div class="form-group">
						<label>Bidang Lomba</label>
						<select name="bidang" id="bidang" class="form-control" required="">
							<option value="">pilih:</option>
							<?php foreach($lomba as $row): ?>
							<option value="<?=$row['lomba']?>"><?=$row['lomba']?></option>
							<?php endforeach; ?>
						</select>
						<div class="invalid-feedback">
							belum dipilih 
						</div>
					</div>

					<div class="form-group mb-0">
						<label>Level</label>
						<select name="level" id="level" class="form-control" required="">
							<option value="">pilih:</option>
							<option value="Juri">Juri</option>
						</select>
						<div class="invalid-feedback">
							belum dipilih 
						</div>
					</div>

					</div>
                    <div class="card-footer text-right">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>

<?php foreach($juri as $row): ?>
<div class="modal fade" id="edit<?=$row['id_juri']?>" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Juri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form class="needs-validation" method="post" action="<?=site_url('update-juri')?>" novalidate="">
					<div class="form-group">
                        <label>Nama Juri</label>
						<input type="hidden" name="id_juri" class="form-control" value="<?=$row['id_juri']?>">
						<input type="hidden" name="admin_juri" class="form-control" value="<?=__session('fullname')?>">
                        <input type="text" name="fullname" value="<?=$row['fullname']?>" class="form-control" required="">
						<div class="invalid-feedback">
						Nama belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Instansi</label>
                        <input type="text" name="instansi" value="<?=$row['instansi']?>" class="form-control" required="">
						<div class="invalid-feedback">
						Instansi belum diisi
						</div>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="<?=$row['email']?>" class="form-control" required="">
						<div class="invalid-feedback">
							Oh tidak! email tidak valid.
						</div>
					</div>
					<div class="form-group">
						<label>No Registrasi</label>
						<input type="text" class="form-control" name="no_reg"  value="<?=$row['no_reg']?>" autocomplete="off" required="" readonly>
						<div class="valid-feedback">
							Good job!
						</div>
					</div>

					<div class="form-group">
						<label>Bidang Lomba</label>
						<select name="bidang" id="bidang" class="form-control" required="">
							<option value="<?=$row['bidang']?>"><?=$row['bidang']?></option>
							<?php foreach($lomba as $row): ?>
							<option value="<?=$row['lomba']?>"><?=$row['lomba']?></option>
							<?php endforeach; ?>
						</select>
						<div class="invalid-feedback">
							belum dipilih 
						</div>
					</div>

					<!-- <div class="form-group mb-0">
						<label>Level</label>
						<select name="level" id="level" class="form-control" required="">
							<option value="">pilih:</option>
							<option value="Juri">Juri</option>
						</select>
						<div class="invalid-feedback">
							belum dipilih 
						</div>
					</div> -->

					</div>
                    <div class="card-footer text-right">
						<button type="submit" name="submit" class="btn btn-primary">Ubah</button>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php foreach($juri as $row): ?>
<div class="modal fade" id="hapus<?=$row['id_juri']?>" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body mt-4 text-center">
                    <h5>Apakah anda akan menghapus Data Juri <br><em><?=$row['fullname']?></em> ?</h5>
                    <a href="<?=site_url('remove-juri/'.$row['id_juri'])?>" class="btn btn-outline-info aves-effect waves-ligh"><i class="fas fa-fw fa-check"></i> Ya, Hapus</a>
                    <button type="button" class="btn btn-outline-danger aves-effect waves-ligh" class="close" data-dismiss="modal" aria-label="Close"> <i class="bx bx-share"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
