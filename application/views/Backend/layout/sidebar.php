<!-- Desktop sidebar -->
<div
	x-show="isSideMenuOpen"
	x-transition:enter="transition ease-in-out duration-150"
	x-transition:enter-start="opacity-0"
	x-transition:enter-end="opacity-100"
	x-transition:leave="transition ease-in-out duration-150"
	x-transition:leave-start="opacity-100"
	x-transition:leave-end="opacity-0"
	class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block">
	<div class="py-4 text-gray-500 dark:text-gray-400">
		<a
			class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
			href="#">
			Kader Posyandu
		</a>
		<ul class="mt-6">
			<li class="relative px-6 py-3">
				<?php if ($this->uri->segment(2) == ''):
				?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $this->uri->segment(2) == '' ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
					href="<?php echo base_url('Backend'); ?>">
					<i class="fa fa-home fa-lg"></i>
					<span class="ml-4">Dashboard</span>
				</a>
			</li>
		</ul>
		<ul>
			<li class="relative px-6 py-3">
				<?php if ($is_active_ortu_group = (
					$this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), [
						'data_ortu',
						'data_ortu_input',
						'data_ortu_input_aksi',
						'data_ortu_edit',
						'data_ortu_edit_aksi'
					]))): ?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_ortu_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_ortu', 'data_ortu_input', 'data_ortu_input_aksi', 'data_ortu_edit', 'data_ortu_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
					href="<?php echo base_url('Backend/data_ortu'); ?>">
					<i class="fa fa-users fa-lg"></i>
					<span class="ml-4">Data Orang Tua</span>
				</a>
			</li>
			<li class="relative px-6 py-3">
				<?php if ($is_active_balita_group = (
					$this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_balita', 'data_balita_input', 'data_balita_input_aksi', 'data_balita_edit', 'data_balita_edit_aksi']))): ?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_balita_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_balita', 'data_balita_input', 'data_balita_input_aksi', 'data_balita_edit', 'data_balita_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/data_balita'); ?>">
					<i class="fa fa-child fa-lg"></i>
					<span class="ml-4">Data Balita</span>
				</a>
			</li>
			<li class="relative px-6 py-3">
				<?php if ($is_active_periksa_group = (
					$this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_pertumbuhan', 'data_pertumbuhan_input', 'data_pertumbuhan_input_aksi', 'data_pertumbuhan_edit', 'data_pertumbuhan_edit_aksi', 'data_imunisasi', 'data_imunisasi_input', 'data_imunisasi_input_aksi', 'data_imunisasi_edit', 'data_imunisasi_edit_aksi', 'data_jenis_imunisasi', 'data_jenis_imunisasi_input', 'data_jenis_imunisasi_input_aksi', 'data_jenis_imunisasi_edit', 'data_jenis_imunisasi_edit_aksi']))): ?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<button
					class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
					@click="togglePagesMenu"
					aria-haspopup="true">
					<span class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_periksa_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_pertumbuhan', 'data_pertumbuhan_input', 'data_pertumbuhan_input_aksi', 'data_pertumbuhan_edit', 'data_pertumbuhan_edit_aksi', 'data_imunisasi', 'data_imunisasi_input', 'data_imunisasi_input_aksi', 'data_imunisasi_edit', 'data_imunisasi_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
						<i class="fa fa-stethoscope fa-lg"></i>
						<span class="ml-4">Data Periksa</span>
					</span>
					<svg
						class="w-4 h-4"
						aria-hidden="true"
						fill="currentColor"
						viewBox="0 0 20 20">
						<path
							fill-rule="evenodd"
							d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
							clip-rule="evenodd"></path>
					</svg>
				</button>
				<template x-if="isPagesMenuOpen">
					<ul
						x-transition:enter="transition-all ease-in-out duration-300"
						x-transition:enter-start="opacity-25 max-h-0"
						x-transition:enter-end="opacity-100 max-h-xl"
						x-transition:leave="transition-all ease-in-out duration-300"
						x-transition:leave-start="opacity-100 max-h-xl"
						x-transition:leave-end="opacity-0 max-h-0"
						class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
						aria-label="submenu">
						<li
							class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
							<?php if ($is_active_pertumbuhan_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_pertumbuhan', 'data_pertumbuhan_input', 'data_pertumbuhan_input_aksi', 'data_pertumbuhan_edit', 'data_pertumbuhan_edit_aksi']))): ?>
								<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
							<?php endif; ?>
							<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_pertumbuhan_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_pertumbuhan', 'data_pertumbuhan_input', 'data_pertumbuhan_input_aksi', 'data_pertumbuhan_edit', 'data_pertumbuhan_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/data_pertumbuhan'); ?>">Data Pertumbuhan</a>
						</li>
						<li
							class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
							<?php if ($is_active_imunisasi_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_imunisasi', 'data_imunisasi_input', 'data_imunisasi_input_aksi', 'data_imunisasi_edit', 'data_imunisasi_edit_aksi']))): ?>
								<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
							<?php endif; ?>
							<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_imunisasi_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_imunisasi', 'data_imunisasi_input', 'data_imunisasi_input_aksi', 'data_imunisasi_edit', 'data_imunisasi_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/data_imunisasi'); ?>">
								Data Imunisasi
							</a>
						</li>
						<li
							class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
							<?php if ($is_active_jenis_imunisasi_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_jenis_imunisasi', 'data_jenis_imunisasi_input', 'data_jenis_imunisasi_input_aksi', 'data_jenis_imunisasi_edit', 'data_jenis_imunisasi_edit_aksi']))): ?>
								<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
							<?php endif; ?>
							<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_jenis_imunisasi_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_jenis_imunisasi', 'data_jenis_imunisasi_input', 'data_jenis_imunisasi_input_aksi', 'data_jenis_imunisasi_edit', 'data_jenis_imunisasi_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/data_jenis_imunisasi'); ?>">
								Data Jenis Imunisasi
							</a>
						</li>
					</ul>
				</template>
			</li>
			<li class="relative px-6 py-3">
				<?php if ($is_active_print_data = (
					$this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['print_data']))): ?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_print_data = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['print_data'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/print_data'); ?>">
					<i class="fa fa-print fa-lg"></i>
					<span class="ml-4">Print Data</span>
				</a>
			</li>
		</ul>
	</div>
</aside>
<!-- Mobile sidebar -->
<!-- Backdrop -->
<div
	x-show="isSideMenuOpen"
	x-transition:enter="transition ease-in-out duration-150"
	x-transition:enter-start="opacity-0"
	x-transition:enter-end="opacity-100"
	x-transition:leave="transition ease-in-out duration-150"
	x-transition:leave-start="opacity-100"
	x-transition:leave-end="opacity-0"
	class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside
	class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
	x-show="isSideMenuOpen"
	x-transition:enter="transition ease-in-out duration-150"
	x-transition:enter-start="opacity-0 transform -translate-x-20"
	x-transition:enter-end="opacity-100"
	x-transition:leave="transition ease-in-out duration-150"
	x-transition:leave-start="opacity-100"
	x-transition:leave-end="opacity-0 transform -translate-x-20"
	@click.away="closeSideMenu"
	@keydown.escape="closeSideMenu">
	<div class="py-4 text-gray-500 dark:text-gray-400">
		<a
			class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
			href="#">
			Kader Posyandu
		</a>
		<ul class="mt-6">
			<li class="relative px-6 py-3">
				<?php if ($this->uri->segment(2) == ''):
				?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $this->uri->segment(2) == '' ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
					href="<?php echo base_url('Backend'); ?>">
					<svg
						class="w-5 h-5"
						aria-hidden="true"
						fill="none"
						stroke-linecap="round"
						stroke-linejoin="round"
						stroke-width="2"
						viewBox="0 0 24 24"
						stroke="currentColor">
						<path
							d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
					</svg>
					<span class="ml-4">Dashboard</span>
				</a>
			</li>
		</ul>
		<ul>
			<li class="relative px-6 py-3">
				<?php if ($is_active_ortu_group = (
					$this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), [
						'data_ortu',
						'data_ortu_input',
						'data_ortu_input_aksi',
						'data_ortu_edit',
						'data_ortu_edit_aksi'
					]))): ?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_ortu_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_ortu', 'data_ortu_input', 'data_ortu_input_aksi', 'data_ortu_edit', 'data_ortu_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/data_ortu'); ?>">
					<i class="fa fa-users fa-lg"></i>
					<span class="ml-4">Data Orang Tua</span>
				</a>
			</li>
			<li class="relative px-6 py-3">
				<?php if ($is_active_balita_group = (
					$this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_balita', 'data_balita_input', 'data_balita_input_aksi', 'data_balita_edit', 'data_balita_edit_aksi']))): ?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_balita_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_balita', 'data_balita_input', 'data_balita_input_aksi', 'data_balita_edit', 'data_balita_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/data_balita'); ?>">
					<i class="fa fa-child fa-lg"></i>
					<span class="ml-4">Data Balita</span>
				</a>
			</li>
			<li class="relative px-6 py-3">
				<?php if ($is_active_periksa_group = (
					$this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_pertumbuhan', 'data_pertumbuhan_input', 'data_pertumbuhan_input_aksi', 'data_pertumbuhan_edit', 'data_pertumbuhan_edit_aksi', 'data_imunisasi', 'data_imunisasi_input', 'data_imunisasi_input_aksi', 'data_imunisasi_edit', 'data_imunisasi_edit_aksi']))): ?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<button
					class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
					@click="togglePagesMenu"
					aria-haspopup="true">
					<span class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_periksa_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_pertumbuhan', 'data_pertumbuhan_input', 'data_pertumbuhan_input_aksi', 'data_pertumbuhan_edit', 'data_pertumbuhan_edit_aksi', 'data_imunisasi', 'data_imunisasi_input', 'data_imunisasi_input_aksi', 'data_imunisasi_edit', 'data_imunisasi_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
						<i class="fa fa-stethoscope fa-lg"></i>
						<span class="ml-4">Data Periksa</span>
					</span>
					<svg
						class="w-4 h-4"
						aria-hidden="true"
						fill="currentColor"
						viewBox="0 0 20 20">
						<path
							fill-rule="evenodd"
							d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
							clip-rule="evenodd"></path>
					</svg>
				</button>
				<template x-if="isPagesMenuOpen">
					<ul
						x-transition:enter="transition-all ease-in-out duration-300"
						x-transition:enter-start="opacity-25 max-h-0"
						x-transition:enter-end="opacity-100 max-h-xl"
						x-transition:leave="transition-all ease-in-out duration-300"
						x-transition:leave-start="opacity-100 max-h-xl"
						x-transition:leave-end="opacity-0 max-h-0"
						class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
						aria-label="submenu">
						<li
							class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
							<?php if ($is_active_pertumbuhan_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_pertumbuhan', 'data_pertumbuhan_input', 'data_pertumbuhan_input_aksi', 'data_pertumbuhan_edit', 'data_pertumbuhan_edit_aksi']))): ?>
								<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
							<?php endif; ?>
							<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_pertumbuhan_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_pertumbuhan', 'data_pertumbuhan_input', 'data_pertumbuhan_input_aksi', 'data_pertumbuhan_edit', 'data_pertumbuhan_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/data_pertumbuhan'); ?>">Data Pertumbuhan</a>
						</li>
						<li
							class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
							<?php if ($is_active_imunisasi_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_imunisasi', 'data_imunisasi_input', 'data_imunisasi_input_aksi', 'data_imunisasi_edit', 'data_imunisasi_edit_aksi']))): ?>
								<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
							<?php endif; ?>
							<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_imunisasi_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_imunisasi', 'data_imunisasi_input', 'data_imunisasi_input_aksi', 'data_imunisasi_edit', 'data_imunisasi_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/data_imunisasi'); ?>">
								Data Imunisasi
							</a>
						</li>
						<li
							class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
							<?php if ($is_active_jenis_imunisasi_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_jenis_imunisasi', 'data_jenis_imunisasi_input', 'data_jenis_imunisasi_input_aksi', 'data_jenis_imunisasi_edit', 'data_jenis_imunisasi_edit_aksi']))): ?>
								<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
							<?php endif; ?>
							<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_jenis_imunisasi_group = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['data_jenis_imunisasi', 'data_jenis_imunisasi_input', 'data_jenis_imunisasi_input_aksi', 'data_jenis_imunisasi_edit', 'data_jenis_imunisasi_edit_aksi'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/data_jenis_imunisasi'); ?>">
								Data Jenis Imunisasi
							</a>
						</li>
					</ul>
				</template>
			<li class="relative px-6 py-3">
				<?php if ($is_active_print_data = (
					$this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['print_data']))): ?>
					<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
				<?php endif; ?>
				<a class="inline-flex items-center w-full text-sm font-semibold <?php echo $is_active_print_data = ($this->uri->segment(1) === 'Backend' && in_array($this->uri->segment(2), ['print_data'])) ? 'text-gray-800 dark:hover:text-gray-100 dark:text-gray-100' : ''; ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo base_url('Backend/print_data'); ?>">
					<i class="fa fa-print fa-lg"></i>
					<span class="ml-4">Print Data</span>
				</a>
			</li>
			</li>
		</ul>
	</div>
</aside>