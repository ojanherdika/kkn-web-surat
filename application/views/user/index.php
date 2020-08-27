<!--  -->
<!-- Navigation -->
<div class="logo">
    <img src="<?= base_url('assets/'); ?>/user/images/logo.png" alt="" style="width: 34px; height: auto;">
</div>
<a class="menu-toggle rounded" href="#">
    <i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="smooth-scroll" href="#Header"></a>
        </li>
        <li class="sidebar-nav-item">
            <a class="smooth-scroll" href="#jenis">JENIS SURAT</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="smooth-scroll" href="#riwayat">RIWAYAT SURAT</a>
        </li>
        <br><br><br>
        <li>
            <hr class="bg-light ml-3 mr-3">
        </li>
        <li class="sidebar-nav-item text-white">
            <img class="img-circle smooth-scroll ml-3 mr-3" src="<?= base_url('assets/'); ?>/user/images/default.jpg" alt="" style="width: 40px; border-radius: 50%;">
            <strong><?= $user['nama']; ?></strong>
        </li>
        <li>
            <hr class="bg-light ml-3 mr-3">
        </li>
        <li class="sidebar-nav-item">
            <a class="btn-primary btn-sm ml-3 mb-1 mt-2 text-center p-1 mr-1 col-6" href="<?= base_url('user/profil'); ?>">Ubah Profil</a>
            <a class="btn-primary btn-sm ml-3 mb-1 mt-2 text-center p-1 mr-1 col-6" href="<?= base_url('user/ganti_password'); ?>">Ganti Password</a>
            <a class="btn-danger btn-sm ml-3 mb-1 mt-2 text-center p-1 col-6" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </li>
</nav>

<!-- Header Starts -->
<section id="Banner" class="content-section">
    <div class="container content-wrap text-center">
        <h1>Selamat Datang</h1>
        <h3><?= $user['nama']; ?></h3>
        <h3>
            <em>di Website Persuratan Desa Cinunuk</em>
        </h3>
        <a class="btn btn-primary btn-xl smooth-scroll" href="#tentang">JELAJAHI</a>
    </div>
    <div class="overlay"></div>
</section>
<!-- Header Ends -->

<!-- Tentang Kami -->
<section id="tentang" class="content-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="block-heading">
                    <h2>TENTANG KAMI</h2>
                </div>
                <p class="lead">WEB Persuratan desa cinunuk berfungsi untuk mempermudah warga cinunuk dalam pembuatan surat, dengan mudah,cepat dan efisien.</p>
            </div>
        </div>
    </div>
</section>

<!-- Jenis Surat -->
<section id="jenis" class="content-section text-center">
    <div class="container">
        <div class="block-heading">
            <h2>JENIS SURAT</h2>
            <p>pilih jenis surat yang akan anda ajukan</p>
        </div>
        <div class="card-deck">

            <div class="card pt-4">
                <img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
                <div class="card-body">
                    <h5 class="card-title">SURAT N1</h5>
                    <p>Pengantar Nikah dari Kepala Desa Cinunuk</p>
                    <hr>
                    <a href="<?= base_url('user/p_n1'); ?>" class="btn btn-primary">BUAT</a>
                </div>
            </div>
            <div class="card pt-4">
                <img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
                <div class="card-body">
                    <h5 class="card-title">SURAT N4</h5>
                    <p>Persetujuan dua calon pengantin</p>
                    <hr>
                    <a href="<?= base_url('user/p_n4'); ?>" class="btn btn-primary">BUAT</a>
                </div>
            </div>
            <div class="card pt-4">
                <img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
                <div class="card-body">
                    <h5 class="card-title">SURAT N5</h5>
                    <p>Surat izin orangtua</p>
                    <hr>
                    <a href="<?= base_url('user/p_n5'); ?>" class="btn btn-primary">BUAT</a>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

