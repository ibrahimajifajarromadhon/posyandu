<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Tabel Data Balita
        </h2>

        <div class="mb-4"> <a href="<?php echo base_url('Backend/data_balita_input') ?>" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Tambah Data
            </a>
        </div>
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="mb-2 mt-0 alert alert-success alert-dismissible text-green-100">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php endif; ?>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Nama Ibu</th>
                            <th class="px-4 py-3">Nama balita</th>
                            <th class="px-4 py-3">Tanggal Lahir</th>
                            <th class="px-4 py-3">Jenis Kelamin</th>
                            <th class="px-4 py-3">Berat Badan Lahir</th>
                            <th class="px-4 py-3">Panjang Badan Lahir</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php
                        if (!empty($tbl_balita)) {
                            $no = 1;
                            foreach ($tbl_balita as $balita) {
                        ?>
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $no++ ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $balita->nm_ibu ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $balita->nm_balita ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $balita->tgl_lahir ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $balita->jenis_kelamin ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $balita->bb_lahir ?> kg
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $balita->pb_lahir ?> cm
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <a
                                                href="<?php echo base_url('Backend/data_balita_edit/' . $balita->id_balita) ?>"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </a>
                                            <a
                                                href="<?php echo base_url('Backend/data_balita_delete/' . $balita->id_balita) ?>"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')"
                                                aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td colspan="8" class="px-4 py-3 text-center">Tidak ada data balita.</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="flex px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 justify-between">
                <span class="flex items-center">
                    Menampilkan <?php echo count($tbl_balita); ?> dari <?php echo $total_data; ?> data.
                </span>
                <ul class="flex pagination pagination-sm items-center">
                    <li class="page-item">
                        <a class="page-link text-gray-500" href="<?php echo site_url('Backend/data_balita/page/' . $links['prev_page']); ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <?php for ($i = 1; $i <= $links['num_pages']; $i++) : ?>
                        <li class="page-item <?php echo ($i == $links['current_page']) ? 'active' : ''; ?>">
                            <a class="page-link text-gray-500" href="<?php echo site_url('Backend/data_balita/page/' . $i); ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <li class="page-item">
                        <a class="page-link text-gray-500" href="<?php echo site_url('Backend/data_balita/page/' . $links['next_page']); ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>