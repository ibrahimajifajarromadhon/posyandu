<!-- Header -->
<header id="header" class="ex-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>EDIT PROFIL</h1>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- Breadcrumbs -->
<div class="ex-basic-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumbs">
					<a href="<?php echo base_url() . 'index.php/Frontend' ?>">Home</a><i class="fa fa-angle-double-right"></i><span>Edit Profil</span>
				</div> <!-- end of breadcrumbs -->
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->

<div class="container mb-5">
	<?php foreach ($tbl_ortu as $ortu) { ?>
		<form method="POST" action="<?php echo base_url() . 'index.php/Frontend/profil_edit_aksi' ?>">
			<div class="row">
				<div class="col-lg-12">
					<br>
					<!-- Sign Up Form -->
					<input type="hidden" name="id_ortu" value="<?php echo $this->session->userdata('ses_id_ortu') ?>" />
					<div class="form-row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama Ayah</label>
								<input type="hidden" name="id_ortu" class="form-control" value="<?php echo $ortu->id_ortu ?>">
								<input type="text" name="nm_ayah" class="form-control" value="<?php echo $ortu->nm_ayah ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama Ibu</label>
								<input type="text" name="nm_ibu" class="form-control" value="<?php echo $ortu->nm_ibu ?>">
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" value="<?php echo $ortu->username ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Password</label>
								<input type="text" name="password" class="form-control" placeholder="Masukkan Password (Kosongkan jika tidak ingin mengubah)">
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" value="<?php echo $ortu->email ?>">
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-12">
							<div class="form-group">
								<label>No.Handphone</label>
								<input type="text" name="no_hp" class="form-control" value="<?php echo $ortu->no_hp ?>">
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Alamat</label>
								<textarea name="alamat" class="form-control"><?php echo $ortu->alamat ?></textarea>
							</div>
						</div>
					</div>

					<div class="form-group mt-4 mb-0">
						<input type="submit" name="proses" class="btn btn-primary btn-block" value="Update Data Profil">
					</div>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		<?php } ?>
</div> <!-- end of container -->