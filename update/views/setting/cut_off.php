<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Data Cut Off</h4></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Master Cut Off</a></li>
                    <li class="breadcrumb-item active">Cut Off</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
	<div class="col-12">
		<div class="card p-5 text-center">
			<h3>Jadwal Cut Off</h3>
			<?php foreach($cut as $off): ?>
			<h1><?= $off['tanggal'];?></h1>
			
			<div class="col-12 text-center">
				<hr>
			<button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#edit<?=$off['id_cut']?>"> <i class="mdi mdi-calendar-clock"></i> Update Tanggal</button>
			</div>

			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php require_once('modals/_cut.php'); ?>
