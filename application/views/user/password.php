<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
    <div class="container p-1">
        <img src="<?= base_url('assets/'); ?>/user/images/logo.png" alt="" style="width: 34px; height: auto;">
        <a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Home</strong></a>
    </div>
</nav>
<section class="mt-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="block-heading">
                    <h2>Ganti Passowrd</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container text-center">
        <form action="<?= base_url('user/update_password/' . $user['no_nik']); ?>" method="POST">
            <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
                <div class="form-row">
                    <div class="form-group col-6">
                        <label>Password Baru</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password baru">
                    </div>
                </div>
                <button class="btn btn-success">Ganti</button>
            </div>
        </form>
    </div>
</section>