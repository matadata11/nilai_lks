<!-- tambah -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Peserta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form class="needs-validation" method="post" action="<?=site_url('add-peserta')?>" novalidate="">
                    <div class="form-group">
                        <label>Mata Lomba <span class="text-danger">*</span></label>
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

					<div class="form-group">
                        <label>Nama Peserta</label>
                        <input type="text" name="fullname" class="form-control" required="">
						<div class="invalid-feedback">
						Nama belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>NIS</label>
                        <input type="text" name="nis" class="form-control" required="">
						<div class="invalid-feedback">
						Nis belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Tempat Lahir</label>
                        <textarea name="tmp_lahir" id="tmp_lahir" cols="30" rows="80"  class="form-control" required=""></textarea>
						<div class="invalid-feedback">
						Tempat Lahir belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" required="">
						<div class="invalid-feedback">
						Tempat Lahir belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="kelamin" id="kelamin" class="form-control" required="">
							<option value="">pilih:</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
						<div class="invalid-feedback">
						Jenis Kelamin belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Agama</label>
                        <select name="agama" id="agama" class="form-control" required="">
							<option value="">pilih:</option>
							<option value="Islam">Islam</option>
							<option value="Katolik">Katolik</option>
							<option value="Protestan">Protestan</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Konghucu">Konghucu</option>
						</select>
						<div class="invalid-feedback">
						Agama belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>HP</label>
                        <input type="text" name="hp" class="form-control" required="">
						<div class="invalid-feedback">
						No HP belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Sekolah Asal</label>
                        <textarea name="sekolah_asal" id="sekolah_asal" cols="30" rows="80"  class="form-control" required=""></textarea>
						<div class="invalid-feedback">
							Sekolah Asal belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Kelas</label>
                        <select name="kelas" id="kelas" class="form-control" required="">
							<option value="">pilih:</option>
							<option value="X">X</option>
							<option value="XI">XI</option>
							<option value="XII">XII</option>
						</select>
						<div class="invalid-feedback">
						Kelas belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="80"  class="form-control" required=""></textarea>
						<div class="invalid-feedback">
							Alamat belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>No Telp <small class="text-danger">Isi ( - ) jika tidak ada</small></label>
                        <input type="text" name="no_tlp" class="form-control" required="">
						<div class="invalid-feedback">
						No Tepl belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Email <small class="text-danger">Email Aktif</small></label>
                        <input type="email" name="email" class="form-control" required="">
						<div class="invalid-feedback">
						email belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Nama Bank <small class="text-danger">Bank Aceh</small></label>
                        <input type="text" name="bank" class="form-control" value="Bank Aceh" readonly required="">
						<div class="valid-feedback">
						bank belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Atas Nama</label>
                        <input type="text" name="nama" class="form-control text-uppercase" required="">
						<div class="valid-feedback">
						Atas Nama belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>No Rekening</label>
                        <input type="number" name="no_rek" class="form-control text-uppercase" required="">
						<div class="valid-feedback">
						No Rekening belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Provinsi</label>
						<select name="provinsi_id" class="form-control" id="provinsi" required="">
							<option>- Select Provinsi -</option>
							<?php 
								foreach($provinsi as $prov)
								{
									echo '<option value="'.$prov->id_provinsi.'">'.$prov->nama.'</option>';
								}
							?>
						</select>
						<div class="valid-feedback">
						Provinsi belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Kabupaten</label>
						<select name="kabupaten_id" class="form-control" id="kabupaten" required="">
							<option value=''>Select Kabupaten</option>
						</select>
						<div class="valid-feedback">
						Kabupaten belum diisi
						</div>
					</div>

                    <div class="form-group text-center">
                        <button type="submit" name="submit" class="btn btn-primary px-3"><i class="fas fa-fw fa-check"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end tambah -->

