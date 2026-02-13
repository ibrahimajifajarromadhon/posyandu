<h2 class="mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Print Data All
</h2>

<div class="w-full bg-white dark:bg-gray-800 rounded-lg shadow p-4">
    <form action="<?= base_url('Backend/data_print'); ?>" method="get">
        <div class="d-flex gap-2 justify-content-between align-items-end">

            <!-- KOLOM 1 : PILIH DATA -->
            <div class="col-md-5 p-0">
                <label class="block mb-1 text-sm font-medium text-gray-600">
                    Pilih Tabel
                </label>
                <select name="jenis_data" class="form-control" required>
                    <option value="" disabled selected>~Pilih Tabel~</option>
                    <option value="tbl_ortu">Data Ortu</option>
                    <option value="tbl_balita">Data Balita</option>
                    <option value="tbl_imunisasi">Data Imunisasi</option>
                    <option value="tbl_jenis_imunisasi">Data Jenis Imunisasi</option>
                    <option value="tbl_pertumbuhan">Data Pertumbuhan</option>
                </select>
            </div>

            <div class="col-md-5 p-0">
                <label class="block mb-1 text-sm font-medium text-gray-600">
                    Rentang Tanggal (Opsional)
                </label>
                <div class="d-flex space-x-4">
                    <input type="date" name="tgl_awal" class="form-control w-full">
                    <input type="date" name="tgl_akhir" class="form-control w-full">
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="w-full md:w-auto px-6 py-2 text-sm font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-700">
                    <i class="fa fa-print mr-1"></i> Print All
                </button>
            </div>

        </div>

    </form>
    <div class="alert alert-warning my-3" role="alert">
        <i class="fa fa-exclamation-triangle mr-1"></i> <strong>Perhatian!</strong> Pilih tabel dan rentang tanggal untuk mencetak data dari tabel tersebut!
    </div>
</div>
</div>