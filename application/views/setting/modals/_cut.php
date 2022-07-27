<!-- edit -->
<?php foreach($cut as $off): ?>
<div class="modal fade" id="edit<?=$off['id_cut']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tanggal Cut Off | <b><?=$off['tanggal']?></b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form method="post" action="<?=site_url('cut-edit')?>">
                    <div class="form-group">
                        <label>Cut Off <span class="text-danger">*</span></label>
                        <input type="hidden" name="id_cut" value="<?=$off['id_cut']?>" autocomplete="off">
                        <input type="date" class="form-control" name="tanggal" value="<?=$off['tanggal']?>" autocomplete="off">
                    </div>
                    <div class="form-group text-center mt-2">
                        <button type="submit" name="submit" class="btn btn-outline-primary px-3"><i class="fas fa-fw fa-check"></i> Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- end -->
