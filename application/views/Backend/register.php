<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Register - Posyandu Wijaya Kusuma</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

	<link href="<?php echo base_url() . 'assets/Backend/css/styles.css' ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/Backend/css/tailwind.output.css' ?>" />
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="<?php echo base_url() . 'assets/Backend/js/init-alpine.js' ?>"></script>

	<!-- Favicon  -->
	<link rel="icon" href="<?php echo base_url() . 'assets/Backend/img/logo_posyandu.png' ?>">

</head>

<body>
	<div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
		<div class="flex-1 h-full max-w-xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
			<div class="px-4 py-3 mb-6 bg-white rounded-lg dark:bg-gray-800">
				<form method="POST" action="<?php echo base_url() . 'Login/register_action' ?>" enctype="multipart/form-data">

					<img src="<?php echo base_url() . 'assets/Backend/img/logo_posyandu.png' ?>" width="100px" class="mx-auto mb-1" alt="Logo Posyandu">
					<h3 class="mb-4 text-xl text-center font-semibold text-gray-700 dark:text-gray-200">
						Posyandu Wijaya Kusuma
					</h3>
					<h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
						Register
					</h1>

					<div class="form-row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nm_ayah">Nama Ayah *</label>
								<input type="text" name="nm_ayah" id="nm_ayah" value="<?php echo set_value('nm_ayah') ?>" class="form-control" placeholder="Masukkan Nama Ayah" autocomplete="on">
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
						<div class="col-md-12">
							<div class="form-group">
								<label for="username">Username *</label>
								<input type="text" id="username" name="username" value="<?php echo set_value('username') ?>" class="form-control" placeholder="Masukkan Username" autocomplete="on">
								<span class="text-sm text-red-600"><?= form_error('username') ?></span>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="password">Password * (minimal 5 karakter)</label>
								<input type="password" id="password" name="password" value="<?php echo set_value('password') ?>" class="form-control" placeholder="Masukkan Password" autocomplete="off">
								<span class="text-sm text-red-600"><?= form_error('password') ?></span>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="passconf">Konfirmasi Password *</label>
								<input type="password" id="passconf" name="passconf" value="<?php echo set_value('passconf') ?>" class="form-control" placeholder="Masukkan Password" autocomplete="off">
								<span class="text-sm text-red-600"><?= form_error('passconf') ?></span>
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

					<!-- You should use a button here, as the anchor is only used for the example  -->
					<button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">
						Register
					</button>

					<hr class="my-6" />

					<p>Sudah punya akun?
						<a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="<?php echo base_url() . 'Login' ?>">
							Login
						</a>
					</p>
				</form>
			</div>

		</div>
	</div>
</body>

</html>