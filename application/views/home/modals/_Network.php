<!-- tambah -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IT Network System Administration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('add-nilai_it')?>">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">MODUL</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">MODUL B</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">MODUL C</a>
                                </li> -->
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body table-responsive">
                                        <!-- nama siswa -->
                                        <table class="table table-bordered table-hover table-sm" id="">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" >opsi</th>
                                                    <th class="align-middle text-center" >Nama Peserta</th>
                                                    <th class="align-middle text-center" >Nama Sekolah</th>
                                                    <th class="align-middle text-center" >Total</th>
                                                </tr>
                                            
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
                                                    <td style="max-width:20px;">
                                                    <input type="text" class="form-control" name="total" id="inputc" autocomplete="off" required="">
                                                    <input type="hidden" class="form-control" name="admin" value="<?=__session('fullname');?>" autocomplete="off" required="">
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table>
                                        <!-- end nama siswa -->

                                        <!-- server -->
                                        <table class="table table-bordered table-hover table-sm" id="">
                                            <thead>
                                                <tr>
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

                                                <tr>
                                                        
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n1" id="input1" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"  name="n2" id="input2" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"  name="n3" id="input3" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"  name="n4" id="input4" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n5" id="input5" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n6" id="input6" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n7" id="input7" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n8" id="input8" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n9" id="input9" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n10" id="input10" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n11" id="input11" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n12" id="input12" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n13" id="input13" class="form-control" >
                                                    </td>
                                                    </td>
                                                    <td style="max-width:40px;">
                                                        <input type="text" name="n14" readonly id="input14" class="form-control" >
                                                    </td>
                                                    <td style="max-width:40px;">
                                                    <input type="text" name="n16" id="input16" class="form-control" readonly>

                                                    <!-- <input type="text" name="n16" value="35" readonly id="input17" class="form-control" >

                                                    <input type="text" name="n16" value="30" readonly id="input18" class="form-control" > -->
                                                    </td>
                                                    
                                                </tr>
                                            </thead>
                                        </table>
                                        <!-- end server -->

                                        <!-- router -->
                                        <table class="table table-bordered table-hover table-sm" id="">
                                            <thead>
                                                <tr>
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

                                                <tr>
                                                        
                                                <td style="max-width:30px;">
                                                        <input type="text" name="n17" id="input17" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n18" id="input18" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n19" id="input19" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n20" id="inputa" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n21" id="inputa1" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n22" id="inputa2" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n23" id="inputa3" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n24" id="inputa4" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n25" id="inputa5" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n26" id="inputa6" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n27" id="inputa7" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n28" id="inputa8" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n29" id="inputa9" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n30" id="inputa10" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n31" id="inputa11" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n32" id="inputa12" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n33" id="inputa13" class="form-control" readonly>
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n34" id="inputa14" class="form-control" readonly>
                                                    </td>
                                                    
                                                </tr>
                                            </thead>
                                        </table>
                                        <!-- end router -->

                                        <!-- modul 3 -->
                                        <table class="table table-bordered table-hover table-sm" id="">
                                            <thead>
                                                <tr>
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

                                                <tr>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n35" id="input30" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n36" id="input31" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n37" id="input32" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n38" id="input33" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n39" id="input34" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n40" id="input35" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n41" id="input36" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n42" id="input37" class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n43" id="input38" class="form-control" readonly>
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" name="n44" id="inputb39" class="form-control" readonly>
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table>
                                        <!-- end modul 3 -->
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
<!-- end tambah -->

<?php  foreach($nilai as $row): ?>
<div class="modal fade" id="lihat<?=$row['id_it'];?>" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IT Network System Administration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">MODUL</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body table-responsive">
                                        <!-- nama siswa -->
                                        <table class="table table-bordered table-hover table-sm" id="">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center" >opsi</th>
                                                    <th class="align-middle text-center" >Nama Peserta</th>
                                                    <th class="align-middle text-center" >Nama Sekolah</th>
                                                    <th class="align-middle text-center" >Total</th>
                                                </tr>
                                            
                                                <tr>
                                                    <td class="align-middle text-center" style="max-width:10px;">
                                                    <button data-dismiss="modal" aria-label="Close" class="btn btn-primary px-3"> Kembali</button>
                                                    </td>
                                                    <td style="max-width:10px;">
                                                    <input type="text" class="form-control" value="<?=$row['peserta'];?>" autocomplete="off" readonly required="">
                                                    </td>
                                                    <td style="max-width:20px;">
                                                    <input type="text" class="form-control" value="<?=$row['sekolah_asal'];?>" autocomplete="off" readonly required="">
                                                    </td>
                                                    <td style="max-width:20px;">
                                                    <input type="text" class="form-control" value="<?=$row['total'];?>" readonly autocomplete="off" required="">
                                                    <input type="hidden" class="form-control" name="admin" value="<?=__session('fullname');?>" autocomplete="off" required="">
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table>
                                        <!-- end nama siswa -->

                                        <!-- server -->
                                        <table class="table table-bordered table-hover table-sm" id="">
                                            <thead>
                                                <tr>
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

                                                <tr>
                                                        
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n1'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"  value="<?=$row['n2'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"  value="<?=$row['n3'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"  value="<?=$row['n4'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n5'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n6'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n7'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text"value="<?=$row['n8'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n9'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n10'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n11'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n12'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n13'];?>" readonly class="form-control" >
                                                    </td>
                                                    </td>
                                                    <td style="max-width:40px;">
                                                        <input type="text" value="<?=$row['n14'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:40px;">
                                                    <input type="text" value="<?=$row['n16'];?>" readonly class="form-control" >

                                                    <!-- <input type="text" name="n16" value="35" readonly id="input17" class="form-control" >

                                                    <input type="text" name="n16" value="30" readonly id="input18" class="form-control" > -->
                                                    </td>
                                                    
                                                </tr>
                                            </thead>
                                        </table>
                                        <!-- end server -->

                                        <!-- router -->
                                        <table class="table table-bordered table-hover table-sm" id="">
                                            <thead>
                                                <tr>
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

                                                <tr>
                                                        
                                                <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n17'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n18'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n19'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n20'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n21'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n22'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n23'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n24'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n25'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n26'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n27'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n28'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n29'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n30'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n31'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n32'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n33'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n34'];?>" readonly class="form-control" >
                                                    </td>
                                                    
                                                </tr>
                                            </thead>
                                        </table>
                                        <!-- end router -->

                                        <!-- modul 3 -->
                                        <table class="table table-bordered table-hover table-sm" id="">
                                            <thead>
                                                <tr>
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

                                                <tr>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n35'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n36'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n37'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n38'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n39'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n40'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n41'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n42'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n43'];?>" readonly class="form-control" >
                                                    </td>
                                                    <td style="max-width:30px;">
                                                        <input type="text" value="<?=$row['n44'];?>" readonly class="form-control" reanly>
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table>
                                        <!-- end modul 3 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>