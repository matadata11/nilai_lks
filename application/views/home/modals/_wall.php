<!-- tambah -->
<?php if ($this->session->userdata('fullname') == __session('fullname')) { ?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:95%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">wal and Floor Tilling</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?=site_url('add-wall')?>">
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
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:130%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="width:12%;" rowspan="2">Opsi</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Peserta</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Sekolah</th>
                                                    <th class="align-middle text-center" rowspan="2">OVERALL OF APPEARANCE</th>
                                                    <th class="align-middle text-center" rowspan="2">CUTTING</th>
                                                    <th class="align-middle text-center" rowspan="2">LEVELING</th>
                                                    <th class="align-middle text-center" rowspan="2">PLUMB</th>
                                                    <th class="align-middle text-center" rowspan="2">SQUARE</th>
                                                    <th class="align-middle text-center" rowspan="2">SURFACE ALIGNMENT</th>
                                                    <th class="align-middle text-center" rowspan="2">MEASUREMENT</th>
                                                    <th class="align-middle text-center" rowspan="2">FULL COMPLETED TO DRAWING</th>
                                                    <th class="align-middle text-center" rowspan="2">NILAI AKHIR</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                <td class="align-middle text-center" style="max-width:6px;">
                                                    <button type="submit" name="submit" class="btn btn-primary px-3"> Simpan</button>
                                                    </td>
                                                <td style="width:15%;">
                                                <select name="peserta_id" id="id_peserta" class="form-control" required="">
                                                            <option value="">pilih:</option>
                                                            <?php foreach($peserta as $row): ?>
                                                            <option value="<?=$row['id_peserta']?>"><?=$row['fullname']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </td>
                                                    <td style="width:18%;">
                                                        <input type="text" class="form-control" name="sekolah_asal" autocomplete="off" readonly required="">

                                                        <input type="hidden" class="form-control" name="admin" value="<?=__session('fullname');?>" autocomplete="off" required="">      
                                                    </td>
                                                    <td  style="width:6%;">
                                                        <input type="text" name="n1" id="n1" class="form-control" >
                                                    </td>
                                                    <td  style="width:6%;">
                                                        <input type="text" name="n2" id="n2" class="form-control" >
                                                    </td>
                                                    <td style="width:6%;">
                                                        <input type="text" name="n3" id="n3" class="form-control" >
                                                    </td>
                                                    <td  style="width:6%;">
                                                        <input type="text" name="n4" id="n4" class="form-control" >
                                                    </td>
                                                    <td  style="width:6%;">
                                                        <input type="text" name="n5" id="n5" class="form-control" >
                                                    </td>
                                                    <td  style="width:6%;">
                                                        <input type="text" name="n6" id="n6" class="form-control" >
                                                    </td>
                                                    <td  style="width:6%;">
                                                        <input type="text"  name="n7" id="n7" class="form-control" >
                                                    </td>
                                                    <td  style="width:6%;">
                                                        <input type="text" name="n8" id="n8" class="form-control" >
                                                    </td>
                                                    <td  style="width:8%;">
                                                        <input type="text" name="j_wall" id="na" class="form-control" readonly>
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

