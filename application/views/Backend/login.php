<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Login - Posyandu Wijaya Kusuma</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/Backend/css/tailwind.output.css' ?>" />
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="<?php echo base_url() . 'assets/Backend/js/init-alpine.js' ?>"></script>
	<link href="<?php echo base_url() . 'assets/Backend/css/styles.css' ?>" rel="stylesheet" />

	<link rel="stylesheet" href="<?php echo base_url() . 'assets/Backend/css/tailwind.output.css' ?>" />
	<!-- Favicon  -->
	<link rel="icon" href="<?php echo base_url() . 'assets/Backend/img/logo_posyandu.png' ?>">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
		<div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
			<div class="flex flex-col overflow-y-auto md:flex-row">
				<div class="h-32 md:h-auto md:w-1/2 hidden md:block">
					<img class="object-cover w-full h-full" src="<?php echo base_url() . 'assets/Backend/img/mamah_.png' ?>" alt="mamah" />
				</div>
				<div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
					<div class="w-full">
						<form method="POST" action="<?php echo base_url() . 'Login/auth' ?>">
							<img src="<?php echo base_url() . 'assets/Backend/img/logo_posyandu.png' ?>" width="100px" class="mx-auto mb-1" alt="Logo Posyandu">
							<h3 class="mb-4 text-xl text-center font-semibold text-gray-700 dark:text-gray-200">
								Posyandu Wijaya Kusuma
							</h3>
							<h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
								Login
							</h1>
							<?php if ($this->session->flashdata('success')) : ?>
								<div class="mb-2 mt-0 alert alert-success alert-dismissible text-green-100">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong><?php echo $this->session->flashdata('success'); ?></strong>
								</div>
							<?php endif; ?>
							<?php if ($this->session->flashdata('error')) : ?>
								<div class="mb-2 mt-0 alert alert-danger alert-dismissible text-red-100">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong><?php echo $this->session->flashdata('error'); ?></strong>
								</div>
							<?php endif; ?>
							<label class="block text-sm">
								<span class="text-gray-700 dark:text-gray-400">Username</span>
								<input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Input Your Username" type="text" name="username" value="<?php echo set_value('username') ?>" autocomplete="on" />
								<span class="text-sm text-red-600"><?= form_error('username') ?></span>
							</label>
							<label class="block mt-4 text-sm">
								<span class="text-gray-700 dark:text-gray-400">Password</span>
								<input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Input Your Password" type="password" name="password" value="<?php echo set_value('password') ?>" autocomplete="off" />
								<span class="text-sm text-red-600"><?= form_error('password') ?></span>
							</label>

							<!-- You should use a button here, as the anchor is only used for the example  -->
							<button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">
								Login
							</button>

							<hr class="my-8" />

							<p class="mt-1">Belum punya akun?
								<a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="<?php echo base_url() . 'Login/register' ?>">
									Register
								</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>