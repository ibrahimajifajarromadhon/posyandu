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
        <h2 class="text-center">Data Jenis Imunisasi</h2>
        <table class="table table-bordered">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3 text-center">No</th>
                    <th class="px-4 py-3">ID Jenis Imunisasi</th>
                    <th class="px-4 py-3">Nama Jenis Imunisasi</th>
                    <th class="px-4 py-3">Keterangan</th>
                </tr>
            </thead>
            <tbody
                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <?php
                if (!empty($tbl_jenis_imunisasi)) {
                    $no = 1;
                    foreach ($tbl_jenis_imunisasi as $jenis) {
                ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="text-center">
                                    <p class="font-semigrey"><?php echo $no++ ?></p>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $jenis->id_jenis_imunisasi ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $jenis->nama_jenis_imunisasi ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $jenis->keterangan ?>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="8" class="px-4 py-3 text-center">Tidak ada data jenis imunisasi.</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>