<!-- Riwayat Pengajuan -->
<section id="riwayat" class="content-section">
    <div class="container">
        <div class="block-heading">
            <h2>RIWAYAT PENGAJUAN</h2>
            <p>Pengajuan yang telah anda ajukan</p>
        </div>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Surat Yang diajukan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data_n1 as $data_n1) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $data_n1['jenis_surat'] ?></td>
                        <td><?= $data_n1['tgl_ajukan_surat'] ?></td>
                        <td><span class="badge badge-<?= ($data_n1['status_surat'] == 'Diterima') ? 'success' : (($data_n1['status_surat'] == 'Ditolak' || $data_n1['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_n1['status_surat'] ?></span></td>
                        <?php if ($data_n1['status_surat'] == 'Pending') : ?>
                            <td>
                                <button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
                                <a href="<?= base_url('Tambah_warga/update_n1_batal/' . $data_n1['id_surat_n1']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
                            </td>
                        <?php else : ?>
                            <td>
                                <button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
                <?php foreach ($data_n6 as $data_n6) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $data_n6['jenis_surat'] ?></td>
                        <td><?= $data_n6['tgl_ajukan_surat'] ?></td>
                        <td><span class="badge badge-<?= ($data_n6['status_surat'] == 'Diterima') ? 'success' : (($data_n6['status_surat'] == 'Ditolak') ? 'danger' : 'warning'); ?>"><?= $data_n6['status_surat'] ?></span></td>
                        <td>
                            <button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php foreach ($data_n4 as $data_n4) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $data_n4['jenis_surat'] ?></td>
                        <td><?= $data_n4['tgl_ajukan_surat'] ?></td>
                        <td><span class="badge badge-success"><?= $data_n4['status_surat'] ?></span></td>
                        <td>
                            <a target="_blank" href="<?php echo base_url('/Cetak_n4/index/' . $data_n4['id_surat_n4']) ?>" class="btn btn-sm bg-warning text-white" role="button"><i class="fa fa-print"></i> Print</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
                <?php foreach ($data_n5 as $data_n5) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $data_n5['jenis_surat'] ?></td>
                        <td><?= $data_n5['tgl_ajukan_surat'] ?></td>
                        <td><span class="badge badge-success"><?= $data_n5['status_surat'] ?></span></td>
                        <td>
                            <a target="_blank" href="<?php echo base_url('/Cetak_n5/index/' . $data_n5['id_surat_n5']) ?>" class="btn btn-sm bg-warning text-white" role="button"><i class="fa fa-print"></i> Print</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <!-- <tr>
                    <th scope="row">2</th>
                    <td>Surat N4</td>
                    <td>02/08/2020</td>
                    <td><span class="badge badge-warning text-white">pending</span></td>
                    <td>
                        <button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
                        <button class="btn btn-sm bg-danger text-white"><i class="far fa-times-circle"></i> Batalkan</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Surat N5</td>
                    <td>02/08/2020</td>
                    <td><span class="badge badge-danger">dibatalkan</span></td>
                    <td>
                        <button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
                        <button class="btn btn-sm bg-danger text-white"><i class="far fa-times-circle"></i> Batalkan</button>
                    </td>
                </tr> -->
            </tbody>

            <!-- Modal -->
            <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetailTitle">Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                Untuk melakukan pencetakan, silahkan datang ke bagian Tata Usaha Kantor Desa Cinunuk dengan menyebutkan Nama Lengkap Anda. <br><br>

                Berkas-berkas yang harus dibawa pada saat pengambilan Surat Pengantar Nikah (N1) adalah: <br>
                •	Surat Persetujuan Dua Calon Pengantin <a href="<?= base_url('user/p_n4'); ?>">buat N4</a> <br>
                •	Surat pengatar dari RT/RW <br>
                •	Fotokopi KTP <br>
                •	Fotokopi akta kelahiran atau ijazah terakhir <br>
                •	Fotokopi kartu keluarga <br>
                •	Pasfoto 2x3 = 3 lembar berlatar belakang biru <br>
                •	pasfoto 3x4 = 4 lembar berlatar belakang biru <br>
                •	Surat pernyataan belum pernah menikah (Bagi Anda yang belum pernah menikah ) <br>
                •	Surat Izin Orang tua (Bagi anda yang masih dibawah umur, Laki-laki < 25th | Perempuan < 21th) <a href="<?= base_url('user/p_n1'); ?>">buat N5</a> <br>
                •	Fotokopi Akta Cerai (Bagi Anda yang berstatus pernikahan Cerai Hidup ) <br>
                •	Fotokopi Akta Kematian (Bagi Anda yang berstatus pernikahan Cerai Mati ) <br><br>

                Terima Kasih atas perhatiannya, silahkan datang kembali.
                </div>
                </div>
            </div>
            </div>

        </table>
    </div>
</section>

<footer class="footer text-center">
    <div class="container">
        <p class="text-muted small mb-0">Copyright © KKN UIN Bandung 2020</p>
        <p class="text-muted small mb-0">Desa Cinunuk Kec.Cileunyi Kab.Bandung</p>
    </div>
</footer>