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
        <h2 class="text-center">Data Orang Tua</h2>
        <table class="table table-bordered">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3 text-center">No</th>
                    <th class="px-4 py-3">ID Ortu</th>
                    <th class="px-4 py-3">Nama Ayah</th>
                    <th class="px-4 py-3">Nama Ibu</th>
                    <th class="px-4 py-3">No. Handphone</th>
                    <th class="px-4 py-3">Username</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">Pekerjaan Ayah</th>
                    <th class="px-4 py-3">Pekerjaan Ibu</th>
                </tr>
            </thead>
            <tbody
                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <?php
                if (!empty($tbl_ortu)) {
                    $no = 1;
                    foreach ($tbl_ortu as $ortu) {
                ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="text-center">
                                    <p class="font-semigrey"><?php echo $no++ ?></p>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo !empty($ortu->id_ortu) ? $ortu->id_ortu : "-" ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo !empty($ortu->nm_ayah) ? $ortu->nm_ayah : "-" ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo !empty($ortu->nm_ibu) ? $ortu->nm_ibu : "-" ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo !empty($ortu->no_hp) ? $ortu->no_hp : "-" ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo !empty($ortu->username) ? $ortu->username : "-" ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo !empty($ortu->email) ? $ortu->email : "-" ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo !empty($ortu->alamat) ? $ortu->alamat : "-" ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo !empty($ortu->pekerjaan_ayah) ? $ortu->pekerjaan_ayah : "-" ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo !empty($ortu->pekerjaan_ibu) ? $ortu->pekerjaan_ibu : "-" ?>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="10" class="px-4 py-3 text-center">Tidak ada data orang tua.</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>