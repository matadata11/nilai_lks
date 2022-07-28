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

<?php foreach($penilaian as $row): ?>
<div class="modal fade" id="list<?=$row['id_penilaian']?>" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Mata Lomba</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('add-list')?>">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered table-hover table-sm" id="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Admin</th>
                                                    <th>Mata Lomba</th>
                                                    <th>Created_at</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1; foreach($penilaian as $row): ?>
                                                    <tr>
                                                        <td><?=$no++;?></td>
                                                        <td><?=$row['admin']?></td>
                                                        <td><?=$row['lomba']?></td>
                                                        <td><?=indo_date($row['tanggal'])?></td>
                                                        <td width="20%" class="text-center">
                                                            <a href="#list<?=$row['id_penilaian']?>" data-toggle="modal" class="btn btn-sm btn-info"><i class="fas fa-fw fa-upload"></i></a>
                                                            <a href="#edit<?=$row['id_penilaian']?>" data-toggle="modal" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                                            <a href="#hapus<?=$row['id_penilaian']?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque eget tellus efficitur, eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit venenatis justo, eget scelerisque tellus pharetra a.
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa, gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci non ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis ultrices. Proin bibendum bibendum augue ut luctus.
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- end -->

<?php foreach($penilaian as $row): ?>
<div class="modal fade" id="hapus<?=$row['id_penilaian']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body mt-4 text-center">
                    <h5>Apakah anda akan menghapus Penilaian <br><em><?=$row['lomba']?></em> ?</h5>
                    <a href="<?=site_url('remove-nilai/'.$row['id_penilaian'])?>" class="btn btn-outline-info aves-effect waves-ligh"><i class="fas fa-fw fa-check"></i> Ya, Hapus</a>
                    <button type="button" class="btn btn-outline-danger aves-effect waves-ligh" data-bs-dismiss="modal"> <i class="bx bx-share"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>