<?php foreach($peserta as $row): ?>
<div class="modal fade" id="edit<?=$row['id_peserta']?>" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Peserta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form class="needs-validation" method="post" action="<?=site_url('edit-peserta')?>" novalidate="">
                    <div class="form-group">
                        <label>Mata Lomba <span class="text-danger">*</span></label>
						<select name="bidang" id="bidang" class="form-control" required="">
							<option value="<?=$row['bidang']?>"><?=$row['bidang']?></option>
							<?php foreach($lomba as $rows): ?>
								<option value="<?=$rows['lomba']?>"><?=$rows['lomba']?></option>
							<?php endforeach; ?>
						</select>
						<div class="invalid-feedback">
							belum dipilih 
						</div>
                    </div>

					<div class="form-group">
                        <label>Nama Peserta</label>
                        <input type="text" name="fullname" value="<?=$row['fullname']?>" class="form-control" required="">
                        <input type="hidden" name="id_peserta" value="<?=$row['id_peserta']?>" class="form-control" required="">
						<div class="invalid-feedback">
						Nama belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>NIS</label>
                        <input type="text" name="nis" value="<?=$row['nis']?>" class="form-control" required="">
						<div class="invalid-feedback">
						Nis belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Tempat Lahir</label>
                        <textarea name="tmp_lahir" id="tmp_lahir" cols="30" rows="80"  class="form-control" required=""><?=$row['tmp_lahir']?></textarea>
						<div class="invalid-feedback">
						Tempat Lahir belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="<?=$row['tgl_lahir']?>" class="form-control" required="">
						<div class="invalid-feedback">
						Tempat Lahir belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="kelamin" id="kelamin"  class="form-control" required="">
							<option value="<?=$row['kelamin']?>"><?=$row['kelamin']?></option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
						<div class="invalid-feedback">
						Jenis Kelamin belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Agama</label>
                        <select name="agama" id="agama" class="form-control" required="">
							<option value="<?=$row['agama']?>"><?=$row['agama']?></option>
							<option value="Islam">Islam</option>
							<option value="Katolik">Katolik</option>
							<option value="Protestan">Protestan</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Konghucu">Konghucu</option>
						</select>
						<div class="invalid-feedback">
						Agama belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>HP</label>
                        <input type="text" name="hp" value="<?=$row['hp']?>" class="form-control" required="">
						<div class="invalid-feedback">
						No HP belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Sekolah Asal</label>
                        <textarea name="sekolah_asal" id="sekolah_asal"  cols="30" rows="80"  class="form-control" required=""><?=$row['sekolah_asal']?></textarea>
						<div class="invalid-feedback">
							Sekolah Asal belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Kelas</label>
                        <select name="kelas" id="kelas" class="form-control" required="">
							<option value="<?=$row['kelas']?>"><?=$row['kelas']?></option>
							<option value="X">X</option>
							<option value="XI">XI</option>
							<option value="XII">XII</option>
						</select>
						<div class="invalid-feedback">
						Kelas belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="80"  class="form-control" required=""><?=$row['alamat']?></textarea>
						<div class="invalid-feedback">
							Alamat belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>No Telp <small class="text-danger">Isi ( - ) jika tidak ada</small></label>
                        <input type="text" name="no_tlp" value="<?=$row['no_tlp']?>" class="form-control" required="">
						<div class="invalid-feedback">
						No Tepl belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Email <small class="text-danger">Email Aktif</small></label>
                        <input type="email" name="email" value="<?=$row['email']?>" class="form-control" required="">
						<div class="invalid-feedback">
						email belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Nama Bank <small class="text-danger">Bank Aceh</small></label>
                        <input type="text" name="bank" value="<?=$row['bank']?>" class="form-control" value="Bank Aceh" readonly required="">
						<div class="valid-feedback">
						bank belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>Atas Nama</label>
                        <input type="text" name="nama" value="<?=$row['nama']?>" class="form-control text-uppercase" required="">
						<div class="valid-feedback">
						Atas Nama belum diisi
						</div>
					</div>

					<div class="form-group">
                        <label>No Rekening</label>
                        <input type="number" name="no_rek" value="<?=$row['no_rek']?>" class="form-control text-uppercase" required="">
						<div class="valid-feedback">
						No Rekening belum diisi
						</div>
					</div>

                    <div class="form-group text-center">
                        <button type="submit" name="submit" class="btn btn-primary px-3"><i class="fas fa-fw fa-check"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php foreach($peserta as $row): ?>
<div class="modal fade" id="hapus<?=$row['id_peserta']?>" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body mt-4 text-center">
				<h5>Apakah anda akan menghapus Peserta <br><em><?=$row['fullname']?></em> ?</h5>
				<a href="<?=site_url('remove-peserta/'.$row['id_peserta'])?>" class="btn btn-outline-info aves-effect waves-ligh"><i class="fas fa-fw fa-check"></i> Ya, Hapus</a>
				<button type="button" class="btn btn-outline-danger aves-effect waves-ligh" class="close" data-dismiss="modal" aria-label="Close"> <i class="bx bx-share"></i> Batal</button>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>
