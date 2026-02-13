<h2
  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Edit Data Jenis Imunisasi
</h2>
<!-- CTA -->
<div
  class="px-4 py-3 mb-2 bg-purple-600 rounded-lg shadow-md dark:bg-purple-600">
  <p class="text-sm font-semibold text-white dark:text-white">
    Edit Data Jenis Imunisasi
  </p>
</div>

<div
  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

  <form method="POST" action="<?php echo base_url() . 'index.php/Backend/data_jenis_imunisasi_edit_aksi' ?>" enctype="multipart/form-data">
    <input type="hidden" name="id_jenis_imunisasi" class="form-control" value="<?php echo $jenis_imunisasi->id_jenis_imunisasi ?>">

    <div class="form-row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="nama_jenis_imunisasi">Nama Jenis Imunisasi</label>
          <input type="text" id="nama_jenis_imunisasi" name="nama_jenis_imunisasi" class="form-control" value="<?php echo $jenis_imunisasi->nama_jenis_imunisasi ?>">
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <textarea id="keterangan" name="keterangan" class="form-control"><?php echo $jenis_imunisasi->keterangan ?></textarea>
        </div>
      </div>
    </div>

    <center>
      <div class="form-group mt-4 mb-0">
        <input type="submit" name="proses" class="btn btn-primary" value="Update">
        <button type="reset" class="btn btn-dark">Reset</button>
        <a class="btn btn-warning text-white" href="<?php echo base_url() . 'Backend/data_jenis_imunisasi' ?>">Batal</a>
      </div>
    </center>

  </form>

</div>