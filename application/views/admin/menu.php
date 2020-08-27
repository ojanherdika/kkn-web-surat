<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Data Rekap </h1>

    <div class="row">

        <div class="col-md-4">
            <select class="custom-select">
                <option value="0">Pengajuan Surat</option>
                <option value="1">Pendaftaran Akun</option>
            </select>
        </div>

        <div class="col-md-3">
            <div> &nbsp; </div>
        </div>
        <div class="col-md-1"></div>
        &emsp;&emsp;
        <div class="col-md-0.2">
            <p> Cari : </p>
        </div>
        <div class="col-md-3">
            <input class="form-control" type="text" aria-label="Search">
        </div>

    </div>

    <br>


    <div class="card mb-3">

        <div class="card-body">
            <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th scope="col">No</th>
                            <th scope="col">ID Surat</th>
                            <th scope="col">Jenis Pengajuan</th>
                            <th scope="col">Pengaju</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($surat_n1 as $surat_n1) : ?>
                            <tr>
                                <th scope="col"><?= $i++; ?></th>
                                <th scope="col"><?= $surat_n1['id_surat_n1']; ?></th>
                                <th scope="col"><?= $surat_n1['jenis_surat']; ?></th>
                                <th scope="col"><?= $surat_n1['nama']; ?></th>
                                <th scope="col"><?= $surat_n1['tgl_ajukan_surat']; ?></th>
                                <th scope="col"><span class="badge badge-<?= ($surat_n1['status_surat'] == "Disetujui") ? 'success' : (($surat_n1['status_surat'] == 'Ditolak') ? 'danger' : 'warning');  ?>">
                                        <?= $surat_n1['status_surat']; ?> <i class="fas fa-check-circle"></i> </span></th>
                                <th scope="col"> <a href="<?= base_url('admin/detail_menu') ?>"> <u> Detail </u>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                        <?php
                        $i = 1;
                        foreach ($surat_n6 as $surat_n6) : ?>
                            <tr>
                                <th scope="col"><?= $i++; ?></th>
                                <th scope="col"><?= $surat_n6['id_surat_n6']; ?></th>
                                <th scope="col"><?= $surat_n6['jenis_surat']; ?></th>
                                <th scope="col"><?= $surat_n6['nama']; ?></th>
                                <th scope="col"><?= $surat_n6['tgl_ajukan_surat']; ?></th>
                                <th scope="col"><span class="badge badge-<?= ($surat_n6['status_surat'] == "Disetujui") ? 'success' : (($surat_n6['status_surat'] == 'Ditolak') ? 'danger' : 'warning');  ?>">
                                        <?= $surat_n6['status_surat']; ?> <i class="fas fa-check-circle"></i> </span></th>
                                <th scope="col"> <a href="<?= base_url('admin/detail_menu') ?>"> <u> Detail </u>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->