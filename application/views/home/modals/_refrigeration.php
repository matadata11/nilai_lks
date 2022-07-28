<!-- tambah -->
<?php if ($this->session->userdata('fullname') == __session('fullname')) { ?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Refrigeration and Air Conditioning</h5>
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
                                                    <th class="align-middle text-center" style="width:5%;" style="background-color: #D3D3D3;" rowspan="2">No</th>
                                                    <th class="align-middle text-center" style="width:20%;" style="background-color: #D3D3D3;" rowspan="2">Nama Peserta</th>
                                                    <th class="align-middle text-center" style="width:20%;" style="background-color: #D3D3D3;" rowspan="2">Nama Sekolah</th>
                                                    <th class="align-middle text-center" style="width:20%;" style="background-color: #D3D3D3;" rowspan="2">Asal Kab/Kota</th>
                                                    <th class="align-middle text-center" style="width:10%;" style="background-color: #D3D3D3;" rowspan="2">Nilai Keseluruhan</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td style="background-color: #D3D3D3;" style="width:5%;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="background-color: #D3D3D3;" style="width:20%;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="background-color: #D3D3D3;" style="width:20%;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="background-color: #D3D3D3;" style="width:20%;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td  style="background-color: #D3D3D3;" style="width:10%;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- TAB A -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="background-color:#D3D3D3;" style="width:5%;"  rowspan="1">Modul</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:55%;" rowspan="4">Deskripsi</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="4">Penilaian</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="4">Nilai Peserta</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td style="width:5%;" class="align-middle text-center"><b>A</b></td>
                                                    <td style="width:55%;">1.Kerapian di lingkungan kerja</td>
                                                    <td class="align-middle text-center" style="width:5%;" style="background-color:#B0E0E6;">6</td>
                                                    <td style="background-color:#B0E0E6;" style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td style="width:5%;" class="align-middle text-center"> </td>
                                                    <td style="width:55%;">2.Instalasi pemipaan</td>
                                                    <td style="width:5%;" class="align-middle text-center">10</td>
                                                    <td style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">3.Instalasi kelistrikan</td>
                                                    <td class="align-middle text-center" style="width:5%;">9</td>
                                                    <td style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">4.Waktu penyelesaian</td>
                                                    <td class="align-middle text-center" style="width:5%;">10</td>
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
                                                    <th class="align-middle text-center" style="background-color:#D3D3D3;" style="width:5%;"  rowspan="1">Modul</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:55%;" rowspan="3">Deskripsi</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="3">Penilaian</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="3">Nilai Peserta</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td style="width:5%;" class="align-middle text-center"><b>B</b></td>
                                                    <td style="width:55%;">1.Prilaku di lingkungan kerja</td>
                                                    <td class="align-middle text-center" style="width:5%;" style="background-color:#B0E0E6;">7</td>
                                                    <td style="background-color:#B0E0E6;" style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td style="width:5%;" class="align-middle text-center"> </td>
                                                    <td style="width:55%;">2.Pengisian freon ke sistem</td>
                                                    <td style="width:5%;" class="align-middle text-center">8</td>
                                                    <td style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle text-center" style="width:5%;"> </td>
                                                    <td style="width:55%;">3.Uji fungsi sistem</td>
                                                    <td class="align-middle text-center" style="width:5%;">10</td>
                                                    <td style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <!-- TAB C -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="background-color:#D3D3D3;" style="width:7.5%;"  rowspan="1">Modul</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:75%;" rowspan="1">Deskripsi</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:9.5%;" rowspan="1">Penilaian</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="1">Nilai Peserta</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td style="width:7.5%;" class="align-middle text-center"><b>C</b></td>
                                                    <td style="width:75%;">1.Wawancara pengetahuan dasar pendingin</td>
                                                    <td class="align-middle text-center" style="width:9.5%;" style="background-color:#B0E0E6;">30</td>
                                                    <td style="background-color:#B0E0E6;" style="width:5%;">
                                                        <input type="text-center" class="form-control" >
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>


                                        <!-- TAB D -->
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" style="background-color:#D3D3D3;" style="width:7.5%;"  rowspan="1">Modul</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:75%;" rowspan="1">Deskripsi</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:9.5%;" rowspan="1">Penilaian</th>
                                                    <th class="align-middle text-center" style="background-color: #D3D3D3;" style="width:5%;" rowspan="1">Nilai Peserta</th>
                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td style="width:7.5%;" class="align-middle text-center"><b>D</b></td>
                                                    <td style="width:75%;">1.Keselamatan dan kesehatan kerja</td>
                                                    <td class="align-middle text-center" style="width:9.5%;" style="background-color:#B0E0E6;">10</td>
                                                    <td style="background-color:#B0E0E6;" style="width:5%;">
                                                        <input type="text-center" class="form-control" >
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
