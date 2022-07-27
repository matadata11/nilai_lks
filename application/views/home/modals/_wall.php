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
            <form method="post" action="<?=site_url('add-list')?>">
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
                                                    <th class="align-middle text-center" rowspan="2">#</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Peserta</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Sekolah</th>
                                                    <th class="align-middle text-center" rowspan="2">NISN</th>
                                                    <th class="align-middle text-center" rowspan="2">Nilai Teori <br> (25%)</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dwi</td>
                                                    <td>SMK</td>
                                                    <td>1234567</td>
                                                    <td>35%</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- TAB A -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="1">A</th>
                                                    <th class="align-middle text-center" style="width:65%;" rowspan="9">OVERALL OF APPEARANCE/VISUAL (SUBJECTIVE) <br> PENILAIAN 0-3, JIKA PENILAIAN  (0=0 POINT),(1=0,33 POINT),(2=0,67 POINT) DAN (3=1 POINT)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="9">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="9">Score</th>
                                                    <th class="align-middle text-center" style="width:5%;"  rowspan="9">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="9">Calculation </th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Kebersihan pasangan keramik  </td>
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
                                                    <td>Kebersihan sudut/tepi pasangan keramik </td>
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
                                                    <td>Kualitas gambar Gunungan/daun </td>
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
                                                    <td>kualitas gambar pendopo </td>
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
                                                    <td>Kualitas nat atau siar </td>
                                                    <td style="max-width:30px;">
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
                                                    <td>Kualitas pasangan sudut perstek  </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>kebersihan pasangan anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Kebersihan siar / nat anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Kualitas pasangan anak tangga </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Tab B -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="1">B</th>
                                                    <th class="align-middle text-center" style="width:65%;" rowspan="7">CUTTING/POTONGAN (SUBJECTIVE) <br> PENILAIAN 0-3, JIKA PENILAIAN  (0=0 POINT),(1=0,33 POINT),(2=0,67 POINT) DAN (3=1 POINT)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Score</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>kualitas Potongan Gunungan/daun  </td>
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
                                                    <td>Potongan tumpuan atap pendopo </td>
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
                                                    <td>kualitas Potongan lengkungan kanan </td>
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
                                                    <td>kualitas Potongan lengkungan kiri </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>kualitas potongan  anak tangga pendopo </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>0.5</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Floor</td>
                                                    <td>kulaitas Potongan perstek anak tangga  </td>
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
                                                    <td>kulaitas Pot. keramik bagian kiri kanan  </td>
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

                                        <!-- Tab C -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="1">C</th>
                                                    <th class="align-middle text-center" style="width:65%;" rowspan="7">LEVELING/DATAR (OBJECTIVE) <br> PENILAIAN SETIAP KESALAHAN 1 MM DIKURANGI 1 POINT (JIKA KESALAHAN 1 MM MAKA NILAINYA 0,9 POINT), KESALAHAN LEBIH DARI 5 MM MAKA NILAI DITETAPKAN 0,2 POINT</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Score</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Bagian atas pas. keramik  </td>
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
                                                    <td>Floor</td>
                                                    <td>bagian kanan anak tangga  </td>
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
                                                    <td>bagian kiri anak tangga </td>
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
                                                    <td>bagian depan anak tangga </td>
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
                                                    <td>kbagian belakang anak tangga </td>
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
                                                    <td>diagonal kiri kekanan bagian atas tangga  </td>
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
                                                    <td>diagonal kanan kekri bagian atas tangga  </td>
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

                                        <!-- Tab D -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="1">D</th>
                                                    <th class="align-middle text-center" style="width:65%;" rowspan="8">PLUMB/TEGAK (OBJECTIVE) <br> PENILAIAN SETIAP KESALAHAN 1 MM DIKURANGI 1 POINT (JIKA KESALAHAN 1 MM MAKA NILAINYA 0,9 POINT), KESALAHAN LEBIH DARI 5 MM MAKA NILAI DITETAPKAN 0,2 POINT</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="8">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="8">Score</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="8">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="8">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Samping kiri dinding </td>
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
                                                    <td>Bagian kiri depan dinding </td>
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
                                                    <td>bagian kanan depan dinding </td>
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
                                                    <td>Samping kanan dinding </td>
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
                                                    <td>bagian kiri anak tangga </td>
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
                                                    <td>bagian kanan anak tangga </td>
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
                                                    <td>bagian depan kiri anak tangga </td>
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
                                                    <td>bagian depan kanan anak tangga</td>
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

                                         <!-- Tab E -->
                                         <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="1">E</th>
                                                    <th class="align-middle text-center" style="width:65%;" rowspan="7">SQUARE/SIKU (OBJECTIVE) <br> PENILAIAN SETIAP KESALAHAN 1 MM DIKURANGI 1 POINT (JIKA KESALAHAN 1 MM MAKA NILAINYA 0,9 POINT), KESALAHAN LEBIH DARI 5 MM MAKA NILAI DITETAPKAN 0,2 POINT</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Nominal size (Kesalahan)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Score</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Actual value (point)</th>
                                                    <th class="align-middle text-center" style="width:5%;" rowspan="7">Calculation </th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>Wall A</td>
                                                    <td>Sudut Kiri Atas dinding  </td>
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
                                                    <td>sudut kanan atas dinding  </td>
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
                                                    <td>sudut tembok dan tangga bagian kiri</td>
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
                                                    <td>Sudut dinding dan tangga bagian kanana </td>
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
                                                    <td>Sudut anak tangga bagian  kanan </td>
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
                                                    <td>Sudut anak tangga bagian kiri  </td>
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
                                                    <td>Sudut anak tangga dan tembok bagian tengah  </td>
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
                                                    <td>Keramik pertama depan bagian kiri  </td>
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
                                                    <td>Keramik pertama depan bagian kanan  </td>
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
                                                    <td>Keramik no 2 dari bawah  </td>
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
                                                    <td>Diagonal kiri atas ke kanan bawah </td>
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
