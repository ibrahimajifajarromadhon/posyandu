<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>IMUNISASI</h1>
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
                    <a href="<?php echo base_url() . 'index.php/Frontend' ?>">Home</a><i
                        class="fa fa-angle-double-right"></i><span>Imunisasi</span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->

<div class="container grid px-6 mx-auto my-5">
    <h2
        class="my-6 text-2xl font-bold text-gray-700 dark:text-gray-200 mb-3">
        Tabel Data Imunisasi Balita
    </h2>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto mt-16 table-responsive">
            <table class="table text-center">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-gray-700 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Balita</th>
                        <th class="px-4 py-3">Nama Ibu</th>
                        <th class="px-4 py-3">Tanggal Imunisasi</th>
                        <th class="px-4 py-3">Jenis Imunisasi</th>
                        <th class="px-4 py-3">Keterangan</th>
                    </tr>
                </thead>
                <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php
                    if (!empty($tbl_imunisasi)) {
                        $no = 1;
                        foreach ($tbl_imunisasi as $imunisasi) {
                    ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <?php echo $no++ ?>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $imunisasi->nm_balita ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $imunisasi->nm_ibu ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?=
                                    tgl_indo($imunisasi->tgl_imunisasi);
                                    ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $imunisasi->nama_jenis_imunisasi ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $imunisasi->keterangan ?>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="8" class="px-4 py-3 text-center">Tidak ada data imunisasi.</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex px-4 py-3 text-xs font-semibold tracking-wide text-gray-800 uppercase border-t bg-gray-50 justify-content-between">
            <span class="d-flex items-center">
                Menampilkan <?php echo count($tbl_imunisasi); ?> dari <?php echo $total_data; ?> data.
            </span>
            <ul class="d-flex pagination pagination-sm items-center">
                <li class="page-item">
                    <a class="page-link text-gray-800" href="<?php echo site_url('Frontend/imunisasi/page/' . $links['prev_page']); ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php for ($i = 1; $i <= $links['num_pages']; $i++) : ?>
                    <li class="page-item <?php echo ($i == $links['current_page']) ? 'active' : ''; ?>">
                        <a class="page-link text-gray-800" href="<?php echo site_url('Frontend/imunisasi/page/' . $i); ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <li class="page-item">
                    <a class="page-link text-gray-800" href="<?php echo site_url('Frontend/imunisasi/page/' . $links['next_page']); ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>