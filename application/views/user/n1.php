<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
<div class="container p-1">
    <a href="<?= base_url('user'); ?>"><img src="images/logo.png" alt="" style="width: 34px; height: auto;"></a>
    <a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Beranda</strong></a>
</div>
</nav>

<section class="mt-5">
    <div class="container text-center">
    <form action="<?php echo base_url().'Surat_n1_n6/add'; ?>" method="post">
        <div class="row">
            <div class="col-lg-12">
                <div class="block-heading">
                    <h2>FORM N1</h2>
                </div>
                <!-- Isian Form 1-->
                <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
                    <p class="text-left" style="font-size: 25px;">Form 1 Identitas Diri</p>
                    <hr>
                    <form class="text-left">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama anda">
                            </div>
                            <div class="form-group col-md-6">
                            <label>Bin/Binti</label>
                                <input type="text" class="form-control" id="bin" placeholder="Masukan Bin/Binti">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" type="text" placeholder="321213131313" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select id="agama" class="form-control">
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
                                <input type="text" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Jenis Kelamin</label>
                                <select id="jk" class="form-control">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan Anda">
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <select id="provinsi" class="form-control">
                                    <option>Jawa Barat</option>
                                    <option>Jawa Timur</option>
                                    <option>Jawa Tengah</option>
                                    <option>Banten</option>
                                    <option>DKI Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <select id="kabupaten" class="form-control">
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
                                <select id="kecamatan" class="form-control">
                                    <option>Cileunyi</option>
                                    <option>Cicalengka</option>
                                    <option>Ibun</option>
                                    <option>Margahayu</option>
                                    <option>Pangalengan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <select id="desa" class="form-control">
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
                                <input type="number" class="form-control" id="rt" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label>RW</label>
                                <input type="number" class="form-control" id="rw" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Pos</label>
                                <input type="number" class="form-control" id="kodepos" placeholder="Masukan Kode Pos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat Anda"></textarea>
                        </div>
                    </form>
                </div>
                <!-- end of isian form 1 -->

                <!-- Isian Form 2-->
                <div class="container-fluid shadow p-3 mb-5 bg-white rounded mt-4">
                    <p class="text-left" style="font-size: 25px;">Form 2 Status Pernikahan</p>
                    <hr>
                    <form class="text-left">
                        <div class="form-group">
                            <label>Status Pernikahan</label>
                            <select id="sp" class="form-control">
                                <option>Jejaka</option>
                                <option>Duda (Cerai Hidup)</option>
                                <option>Duda (Cerai Mati)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Suami/Istri Terdahulu</label>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="Masukan Nama Istri/Suami terdahulu">
                        </div>
                    </form>
                </div>
                <!-- end of isian form 2 -->

                <!-- Isian Form 3-->
                <div class="container-fluid shadow p-3  mb-3 bg-white rounded mt-4">
                    <p class="text-left" style="font-size: 25px;">Form 3 Informasi Orangtua</p>
                    <hr>

                    <!-- informasi ayah kandung -->
                    <p class="bg-primary text-white pt-1 pb-1"><strong>INFORMASI AYAH KANDUNG</strong></p>
                    <hr>
                    <form class="text-left">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" id="namaayah" placeholder="Masukan Nama Ayah anda">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" class="form-control" id="binayah" placeholder="Masukan Bin/Binti">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status Kehidupan</label>
                            <select id="ska" class="form-control">
                                <option>Masih Hidup</option>
                                <option>Sudah Meninggal</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" type="text" placeholder="321213131313" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select id="agama" class="form-control">
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
                                <input type="text" class="form-control" id="tempatla" placeholder="Masukan Tempat Lahir Ayah">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control" id="tgllhra" placeholder="Masukan Tanggal Lahir Ayah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaana" placeholder="Masukan Tempat Lahir Ayah">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kewarganegaraan</label>
                                <input type="text" class="form-control" id="kearbga " placeholder="Masukan Tanggal Lahir Ayah">
                            </div>
                        </div>
                        <div class="form-check mb-3 mt-2">
                            <input type="checkbox" class="form-check-input" id="check">
                            <label class="form-check-label">Alamat Ayah sama dengan tempat tinggal saya saat ini</label>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <select id="provinsi" class="form-control">
                                    <option>Jawa Barat</option>
                                    <option>Jawa Timur</option>
                                    <option>Jawa Tengah</option>
                                    <option>Banten</option>
                                    <option>DKI Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <select id="kabupaten" class="form-control">
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
                                <select id="kecamatan" class="form-control">
                                    <option>Cileunyi</option>
                                    <option>Cicalengka</option>
                                    <option>Ibun</option>
                                    <option>Margahayu</option>
                                    <option>Pangalengan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <select id="desa" class="form-control">
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
                                <input type="number" class="form-control" id="rt" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label>RW</label>
                                <input type="number" class="form-control" id="rw" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Pos</label>
                                <input type="number" class="form-control" id="kodepos" placeholder="Masukan Kode Pos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat Anda"></textarea>
                        </div>

                        <!-- informasi ibu kandung -->
                        <hr class="mt-5">
                        <p class="text-center bg-primary text-white pt-1 pb-1"><strong>INFORMASI IBU KANDUNG</strong></p>
                        <hr>
                        <form class="text-left">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" id="namaibu" placeholder="Masukan Nama Ibu anda">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Bin/Binti</label>
                                    <input type="text" class="form-control" id="binibu" placeholder="Masukan Bin/Binti">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status Kehidupan</label>
                                <select id="ska" class="form-control">
                                    <option>Masih Hidup</option>
                                    <option>Sudah Meninggal</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>NIK</label>
                                    <input class="form-control" type="text" placeholder="321213131313" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Agama</label>
                                    <select id="agama" class="form-control">
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
                                    <input type="text" class="form-control" id="tempatla" placeholder="Masukan Tempat Lahir Ayah">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tgllhra" placeholder="Masukan Tanggal Lahir Ayah">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaana" placeholder="Masukan Tempat Lahir Ayah">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" class="form-control" id="kearbga " placeholder="Masukan Tanggal Lahir Ayah">
                                </div>
                            </div>
                            <div class="form-check mb-3 mt-2">
                                <input type="checkbox" class="form-check-input" id="check">
                                <label class="form-check-label">Alamat Ayah sama dengan tempat tinggal saya saat ini</label>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Provinsi</label>
                                    <select id="provinsi" class="form-control">
                                        <option>Jawa Barat</option>
                                        <option>Jawa Timur</option>
                                        <option>Jawa Tengah</option>
                                        <option>Banten</option>
                                        <option>DKI Jakarta</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kabupaten/Kota</label>
                                    <select id="kabupaten" class="form-control">
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
                                    <select id="kecamatan" class="form-control">
                                        <option>Cileunyi</option>
                                        <option>Cicalengka</option>
                                        <option>Ibun</option>
                                        <option>Margahayu</option>
                                        <option>Pangalengan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kelurahan/Desa</label>
                                    <select id="desa" class="form-control">
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
                                    <input type="number" class="form-control" id="rt" placeholder="">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>RW</label>
                                    <input type="number" class="form-control" id="rw" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kode Pos</label>
                                    <input type="number" class="form-control" id="kodepos" placeholder="Masukan Kode Pos">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat Anda"></textarea>
                            </div>
                        </form>
                </div>
                <!-- end of isian form 3 -->

                <!-- Form N6 -->
                <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
                    <p class="text-left" style="font-size: 25px;">Form N6 Surat Kematian</p>
                    <hr>
                    <form class="text-left">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bin/Binti</label>
                                <input type="text" class="form-control" id="bin" placeholder="Masukan Bin/Binti">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input class="form-control" type="text" placeholder="321213131313" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agama</label>
                                <select id="agama" class="form-control">
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
                                <input type="text" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Jenis Kelamin</label>
                                <select id="jk" class="form-control">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Provinsi</label>
                                <select id="provinsi" class="form-control">
                                    <option>Jawa Barat</option>
                                    <option>Jawa Timur</option>
                                    <option>Jawa Tengah</option>
                                    <option>Banten</option>
                                    <option>DKI Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kabupaten/Kota</label>
                                <select id="kabupaten" class="form-control">
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
                                <select id="kecamatan" class="form-control">
                                    <option>Cileunyi</option>
                                    <option>Cicalengka</option>
                                    <option>Ibun</option>
                                    <option>Margahayu</option>
                                    <option>Pangalengan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelurahan/Desa</label>
                                <select id="desa" class="form-control">
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
                                <input type="number" class="form-control" id="rt" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label>RW</label>
                                <input type="number" class="form-control" id="rw" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Pos</label>
                                <input type="number" class="form-control" id="kodepos" placeholder="Masukan Kode Pos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" id="alamat" rows="2" placeholder="Masukan Alamat"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tanggal Meninggal</label>
                                <input type="date" class="form-control" id="tglmeninggal" placeholder="Masukan Tanggal">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Meninggal di</label>
                                <select id="meninggal" class="form-control">
                                    <option>Rumah</option>
                                    <option>Rumah Sakit</option>
                                    <option>Perjalanan</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Batal</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPrint"><i class="fas fa-send mr-2"></i>Ajukan</button>
                        </div>
                    </form>
                </div>
                <!-- end of form N6 -->
               
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
</section>

<footer class="footer text-center">
    <div class="container">
        <p class="text-muted small mb-0">Copyright © KKN UIN Bandung 2020</p>
        <p class="text-muted small mb-0">Desa Cinunuk Kec.Cileunyi Kab.Bandung</p>
    </div>
</footer>