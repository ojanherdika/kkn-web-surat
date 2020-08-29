<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
    <div class="container p-1">
        <a href="<?= base_url('user'); ?>"><img src="images/logo.png" alt="" style="width: 34px; height: auto;"></a>
        <a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Beranda</strong></a>
    </div>
</nav>
<section class="mt-5">
    <div class="container text-center">
        <!-- form n6 cerai mati -->
        <form action="<?php echo base_url() . 'Surat_n6/add1'; ?>" method="post">
            <div class="row text-left" id="cerai_mati">
                <div class="col-lg-12">
                    <div class="block-heading">
                        <h2>FORM N6</h2>
                    </div>
                    <!-- Isian Form 1-->
                    <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
                        <p class="text-left" style="font-size: 25px;">Form 1 Identitas Diri</p>
                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="<?= $n1['nama']; ?>" placeholder="Masukan Nama anda" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" name="binti" value="<?= $n1['binti']; ?>" readonly class="form-control" id="bin" placeholder="Masukan Bin/Binti">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" name="no_nik" value="<?= $n1['no_nik']; ?>" type="text" placeholder="Masukan nik anda" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select name="agama" id="agama" class="form-control" readonly>
                                    <option selected><?= $n1['agama']; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="<?= $n1['tempat_lahir']; ?>" readonly class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="<?= $n1['tanggal_lahir']; ?>" readonly class="form-control" id="tgl">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" readonly id="jk" class="form-control">
                                    <option selected><?= $n1['jenis_kelamin']; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" name="pekerjaan" value="<?= $n1['pekerjaan']; ?>" readonly class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan Anda">
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan" value="<?= $n1['kewarganegaraan']; ?>" readonly class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <select readonly id="provinsi" name="provinsi" class="form-control">
                                    <option><?= $n1['provinsi']; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <select readonly id="kabupaten" name="kab_kota" class="form-control">
                                    <option><?= $n1['kab_kota']; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kecamatan</label>
                                <select readonly id="kecamatan" name="kecamatan" class="form-control">
                                    <option><?= $n1['kecamatan']; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <select readonly id="desa" name="desa" class="form-control">
                                    <option><?= $n1['desa']; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>RT</label>
                                <input type="number" value="<?= $n1['rt']; ?>" readonly name="rt" class="form-control" id="rt" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label>RW</label>
                                <input type="number" name="rw" value="<?= $n1['rw']; ?>" readonly class="form-control" id="rw" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Pos</label>
                                <input type="number" name="kode_pos" value="<?= $n1['kode_pos']; ?>" readonly class="form-control" id="kodepos" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" readonly rows="2" placeholder=""> <?= $n1['alamat']; ?></textarea>
                        </div>

                    </div>
                    <!-- end of isian form 1 -->
                    <!-- Form N6 -->
                    <div class="container-fluid shadow p-3  mb-3 bg-white rounded mt-4">
                        <p class="text-left" style="font-size: 25px;">Form 3 Surat Kematian</p>
                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" name="nama_mati" class="form-control" id="nama" placeholder="Masukan Nama" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" name="binti_mati" class="form-control" id="bin" placeholder="Masukan Bin/Binti" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" name="nik_mati" type="text" placeholder="Masukan NIK" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select name="agama_mati" id="agama" class="form-control">
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
                                <input name="tempat_lahir_mati" type="text" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tanggal Lahir</label>
                                <input name="tanggal_lahir_mati" type="date" class="form-control" id="tgl" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" name="pekerjaan_mati" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan" required>
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan_mati" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <select id="provinsi" name="provinsi_mati" class="form-control">
                                    <option>Jawa Barat</option>
                                    <option>Jawa Timur</option>
                                    <option>Jawa Tengah</option>
                                    <option>Banten</option>
                                    <option>DKI Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <select id="kabupaten" name="kab_kota_mati" class="form-control">
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
                                <select id="kecamatan" name="kecamatan_mati" class="form-control">
                                    <option>Cileunyi</option>
                                    <option>Cicalengka</option>
                                    <option>Ibun</option>
                                    <option>Margahayu</option>
                                    <option>Pangalengan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <select id="desa" name="desa_mati" class="form-control">
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
                                <input type="number" name="rt_mati" class="form-control" id="rt" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>RW</label>
                                <input type="number" name="rw_mati" class="form-control" id="rw" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Pos</label>
                                <input type="number" name="kode_pos_mati" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat_mati" id="alamat" rows="2" placeholder="Masukan Alamat" required></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tanggal Meninggal</label>
                                <input type="date" name="tgl_meninggal" class="form-control" id="tglmeninggal" placeholder="Masukan Tanggal" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Meninggal di</label>
                                <select name="tempat_meninggal" id="meninggal" class="form-control">
                                    <option>Rumah</option>
                                    <option>Rumah Sakit</option>
                                    <option>Perjalanan</option>
                                </select>
                            </div>
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