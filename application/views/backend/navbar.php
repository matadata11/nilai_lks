<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
	<form class="form-inline mr-auto">
		<ul class="navbar-nav mr-3">
		<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i> <div class="d-sm-none d-lg-inline-block"></div></a></li>
		</ul>
	</form>
	<ul class="navbar-nav navbar-right">
		
		<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
			<img alt="image" src="<?= __img('logo_nilai.png');?>" class=" mr-1">
			<div class="d-sm-none d-lg-inline-block">Hi, <?=__session('fullname')?></div></a>
			<div class="dropdown-menu dropdown-menu-right">
					<a href="<?=site_url('#')?>" class="dropdown-item has-icon text-danger">
						<i class="fas fa-user"></i> Profil
					</a>
				<div class="dropdown-divider"></div>
					<a href="<?=site_url('keluaraja')?>" class="dropdown-item has-icon text-danger">
						<i class="fas fa-sign-out-alt"></i> Logout
					</a>
				</div>				
			
		</li>
	</ul>
</nav>
