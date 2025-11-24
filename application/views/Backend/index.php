<main class="h-full overflow-y-auto">
	<div class="container px-6 mx-auto grid">
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
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
					</svg>
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
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
					</svg>
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
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							fill-rule="evenodd"
							d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
							clip-rule="evenodd"></path>
					</svg>
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
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M12 2c5.5 0 10 4.5 10 10s-4.5 10-10 10-10-4.5-10-10 4.5-10 10-10zm0 18c4.4 0 8-3.6 8-8s-3.6-8-8-8-8 3.6-8 8 3.6 8 8 8z"></path>
						<path d="M12 12l-4 4 4-4"></path>
						<circle cx="12" cy="12" r="2"></circle>
					</svg>
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
	</div>
</main>