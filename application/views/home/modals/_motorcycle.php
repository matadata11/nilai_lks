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
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">PRAKTEK 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PRAKTEK 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">MODUL C</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:150%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="2">#</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Peserta</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Sekolah</th>
                                                    <th class="align-middle text-center" colspan="8" >Server 1</th>
                                                    <th class="align-middle text-center" colspan="5">Server 2</th>
                                                    <th class="align-middle text-center" rowspan="2">Total</th>
                                                    <th class="align-middle text-center" rowspan="2">Hasil</th>
                                                </tr>

                                                <tr>
                                                    <th class="text-center">1</th>
                                                    <th class="text-center">2</th>
                                                    <th class="text-center">3</th>
                                                    <th class="text-center">4</th>
                                                    <th class="text-center">5</th>
                                                    <th class="text-center">6</th>
                                                    <th class="text-center">7</th>
                                                    <th class="text-center">8</th>

                                                    <th class="text-center">1</th>
                                                    <th class="text-center">2</th>
                                                    <th class="text-center">3</th>
                                                    <th class="text-center">4</th>
                                                    <th class="text-center">5</th>
                                                    
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dwi</td>
                                                    <td>SMK</td>
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
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    </td>
                                                    <td>100</td>
                                                    <td>35%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <!-- tab 2 -->
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    
                                <div class="card-body table-responsive">
                                        <table class="table table-bordered table-hover table-sm" id="" style="width:150%;">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" rowspan="2">#</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Peserta</th>
                                                    <th class="align-middle text-center" rowspan="2">Nama Sekolah</th>
                                                    <th class="align-middle text-center" colspan="8" >Router A</th>
                                                    <th class="align-middle text-center" colspan="8">Router B</th>
                                                    <th class="align-middle text-center" rowspan="2">Total</th>
                                                    <th class="align-middle text-center" rowspan="2">Hasil</th>
                                                </tr>

                                                <tr>
                                                    <th class="text-center">1</th>
                                                    <th class="text-center">2</th>
                                                    <th class="text-center">3</th>
                                                    <th class="text-center">4</th>
                                                    <th class="text-center">5</th>
                                                    <th class="text-center">6</th>
                                                    <th class="text-center">7</th>
                                                    <th class="text-center">8</th>

                                                    <th class="text-center">1</th>
                                                    <th class="text-center">2</th>
                                                    <th class="text-center">3</th>
                                                    <th class="text-center">4</th>
                                                    <th class="text-center">5</th>
                                                    <th class="text-center">6</th>
                                                    <th class="text-center">7</th>
                                                    <th class="text-center">8</th>
                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dwi</td>
                                                    <td>SMK</td>
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
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>100</td>
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
                                                    <th class="align-middle text-center" colspan="8" >MODUL CISCO</th>
                                                    <th class="align-middle text-center" rowspan="2">Total</th>
                                                    <th class="align-middle text-center" rowspan="2">Hasil</th>
                                                </tr>

                                                <tr>
                                                    <th class="text-center">1</th>
                                                    <th class="text-center">2</th>
                                                    <th class="text-center">3</th>
                                                    <th class="text-center">4</th>
                                                    <th class="text-center">5</th>
                                                    <th class="text-center">6</th>
                                                    <th class="text-center">7</th>
                                                    <th class="text-center">8</th>

                                                </tr>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dwi</td>
                                                    <td>SMK</td>
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
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" class="form-control" >
                                                    </td>
                                                    <td>100</td>
                                                    <td>35%</td>
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