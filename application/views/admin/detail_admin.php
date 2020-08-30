<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


	<div class="row">
		<?php foreach ($admin as $admin) : ?>
		<div class="col-md-12">
		</div>
		<form action="<?= base_url('/admin/update/'); ?>" method="post" enctype="multipart/form-data">
			<div class="col-md-8">
				<div class="form-group">
					<label>Username</label>
					<input class="form-control" type="text" name="username" value="<?php echo $admin->username; ?>" />
					<div class="col-12 col-md-9"><input type="hidden" id="id" name="id" value="<?php echo $admin->id; ?>" class="form-control"></div>
				</div>

				<div class="form-group">
					<label for="....">Password</label>
					<input class="form-control" type="text" name="password" value="●●●●●●" readonly />
					<div class="invalid-feedback">

					</div>
				</div>

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input class="form-control" type="text" name="nama_lengkap" value="<?php echo $admin->nama_lengkap; ?>" />
					<div class="invalid-feedback">

					</div>
				

				<div class="form-group">
					<label>Jabatan</label>
					<input class="form-control" type="text" name="jabatan" value="<?= $admin->jabatan; ?>"/>
					<div class="invalid-feedback">

					</div>
				</div>

				<div class="form-group">
					<label>No HP</label>
					<input class="form-control" type="text" name="no_hp" value="<?= $admin->no_hp; ?>" />
					<div class="invalid-feedback">

					</div>
				</div>
				<div class="row">
				
					&emsp;
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				<?php endforeach; ?>
			</div>
			<!-- <div class="col-md-4">
				<div class="form-group">
					<img src="<?= base_url('assets/admin/img/') . $admin['image']; ?>" class="img-thumbnail">
				</div>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="image" name="image">
						<label class="custom-file-label" for="image">Choose file</label>
					</div>
				</div>
			</div> -->

		
	</div>
</form>
</div>
</div>
<!-- /.container-fluid -->