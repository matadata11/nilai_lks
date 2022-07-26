<section class="section">
    <div class="section-header">
        <div class="col-12">
		<marquee direction="left" scrollamount="5" align="center">Nilaiku adalah aplikasi pemilihan umum yang dibangun untuk membantu sekolah dalam melaksanakan penilaian.</marquee>
		</div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary"><i class="fas fa-bullseye"></i></div>
                        <div class="card-wrap">
                            <div class="card-header"><h4>Mata Lomba</h4></div>
                            <div class="card-body"><?= $count; ?> Lomba</div>
                        </div>
                    </div>
                    <div class="card gradient-bottom">
                        <div class="card-header bg-primary">
                            <h4 class="text-white"><i class="fas fa-bullhorn"></i> Peserta Terdaftar</h4>
                            <!-- <div class="card-header-action dropdown">
                                <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                                <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <li class="dropdown-title">Select Period</li>
                                <li><a href="#" class="dropdown-item">Today</a></li>
                                <li><a href="#" class="dropdown-item">Week</a></li>
                                <li><a href="#" class="dropdown-item active">Month</a></li>
                                <li><a href="#" class="dropdown-item">This Year</a></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="card-body" id="top-5-scroll">
                            <ul class="list-unstyled list-unstyled-border">
								<?php $no=1; foreach($Summarize as $row): ?>
                                <li class="media">
                                    <img class="mr-3 rounded" width="55" src="<?= __img('logo_nilai.png');?>" alt="product">
                                        <div class="media-body">
                                    <!-- <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small">220 SMK</div>
                                    </div> -->
                                    <div class="media-title">
									<?php echo $row->bidang ?>
                                    </div>
                                    <div class="mt-1">
											<div class="budget-price">
												<div class="budget-price-square bg-primary" data-width="64%"></div>
												<div class="budget-price-label"><?php echo $row->total ?></div>
											</div>
											<!-- <div class="budget-price">
												<div class="budget-price-square bg-danger" data-width="43%"></div>
												<div class="budget-price-label">$38,700</div>
											</div> -->
										</div>
									</div>
								</li>
								<?php endforeach; ?>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Daftar Nama Peserta Lomba Karya Siswa 2022
                    </div>
                    <div class="card-body px-2">
                    <?php if ($peserta == null) { ?>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg px-3" style="margin-bottom:10px;"><i class="fas fa-fw fa-ban" style="font-size:20px;"></i></button><br>
                            <b>Tidak Ada Data Ditemukan</b><br>
                            <p>Belum ada Peserta Terdaftar.</p>
                            <!-- <button class="btn btn-primary btn-sm px-3"><i class="fas fa-fw fa-plus"></i> Tambah Data</button> -->
                        </div>
                    <?php } ?>
                    <?php if ($peserta == true) { ?>
                        <?php foreach($peserta as $row): ?>
                            <div class="media">
                                <img src="<?=__img('logo_nilai.png')?>" class="mr-3 img-fluid" width="50" alt="...">
                                <div class="media-body px-0">
                                    <h6 class="mt-0"><?=$row['fullname']?> <small>( <?=$row['bidang']?> )</small></h6>
                                    <p>
                                        <?php if($row['bank'] == 'Bank Aceh'): ?>  
                                            <span class="text-success"><b>Bank Aceh</b></span>  
                                        <?php endif; ?>    
                                        No Rekening <b><?=$row['no_rek']?></b> 
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php } ?>
                    </div>
                </div>
                <!-- <div class="col-lg-4"> -->
                
            </div>
        </div>
        

        
    </div>

</section>
