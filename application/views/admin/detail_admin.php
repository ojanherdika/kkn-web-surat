<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="row">
		<div class="col-md-12">
			
			<form action="<?= base_url('admin/update') ?>" method="post">
				<div class="col-md-8">
					<?php foreach ($admin as $admin) : ?>
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" type="text" name="username" id="username" required value="<?php echo $admin->username; ?>"/>
						<div class="invalid-feedback">
						</div>
						<div class="col-12 col-md-9"><input type="hidden" id="id" name="id" value="<?php echo $admin->id; ?>" class="form-control"></div>
					</div>

					<div class="form-group">
						<label for="....">Password</label>
						<input class="form-control" type="password" name="password" id="password" value="<?php echo $admin->password; ?>" required />
						<div class="invalid-feedback">
						</div>
					</div>

					<div class="form-group">
						<label>Nama Lengkap</label>
						<input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo $admin->nama_lengkap; ?>"required />
						<div class="invalid-feedback">

						</div>
					</div>

					<div class="form-group">
						<label>Jabatan</label>
						<input class="form-control" type="text" name="jabatan" id="jabatan" value="<?php echo $admin->jabatan; ?>" required />
						<div class="invalid-feedback">

						</div>
					</div>

					<div class="form-group">
						<label>No HP</label>
						<input class="form-control" type="text" name="no_hp" id="no_hp" value="<?php echo $admin->no_hp; ?>" required />
						<div class="invalid-feedback">

						</div>
					</div>
				<?php endforeach; ?>
				</div>
				<!-- <div class="col-md-4">
				<div class="form-group">
					<img src="<?= base_url('assets/admin/img/profile/') . $user['image']; ?>" class="img-thumbnail">
				</div>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="image" name="image">
						<label class="custom-file-label" for="image">Choose file</label>
					</div>
				</div>
			</div> -->
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		
		</div>
	</div>
</div>
<!-- /.container-fluid -->