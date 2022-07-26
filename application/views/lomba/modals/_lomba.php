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
                <form method="post" action="<?=site_url('add-lomba')?>">
                    <div class="form-group">
                        <label>Mata Lomba <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="lomba" placeholder="Mata Lomba" autocomplete="off">
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

<!-- import -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data</h5>
            </div>
            <div class="modal-body">
                <div class="my-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <p>Silahkan download template data berikut</p>
                            <a href="<?= site_url('public/excel/format_ptk.xlsx') ?>" download class="btn btn-block btn-primary"><i class="fas fa-download"></i> Download Format</a><br>
                        </div>
                    </div>
                </div>
                <form method="post" action="<?= site_url('import-lomba') ?>" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Pilih File Excel</label>
						<input type="hidden" class="form-control" name="admin_ptk" value="<?= $this->session->userdata('fullname'); ?>">
                        <input type="file" class="form-control" name="dataexcel">
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-outline-danger aves-effect waves-ligh" class="close" data-dismiss="modal" aria-label="Close"> <i class="bx bx-share"></i> Batal</button>
                        <button type="submit" name="submit" class="btn btn-outline-info waves-effect waves-light"><i class="bx bx-upload"></i> Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end import -->

<!-- edit -->
<?php foreach($lomba as $row): ?>
<div class="modal fade" id="edit<?=$row['id_lomba']?>" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Mata Lomba</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('edit-lomba')?>">
                    <div class="form-group">
                        <label>Mata Lomba <span class="text-danger">*</span></label>
                        <input type="hidden" class="form-control" name="id_lomba" value="<?=$row['id_lomba']?>" placeholder="Mata Lomba" autocomplete="off">
                        <input type="text" class="form-control" name="lomba" value="<?=$row['lomba']?>" placeholder="Mata Lomba" autocomplete="off">
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
<!-- end edit -->

<?php foreach($lomba as $row): ?>
<div class="modal fade" id="hapus<?=$row['id_lomba']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body mt-4 text-center">
                    <h5>Apakah anda akan menghapus Mata Lomba <br><em><?=$row['lomba']?></em> ?</h5>
                    <a href="<?=site_url('remove-lomba/'.$row['id_lomba'])?>" class="btn btn-outline-info aves-effect waves-ligh"><i class="fas fa-fw fa-check"></i> Ya, Hapus</a>
                    <button type="button" class="btn btn-outline-danger aves-effect waves-ligh" data-bs-dismiss="modal"> <i class="bx bx-share"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
