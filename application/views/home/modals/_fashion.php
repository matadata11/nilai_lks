<!-- tambah -->
<?php if ($this->session->userdata('fullname') == __session('fullname')) { ?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Fashion Technology</h5>
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
                                    <a class="nav-link active" id="name-tab" data-toggle="tab" href="#name" role="tab" aria-controls="name" aria-selected="true">REKAP HASIL NILAI</a>
                                <li class="nav-item">
                            </ul>


                            <!-- tab 1 -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="2">Opsi</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Peserta</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Sekolah</th>
                                                    <th class="align-middle text-center" rowspan="2"> Nilai Criteria <br> Pola Modul 1 </th>
                                                    <th class="align-middle text-center" rowspan="2">Nilai Criteria <br> Baju Covid Modul 2</th>
                                                    <th class="align-middle text-center" rowspan="2">NILAI AKHIR<br>TOTAL</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                <td class="align-middle text-center" style="max-width:10px;">
                                                    <button type="submit" name="submit" class="btn btn-primary px-3"><i class="fas fa-fw fa-check"></i> Simpan</button>
                                                    </td>
                                                <td style="width:20%;">
                                                    <select name="peserta_id" id="id_peserta" class="form-control" required="">
                                                            <option value="">pilih:</option>
                                                            <?php foreach($peserta as $row): ?>
                                                            <option value="<?=$row['id_peserta']?>"><?=$row['fullname']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </td>
                                                    <td style="width:20%;">
                                                        <input type="text" class="form-control" name="sekolah_asal" autocomplete="off" readonly required="">

                                                        <input type="hidden" class="form-control" name="admin" value="<?=__session('fullname');?>" autocomplete="off" required="">      
                                                    </td>
                                                    <td  style="width:15%;">
                                                        <input type="text" name="fashion1" id="fashion1" class="form-control" >
                                                    </td>
                                                    <td  style="width:15%;">
                                                        <input type="text" name="fashion2" id="fashion2" class="form-control" >
                                                    </td>
                                                    <td  style="width:15%;">
                                                        <input type="text" name="j_fashion" id="fashiona" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                  </div>
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
<?php } ?>
<!-- end tambah -->



