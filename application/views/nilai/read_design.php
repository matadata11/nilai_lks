<section class="section">
    <div class="section-header">
        <h1>Graphic Design Technology</h1>
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
                            <th>Nama Peserta</th>
                            <th>Total Nilai</th>
                            <th>Created_at</th>
                            <!-- <th>Opsi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php if ($total == true) { ?>
                    <?php $no=1; foreach($total as $row): ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$row->fullname;?></td>
                                <td><?=$row->j_design;?> Poin</td>
                                <td><?=indo_date($row->tanggal)?></td>
                                <!-- <td width="5%" class="text-center">
                                    <a href="#list<?=$row->id_cabinet;?>" data-toggle="modal" class="btn btn-sm btn-info"><i class="fas fa-fw fa-print"></i> Pr</a>
                                </td> -->
                            </tr>
                        <?php endforeach; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

