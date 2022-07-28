<!-- tambah -->
<?php if ($this->session->userdata('fullname') == __session('fullname')) { ?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Automobile Technology</h5>
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
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="2">No</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="2">Nama Peserta</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="2">Nama Sekolah</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="2">Nomor Peserta</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="2">Waktu Penyelesaian</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="2">Skala Penilaian </th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                <td style="background-color: #D3D3D3;" style="max-width:5px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="background-color: #D3D3D3;" style="max-width:5px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="background-color: #D3D3D3;" style="max-width:5px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="background-color: #D3D3D3;" style="max-width:5px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="background-color: #D3D3D3;" style="max-width:5px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td  style="background-color: #D3D3D3;" style="max-width:5px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- TAB 1 -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="1">No</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:55%;" rowspan="6">URAIAN ASPEK YANG DI NILAI</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="6">BOBOT MAKSIMAL</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="6">BOBOT PEROLEHAN</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td style="background-color:#B0E0E6;" class="align-middle text-center">1</td>
                                                    <td style="background-color:#B0E0E6;"> <b>Preparation</b></td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">a</td>
                                                    <td>Pakaian kerja </td>
                                                    <td class="align-middle text-center">10 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">b</td>
                                                    <td>Pemilihan alat dan bahan  </td>
                                                    <td class="align-middle text-center">30 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">c</td>
                                                    <td>Memasang cover pelindung</td>
                                                    <td class="align-middle text-center">30 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">d</td>
                                                    <td>Pemeriksaan awal mesin </td>
                                                    <td class="align-middle text-center">30 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>  </td>
                                                    <td class="align-middle text-center"><b>Total </b></td>
                                                    <td class="align-middle text-center"><b>100 </b></td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                         <!-- TAB 2 -->
                                         <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="1">No</th>
                                                    <th class="align-middle text-center"  style="background-color: #D3D3D3;" style="width:55%;" rowspan="7">URAIAN ASPEK YANG DI NILAI</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="7">BOBOT MAKSIMAL</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="7">BOBOT PEROLEHAN</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td class="align-middle text-center" style="background-color:#B0E0E6;" >2</td>
                                                    <td style="background-color:#B0E0E6;" ><b>Repair Engine to Start and Run</b></td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">a</td>
                                                    <td>Menstart mesin  </td>
                                                    <td class="align-middle text-center">40 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">b</td>
                                                    <td>Mencari dan menemukan trouble </td>
                                                    <td class="align-middle text-center">40 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">c</td>
                                                    <td>Memeriksa/mengganti komponen</td>
                                                    <td class="align-middle text-center">40 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">d</td>
                                                    <td>Menggunakan manual Book </td>
                                                    <td class="align-middle text-center">40 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">e</td>
                                                    <td>Menghidupkan mesin</td>
                                                    <td class="align-middle text-center">40 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>  </td>
                                                    <td class="align-middle text-center"><b>Total </b></td>
                                                    <td class="align-middle text-center"><b>200 </b></td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <!-- TAB 3 -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="1">No</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:80%;" rowspan="6">URAIAN ASPEK YANG DI NILAI</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="6">BOBOT MAKSIMAL</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="6">BOBOT PEROLEHAN</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td class="align-middle text-center" style="background-color:#B0E0E6;">3</td>
                                                    <td style="background-color:#B0E0E6;"><b>Diagnosis Engine Control System By Scan <Br>Tool And Jumper Cable</Br> </b></td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">a</td>
                                                    <td>Menstart mesin  </td>
                                                    <td class="align-middle text-center">40 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">b</td>
                                                    <td>Mencari dan menemukan trouble </td>
                                                    <td class="align-middle text-center">40 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">c</td>
                                                    <td>Memeriksa/mengganti komponen</td>
                                                    <td class="align-middle text-center">40 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">d</td>
                                                    <td>Menggunakan manual Book </td>
                                                    <td class="align-middle text-center">40 </td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>  </td>
                                                    <td class="align-middle text-center"><b>Total </b></td>
                                                    <td class="align-middle text-center"><b>200 </b></td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- TAB 4 -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="1">No</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:55%;" rowspan="17">URAIAN ASPEK YANG DI NILAI</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="17">BOBOT MAKSIMAL</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="17">BOBOT PEROLEHAN</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td class="align-middle text-center" style="background-color:#B0E0E6;">4</td>
                                                    <td style="background-color:#B0E0E6;"><b>Check and Measure EFI Components</b></td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">a</td>
                                                    <td>Cek Battery</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">b</td>
                                                    <td>Cek Oli</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">c</td>
                                                    <td>Cek Saringan udara</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">d</td>
                                                    <td>Cek Tutup radiator</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">e</td>
                                                    <td>Cek Air pendingin</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">f</td>
                                                    <td>Cek Busi</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">g</td>
                                                    <td>Mengukur Injektor</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">h</td>
                                                    <td>Mengukur Throtle Position Sensor (TPS)</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">i</td>
                                                    <td>Mengukur Temperature Heat Water (THW)</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">j</td>
                                                    <td>Mengukur G sensor</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">k</td>
                                                    <td>Mengukur Ne sensor</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">l</td>
                                                    <td>Mengukur Knock sensor</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">m</td>
                                                    <td>Membaca Current data</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">n</td>
                                                    <td>Suhu Udara masuk</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">o</td>
                                                    <td>Suhu Air pendingin</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>  </td>
                                                    <td class="align-middle text-center"><b>Total </b></td>
                                                    <td class="align-middle text-center"><b>300</b></td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <!-- TAB 5 -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="1">No</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:55%;" rowspan="5">URAIAN ASPEK YANG DI NILAI</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="5">BOBOT MAKSIMAL</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="5">BOBOT PEROLEHAN</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td class="align-middle text-center" style="background-color:#B0E0E6;">5</td>
                                                    <td style="background-color:#B0E0E6;"><b>Use Of the Exhaust Gas Analyser</b></td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">a</td>
                                                    <td>Putaran idle</td>
                                                    <td class="align-middle text-center">30</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">b</td>
                                                    <td>Putaran 2500rpm</td>
                                                    <td class="align-middle text-center">50</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">c</td>
                                                    <td>Menggunakan manual book</td>
                                                    <td class="align-middle text-center">50</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>  </td>
                                                    <td class="align-middle text-center"><b>Total </b></td>
                                                    <td class="align-middle text-center"><b>130</b></td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- TAB 6 -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" rowspan="1">No</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:55%;" rowspan="3">URAIAN ASPEK YANG DI NILAI</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="3">BOBOT MAKSIMAL</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="3">BOBOT PEROLEHAN</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td class="align-middle text-center" style="background-color:#B0E0E6;">6</td>
                                                    <td style="background-color:#B0E0E6;"><b>Kebersihan Alat dan Tempat Kerja</b></td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    <td style="background-color:#B0E0E6;">   </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center">a</td>
                                                    <td>Membersihkan alat dan tempat kerja</td>
                                                    <td class="align-middle text-center">20</td>
                                                    <td style="max-width:10px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>  </td>
                                                    <td class="align-middle text-center"><b>Total </b></td>
                                                    <td class="align-middle text-center"><b>20</b></td>
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
