<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">



            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?= base_url('admin/profile'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">

                    <form action="<?= base_url('Tambah_warga/add'); ?>" method="post">
                        <div class="form-group">
                            <label>No. Kartu Keluarga</label>
                            <input class="form-control" type="text" name="no_kk" id="no_kk" />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input class="form-control" type="text" name="no_nik" id="no_nik" />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" id="nama" />
                            <div class="invalid-feedback">

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>RT</label>
                                    <br>
                                    <select class="custom-select" name="rt" id="rt">
                                        <option value="0">Pilih RT</option>
                                        <option value="001">RT 001</option>
                                        <option value="002">RT 002</option>
                                        <option value="003">RT 003</option>
                                        <option value="004">RT 004</option>
                                        <option value="005">RT 005</option>
                                        <option value="006">RT 006</option>
                                        <option value="007">RT 007</option>
                                        <option value="008">RT 008</option>
                                        <option value="009">RT 009</option>
                                        <option value="10">RT 10</option>
                                        <option value="11">RT 11</option>
                                        <option value="12">RT 12</option>
                                        <option value="13">RT 13</option>
                                        <option value="14">RT 14</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=".....">RW</label>
                                    <br>
                                    <select class="custom-select" name="rw" id="rw">
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
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" type="text" name="alamat" id="alamat" min="0" style="height : 100px"></textarea>
                            <div class="invalid-feedback">

                            </div>
                        </div>


                        <button class="btn btn-primary" type="submit" name="btn" value="Simpan">Simpan</button>
                    </form>

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->