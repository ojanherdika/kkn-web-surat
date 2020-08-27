<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


	<div class="row">
		<div class="col-md-12">
			<?php echo form_open_multipart('admin/tambah_admin'); ?>
		</div>
		<form action="<?php echo site_url('.....') ?>" method="post" enctype="multipart/form-data">
			<div class="col-md-8">
				<div class="form-group">
					<label>Username</label>
					<input class="form-control" type="text" name="....." />
					<div class="invalid-feedback">
					</div>
				</div>

				<div class="form-group">
					<label for="....">Password</label>
					<input class="form-control" type="text" name="...." />
					<div class="invalid-feedback">
					</div>
				</div>

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input class="form-control" type="text" name="....." />
					<div class="invalid-feedback">
						
					</div>
				</div>

				<div class="form-group">
					<label>Jabatan</label>
					<input class="form-control" type="text" name="....." />
					<div class="invalid-feedback">
						
					</div>
				</div>

				<div class="form-group">
					<label>No HP</label>
					<input class="form-control" type="text" name="....." />
					<div class="invalid-feedback">
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
				</div>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="image" name="image">
						<label class="custom-file-label" for="image">Choose file</label>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>

	<br>
	<br>

</div>
<!-- /.container-fluid -->
