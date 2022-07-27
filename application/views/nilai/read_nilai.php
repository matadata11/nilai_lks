<section class="section">
    <div class="section-header">
        <h1>Master Penilaian Peserta</h1>
        <div class="ml-auto">
            <a href="#add" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a href="#import" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-file-import"></i> Import</a>
        </div>
    </div>

    <div class="section-body">
        <div class="card card-primary">
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover table-sm" id="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mata Lomba</th>
                            <th>Nama Peserta</th>
                            <th>Provinsi</th>
                            <th>Kabupaten</th>
                            <th>Sekolah</th>
                            <th>Created_at</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($penilaian as $row): ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$row['bidang']?></td>
                                <td><?=$row['fullname']?></td>
                                <td><?=$row['nama']?></td>
                                <td><?=$row['nama_kabupaten']?></td>
                                <td><?=$row['sekolah_asal']?></td>
                                <td><?=indo_date($row['tanggal'])?></td>
                                <td width="20%" class="text-center">
                                    <a href="#edit<?=$row['id_peserta']?>" data-toggle="modal" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pencil-alt"></i> edit</a>
                                    <a href="#hapus<?=$row['id_peserta']?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash-alt"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

<?php require_once('modals/_nilai.php'); ?>
