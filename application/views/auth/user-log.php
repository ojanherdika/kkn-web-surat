<div class="flex-contain">
    <div class="row">
        <div class="bg-login-image bg_img">
            <div class="welcome-text">
                <h1>SELAMAT DATANG</h1>
                <h1>
                    DI APLIKASI PERSURATAN
                </h1>
                <h1>DESA CINUNUK</h1>
            </div>
        </div>
        <div class="log">
            <div class="log-icon">
                <img src="<?= base_url('assets/img/Logo.png'); ?>" alt="kabupaten bandung" class="bg_icon">
            </div>
            <div class="container">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 p-4"><b>Login Sebagai Masyarakat</b></h1>
                </div>
                <style>
                    .container form {
                        margin-top: -10px;
                    }
                </style>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" action="<?= base_url('auth'); ?>" method="POST">
                    <div class="form-group">
                        <p class="text-gray-900 "><b>No. Kartu Keluarga</b></p>
                        <input type="no_kk" class="form-control " name="no_kk" id="no_kk" placeholder="Masukkan No. KK" value="<?= set_value('no_kk'); ?>">
                        <div class="error-message">
                            <?= form_error('no_kk', '<small 
                                        class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-gray-900"><b>NIK</b></p>
                        <input type="no_nik" class="form-control " name="no_nik" id="no_nik" placeholder="Masukkan NIK" value="<?= set_value('no_nik'); ?>">
                        <div class="error-message">
                            <?= form_error('no_nik', '<small 
                                        class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group text">
                        <p class="text-gray-900"><b>Password</b></p>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                        <div class="error-message">
                            <?= form_error('password', '<small 
                                        class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('auth/adlog'); ?>" class="btn btn-success btn-user btn-block col-5 offset-2 ad-button">Login Sebagai Admin</a>
                        <button type="submit" class="btn btn-primary btn-user btn-block log-button col-4 offset-8">
                            Login
                        </button>
                    </div>
                </form>
                <div class="text-center">
                    <p class="col-8 regis-text text-gray-900"><b>No. KK Belum Terdaftar ?</b></p>
                    <button class="btn btn-primary btn-user btn-block col-4 reg-button">Registrasi</button>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-center text-gray-900"><b>Copyright &COPY; by Developers UIN Bandung</b></p>
            </div>
        </div>
    </div>

</div>