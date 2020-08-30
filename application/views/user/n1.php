<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
    <div class="container p-1">
        <a href="<?= base_url('user'); ?>"><img src="images/logo.png" alt="" style="width: 34px; height: auto;"></a>
        <a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Beranda</strong></a>
    </div>
</nav>
<p hidden><?= $user['jenis_kelamin']; ?></p>
<section class="mt-5">
    <div class="container text-center">
        <div class="form-group">
            <label>Status Pernikahan</label>
            <select id="sp" name="status_nikah" class="form-control" onchange="yesnoCheck(this);">
                <option value="...">...</option>
                <?php if ($user['jenis_kelamin'] == 'Laki-Laki') : ?>
                    <option value="lajang">Perjaka</option>
                <?php elseif ($user['jenis_kelamin'] == 'Perempuan') : ?>
                    <option value="lajang">Perawan</option>
                <?php endif; ?>
                <option value="cerai_hidup">Cerai Hidup</option>
                <option value="cerai_mati">Cerai Mati</option>
            </select>
        </div>

        <form action="<?php echo base_url() . 'Surat_n1_n6/add'; ?>" method="post">
            <div class="row text-left" id="lajang" style="display:none;">
                <div class="col-lg-12">
                    <div class="block-heading">
                        <h2>FORM N1</h2>
                    </div>
                    <!-- Isian Form 1-->
                    <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
                        <p class="text-left" style="font-size: 25px;">Form 1 Identitas Diri</p>
                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama anda" value="<?= $user['nama']; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" name="binti" class="form-control" id="bin" placeholder="Masukan Bin/Binti" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" name="no_nik" value="<?= $user['no_nik']; ?>" type="text" placeholder="Masukan nik anda" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option selected>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katholik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Aliran Kepercayaan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda" value="<?= $user['tempat_lahir']; ?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tgl" value="<?= $user['tanggal_lahir']; ?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Jenis Kelamin</label>
                                <input name="jenis_kelamin" id="jk" class="form-control" value="<?= $user['jenis_kelamin']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan Anda" value="<?= $user['pekerjaan']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda" value="<?= $user['kewarganegaraan']; ?>" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <input id="provinsi" name="provinsi" class="form-control" value="<?= $user['provinsi']; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <input id="kabupaten" name="kab_kota" class="form-control" value="<?= $user['kab_kota']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kecamatan</label>
                                <input id="kecamatan" name="kecamatan" class="form-control" value="<?= $user['kecamatan']; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <input id="desa" name="desa" class="form-control" value="<?= $user['desa']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>RT</label>
                                <input type="number" name="rt" class="form-control" id="rt" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>RW</label>
                                <input type="number" name="rw" class="form-control" id="rw" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="2" placeholder="Masukan Alamat Anda" value="<?= $user['alamat']; ?>" required></textarea>
                        </div>

                    </div>
                    <!-- end of isian form 1 -->

                    <!-- Isian Form 2-->
                    <div class="container-fluid shadow p-3 mb-5 bg-white rounded mt-4">
                        <p class="text-left" style="font-size: 25px;">Form 2 Status Pernikahan</p>
                        <hr>
                        <div class="form-group">
                            <label>Status Pernikahan</label>
                            <input id="sp" name="status_nikah" class="form-control" value="<?= ($user['jenis_kelamin'] == 'Laki-Laki') ? 'Perjaka' : 'Perawan'; ?>" readonly>
                            </input>
                        </div>

                    </div>
                    <!-- end of isian form 2 -->

                    <!-- Isian Form 3-->
                    <div class="container-fluid shadow p-3  mb-3 bg-white rounded mt-4">
                        <p class="text-left" style="font-size: 25px;">Form 3 Informasi Orangtua</p>
                        <hr>

                        <!-- informasi ayah kandung -->
                        <p class="bg-primary text-white pt-1 pb-1 text-center"><strong>INFORMASI AYAH KANDUNG</strong></p>
                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_ayah" class="form-control" id="namaayah" placeholder="Masukan Nama Ayah anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" name="binti_ayah" class="form-control" id="binayah" placeholder="Masukan Bin/Binti" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status Kehidupan</label>
                            <select name="status_hidup_ayah" id="ska" class="form-control">
                                <option>Masih Hidup</option>
                                <option>Sudah Meninggal</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" name="nik_ayah" type="text" placeholder="Masukan NIK Ayah" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select id="agama" name="agama_ayah" class="form-control">
                                    <option selected>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katholik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Aliran Kepercayaan</option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir_ayah" class="form-control" id="tempatla" placeholder="Masukan Tempat Lahir Ayah" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir_ayah" class="form-control" id="tgllhra" placeholder="Masukan Tanggal Lahir Ayah" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaana" placeholder="Masukan Tempat Lahir Ayah" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan_ayah" class="form-control" id="kearbga " placeholder="Masukan Tanggal Lahir Ayah" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <input id="provinsi" name="provinsi_ayah" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <input id="kabupaten" name="kab_kota_ayah" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kecamatan</label>
                                <input id="kecamatan" name="kecamatan_ayah" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <input id="desa" name="desa_ayah" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>RT</label>
                                <input type="number" name="rt_ayah" class="form-control" id="rt" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>RW</label>
                                <input type="number" name="rw_ayah" class="form-control" id="rw" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat_ayah" id="alamat" rows="2" placeholder="Masukan Alamat Anda" required></textarea>
                        </div>

                        <!-- informasi ibu kandung -->
                        <hr class="mt-5">
                        <p class="text-center bg-primary text-white pt-1 pb-1"><strong>INFORMASI IBU KANDUNG</strong></p>
                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_ibu" class="form-control" id="namaibu" placeholder="Masukan Nama Ibu anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" name="binti_ibu" class="form-control" id="binibu" placeholder="Masukan Bin/Binti" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status Kehidupan</label>
                            <select id="ska" name="status_hidup_ibu" class="form-control">
                                <option>Masih Hidup</option>
                                <option>Sudah Meninggal</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" name="nik_ibu" type="text" placeholder="Masukan NIK Ibu" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select id="agama" name="agama_ibu" class="form-control">
                                    <option selected>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katholik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Aliran Kepercayaan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir_ibu" id="tempatla" placeholder="Masukan Tempat Lahir Ayah" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir_ibu" id="tgllhra" placeholder="Masukan Tanggal Lahir Ayah" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaana" placeholder="Masukan Tempat Lahir Ayah" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kewarganegaraan</label>
                                <input type="text" class="form-control" id="kearbga " name="kewarganegaraan_ibu" placeholder="Masukan Tanggal Lahir Ayah" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <input id="provinsi" name="provinsi_ibu" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <input id="kabupaten" name="kab_kota_ibu" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kecamatan</label>
                                <input id="kecamatan" name="kecamatan_ibu" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <input id="desa" name="desa_ibu" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>RT</label>
                                <input name="rt_ibu" type="number" class="form-control" id="rt" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>RW</label>
                                <input name="rw_ibu" type="number" class="form-control" id="rw" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat_ibu" class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat Anda" required></textarea>
                        </div>
                    </div>
                    <!-- end of isian form 3 -->
                    <div class="text-center">
                        <a href="<?= base_url('user') ?>" type="button" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Batal</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPrint"><i class="fas fa-send mr-2"></i>Ajukan</button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalPrint" tabindex="-1" role="dialog" aria-labelledby="modalPrint" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <i class="fas fa-send mb-4 mt-4" style="color: green; font-size:44px"></i>
                                <h5>Apakah anda yakin data anda sudah benar ?</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                <button type="submit" class="btn btn-primary">Yakin</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
        <!-- form n1 cerai hidup -->
        <form action="<?php echo base_url() . 'Surat_n1_n6/add'; ?>" method="post">
            <div class="row text-left" id="cerai_hidup" style="display:none;">
                <div class="block-heading">
                    <h2>FORM N1</h2>
                </div>
                <!-- Isian Form 1-->
                <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
                    <p class="text-left" style="font-size: 25px;">Form 1 Identitas Diri</p>
                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama anda" value="<?= $user['nama']; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Bin/Binti</label>
                            <input type="text" name="binti" class="form-control" id="bin" placeholder="Masukan Bin/Binti" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>NIK</label>
                            <input class="form-control" name="no_nik" value="<?= $user['no_nik']; ?>" type="text" placeholder="Masukan nik anda" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option selected>Islam</option>
                                <option>Kristen</option>
                                <option>Katholik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Aliran Kepercayaan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda" value="<?= $user['tempat_lahir']; ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tgl" value="<?= $user['tanggal_lahir']; ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jk" class="form-control">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan Anda" value="<?= $user['pekerjaan']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda" value="<?= $user['kewarganegaraan']; ?>" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Provinsi</label>
                            <input id="provinsi" name="provinsi" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kabupaten/Kota</label>
                            <input id="kabupaten" name="kab_kota" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Kecamatan</label>
                            <input id="kecamatan" name="kecamatan" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kelurahan/Desa</label>
                            <input id="desa" name="desa" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>RT</label>
                            <input type="number" name="rt" class="form-control" id="rt" placeholder="" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>RW</label>
                            <input type="number" name="rw" class="form-control" id="rw" placeholder="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kode Pos</label>
                            <input type="number" name="kode_pos" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" value="<?= $user['kode_pos']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="2" placeholder="Masukan Alamat Anda" value="<?= $user['alamat']; ?>" required></textarea>
                    </div>

                </div>
                <!-- end of isian form 1 -->
                <!-- Isian Form 2-->
                <div class="container-fluid shadow p-3 mb-5 bg-white rounded mt-4">
                    <p class="text-left" style="font-size: 25px;">Form 2 Status Pernikahan</p>
                    <hr>

                    <div class="form-group">
                        <label>Status Pernikahan</label>
                        <input id="sp" name="status_nikah" class="form-control" value="Cerai Hidup" readonly>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>Nama Suami/Istri Terdahulu</label>
                        <input type="text" name="nama_suami_istri" class="form-control" placeholder="Masukan Nama Istri/Suami terdahulu" required>
                    </div>

                </div>
                <!-- end of isian form 2 -->

                <!-- Isian Form 3-->
                <div class="container-fluid shadow p-3  mb-3 bg-white rounded mt-4">
                    <p class="text-left" style="font-size: 25px;">Form 3 Informasi Orangtua</p>
                    <hr>

                    <!-- informasi ayah kandung -->
                    <p class="bg-primary text-white pt-1 pb-1 text-center"><strong>INFORMASI AYAH KANDUNG</strong></p>
                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_ayah" class="form-control" id="namaayah" placeholder="Masukan Nama Ayah anda" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Bin/Binti</label>
                            <input type="text" name="binti_ayah" class="form-control" id="binayah" placeholder="Masukan Bin/Binti" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status Kehidupan</label>
                        <select name="status_hidup_ayah" id="ska" class="form-control">
                            <option>Masih Hidup</option>
                            <option>Sudah Meninggal</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>NIK</label>
                            <input class="form-control" name="nik_ayah" type="text" placeholder="Masukan NIK Ayah" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Agama</label>
                            <select id="agama" name="agama_ayah" class="form-control">
                                <option selected>Islam</option>
                                <option>Kristen</option>
                                <option>Katholik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir_ayah" class="form-control" id="tempatla" placeholder="Masukan Tempat Lahir Ayah" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir_ayah" class="form-control" id="tgllhra" placeholder="Masukan Tanggal Lahir Ayah" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Pekerjaan</label>
                            <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaana" placeholder="Masukan Tempat Lahir Ayah" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan_ayah" class="form-control" id="kearbga " placeholder="Masukan Tanggal Lahir Ayah" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Provinsi</label>
                            <select id="provinsi" name="provinsi_ayah" class="form-control">
                                <option>Jawa Barat</option>
                                <option>Jawa Timur</option>
                                <option>Jawa Tengah</option>
                                <option>Banten</option>
                                <option>DKI Jakarta</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kabupaten/Kota</label>
                            <select id="kabupaten" name="kab_kota_ayah" class="form-control">
                                <option>Kota Bandung</option>
                                <option>Bandung</option>
                                <option>Sumedang</option>
                                <option>Majalengka</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Kecamatan</label>
                            <select id="kecamatan" name="kecamatan_ayah" class="form-control">
                                <option>Cileunyi</option>
                                <option>Cicalengka</option>
                                <option>Ibun</option>
                                <option>Margahayu</option>
                                <option>Pangalengan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kelurahan/Desa</label>
                            <select id="desa" name="desa_ayah" class="form-control">
                                <option>Cinunuk</option>
                                <option>Cileunyi</option>
                                <option>Cibiru Wetan</option>
                                <option>Cimekar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>RT</label>
                            <input type="number" name="rt_ayah" class="form-control" id="rt" placeholder="" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>RW</label>
                            <input type="number" name="rw_ayah" class="form-control" id="rw" placeholder="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kode Pos</label>
                            <input type="number" name="kode_pos_ayah" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat_ayah" id="alamat" rows="2" placeholder="Masukan Alamat Anda" required></textarea>
                    </div>

                    <!-- informasi ibu kandung -->
                    <hr class="mt-5">
                    <p class="text-center bg-primary text-white pt-1 pb-1"><strong>INFORMASI IBU KANDUNG</strong></p>
                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_ibu" class="form-control" id="namaibu" placeholder="Masukan Nama Ibu anda" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Bin/Binti</label>
                            <input type="text" name="binti_ibu" class="form-control" id="binibu" placeholder="Masukan Bin/Binti" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status Kehidupan</label>
                        <select id="ska" name="status_hidup_ibu" class="form-control">
                            <option>Masih Hidup</option>
                            <option>Sudah Meninggal</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>NIK</label>
                            <input class="form-control" name="nik_ibu" type="text" placeholder="Masukan NIK Ibu" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Agama</label>
                            <select id="agama" name="agama_ibu" class="form-control">
                                <option selected>Islam</option>
                                <option>Kristen</option>
                                <option>Katholik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir_ibu" id="tempatla" placeholder="Masukan Tempat Lahir Ayah" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir_ibu" id="tgllhra" placeholder="Masukan Tanggal Lahir Ayah" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaana" placeholder="Masukan Tempat Lahir Ayah" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kewarganegaraan</label>
                            <input type="text" class="form-control" id="kearbga " name="kewarganegaraan_ibu" placeholder="Masukan Tanggal Lahir Ayah" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Provinsi</label>
                            <select id="provinsi" name="provinsi_ibu" class="form-control">
                                <option>Jawa Barat</option>
                                <option>Jawa Timur</option>
                                <option>Jawa Tengah</option>
                                <option>Banten</option>
                                <option>DKI Jakarta</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kabupaten/Kota</label>
                            <select id="kabupaten" name="kab_kota_ibu" class="form-control">
                                <option>Kota Bandung</option>
                                <option>Bandung</option>
                                <option>Sumedang</option>
                                <option>Majalengka</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Kecamatan</label>
                            <select id="kecamatan" name="kecamatan_ibu" class="form-control">
                                <option>Cileunyi</option>
                                <option>Cicalengka</option>
                                <option>Ibun</option>
                                <option>Margahayu</option>
                                <option>Pangalengan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kelurahan/Desa</label>
                            <select id="desa" name="desa_ibu" class="form-control">
                                <option>Cinunuk</option>
                                <option>Cileunyi</option>
                                <option>Cibiru Wetan</option>
                                <option>Cimekar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>RT</label>
                            <input name="rt_ibu" type="number" class="form-control" id="rt" placeholder="" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>RW</label>
                            <input name="rw_ibu" type="number" class="form-control" id="rw" placeholder="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kode Pos</label>
                            <input name="kode_pos_ibu" type="number" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat_ibu" class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat Anda" required></textarea>
                    </div>
                </div>
                <!-- end of isian form 3 -->
                <div class="text-center">
                    <button type="submit" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Batal</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPrint1"><i class="fas fa-send mr-2"></i>Ajukan</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalPrint1" tabindex="-1" role="dialog" aria-labelledby="modalPrint" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <i class="fas fa-send mb-4 mt-4" style="color: green; font-size:44px"></i>
                            <h5>Apakah anda yakin data anda sudah benar ?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Yakin</button>
                        </div>
                    </div>
                </div>
            </div>


        </form>
        <!-- form n6 cerai mati -->
        <form action="<?php echo base_url() . 'Surat_n6/add'; ?>" method="post">
            <d class="row text-left" id="cerai_mati" style="display:none;">
                <div class="col-lg-12">
                    <div class="block-heading">
                        <h2>FORM N1</h2>
                    </div>
                    <!-- Isian Form 1-->
                    <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
                        <p class="text-left" style="font-size: 25px;">Form 1 Identitas Diri</p>
                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama anda" value="<?= $user['nama']; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" name="binti" class="form-control" id="bin" placeholder="Masukan Bin/Binti" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" name="no_nik" value="<?= $user['no_nik']; ?>" type="text" placeholder="Masukan nik anda" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option selected>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katholik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda" value="<?= $user['tempat_lahir']; ?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tgl" value="<?= $user['tanggal_lahir']; ?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jk" class="form-control">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan Anda" value="<?= $user['pekerjaan']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda" value="<?= $user['kewarganegaraan']; ?>" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <select id="provinsi" name="provinsi" class="form-control">
                                    <option>Jawa Barat</option>
                                    <option>Jawa Timur</option>
                                    <option>Jawa Tengah</option>
                                    <option>Banten</option>
                                    <option>DKI Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <select id="kabupaten" name="kab_kota" class="form-control">
                                    <option>Kota Bandung</option>
                                    <option>Bandung</option>
                                    <option>Sumedang</option>
                                    <option>Majalengka</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kecamatan</label>
                                <select id="kecamatan" name="kecamatan" class="form-control">
                                    <option>Cileunyi</option>
                                    <option>Cicalengka</option>
                                    <option>Ibun</option>
                                    <option>Margahayu</option>
                                    <option>Pangalengan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <select id="desa" name="desa" class="form-control">
                                    <option>Cinunuk</option>
                                    <option>Cileunyi</option>
                                    <option>Cibiru Wetan</option>
                                    <option>Cimekar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>RT</label>
                                <input type="number" name="rt" class="form-control" id="rt" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>RW</label>
                                <input type="number" name="rw" class="form-control" id="rw" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Pos</label>
                                <input type="number" name="kode_pos" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" value="<?= $user['kode_pos']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="2" placeholder="Masukan Alamat Anda" value="<?= $user['alamat']; ?>" required></textarea>
                        </div>

                    </div>
                    <!-- end of isian form 1 -->
                    <!-- Isian Form 2-->
                    <div class="container-fluid shadow p-3 mb-5 bg-white rounded mt-4">
                        <p class="text-left" style="font-size: 25px;">Form 2 Status Pernikahan</p>
                        <hr>
                        <div class="form-group">
                            <label>Status Pernikahan</label>
                            <input id="sp" name="status_nikah" class="form-control" value="Cerai Mati" readonly>
                            </input>
                        </div>
                        <div class="form-group" ;">
                            <label>Nama Suami/Istri Terdahulu</label>
                            <input type="text" name="nama_suami_istri" class="form-control" placeholder="Masukan Nama Istri/Suami terdahulu" required>
                        </div>
                    </div>
                    <!-- end of isian form 2 -->
                    <!-- Isian Form 3-->
                    <div class="container-fluid shadow p-3  mb-3 bg-white rounded mt-4">
                        <p class="text-left" style="font-size: 25px;">Form 3 Informasi Orangtua</p>
                        <hr>

                        <!-- informasi ayah kandung -->
                        <p class="bg-primary text-white pt-1 pb-1 text-center"><strong>INFORMASI AYAH KANDUNG</strong></p>
                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_ayah" class="form-control" id="namaayah" placeholder="Masukan Nama Ayah anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" name="binti_ayah" class="form-control" id="binayah" placeholder="Masukan Bin/Binti" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status Kehidupan</label>
                            <select name="status_hidup_ayah" id="ska" class="form-control">
                                <option>Masih Hidup</option>
                                <option>Sudah Meninggal</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" name="nik_ayah" type="text" placeholder="Masukan NIK Ayah" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select id="agama" name="agama_ayah" class="form-control" required>
                                    <option selected>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katholik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir_ayah" class="form-control" id="tempatla" required placeholder="Masukan Tempat Lahir Ayah">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir_ayah" class="form-control" id="tgllhra" required placeholder="Masukan Tanggal Lahir Ayah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaana" required placeholder="Masukan Tempat Lahir Ayah">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan_ayah" class="form-control" id="kearbga " placeholder="Masukan Tanggal Lahir Ayah" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <select id="provinsi" name="provinsi_ayah" class="form-control">
                                    <option>Jawa Barat</option>
                                    <option>Jawa Timur</option>
                                    <option>Jawa Tengah</option>
                                    <option>Banten</option>
                                    <option>DKI Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <select id="kabupaten" name="kab_kota_ayah" class="form-control">
                                    <option>Kota Bandung</option>
                                    <option>Bandung</option>
                                    <option>Sumedang</option>
                                    <option>Majalengka</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kecamatan</label>
                                <select id="kecamatan" name="kecamatan_ayah" class="form-control">
                                    <option>Cileunyi</option>
                                    <option>Cicalengka</option>
                                    <option>Ibun</option>
                                    <option>Margahayu</option>
                                    <option>Pangalengan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <select id="desa" name="desa_ayah" class="form-control">
                                    <option>Cinunuk</option>
                                    <option>Cileunyi</option>
                                    <option>Cibiru Wetan</option>
                                    <option>Cimekar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>RT</label>
                                <input type="number" name="rt_ayah" class="form-control" id="rt" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>RW</label>
                                <input type="number" name="rw_ayah" class="form-control" id="rw" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Pos</label>
                                <input type="number" name="kode_pos_ayah" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat_ayah" id="alamat" rows="2" placeholder="Masukan Alamat Anda" required></textarea>
                        </div>

                        <!-- informasi ibu kandung -->
                        <hr class="mt-5">
                        <p class="text-center bg-primary text-white pt-1 pb-1"><strong>INFORMASI IBU KANDUNG</strong></p>
                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_ibu" class="form-control" id="namaibu" placeholder="Masukan Nama Ibu anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" name="binti_ibu" class="form-control" id="binibu" placeholder="Masukan Bin/Binti" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status Kehidupan</label>
                            <select id="ska" name="status_hidup_ibu" class="form-control">
                                <option>Masih Hidup</option>
                                <option>Sudah Meninggal</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" name="nik_ibu" type="text" placeholder="Masukan NIK Ibu" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select id="agama" name="agama_ibu" class="form-control">
                                    <option selected>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katholik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir_ibu" id="tempatla" placeholder="Masukan Tempat Lahir Ayah" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir_ibu" id="tgllhra" placeholder="Masukan Tanggal Lahir Ayah" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaana" placeholder="Masukan Tempat Lahir Ayah" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kewarganegaraan</label>
                                <input type="text" class="form-control" id="kearbga " name="kewarganegaraan_ibu" placeholder="Masukan Tanggal Lahir Ayah" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <select id="provinsi" name="provinsi_ibu" class="form-control">
                                    <option>Jawa Barat</option>
                                    <option>Jawa Timur</option>
                                    <option>Jawa Tengah</option>
                                    <option>Banten</option>
                                    <option>DKI Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <select id="kabupaten" name="kab_kota_ibu" class="form-control">
                                    <option>Kota Bandung</option>
                                    <option>Bandung</option>
                                    <option>Sumedang</option>
                                    <option>Majalengka</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kecamatan</label>
                                <select id="kecamatan" name="kecamatan_ibu" class="form-control">
                                    <option>Cileunyi</option>
                                    <option>Cicalengka</option>
                                    <option>Ibun</option>
                                    <option>Margahayu</option>
                                    <option>Pangalengan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <select id="desa" name="desa_ibu" class="form-control">
                                    <option>Cinunuk</option>
                                    <option>Cileunyi</option>
                                    <option>Cibiru Wetan</option>
                                    <option>Cimekar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>RT</label>
                                <input name="rt_ibu" type="number" class="form-control" id="rt" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>RW</label>
                                <input name="rw_ibu" type="number" class="form-control" id="rw" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Pos</label>
                                <input name="kode_pos_ibu" type="number" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat_ibu" class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat Anda" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Batal</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPrint2"><i class="fas fa-send mr-2"></i>Ajukan</button>
                        </div>
                    </div>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalPrint2" tabindex="-1" role="dialog" aria-labelledby="modalPrint" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <i class="fas fa-send mb-4 mt-4" style="color: green; font-size:44px"></i>
                                <h5>Apakah anda yakin data anda sudah benar ?</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                <button type="submit" class="btn btn-primary">Yakin</button>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </form>
    </div>

</section>

<footer class="footer text-center">
    <div class="container">
        <p class="text-muted small mb-0">Copyright © KKN UIN Bandung 2020</p>
        <p class="text-muted small mb-0">Desa Cinunuk Kec.Cileunyi Kab.Bandung</p>
    </div>
</footer>