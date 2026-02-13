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
        <h2 class="text-center">Data Balita</h2>
        <table class="table table-bordered">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3 text-center">No</th>
                    <th class="px-4 py-3">ID Balita</th>
                    <th class="px-4 py-3">Nama Balita</th>
                    <th class="px-4 py-3">Nama Ortu</th>
                    <th class="px-4 py-3">Tanggal Lahir</th>
                    <th class="px-4 py-3">Jenis Kelamin</th>
                    <th class="px-4 py-3">BB Lahir</th>
                    <th class="px-4 py-3">PB Lahir</th>
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
</body>

</html>