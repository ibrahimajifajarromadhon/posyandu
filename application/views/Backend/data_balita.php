<h2
    class="mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Tabel Data Balita
</h2>

<div class="mb-4"> <a href="<?php echo base_url('Backend/data_balita_input') ?>" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        <i class="fa fa-plus fa-lg mr-1"></i> Tambah Data
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
                    <th class="px-4 py-3 text-center">No</th>
                    <th class="px-4 py-3">ID Balita</th>
                    <th class="px-4 py-3">NIK Balita</th>
                    <th class="px-4 py-3">Nama Balita</th>
                    <th class="px-4 py-3">Nama Ortu</th>
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
                            <td class="px-4 py-3 text-sm text-center">
                                <?php echo $no++ ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $balita->id_balita ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $balita->nik_balita ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $balita->nm_balita ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $balita->nm_ibu ? $balita->nm_ibu : $balita->nm_ayah ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo tgl_indo($balita->tgl_lahir); ?>
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
                                <div class="flex items-center space-x-1 text-sm">
                                    <a
                                        href="<?php echo base_url('Backend/data_balita_edit/' . $balita->id_balita) ?>"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit">
                                        <i class="fa fa-edit fa-lg"></i>
                                    </a>
                                    <a
                                        href="<?php echo base_url('Backend/data_balita_delete/' . $balita->id_balita) ?>"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')"
                                        aria-label="Delete">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </a>
                                    <a
										href="<?php echo base_url() . 'Backend/data_balita_print/' . $balita->id_balita . '' ?>" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
										aria-label="Print" title="Print">
										<i class="fa fa-print fa-lg"></i>
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