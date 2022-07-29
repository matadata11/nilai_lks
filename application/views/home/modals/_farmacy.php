<!-- tambah -->
<?php if ($this->session->userdata('fullname') == __session('fullname')) { ?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Farmacy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?=site_url('add-farmacy')?>">
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
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:170%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="width:6%;" rowspan="2">Opsi</th>
                                                    <th class="align-middle text-center" rowspan="2"><b>Nama Peserta</b></th>
                                                    <th class="align-middle text-center"  rowspan="2"><b>Nama Sekolah</b></th>
                                                    <th class="align-middle text-center" rowspan="2"><b>Nilai</b> <br> <b>N1</b></th>
                                                    <th class="align-middle text-center" rowspan="2"><b>Nilai</b> <br> <b>N2</b></th>
                                                    <th class="align-middle text-center"  rowspan="2"><b>Nilai</b> <br> <b>N3</b></th>
                                                    <th class="align-middle text-center" rowspan="2"><b>Nilai</b> <br> <b>N4</b></th>
                                                    <th class="align-middle text-center" rowspan="2"><b>Nilai</b> <br> <b>N5</b></th>
                                                    <th class="align-middle text-center" rowspan="2"><b>Nilai</b> <br> <b>N6</b></th>
                                                    <th class="align-middle text-center" rowspan="2"><b>Nilai</b> <br> <b>N7</b></th>
                                                    <th class="align-middle text-center" rowspan="2"><b>Nilai</b> <br> <b>N8</b></th>
                                                    <th class="align-middle text-center" rowspan="2"><b>Nilai</b> <br> <b>N9</b></th>
                                                    <th class="align-middle text-center" rowspan="2" style="max-width:18px;"><b>Nilai</b> <br> <b>N10</b></th>
                                                    <th class="align-middle text-center" rowspan="2" style="max-width:18px;"><b>Nilai Total</b></th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td class="align-middle text-center" style="max-width:10px;">
                                                        <button type="submit" name="submit" class="btn btn-primary px-3">Simpan</button>
                                                    </td>

                                                    <td style="width:15%;">
                                                        <select name="peserta_id" id="id_peserta" class="form-control" required="">
                                                            <option value="">pilih:</option>
                                                            <?php foreach($peserta as $row): ?>
                                                            <option value="<?=$row['id_peserta']?>"><?=$row['fullname']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </td>

                                                    <td style="width:15%;">
                                                        <input type="text" class="form-control" name="sekolah_asal" autocomplete="off" readonly required="">

                                                        <input type="hidden" class="form-control" name="admin" value="<?=__session('fullname');?>" autocomplete="off" required="">
                                                    </td>

                                                    <td  style="width:5%;">
                                                        <input type="text" name="farmacy1" id="farmacy1" class="form-control" >
                                                    </td>
                                                    <td  style="width:5%;">
                                                        <input type="text" name="farmacy2" id="farmacy2" class="form-control" >
                                                    </td>
                                                    <td  style="width:5%;">
                                                        <input type="text" name="farmacy3" id="farmacy3" class="form-control" >
                                                    </td>
                                                    <td style="width:6%;">
                                                        <input type="text" name="farmacy4" id="farmacy4" class="form-control" >
                                                    </td>
                                                    <td style="width:5%;">
                                                        <input type="text" name="farmacy5" id="farmacy5" class="form-control" >
                                                    </td>
                                                    <td style="width:5%;">
                                                        <input type="text" name="farmacy6" id="farmacy6" class="form-control" >
                                                    </td>
                                                    <td style="width:5%;">
                                                        <input type="text" name="farmacy7" id="farmacy7" class="form-control" >
                                                    </td>
                                                    <td style="width:5%;">
                                                        <input type="text" name="farmacy8" id="farmacy8" class="form-control" >
                                                    </td>
                                                    <td style="width:5%;">
                                                        <input type="text" name="farmacy9" id="farmacy9" class="form-control" >
                                                    </td>
                                                    <td style="width:5%;">
                                                        <input type="text" name="farmacy10" id="farmacy10" class="form-control" >
                                                    </td>
                                                    <td style="width:10%;">
                                                        <input type="text" name="j_farmacy" id="farmacya" class="form-control" >
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

