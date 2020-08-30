<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
            <div class="col-lg-8">
            <form action="<?= base_url('Tambah_warga/update') ?>" method="post">
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?= base_url('admin/profile'); ?>"><i class="fas fa-arrow-left"></i> Kembali </a>
                    </div>
                    <div class="card-body">
                        <?php foreach ($user as $user) : ?>
                         <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control" type="text" id="nama" name="nama" value="<?php echo $user->nama; ?>"  />
                            <div class="invalid-feedback"></div>
                            <div class="col-12 col-md-9"><input type="hidden" id="id" name="id" value="<?php echo $user->id; ?>" class="form-control"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_nik">NIK</label>
                                    <input class="form-control" type="text" name="no_nik" id="no_nik" value="<?php echo $user->no_nik; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_kk">NKK</label>
                                    <input class="form-control" type="text" name="no_kk" id="no_kk" value="<?php echo $user->no_kk; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="text" name="password" id="password" value="<?php echo $user->password; ?>" />
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $user->jenis_kelamin; ?>">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="custom-select" id="agama" name="agama" value="<?php echo $user->agama; ?>">
                                    <option value="0">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Aliran Kepercayaan">Aliran Kepercayaan</option>
                                    </select>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control" type="text"  id="tempat_lahir" name="tempat_lahir" value="<?php echo $user->tempat_lahir; ?>" required/>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Tanggal Lahir</label>
                                    <input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $user->tanggal_lahir; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="form-group">
                                <label for=".....">Pendidikan</label>
                                <select class="custom-select" id="pendidikan" name="pendidikan" value="<?php echo $user->pendidikan; ?>">
                                <option value="0">Pilih Pendidikan</option>
                                <option value="Belum Sekolah">Belum Sekolah</option>
                                <option value="Belum Tamat SD Sederajat">Belum Tamat SD Sederajat</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SLTP Sederajat">SLTP Sederajat</option>
                                <option value="SLTA Sederajat">SLTA Sederajat</option>
                                <option value="Diploma IV / Strata I">Diploma IV / Strata I</option>
                                <option value="Akademi / Diploma III">Akademi / Diploma III</option>
                                <option value="Diploma I / II">Diploma I / II</option>
                                <option value="Strata II">Strata II</option>
                                <option value="Strata III">Strata III</option>
                            </select>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label for=".....">Pekerjaan</label>
                                <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" value="<?php echo $user->pekerjaan; ?>" />
                                <div class="invalid-feedback">

                                </div>
                            </div>
                         
                        <div class="form-group">
                            <label for=".....">Kewarganegaraan</label>
                            <select class="custom-select" id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $user->kewarganegaraan; ?>">
                                <option value="0">Pilih Kewarganegaraan</option>
                                <option value="WNI">Warga Negara Indonesia (WNI)</option>
                                <option value="WNA">Warga Negara Asing (WNA)</option>
                            </select>

                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Alamat</label>
                            <textarea class="form-control" type="textarea" name="alamat" id="alamat" value="<?php echo $user->alamat; ?>" min="0" style="height : 100px"></textarea>
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="....">RT</label>
                                    <br>
                                    <select class="custom-select" name="RT" id="RT"  value="<?php echo $user->RT; ?>">
                                        <option value="0">Pilih RT</option>
                                        <option value="1">RT 01</option>
                                        <option value="2">RT 02</option>
                                        <option value="3">RT 03</option>
                                        <option value="4">RT 04</option>
                                        <option value="5">RT 05</option>
                                        <option value="6">RT 06</option>
                                        <option value="7">RT 07</option>
                                        <option value="8">RT 08</option>
                                        <option value="9">RT 09</option>
                                        <option value="10">RT 10</option>
                                        <option value="11">RT 11</option>
                                        <option value="12">RT 12</option>
                                        <option value="13">RT 13</option>
                                        <option value="14">RT 14</option>
                                    </select>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="....">RW</label>
                                    <br>
                                    <select class="custom-select" name="RW" id="RW"  value="<?php echo $user->RW; ?>">
                                        <option value="0">Pilih RW</option>
                                        <option value="01">RW 01</option>
                                        <option value="02">RW 02</option>
                                        <option value="03">RW 03</option>
                                        <option value="04">RW 04</option>
                                        <option value="05">RW 05</option>
                                        <option value="06">RW 06</option>
                                        <option value="07">RW 07</option>
                                        <option value="08">RW 08</option>
                                        <option value="09">RW 09</option>
                                        <option value="10">RW 10</option>
                                        <option value="11">RW 11</option>
                                        <option value="12">RW 12</option>
                                        <option value="13">RW 13</option>
                                        <option value="14">RW 14</option>
                                        <option value="15">RW 15</option>
                                        <option value="16">RW 16</option>
                                        <option value="17">RW 17</option>
                                        <option value="18">RW 18</option>
                                        <option value="19">RW 19</option>
                                        <option value="20">RW 20</option>
                                        <option value="21">RW 21</option>
                                        <option value="22">RW 22</option>
                                        <option value="23">RW 23</option>
                                        <option value="24">RW 24</option>
                                        <option value="25">RW 25</option>
                                        <option value="26">RW 26</option>
                                        <option value="27">RW 27</option>
                                        <option value="28">RW 28</option>
                                        <option value="29">RW 29</option>
                                    </select>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Desa</label>
                                    <input class="form-control" type="text" name="desa" id="desa" value="<?php echo $user->desa; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Kecamatan</label>
                                    <input class="form-control" type="text" name="kecamatan" id="kecamatan" value="<?php echo $user->kecamatan; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Kabupaten/Kota</label>
                                    <input class="form-control" type="text" name="kab_kota" id="kab_kota" value="<?php echo $user->kab_kota; ?>"  />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Provinsi</label>
                                    <input class="form-control" type="text" name="provinsi" id="provinsi" value="<?php echo $user->provinsi; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Kode Pos</label>
                                    <input class="form-control" type="text" name="kode_pos" id="kode_pos" value="<?php echo $user->kode_pos; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Kepala Keluarga</label>
                            <input class="form-control" type="text" name="kepala_keluarga" id="kepala_keluarga" value="<?php echo $user->kepala_keluarga; ?>" />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Status Pernikahan</label>
                            <select class="custom-select" id="status_nikah" name="status_nikah" value="<?php echo $user->status_nikah; ?>">
                                <option value="0">Pilih Status</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                            </select>
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Status Hubungan dalam Keluarga</label>
                            <select class="custom-select" id="status_keluarga" name="status_keluarga" value="<?php echo $user->status_keluarga; ?>">
                                <option value="0">Pilih Status</option>
                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                <option value="Istri">Istri</option>
                                <option value="Anak">Anak</option>
                                <option value="Cucu">Cucu</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Mertua">Mertua</option>
                                <option value="Family Lain">Family Lain</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Nama Ayah</label>
                                    <input class="form-control" type="text" name="nama_ayah" id="nama_ayah" value="<?php echo $user->nama_ayah; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Nama Ibu</label>
                                    <input class="form-control" type="text" name="nama_ibu" id="nama_ibu" value="<?php echo $user->nama_ibu; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>    
                        </div>
                        <?php endforeach; ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">    
                                        &emsp;
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>               
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.container-fluid 
    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static" style="position:absolute;left:0%; top:60%;">
        <div class="modal-dialog modal-sm" role="document">
             <form action="<?= base_url('Tambah_warga/update'); ?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Konfirmasi Penyimpanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Yakin Menyimpan Data Terbaru ?
                    </p>
                </div>
                <input type="hidden" name="action" id="act_value">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" value="Simpan">Ya, Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>-->
