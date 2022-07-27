<!-- tambah -->
<?php if ($this->session->userdata('fullname') == __session('fullname')) { ?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Motorcycle Repair and Maintenance</h5>
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
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TEORI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PRAKTEK 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">PRAKTEK 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hasil-tab" data-toggle="tab" href="#hasil" role="tab" aria-controls="hasil" aria-selected="false">NILAI DAN PERINGKAT</a>
                                </li>
                            </ul>


                            <!-- tab 1 -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:150%;">
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
                                    </div>
                                </div>


                                <!-- tab 2 -->
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    
                                <!-- <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> -->
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:150%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="2">#</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Peserta</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Sekolah</th>
                                                    <th class="align-middle text-center" rowspan="2">NISN</th>
                                                    <th class="align-middle text-center" colspan="5" >PRAKTEK 1</th>
                                                    <th class="align-middle text-center" rowspan="2">Total Praktek 1  <br> (35%)</th>
                                                </tr>

                                                <tr>
                                                    <th class="text-center">POS-1 <br> (Chasis)</th>
                                                    <th class="text-center">POS-2 <br> (Electrical)</th>
                                                    <th class="text-center">POS-3 <br> (Engine)</th>
                                                    <th class="text-center">POS-4 <br> (Fuel System)</th>
                                                    <th class="text-center">POS-5 <br>  (Alat Ukur)</th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dwi</td>
                                                    <td>SMK</td>
                                                    <td>1234567</td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>35%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <!-- Tab 3 -->
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="card-body table-responsive">
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:150%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="2">#</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Peserta</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Sekolah</th>
                                                    <th class="align-middle text-center" rowspan="2">NISN</th>
                                                    <th class="align-middle text-center" colspan="1" >PRAKTEK 2</th>
                                                    <th class="align-middle text-center" rowspan="2">Total Praktek 2 <br> (40%)</th>

                                                </tr>

                                                <tr>
                                                    <th class="text-center">TroubleShooting</th>


                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dwi</td>
                                                    <td>SMK</td>
                                                    <td>12344</td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>35%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                    <!-- tab 4 -->
                                    <div class="tab-pane fade" id="hasil" role="tabpanel" aria-labelledby="hasil-tab">
                                <div class="card-body table-responsive">
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:150%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="2">#</th>
                                                    <th class="align-middle text-center" rowspan="2">NILAI AKHIR</th>
                                                    <th class="align-middle text-center" rowspan="2">PERINGKAT</th>
                                                    

                                                </tr>


                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dwi</td>
                                                    <td>SMK</td>
                                                </tr>
                                            </tbody>
                                        </table>
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