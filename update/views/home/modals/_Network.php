<!-- tambah -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IT Network System Administration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('add-nilai_it')?>">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">MODUL</a>
                                </li>
                            </ul>
                            <h5 class="mt-4 mb-0"><small>Rete Poin 1 - 3</small></h5>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body table-responsive">
                                        <!-- nama siswa -->
                                        <table class="table table-bordered table-hover table-sm" id="">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" >opsi</th>
                                                    <th class="align-middle text-center" >Nama Peserta</th>
                                                    <th class="align-middle text-center" >Nama Sekolah</th>
                                                    <th class="align-middle text-center" >Server</th>
                                                    <th class="align-middle text-center" >Router</th>
                                                    <th class="align-middle text-center" >Cisco</th>
                                                    <th class="align-middle text-center" >Total</th>
                                                </tr>
                                            
                                                <tr>
                                                    <td class="align-middle text-center" style="max-width:40px;">
                                                    <button type="submit" name="submit" class="btn btn-primary px-3">Simpan</button>
                                                    </td>
                                                    <td style="max-width:10px;">
                                                    <select name="peserta_id" id="id_peserta" class="form-control" required="">
                                                        <option value="">pilih:</option>
                                                        <?php foreach($peserta as $row): ?>
                                                        <option value="<?=$row['id_peserta']?>"><?=$row['fullname']?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    </td>
                                                    <td style="max-width:20px;">
                                                    <input type="text" class="form-control" name="sekolah_asal" autocomplete="off" readonly required="">
                                                    </td>
                                                    <td style="max-width:20px;">
                                                    <input type="text" class="form-control" name="n1" id="net1" autocomplete="off" required="">

                                                    <input type="hidden" class="form-control" name="admin" value="<?=__session('fullname');?>" autocomplete="off" required="">
                                                    </td>

                                                    <td style="max-width:20px;">
                                                        <input type="text" class="form-control" name="n2" id="net2" autocomplete="off" required="">
                                                    </td>

                                                    <td style="max-width:20px;">
                                                        <input type="text" class="form-control" name="n3" id="net3" autocomplete="off" required="">
                                                    </td>

                                                    <td style="max-width:20px;">
                                                        <input type="text" class="form-control" name="jumlah" id="neta" autocomplete="off" readonly required="">
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table>
                                        <!-- end nama siswa -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end tambah -->