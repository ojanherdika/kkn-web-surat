<div class="flex-contain">
    <style>
        .form-group p {
            padding-left: 35px;
        }

        .card-footer {
            height: 104px;
        }

        .card-footer p {
            padding-top: 18px;
        }
    </style>
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
            <div class="container p-5 ">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 p-4"><b>Login Sebagai Admin</b></h1>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="admin" action="<?= base_url('auth/adlog'); ?>" method="POST">
                    <div class="form-group">
                        <p class="text-gray-900"><b>Username</b></p>
                        <input type="username" class="form-control " name="username" id="username" placeholder="Masukkan Username" value="<?= set_value('username'); ?>">
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
                    <div class="form-group form-button">
                        <a href="<?= base_url('auth'); ?>" class="btn btn-success btn-user btn-block col-7 ad-button">Login Sebagai Masyarakat</a>
                        <button type="submit" class="btn btn-primary btn-user btn-block log-button col-4 offset-8">
                            Login
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <p class="text-center text-gray-900"><b>Copyright by Developers UIN Bandung</b></p>
            </div>
        </div>
    </div>

</div>