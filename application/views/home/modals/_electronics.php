<!-- tambah -->
<?php if ($this->session->userdata('fullname') == __session('fullname')) { ?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Electronics Applications</h5>
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
                                                    <td  style="background-color: #D3D3D3;" style="max-width:5px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- TAB A -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="width:5%;" style="background-color: #D3D3D3;" rowspan="1">Modul</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:55%;" rowspan="6">Kriteria Test Project</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="6">Nilai Maksimum</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="6">Nilai Hasil</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td style="width:5%;" class="align-middle text-center">A</td>
                                                    <td style="width:55%;" style="background-color:#B0E0E6;"> <b>Prototype Hardware Design</b></td>
                                                    <td class="align-middle text-center" style="width:5%;" style="background-color:#B0E0E6;"> <b>35</b></td>
                                                    <td style="background-color:#B0E0E6;" style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td style="width:5%;" class="align-middle text-center"> </td>
                                                    <td style="width:55%;">• Pengembangan / perancangan rangkaian </td>
                                                    <td style="width:5%;" class="align-middle text-center">5</td>
                                                    <td style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Ujicoba rangkaian di Project Board</td>
                                                    <td class="align-middle text-center" style="width:5%;">5</td>
                                                    <td style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Gambar skematik, Perancangan PCB (lay out PCB) dan  Cetak hasil </td>
                                                    <td class="align-middle text-center" style="width:5%;">10</td>
                                                    <td style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Etching PCB, pengeboran, Soldering</td>
                                                    <td class="align-middle text-center" style="width:5%;">10</td>
                                                    <td style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Fungsi Rangkaian</td>
                                                    <td class="align-middle text-center" style="width:5%;">5</td>
                                                    <td style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- TAB B -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="width:5%;" style="background-color: #D3D3D3;" rowspan="1">Modul</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:55%;" rowspan="6">Kriteria Test Project</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="6">Nilai Maksimum</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="6">Nilai Hasil</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;">B</td>
                                                    <td style="background-color:#B0E0E6;" style="width:55%;"> <b>Basic Fault Finding, Assembly and Measurement</b></td>
                                                   <td class="align-middle text-center" style="background-color:#B0E0E6;" style="width:5%;"> <b>35</b></td>
                                                   <td style="background-color:#B0E0E6;" style="width:5%;">
                                                    <input type="text-center" class="form-control"></td> 
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center"style="width:5%;"> </td>
                                                    <td style="width:55%;">• Analisa PCB dan Skema</td>
                                                    <td class="align-middle text-center" style="width:5%;">5</td>
                                                    <td style="width:5%;">
                                                    <input type="text-center" class="form-control"></td> 
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">•Soldering</td>
                                                    <td class="align-middle text-center" style="width:5%;">10</td>
                                                    <td style="width:5%;">
                                                    <input type="text-center" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Pengukuran ( penguatan, tanggapan Frekuensi dan grafik tanggapan frekuensi)</td>
                                                    <td class="align-middle text-center" style="width:5%;">5</td>
                                                    <td style="width:5%;">
                                                    <input type="text-center" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Assembly </td>
                                                    <td class="align-middle text-center" style="width:5%;">5</td>
                                                    <td style="width:5%;">
                                                    <input type="text-center" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Fungsi alat</td>
                                                    <td class="align-middle text-center" style="width:5%;">10</td>
                                                    <td style="width:5%;">
                                                    <input type="text-center" class="form-control"></td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <!-- TAB C -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="width:5%;" style="background-color: #D3D3D3;" rowspan="1">Modul</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:55%;" rowspan="5">Kriteria Test Project</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="5">Nilai Maksimum</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="5">Nilai Hasil</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;">C</td>
                                                    <td style="background-color:#B0E0E6;" style="width:55%;"> <b>Embedded System Programming</b></td>
                                                   <td class="align-middle text-center" style="background-color:#B0E0E6;" style="width:5%;"> <b>30</b></td>
                                                   <td style="background-color:#B0E0E6;" style="width:5%;">
                                                    <input type="text-center" class="form-control"></td> 
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Pemrograman Fase C1</td>
                                                    <td class="align-middle text-center" style="width:5%;">7</td>
                                                    <td style="width:5%;">
                                                    <input type="text-center" class="form-control"></td> 
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Pemrograman Fase C2</td>
                                                    <td class="align-middle text-center" style="width:5%;">7</td>
                                                    <td style="width:5%;">
                                                    <input type="text-center" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Pemrograman Fase C3</td>
                                                    <td class="align-middle text-center" style="width:5%;">7</td>
                                                    <td style="width:5%;">
                                                    <input type="text-center" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">• Pemrograman Fase C4</td>
                                                    <td class="align-middle text-center" style="width:5%;">9</td>
                                                    <td style="width:5%;">
                                                    <input type="text-center" class="form-control"></td>
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
