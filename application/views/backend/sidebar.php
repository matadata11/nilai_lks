<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?=site_url('dashboard');?>">
                <img src="<?=__img('nilaiku.png')?>" class="img-fluid" width="140" alt="">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?=site_url('dashboard');?>">
                <img src="<?= __img('logo_nilai.png');?>" class="img-fluid w-75" alt="">
            </a>
        </div>

        <!-- Menu -->
        <ul class="sidebar-menu">
		
		<?php if ($this->session->userdata('level') == 'Super') { ?>
        <li><a class="nav-link" href="<?=site_url('dashboard')?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

        <!-- wilayah -->
            <li class="nav-item dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-globe-asia"></i><span>Master Wilayah</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?=site_url('provinsi')?>">Provinsi</a></li>
					<li><a class="nav-link" href="<?=site_url('kabupaten')?>">Kab / Kota</a></li>
					<li><a class="nav-link" href="<?=site_url('kecamatan')?>">Kecamatan</a></li>
				</ul>
			</li>
            <!-- end -->

			<!-- mata lomba -->
            <li class="nav-item dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-fw fa-bullseye"></i><span>Master Data</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?=site_url('mata-lomba')?>">Mata Lomba</a></li>
					<li><a class="nav-link" href="<?=site_url('juri')?>">Data Juri</a></li>
					<li><a class="nav-link" href="<?=site_url('peserta')?>">Data Peserta</a></li>
				</ul>
			</li>
            <!-- end -->

			<li class="menu-header">Data Penilaian</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-check-double"></i><span>Rekap Penilaian</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">IT Network System Administration</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Automobile Technology</a></li>
					<li><a class="nav-link" href="<?=site_url('cabinet')?>">Cabinet Making</a></li>
					<li><a class="nav-link" href="<?=site_url('cloud')?>">Cloud Computing</a></li>
					<li><a class="nav-link" href="<?=site_url('electrical')?>">Electrical Installations</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Electronics</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Farmacy</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Fashion Technology</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Graphic Design Technology</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Hairdressing</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Landscape and Gardening</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Livestock Technology</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Mechanical Engineering</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Motorcycle Repair and Maintenance</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Nautica</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Pemasaran Daring</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Refrigeration and Air Conditioning</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Restaurant Service</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Wall and Floor Tilling</a></li>
					<li><a class="nav-link" href="<?=site_url('IT-Network')?>">Welding</a></li>
				</ul>
			</li> 
			
			<li class="menu-header">Pengaturan</li>
            <li class="nav-item dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Pengaturan</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?=site_url('pengguna')?>">Manajemen User</a></li>
					<li><a class="nav-link" href="<?=site_url('patch')?>">Patch NilaiKu</a></li>
					<li><a class="nav-link" href="<?=site_url('dbackup')?>">Backup Basis Data</a></li>
					<li><a class="nav-link" href="<?=site_url()?>">Web Service</a></li>
				</ul>
			</li> 
		<?php } ?>

		<!-- juri -->
		<?php if ($this->session->userdata('level') == 'Juri') { ?>
		<li><a class="nav-link" href="<?=site_url('home')?>"><i class="fas fa-home"></i> <span>Home</span></a></li>
		<?php } ?>
        </ul>
        
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://www.youtube.com/watch?v=J-n6nm14jWI" class="btn btn-primary btn-lg btn-block btn-icon-split">
			<i class="fas fa-play"></i> Panduan Aplikasi NilaiKu
            </a>
        </div>
    </aside>
</div>
