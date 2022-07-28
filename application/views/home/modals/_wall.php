<!-- tambah -->
<?php if ($this->session->userdata('fullname') == __session('fullname')) { ?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Wall and Floor Tilling</h5>
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
                                    <a class="nav-link active" id="name-tab" data-toggle="tab" href="#name" role="tab" aria-controls="name" aria-selected="true">DataBase</a>
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
                                                    <th class="align-middle text-center" rowspan="2">NISN</th>
                                                    <th class="align-middle text-center" rowspan="2">Nilai Teori <br> (25%)</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td class="align-middle text-center" style="max-width:10px;">
                                                    <button type="submit" name="submit" class="btn btn-primary px-3"><i class="fas fa-fw fa-check"></i> Simpan</button>
                                                    </td>
                                                    <td style="max-width:10px;">
                                                    <select name="peserta" id="fullname" class="form-control" required="">
                                                        <option value="">pilih:</option>
                                                        <?php foreach($peserta as $row): ?>
                                                        <option value="<?=$row['fullname']?>"><?=$row['fullname']?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    </td>
                                                    <td style="max-width:20px;">
                                                    <input type="text" class="form-control" name="sekolah_asal" autocomplete="off" readonly required="">
                                                    </td>
                                                    <td>1234567</td>
                                                    <td style="max-width:20px;">
                                                    <!-- <input type="text" class="form-control" name="total" id="inputc" autocomplete="off" required=""> -->
                                                    <input type="hidden" class="form-control" name="admin" value="<?=__session('fullname');?>" autocomplete="off" required="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- TAB A -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="width:10%;" rowspan="1">A</th>
                                                    <th class="align-middle text-center" style="width:40%;" rowspan="9">OVERALL OF APPEARANCE/VISUAL (SUBJECTIVE) <br> PENILAIAN 0-3, JIKA PENILAIAN  (0=0 POINT),(1=0,33 POINT),(2=0,67 POINT) DAN (3=1 POINT)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="9">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="9">Score</th>
                                                    <th class="align-middle text-center" style="width:9%;"  rowspan="9">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="9">Calculation </th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Kebersihan pasangan keramik  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n1" id="wall1" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:50px;">
                                                        <input type="text" name="n2" id="wall2" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n3" id="walla" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Kebersihan sudut/tepi pasangan keramik </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text"  name="n4" id="wall3" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"  name="n5" id="wall4" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text"  name="n6" id="wallb" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Kualitas gambar Gunungan/daun </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n7" id="wall5" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"  name="n8" id="wall6"  class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text"  name="n9" id="wallc"  class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>kualitas gambar pendopo </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n10" id="wall7" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"name="n11" id="wall8" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n12" id="walld" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Kualitas nat atau siar </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n13" id="wall9" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n14" id="wall10" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n15" id="walle" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Floor</td>
                                                    <td>Kualitas pasangan sudut perstek  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text"  name="n16" id="wall11" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text"  name="n17" id="wall12" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text"  name="n18" id="wallf" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>kebersihan pasangan anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n19" id="wall13" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n20" id="wall14" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n21" id="wallg" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Kebersihan siar / nat anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n22" id="wall15" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n23" id="wall16" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n24" id="wallh" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Kualitas pasangan anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n25" id="wall17" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n26" id="wall18" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n27" id="walli" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Tab B -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="width:10%;" rowspan="1">B</th>
                                                    <th class="align-middle text-center" style="width:40%;" rowspan="7">CUTTING/POTONGAN (SUBJECTIVE) <br> PENILAIAN 0-3, JIKA PENILAIAN  (0=0 POINT),(1=0,33 POINT),(2=0,67 POINT) DAN (3=1 POINT)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Score</th>
                                                    <th class="align-middle text-center" style="width:9%;" rowspan="7">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>kualitas Potongan Gunungan/daun  </td>
                                                    <td style="max-width:15px;">
                                                        <input type="text" name="n28" id="wall19" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n29" id="wall20" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n30" id="wallj" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Potongan tumpuan atap pendopo </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n30" id="wall21" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n31" id="wall22" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n32" id="wallk" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>kualitas Potongan lengkungan kanan </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n33" id="wall23" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n34" id="wall24" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n35" id="walll" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>kualitas Potongan lengkungan kiri </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n36" id="wall25" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n37" id="wall26" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n38" id="wallm" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>kualitas potongan  anak tangga pendopo </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n39" id="wall27" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n40" id="wall28" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n41" id="walln" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Floor</td>
                                                    <td>kulaitas Potongan perstek anak tangga  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text"  name="n42" id="wall29" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n43" id="wall30" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n44" id="wallo" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>kulaitas Pot. keramik bagian kiri kanan  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n45" id="wall31" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n46" id="wall32" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n47" id="wallp" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Tab C -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="width:10%;" rowspan="1">C</th>
                                                    <th class="align-middle text-center" style="width:40%;" rowspan="7">LEVELING/DATAR (OBJECTIVE) <br> PENILAIAN SETIAP KESALAHAN 1 MM DIKURANGI 1 POINT (JIKA KESALAHAN 1 MM MAKA NILAINYA 0,9 POINT), KESALAHAN LEBIH DARI 5 MM MAKA NILAI DITETAPKAN 0,2 POINT</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Score</th>
                                                    <th class="align-middle text-center" style="width:9%;" rowspan="7">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Bagian atas pas. keramik  </td>
                                                    <td style="max-width:15px;">
                                                        <input type="text" name="n47" id="wall33" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n48" id="wall34" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n49" id="wallq" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Floor</td>
                                                    <td>bagian kanan anak tangga  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n50" id="wall35" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n51" id="wall36" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text"  name="n52" id="wallr" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>bagian kiri anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n53" id="wall37" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n54" id="wall38" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n55" id="walls" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>bagian depan anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n56" id="wall39" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n57" id="wall40" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n58" id="wallt" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>kbagian belakang anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n59" id="wall41" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n60" id="wall42" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n61" id="wallu" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>diagonal kiri kekanan bagian atas tangga  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n62" id="wall43" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n63" id="wall44" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n64" id="wallv" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>diagonal kanan kekri bagian atas tangga  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n65" id="wall45" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n66" id="wall46" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n67" id="wallw" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Tab D -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="width:10%;" rowspan="1">D</th>
                                                    <th class="align-middle text-center" style="width:40%;" rowspan="8">PLUMB/TEGAK (OBJECTIVE) <br> PENILAIAN SETIAP KESALAHAN 1 MM DIKURANGI 1 POINT (JIKA KESALAHAN 1 MM MAKA NILAINYA 0,9 POINT), KESALAHAN LEBIH DARI 5 MM MAKA NILAI DITETAPKAN 0,2 POINT</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="8">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="8">Score</th>
                                                    <th class="align-middle text-center" style="width:9%;" rowspan="8">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="8">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Samping kiri dinding </td>
                                                    <td style="max-width:15px;">
                                                        <input type="text" name="n68" id="wall47" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n69" id="wall48" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n70" id="wallx" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Bagian kiri depan dinding </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n71" id="wall49" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n72" id="wall50" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n73" id="wally" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>bagian kanan depan dinding </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n74" id="wall51" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n75" id="wall52" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n76" id="wallz" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Samping kanan dinding </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n77" id="wall53" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n78" id="wall54" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n79" id="wallaa" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Floor</td>
                                                    <td>bagian kiri anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n80" id="wall55" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n81" id="wall56" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n82" id="wallab" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>bagian kanan anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n83" id="wall57" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n84" id="wall58" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n85" id="wallac" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>bagian depan kiri anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n86" id="wall59" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n87" id="wall60" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n88" id="wallad" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>bagian depan kanan anak tangga</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n89" id="wall61" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n90" id="wall62" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n91" id="wallae" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Tab E -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center"style="width:10%;" rowspan="1">E</th>
                                                    <th class="align-middle text-center" style="width:40%;" rowspan="7">SQUARE/SIKU (OBJECTIVE) <br> PENILAIAN SETIAP KESALAHAN 1 MM DIKURANGI 1 POINT (JIKA KESALAHAN 1 MM MAKA NILAINYA 0,9 POINT), KESALAHAN LEBIH DARI 5 MM MAKA NILAI DITETAPKAN 0,2 POINT</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Score</th>
                                                    <th class="align-middle text-center" style="width:9%;" rowspan="7">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Sudut Kiri Atas dinding  </td>
                                                    <td style="max-width:15px;">
                                                        <input type="text" name="n92" id="wall63" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n93" id="wall64" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n94" id="wallaf" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>sudut kanan atas dinding  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n95" id="wall65" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n96" id="wall66" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n97" id="wallag" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>sudut tembok dan tangga bagian kiri</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n98" id="wall67" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n99" id="wall68" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n100" id="wallah" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Sudut dinding dan tangga bagian kanana </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n101" id="wall69" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n102" id="wall70" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n103" id="wallai" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Floor</td>
                                                    <td>Sudut anak tangga bagian  kanan </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n104" id="wall71" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n105" id="wall72" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n106" id="wallaj" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Sudut anak tangga bagian kiri  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n107" id="wall73" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n108" id="wall74" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n109" id="wallak" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Sudut anak tangga dan tembok bagian tengah  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n110" id="wall75" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n111" id="wall76" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n112" id="wallal" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Tab F -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="1">F</th>
                                                    <th class="align-middle text-center" style="width:65%;" rowspan="10"> SURFACE ALIGNMENT (OBJECTIVE) <br> PENILAIAN SETIAP KESALAHAN 1 MM DIKURANGI 1 POINT (JIKA KESALAHAN 1 MM MAKA NILAINYA 0,9 POINT), KESALAHAN LEBIH DARI 5 MM MAKA NILAI DITETAPKAN 0,2 POINT</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="10">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="10">Score</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="10">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="10">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Keramik pertama bagian atas </td>
                                                    <td style="max-width:15px;">
                                                        <input type="text" name="n113" id="wall77" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n114" id="wall78" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n115" id="wallam" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Keramik pertama depan bagian kiri  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n116" id="wall79" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n117" id="wall80" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n118" id="wallan" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Keramik pertama depan bagian kanan  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n119" id="wall81" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n120" id="wall82" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n121" id="wallao" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Keramik no 2 dari bawah  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n122" id="wall83" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n123" id="wallap" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Diagonal kiri atas ke kanan bawah </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n124" id="wall84" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n125" id="wall85" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" name="n126" id="wallaq" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Diagonal kanan atas ke kiri bawah </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>Floor</td>
                                                <td>bagian depan tangga </td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                <td>2</td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                <td>bagian belakang tangga</td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                <td>2</td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                <td>diagonal 1</td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                <td>1</td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                <td>diagonal 2</td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                <td>1</td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                <td style="max-width:10px;">
                                                    <input type="text" class="form-control" >
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Tab G -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="1">G</th>
                                                    <th class="align-middle text-center" style="width:65%;" rowspan="13"> MEASUREMENT (OBJECTIVE) <br> PENILAIAN SETIAP KESALAHAN 1 MM DIKURANGI 1 POINT (JIKA KESALAHAN 1 MM MAKA NILAINYA 0,9 POINT), KESALAHAN LEBIH DARI 5 MM MAKA NILAI DITETAPKAN 0,2 POINT</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="13">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="13">Score</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="13">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="13">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Ketinggian dinding sisi kiri  </td>
                                                    <td>1745 </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Lebar dinding bagian atas  </td>
                                                    <td>1340 </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Detail 1  </td>
                                                    <td>99 </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                    <td>Detail 2  </td>
                                                    <td>142 </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                    <td>Detail 3  </td>
                                                    <td>158 </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                    <td>Detail 4  </td>
                                                    <td>91 </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                    <td>Detail 5  </td>
                                                    <td>123 </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                    <td>Detail 6  </td>
                                                    <td>197 </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                    <td>Detail 7  </td>
                                                    <td>139 </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>Floor</td>
                                                    <td>Lebar anak tangga   </td>
                                                    <td>250 </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                    <td>lebar potongan kiri   </td>
                                                    <td>91 </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                    <td>Panjang anak tangga   </td>
                                                    <td>790 </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>#</td>
                                                    <td>Tinggi anak tangga   </td>
                                                    <td>188 </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                         <!-- Tab H -->
                                         <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="1">H</th>
                                                    <th class="align-middle text-center" style="width:65%;" rowspan="7">FULL  COMPLTED TO DRAWING (OBJECTIVE) <br> PENILAIAN SETIAP KESALAHAN 1 MM DIKURANGI 1 POINT (JIKA KESALAHAN 1 MM MAKA NILAINYA 0,9 POINT), KESALAHAN LEBIH DARI 5 MM MAKA NILAI DITETAPKAN 0,2 POINT</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Score</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Keramik tidak terpasang (Yes=0) (no=1) </td>
                                                    <td style="max-width:15px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Keramik salah pasang (Yes=0) (no=1)  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Gambar Lengkap (yes=1) (no=0)</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Floor</td>
                                                    <td>Keramik tidak terpasang (Yes=0) (no=1) </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Keramik salah pasang (Yes=0) (no=1) </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Gambar lengkap (yes=1) (no=0) </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>1</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Timetable</td>
                                                    <td>Penyerahan rencana kerja (yes=1) (no=0) </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>2</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
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
