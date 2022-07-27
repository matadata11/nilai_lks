<!-- tambah -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Mata Lomba</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('add-nilai')?>">

                <input type="text" name="admin" value="<?=__session('fullname')?>" class="form-control" required="">

                    <div class="form-group">
                        <label>Mata Lomba <span class="text-danger">*</span></label>
						<select name="lomba_id" id="bidang" class="form-control" required="">
							<option value="">pilih:</option>
							<?php foreach($lomba as $row): ?>
								<option value="<?=$row['id_lomba']?>"><?=$row['lomba']?></option>
							<?php endforeach; ?>
						</select>
						<div class="invalid-feedback">
							belum dipilih 
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

<!-- upload penilaian -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Mata Lomba</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('add-nilai')?>">

                <input type="text" name="admin" value="<?=__session('fullname')?>" class="form-control" required="">

                    <div class="form-group">
                        <label>Mata Lomba <span class="text-danger">*</span></label>
						<select name="lomba_id" id="bidang" class="form-control" required="">
							<option value="">pilih:</option>
							<?php foreach($lomba as $row): ?>
								<option value="<?=$row['id_lomba']?>"><?=$row['lomba']?></option>
							<?php endforeach; ?>
						</select>
						<div class="invalid-feedback">
							belum dipilih 
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
<!-- end -->