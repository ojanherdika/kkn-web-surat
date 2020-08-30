    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
        <div class="container p-1">
            <a href="<?= base_url('user'); ?>"><img src="images/logo.png" alt="" style="width: 34px; height: auto;"></a>
            <a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Beranda</strong></a>
        </div>
    </nav>

    <section class="mt-5">
        <div class="container text-center">
            <form action="<?php echo base_url() . 'Surat_n5/add'; ?>" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-heading">
                            <h2>FORM N5</h2>
                        </div>
                        <!-- Isian Form 1-->
                        <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
                            <p class="text-left" style="font-size: 25px;">Form 1 Identitas Pengaju</p>
                            <hr>
                            <div class="text-left">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama anda" value="<?= $user['nama']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Bin/Binti</label>
                                        <input type="text" class="form-control" id="bin" name="binti" placeholder="Masukan Bin/Binti">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>NIK</label>
                                        <input class="form-control" type="text" name="no_nik" value="<?= $user['no_nik']; ?>" readonly>
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
                                        <input name="tanggal_lahir" type="date" class="form-control" id="tgl" value="<?= $user['tanggal_lahir']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan Anda" value="<?= $user['pekerjaan']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda" value="<?= $user['kewarganegaraan']; ?>" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Provinsi</label>
                                        <select name="provinsi" id="provinsi" class="form-control">
                                            <option>Jawa Barat</option>
                                            <option>Jawa Timur</option>
                                            <option>Jawa Tengah</option>
                                            <option>Banten</option>
                                            <option>DKI Jakarta</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kabupaten/Kota</label>
                                        <select name="kab_kota" id="kabupaten" class="form-control">
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
                                        <select name="kecamatan" id="kecamatan" class="form-control">
                                            <option>Cileunyi</option>
                                            <option>Cicalengka</option>
                                            <option>Ibun</option>
                                            <option>Margahayu</option>
                                            <option>Pangalengan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kelurahan/Desa</label>
                                        <select name="desa" id="desa" class="form-control">
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
                                        <input name="rt" type="number" class="form-control" id="rt" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>RW</label>
                                        <input name="rw" type="number" class="form-control" id="rw" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kode Pos</label>
                                        <input name="kode_pos" type="number" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" value="<?= $user['kode_pos']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat Anda" value="<?= $user['alamat']; ?>" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end of isian form 1 -->

                        <!-- Isian Form 2-->
                        <div class="container-fluid shadow p-3  mb-3 bg-white rounded mt-5">
                            <p class="text-left" style="font-size: 25px;">Form 2 Informasi Ayah Kandung</p>
                            <hr>
                            <div class="text-left">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_ayah" id="namaayah" placeholder="Masukan Nama Ayah anda" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Bin</label>
                                        <input type="text" class="form-control" name="binti_ayah" id="binayah" placeholder="Masukan Bin/Binti" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>NIK</label>
                                        <input class="form-control" type="text" name="nik_ayah" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Agama</label>
                                        <select name="agama_ayah" id="agama" class="form-control">
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
                                        <input name="tempat_lahir_ayah" type="text" class="form-control" id="tempatla" placeholder="Masukan Tempat Lahir Ayah" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Lahir</label>
                                        <input name="tanggal_lahir_ayah" type="date" class="form-control" id="tgllhra" placeholder="Masukan Tanggal Lahir Ayah" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaana" placeholder="Masukan Tempat Lahir Ayah" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kewarganegaraan</label>
                                        <input name="kewarganegaraan_ayah" type="text" class="form-control" id="kearbga " placeholder="Masukan Tanggal Lahir Ayah" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Provinsi</label>
                                        <select name="provinsi_ayah" id="provinsi" class="form-control">
                                            <option>Jawa Barat</option>
                                            <option>Jawa Timur</option>
                                            <option>Jawa Tengah</option>
                                            <option>Banten</option>
                                            <option>DKI Jakarta</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kabupaten/Kota</label>
                                        <select name="kab_kota_ayah" id="kabupaten" class="form-control">
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
                                        <select name="kecamatan_ayah" id="kecamatan" class="form-control">
                                            <option>Cileunyi</option>
                                            <option>Cicalengka</option>
                                            <option>Ibun</option>
                                            <option>Margahayu</option>
                                            <option>Pangalengan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kelurahan/Desa</label>
                                        <select name="desa_ayah" id="desa" class="form-control">
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
                                        <input name="rt_ayah" type="number" class="form-control" id="rt" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>RW</label>
                                        <input name="rw_ayah" type="number" class="form-control" id="rw" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kode Pos</label>
                                        <input name="kode_pos_ayah" type="number" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat_ayah" class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat Anda" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end of isian form 2 -->

                        <!-- Isian Form 3-->
                        <div class="container-fluid shadow p-3  mb-3 bg-white rounded mt-5">
                            <p class="text-left" style="font-size: 25px;">Form 3 Informasi Ibu Kandung</p>
                            <hr>
                            <div class="text-left">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama_ibu" class="form-control" id="namaibu" placeholder="Masukan Nama Ayah anda" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Binti</label>
                                        <input type="text" name="binti_ibu" class="form-control" id="binibu" placeholder="Masukan Bin/Binti" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>NIK</label>
                                        <input class="form-control" name="nik_ibu" type="text" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Agama</label>
                                        <select name="agama_ibu" id="agama" class="form-control">
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
                                        <input type="text" name="tempat_lahir_ibu" class="form-control" id="tempatla" placeholder="Masukan Tempat Lahir Ibu" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir_ibu" class="form-control" id="tgllhra" placeholder="Masukan Tanggal Lahir Ibu" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan_ibu" class="form-control" id="pekerjaana" placeholder="Masukan Tempat Lahir Ibu" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan_ibu" class="form-control" id="kearbga " placeholder="Masukan Tanggal Lahir Ibu" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Provinsi</label>
                                        <select name="provinsi_ibu" id="provinsi" class="form-control">
                                            <option>Jawa Barat</option>
                                            <option>Jawa Timur</option>
                                            <option>Jawa Tengah</option>
                                            <option>Banten</option>
                                            <option>DKI Jakarta</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kabupaten/Kota</label>
                                        <select name="kab_kota_ibu" id="kabupaten" class="form-control">
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
                                        <select name="kecamatan_ibu" id="kecamatan" class="form-control">
                                            <option>Cileunyi</option>
                                            <option>Cicalengka</option>
                                            <option>Ibun</option>
                                            <option>Margahayu</option>
                                            <option>Pangalengan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kelurahan/Desa</label>
                                        <select name="desa_ibu" id="desa" class="form-control">
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
                        </div>
                        <!-- end of isian form 3 -->

                        <!-- Isian Form 2-->
                        <div class="container-fluid shadow p-3  mb-3 bg-white rounded mt-5">
                            <p class="text-left" style="font-size: 25px;">Form 4 Identitas Calon Pasangan</p>
                            <hr>
                            <div class="text-left">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama_calon" id="nama" placeholder="Masukan Nama anda" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Bin/Binti</label>
                                        <input type="text" class="form-control" id="bin" name="binti_calon" placeholder="Masukan Bin/Binti" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>NIK</label>
                                        <input class="form-control" type="text" placeholder="Masukan NIK Calon Pasangan" name="nik_calon" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Agama</label>
                                        <select name="agama_calon" id="agama" class="form-control">
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
                                        <input name="tempat_lahir_calon" type="text" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Tanggal Lahir</label>
                                        <input name="tanggal_lahir_calon" type="date" class="form-control" id="tgl" required>
                                    </div>
                                    <?php if ($user['jenis_kelamin'] == 'Laki-Laki') : ?>
                                        <div class="form-group col-md-3">
                                            <label>Jenis Kelamin</label>
                                            <input id="jk" class="form-control" value="Perempuan" readonly>
                                        </div>
                                    <?php elseif ($user['jenis_kelamin'] == 'Perempuan') : ?>
                                        <div class="form-group col-md-3">
                                            <label>Jenis Kelamin</label>
                                            <input id="jk" class="form-control" value="Laki-Laki" readonly>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" name="pekerjaan_calon" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan Anda" required>
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan_calon" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Provinsi</label>
                                        <select name="provinsi_calon" id="provinsi" class="form-control">
                                            <option>Jawa Barat</option>
                                            <option>Jawa Timur</option>
                                            <option>Jawa Tengah</option>
                                            <option>Banten</option>
                                            <option>DKI Jakarta</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kabupaten/Kota</label>
                                        <select name="kab_kota_calon" id="kabupaten" class="form-control">
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
                                        <select name="kecamatan_calon" id="kecamatan" class="form-control">
                                            <option>Cileunyi</option>
                                            <option>Cicalengka</option>
                                            <option>Ibun</option>
                                            <option>Margahayu</option>
                                            <option>Pangalengan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kelurahan/Desa</label>
                                        <select name="desa_calon" id="desa" class="form-control">
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
                                        <input name="rt_calon" type="number" class="form-control" id="rt" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>RW</label>
                                        <input name="rw_calon" type="number" class="form-control" id="rw" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kode Pos</label>
                                        <input name="kode_pos_calon" type="number" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat_calon" class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat Anda" required></textarea>
                                </div>
                                <div class="text-center">

                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPrint"><i class="fas fa-save mr-2"></i>Simpan</button>
                                </div>
                            </div>
                        </div>
                        <!-- end of isian form 4 -->
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="modalPrint" tabindex="-1" role="dialog" aria-labelledby="modalPrint" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <i class="fas fa-print mb-4 mt-4" style="color: green; font-size:44px"></i>
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
    </section>
    <footer class="footer text-center">
        <div class="container">
            <p class="text-muted small mb-0">Copyright © KKN UIN Bandung 2020</p>
            <p class="text-muted small mb-0">Desa Cinunuk Kec.Cileunyi Kab.Bandung</p>
        </div>
    </footer>