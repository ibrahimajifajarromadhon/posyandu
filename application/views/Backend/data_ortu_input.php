<main class="h-full pb-16 overflow-y-auto">
	<div class="container px-6 mx-auto grid">
		<h2
			class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
			Tambah Data Orang Tua
		</h2>
		<!-- CTA -->
		<div
			class="px-4 py-3 mb-2 bg-purple-600 rounded-lg shadow-md dark:bg-purple-600">
			<p class="text-sm font-semibold text-white dark:text-white">
				Tambah Data Orang Tua
			</p>
		</div>

		<div
			class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

			<form method="POST" action="<?php echo base_url() . 'Backend/data_ortu_input_aksi' ?>" enctype="multipart/form-data">

				<div class="form-row">
					<input type="hidden" name="id_ortu" class="form-control">

					<div class="col-md-12">
						<div class="form-group">
							<label for="nm_ayah">Nama Ayah *</label>
							<input type="text" id="nm_ayah" name="nm_ayah" value="<?php echo set_value('nm_ayah') ?>" class="form-control" placeholder="Masukkan Nama Ayah" autocomplete="on">
							<span class="text-sm text-red-600"><?= form_error('nm_ayah') ?></span>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label for="nm_ibu">Nama Ibu *</label>
							<input type="text" id="nm_ibu" name="nm_ibu" value="<?php echo set_value('nm_ibu') ?>" class="form-control" placeholder="Masukkan Nama Ibu" autocomplete="on">
							<span class="text-sm text-red-600"><?= form_error('nm_ibu') ?></span>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="username">Username *</label>
							<input type="text" id="username" name="username" value="<?php echo set_value('username') ?>" class="form-control" placeholder="Masukkan Username" autocomplete="on">
							<span class="text-sm text-red-600"><?= form_error('username') ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="password">Password *</label>
							<input type="password" id="password" name="password" value="<?php echo set_value('password') ?>" class="form-control" placeholder="Masukkan Password">
							<span class="text-sm text-red-600"><?= form_error('password') ?></span>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="email">Email *</label>
							<input type="email" id="email" name="email" value="<?php echo set_value('email') ?>" class="form-control" placeholder="Masukkan Email" autocomplete="on">
							<span class="text-sm text-red-600"><?= form_error('email') ?></span>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="no_hp">No.Handphone *</label>
							<input type="number" id="no_hp" name="no_hp" value="<?php echo set_value('no_hp') ?>" class="form-control" placeholder="Masukkan No.Handphone">
							<span class="text-sm text-red-600"><?= form_error('no_hp') ?></span>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="alamat">Alamat *</label>
							<textarea id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat"><?php echo set_value('alamat') ?></textarea>
							<span class="text-sm text-red-600"><?= form_error('alamat') ?></span>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="pekerjaan_ayah">Pekerjaan Ayah *</label>
							<input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?php echo set_value('pekerjaan_ayah') ?>" class="form-control" placeholder="Masukkan Pekerjaan Ayah">
							<span class="text-sm text-red-600"><?= form_error('pekerjaan_ayah') ?></span>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="pekerjaan_ibu">Pekerjaan Ibu *</label>
							<input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?php echo set_value('pekerjaan_ibu') ?>" class="form-control" placeholder="Masukkan Pekerjaan Ibu">
							<span class="text-sm text-red-600"><?= form_error('pekerjaan_ibu') ?></span>
						</div>
					</div>
				</div>

				<center>
					<div class="form-group mt-4 mb-0">
						<input type="submit" name="proses" class="btn btn-primary" value="Simpan">
						<button type="reset" class="btn btn-dark">Reset</button>
						<a class="btn btn-warning text-white" href="<?php echo base_url() . 'Backend/data_ortu' ?>">Batal</a>
					</div>
				</center>

			</form>

		</div>
	</div>
</main>