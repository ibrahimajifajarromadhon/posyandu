<h2
	class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
	Dashboard
</h2>
<!-- CTA -->
<!-- Cards -->
<div class="grid gap-6 mb-8 md:grid-cols-2">
	<!-- Card -->
	<div
		class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
		<div
			class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
			<i class="fa fa-users fa-lg"></i>
		</div>
		<div>
			<p
				class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
				Total Data Orang Tua
			</p>
			<p
				class="text-lg font-semibold text-gray-700 dark:text-gray-200">
				<?php echo $ortu ?>
			</p>
		</div>
	</div>
	<!-- Card -->
	<div
		class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
		<div
			class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
			<i class="fa fa-child fa-lg"></i>
		</div>
		<div>
			<p
				class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
				Total Data Balita
			</p>
			<p
				class="text-lg font-semibold text-gray-700 dark:text-gray-200">
				<?php echo $balita ?>
			</p>
		</div>
	</div>
	<!-- Card -->
	<div
		class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
		<div
			class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
			<i class="fa fa-bar-chart fa-lg"></i>
		</div>
		<div>
			<p
				class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
				Total Data Pertumbuhan
			</p>
			<p
				class="text-lg font-semibold text-gray-700 dark:text-gray-200">
				<?php echo $pertumbuhan ?>
			</p>
		</div>
	</div>

	<div
		class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
		<div
			class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
			<i class="fa fa-stethoscope fa-lg"></i>
		</div>
		<div>
			<p
				class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
				Total Data Imunisasi
			</p>
			<p
				class="text-lg font-semibold text-gray-700 dark:text-gray-200">
				<?php echo $imunisasi ?>
			</p>
		</div>
	</div>
</div>
