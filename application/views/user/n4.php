<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
        <div class="container p-1">
            <a href="<?= base_url('user'); ?>"><img src="images/logo.png" alt="" style="width: 34px; height: auto;"></a>
            <a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Beranda</strong></a>
        </div>
    </nav>
    <section class="mt-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block-heading">
                        <h2>FORM N4</h2>
                    </div>
                    <form action="<?php echo base_url() . 'Surat_n4/add'; ?>" method="post"">
                    <!-- Isian Form 1-->
                    <div class=" container-fluid shadow p-3 mb-3 bg-white rounded">
                        <p class="text-left" style="font-size: 25px;">Form 1 Identitas Pengaju</p>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama anda" name="nama" value="<?= $user['nama']; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin</label>
                                <input type="text" class="form-control" id="bin" placeholder="Masukan Bin" name="binti" required>
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
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir</label>
                                <input name="tempat_lahir" type="text" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda" value="<?= $user['tempat_lahir']; ?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tanggal Lahir</label>
                                <input name="tanggal_lahir" type="date" class="form-control" id="tgl" value="<?= $user['tanggal_lahir']; ?>" required>
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
                            <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan Anda" value="<?= $user['pekerjaan']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input name="kewarganegaraan" type="text" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda" value="<?= $user['kewarganegaraan']; ?>" required>
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
                        <!-- end of isian form 1 -->
                </div>


                <!-- Isian Form 2-->
                <div class="container-fluid shadow p-3  mb-3 bg-white rounded mt-5">
                    <p class="text-left" style="font-size: 25px;">Form 2 Identitas Calon</p>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="text" name="nama_calon" class="form-control" id="nama" placeholder="Masukan Nama anda" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Bin</label>
                            <input type="text" name="binti_calon" class="form-control" id="bin" placeholder="Masukan Bin" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>NIK</label>
                            <input class="form-control" name="nik_calon" type="text" placeholder="Masukan NIK" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Agama</label>
                            <select name="agama_calon" id="agama" class="form-control">
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
                            <input name="tempat_lahir_calon" type="text" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Tanggal Lahir</label>
                            <input name="tanggal_lahir_calon" type="date" class="form-control" id="tgl" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin_calon" id="jk" class="form-control">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input name="pekerjaan_calon" type="text" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan Anda" required>
                    </div>
                    <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <input name="kewarganegaraan_calon" type="text" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda" required>
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
                <!-- end of isian form 2 -->
            </div>


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
        </form>

        </div>
    </section>
    <footer class="footer text-center">
        <p class="text-muted small mb-0">Copyright © KKN UIN Bandung 2020</p>
        <p class="text-muted small mb-0">Desa Cinunuk Kec.Cileunyi Kab.Bandung</p>
        </div>
    </footer>