<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Data Pertumbuhan Balita</h2>
        <table class="table table-bordered">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Tanggal Cek</th>
                    <th class="px-4 py-3">Usia (Bulan)</th>
                    <th class="px-4 py-3">BB (Kg)</th>
                    <th class="px-4 py-3">TB (Cm)</th>
                    <th class="px-4 py-3">LK (Cm)</th>
                    <th class="px-4 py-3">LL (Cm)</th>
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
                                    <!-- Avatar with inset shadow -->
                                    <div>
                                        <p class="font-semigrey"><?php echo $no++ ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $pertumbuhan->nm_balita ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $pertumbuhan->tgl_cek ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $pertumbuhan->usia ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $pertumbuhan->berat_badan ?> kg
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $pertumbuhan->tinggi_badan ?> cm
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $pertumbuhan->lingkar_kepala ?> cm
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $pertumbuhan->lingkar_lengan ?> cm
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
</body>

</html>