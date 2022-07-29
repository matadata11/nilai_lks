<section class="section">
	<div class="section-header">
        <div class="col-12">
		<marquee direction="left" scrollamount="5" align="center">Nilaiku adalah aplikasi penilaian yang dibangun untuk membantu sekolah dalam melaksanakan penilaian.</marquee>
		</div>
    </div>

	<div class="row">
		<div class="col-md-4">
			<div class="card card-hero">
				<div class="card-header">
					<div class="card-icon">
					<i class="fas fa-plus-circle"></i>
					</div>
					<a href="#add"  data-toggle="modal" style="color:#fff;"><h5>Mata Lomba <b><?=__session('bidang')?></b></h5></a>
					<!-- <div class="card-description">Mata Lomba <b><?=__session('bidang')?></b></div> -->
				</div>
				<div class="card-body p-0">
					<div class="tickets-list">
					<!-- <?php foreach($peserta as $row): ?>
					<a href="#add<?=$row['id_peserta']?>"  data-toggle="modal" class="ticket-item">
						<div class="ticket-title">
						<h4><?=$row['fullname']?></h4>
						</div>
						<div class="ticket-info">
						<div><?=$row['bidang']?></div>
						<div class="bullet"></div>
						<div class="text-primary"><?=$row['sekolah_asal']?></div>
						</div>
					</a>
					<?php endforeach; ?>
					
					<a href="features-tickets.html" class="ticket-item ticket-more">
						View All <i class="fas fa-chevron-right"></i>
					</a>-->
					</div> 
				</div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h4>Top 10 </h4>
					<div class="card-header-action">
					<a href="" class="btn btn-danger"><b><?=__session('bidang')?></b></a>
					</div>
				</div>
				<div class="card-body p-0">

				<!-- bidang IT Network -->
				
					<div class="table-responsive table-invoice">
					<table class="table table-striped">
						<tr>
							<th class="text-center">Nama</th>
							<th class="text-center">Sekolah</th>
							<th class="text-center">Total Nilai</th>
							<th class="text-center">Action</th>
						</tr>
						<?php  foreach($nilai as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['jumlah']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_it'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<!-- wall -->
						<?php  foreach($wall as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['jumlah']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_wall'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
						<!-- end wall -->

						<!-- cloud -->
						<?php  foreach($cloud as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_cloud']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_cloud'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
						<!-- end cloud -->
						<!-- cabinet -->
						<?php  foreach($cabinet as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_cabinet']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_cabinet'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
						<!-- end cabinet -->

						<!-- electrical -->
						<?php  foreach($electrical as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_electrical']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_electrical'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
						<!-- end -->

						<!-- mobila -->
						<?php  foreach($mobile as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_mobile']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_mobil'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
						<!-- end -->

						<!-- electronics -->
						<?php  foreach($electronics as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_electronics']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_electronics'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
						<!-- end -->

						<?php  foreach($farmacy as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_farmacy']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_farmacy'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($fashion as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_fashion']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_fashion'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($landscape as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_landscape']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_landscape'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($livestock as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_livestock']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_livestock'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($mechanical as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_mechanical']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_mechanical'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($motor as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_motor']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_motor'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($nautica as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_nautica']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_nautica'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($pemasaran as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_pemasaran']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_pemasaran'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($refrigeration as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_refrigeration']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_refrigeration'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($restaurant as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_restaurant']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_restaurant'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($design as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_design']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_design'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

						<?php  foreach($wall as $row): ?>
						<tr>
							<td class="text-center"><a href="#"><?=$row['fullname']?></a></td>
							<td class="font-weight-600 text-center"><?=$row['sekolah_asal']?></td>
							<td class="text-center"><div class="badge badge-warning"><?=$row['j_wall']?></div></td>
							<td class="text-center">
								<a href="#lihat<?=$row['id_wall'];?>" data-toggle="modal" class="btn btn-primary"><i class="fas fa-eye"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>

					</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>


<?php if ($this->session->userdata('lomba_id') == '3' ) { ?>
<?php require_once('modals/_pemasaran.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '4' ) { ?>
<?php require_once('modals/_wall.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '5' ) { ?>
<?php require_once('modals/_automobile.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '6' ) { ?>
<?php require_once('modals/_cabinet.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '7' ) { ?>
<?php require_once('modals/_cloud.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '8' ) { ?>
<?php require_once('modals/_electrical.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '9' ) { ?>
<?php require_once('modals/_electronics.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '10' ) { ?>
<?php require_once('modals/_farmacy.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '11' ) { ?>
<?php require_once('modals/_fashion.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '12' ) { ?>
<?php require_once('modals/_design.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '13' ) { ?>
<?php require_once('modals/_hairdressing.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '14' ) { ?>
<?php require_once('modals/_Network.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '15' ) { ?>
<?php require_once('modals/_landscape.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '16' ) { ?>
<?php require_once('modals/_livestock.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '17' ) { ?>
<?php require_once('modals/_mechanical.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '18' ) { ?>
<?php require_once('modals/_motorcycle.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '19' ) { ?>
<?php require_once('modals/_nautica.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '20' ) { ?>
<?php require_once('modals/_refrigeration.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '21' ) { ?>
<?php require_once('modals/_restaurant.php'); ?>
<?php } ?>

<?php if ($this->session->userdata('lomba_id') == '22' ) { ?>
<?php require_once('modals/_welding.php'); ?>
<?php } ?>
