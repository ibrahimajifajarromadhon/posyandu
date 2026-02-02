<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>PERTUMBUHAN</h1>
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
                        class="fa fa-angle-double-right"></i><span>Pertumbuhan</span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->

<div class="container grid px-6 mx-auto my-5">
    <h2
        class="my-6 text-2xl font-bold text-gray-700 dark:text-gray-200 mb-3">
        Tabel Data Pertumbuhan Balita
    </h2>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto mt-16">
            <table class="table text-center">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-gray-700 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Balita</th>
                        <th class="px-4 py-3">Tanggal Lahir</th>
                        <th class="px-4 py-3">Grafik Pertumbuhan Balita</th>
                    </tr>
                </thead>
                <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php
                    if (!empty($tbl_pertumbuhan)) {
                        $no = 1;
                        foreach ($tbl_pertumbuhan as $pertumbuhan) {
                    ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <?php echo $no++ ?>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $pertumbuhan->nm_balita ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php
                                    $date = new DateTime($pertumbuhan->tgl_lahir);
                                    echo $date->format('d F Y');
                                    ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="<?php echo base_url() . 'Frontend/grafik/' . $pertumbuhan->id_balita ?>" title="Lihat Grafik Pertumbuhan Balita">
                                        <i style="font-size: 20px;" class="fas fa-chart-line"></i>
                                    </a>
                                </td>

                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="8" class="px-4 py-3 text-center">Tidak ada data pertumbuhan.</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex px-4 py-3 text-xs font-semibold tracking-wide text-gray-800 uppercase border-t bg-gray-50 justify-content-between">
            <span class="d-flex items-center">
                Menampilkan <?php echo count($tbl_pertumbuhan); ?> dari <?php echo $total_data; ?> data.
            </span>
            <ul class="d-flex pagination pagination-sm items-center">
                <li class="page-item">
                    <a class="page-link text-gray-800" href="<?php echo site_url('Frontend/pertumbuhan/page/' . $links['prev_page']); ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php for ($i = 1; $i <= $links['num_pages']; $i++) : ?>
                    <li class="page-item <?php echo ($i == $links['current_page']) ? 'active' : ''; ?>">
                        <a class="page-link text-gray-800" href="<?php echo site_url('Frontend/pertumbuhan/page/' . $i); ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <li class="page-item">
                    <a class="page-link text-gray-800" href="<?php echo site_url('Frontend/pertumbuhan/page/' . $links['next_page']); ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>