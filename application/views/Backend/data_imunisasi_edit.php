<h2
  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Edit Data Imunisasi
</h2>
<!-- CTA -->
<div
  class="px-4 py-3 mb-2 bg-purple-600 rounded-lg shadow-md dark:bg-purple-600">
  <p class="text-sm font-semibold text-white dark:text-white">
    Edit Data Imunisasi
  </p>
</div>

<div
  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">


  <form method="POST" action="<?php echo base_url() . 'index.php/Backend/data_imunisasi_edit_aksi' ?>" enctype="multipart/form-data">
    <input type="hidden" name="id_imunisasi" class="form-control" value="<?php echo $imunisasi->id_imunisasi ?>">

    <div class="form-row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="nm_balita">Nama Balita</label>
          <input type="hidden" name="nm_balita" value="<?php echo $imunisasi->id_balita ?>">
          <input type="text" id="nm_balita" name="nm_balita" class="form-control" value="[<?= $imunisasi->id_balita ?>] <?php echo $imunisasi->nm_balita ?>" disabled>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="nm_ibu">Nama Ibu</label>
          <input type="hidden" name="nm_ibu" value="<?php echo $imunisasi->id_ortu ?>">
          <input type="text" id="nm_ibu" name="nm_ibu" class="form-control" value="[<?= $imunisasi->id_ortu ?>] <?php echo $imunisasi->nm_ibu ?>" disabled>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="tgl_imunisasi">Tanggal Imunisasi</label>
          <input type="date" id="tgl_imunisasi" name="tgl_imunisasi" class="form-control" value="<?php echo $imunisasi->tgl_imunisasi ?>">
          <span class="text-sm text-red-600"><?= form_error('tgl_imunisasi') ?></span>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="jenis_imunisasi">Jenis Imunisasi</label>
          <select id="id_jenis_imunisasi" name="id_jenis_imunisasi" class="form-control">
            <?php
            foreach ($tbl_jenis_imunisasi as $jenis) {
            ?>
              <option value="<?php echo $jenis->id_jenis_imunisasi ?>" <?php echo ($jenis->id_jenis_imunisasi == $imunisasi->id_jenis_imunisasi) ? 'selected' : '' ?>><?php echo $jenis->nama_jenis_imunisasi ?></option>
              
            <?php  } ?>
          </select>
          <span class="text-sm text-red-600"><?= form_error('jenis_imunisasi') ?></span>
        </div>
      </div>
    </div>

    <center>
      <div class="form-group mt-4 mb-0">
        <input type="submit" name="proses" class="btn btn-primary" value="Update">
        <button type="reset" class="btn btn-dark">Reset</button>
        <a class="btn btn-warning text-white" href="<?php echo base_url() . 'Backend/data_imunisasi' ?>">Batal</a>
      </div>
    </center>

  </form>

</div>