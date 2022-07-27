<!-- tambah -->
<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Jabatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form method="post" action="<?=site_url('add-pengguna')?>" enctype="multipart/form-data">

					<div class="col-md-12 mt-2">
						<label>Nama <span class="text-danger">*</span></label><br>
						<input type="hidden" class="form-control" name="admin"  value="<?=$this->session->userdata('fullname'); ?>" required readonly autocomplete="off">

						<input type='text' name='fullname' class='form-control' placeholder="ex. Dwi Satria Pangestu, A.Md.Kom" required='true' autocomplete="off"/>
					</div>

					<div class="col-md-12 mt-2">
						<label>ID Card <span class="text-danger">*</span></label><br>
						<input type='text' name='id_card' class='form-control' placeholder="ex. 0000*****" required='true' autocomplete="off"/>
					</div>

					<div class="col-md-12 mt-2">
						<label>Email <span class="text-danger">*</span></label><br>
						<input type='text' name='email' class='form-control' required='true' placeholder="ex. admin@admin.com" autocomplete="off" />
					</div>

					<div class="col-md-12 mt-2">
						<label>Password <span class="text-danger">*</span></label><br>
						<input type='password' name='password' class='form-control' required='true' placeholder="ex. ********" autocomplete="off"/>
					</div>

					<div class="col-md-12 mt-2">
						<label>Ulangi Password <span class="text-danger">*</span></label><br>
						<input type='password' name='password2' class='form-control' required='true' placeholder="ex. ********" autocomplete="off" />
					</div>

					<div class="col-md-12 mt-2">
						<label>Level <span class="text-danger">*</span></label><br>
						<select name="level" id="level" class="form-control">
							<option value="">-pilih-</option>
							<option value="Super">Super</option>
							<option value="Admin">Admin</option>
							<option value="HD">HD</option>
							<option value="Sekolah">Sekolah</option>
							<option value="Pengawas">Pengawas</option>
							<option value="Kepala">Kepala</option>
						</select>
					</div>

					<div class="col-md-12 mt-2">
						<label>Kabupaten <span class="text-danger">*</span></label><br>
						<select name="prov" class="form-control" id="provinsi">
							<option>- Select Provinsi -</option>
							<?php 
								foreach($provinsi as $prov)
								{
									echo '<option value="'.$prov->id_provinsi.'">'.$prov->nama.'</option>';
								}
							?>
						</select>
					</div>

					<div class="col-md-12 mt-2">
						<label>Kabupaten <span class="text-danger">*</span></label><br>
						<select name="kabupaten_id" class="form-control" id="kabupaten">
                                <option value=''>Select Kabupaten</option>
                            </select>
					</div>

					<div class="text-center mt-4">
						<button type="button" class="btn btn-outline-danger aves-effect waves-ligh" data-bs-dismiss="modal"> <i class="bx bx-share"></i> Batal</button>
						<button type="submit" name="submit" class="btn btn-outline-primary waves-effect waves-light"><i class="bx bx-send"></i> Tambah</button>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
<!-- end -->

<!-- modal edit -->
<?php foreach($useradmin as $usr): ?>
<div class="modal fade" id="edit<?=$usr['id_admin']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('edit-useradmin')?>" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <!-- <label>Personal Information <span class="text-danger">*</span></label><br> -->
                            <input name="id_admin" type="hidden" class="form-control" value="<?=$usr['id_admin']?>" placeholder="Nama" autocomplete="off">
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>Nama <span class="text-danger">*</span></label><br>
                            <input type="text" class="form-control" name="fullname" value="<?=$usr['fullname']?>" autocomplete="off">
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>Email <small class="text-red">Email tidak bisa diganti</small></label>
                            <input type="text" class="form-control" name="email" value="<?=$usr['email']?>" autocomplete="off" readonly>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>Password <span class="text-danger">*</span></label><br>
                            <input type="password" class="form-control" name="password" required autocomplete="off">
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>Ulangi Password <span class="text-danger">*</span></label><br>
                            <input type="password" class="form-control" name="password2" required autocomplete="off">
                        </div>

						<?php if ($this->session->userdata('level') == 'Super' OR $this->session->userdata('level') == 'Admin' ) { ?>
                        <div class="col-md-12 mt-2">
                            <label>Level <span class="text-danger">*</span></label><br>
                            <select name="level" id="level" class="form-control" value="<?=$usr['level'];?>">
                                <option value="<?=$usr['level']?>"><?=$usr['level']?></option>

								<?php if ($this->session->userdata('level') == 'Super' ) { ?>
                                <option value="Super">Super</option>
								<option value="Admin">Admin</option>
								<?php } ?>

                                <option value="HD">HD</option>
                                <option value="Sekolah">Sekolah</option>
                                <option value="Pengawas">Pengawas</option>
                                <option value="Kepala">Kepala</option>
                            </select>
                        </div>
						<?php } ?>

						

                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-outline-danger aves-effect waves-ligh" data-bs-dismiss="modal"> <i class="bx bx-share"></i> Batal</button>
                            <button type="submit" name="submit" class="btn btn-outline-primary waves-effect waves-light"><i class="bx bx-send"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?> 
<!-- end edit -->

<!-- modal hapus -->
<?php foreach($useradmin as $usr): ?>
<div class="modal fade" id="hapus<?=$usr['id_admin']?>" data-backdrop="static" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body mt-4 text-center">
				<h5>Apakah anda akan menghapus Pengguna <em><?=$usr['fullname']?></em> ?</h5>

				<a href="<?=site_url('hapus-user/'.$usr['id_admin'])?>" class="btn btn-outline-primary"><i class="fas fa-fw fa-check"></i> Ya, Hapus</a>
				<button type="button" class="btn btn-outline-danger aves-effect waves-ligh" data-bs-dismiss="modal"> <i class="bx bx-share"></i> Batal</button>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>
<!-- end hapus -->
