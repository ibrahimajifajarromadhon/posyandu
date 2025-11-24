<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Input Data Imunisasi
    </h2>
    <!-- CTA -->
    <div
      class="px-4 py-3 mb-2 bg-purple-600 rounded-lg shadow-md dark:bg-purple-600">
      <p class="text-sm font-semibold text-white dark:text-white">
        Input Data Imunisasi
      </p>
    </div>

    <div
      class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <form method="POST" action="<?php echo base_url() . 'Backend/data_imunisasi_input_aksi' ?>" enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="balita-select">Nama Balita *</label>
              <select name="balita" class="form-control" id="balita-select" onchange="getNmIbu(this.value)">
                <option disabled selected>~Pilih Balita</option>
                <?php
                foreach ($tbl_balita as $balita) {
                ?>
                  <option value="<?php echo $balita->id_balita ?>" <?php echo set_value('balita') ==  $balita->id_balita  ? 'selected' : null ?>><?php echo $balita->nm_balita ?></option>
                <?php } ?>
              </select>
              <span class="text-sm text-red-600"><?= form_error('balita') ?></span>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="nm-ibu-text">Nama Ibu *</label>
              <input type="hidden" name="nm_ibu" id="nm-ibu-input">
              <input type="text" class="form-control" id="nm-ibu-text" disabled>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="tgl_imunisasi">Tanggal Imunisasi *</label>
              <input type="date" id="tgl_imunisasi" name="tgl_imunisasi" value="<?php echo set_value('tgl_imunisasi') ?>" class="form-control" placeholder="Masukkan Tanggal Imunisasi">
              <span class="text-sm text-red-600"><?= form_error('tgl_imunisasi') ?></span>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="jenis_imunisasi">Jenis Imunisasi *</label>
              <input type="text" id="jenis_imunisasi" name="jenis_imunisasi" value="<?php echo set_value('jenis_imunisasi') ?>" class="form-control" placeholder="Masukkan Jenis Imunisasi">
              <span class="text-sm text-red-600"><?= form_error('jenis_imunisasi') ?></span>
            </div>
          </div>
        </div>

        <center>
          <div class="form-group mt-4 mb-0">
            <input type="submit" name="proses" class="btn btn-primary" value="Simpan">
            <button type="reset" class="btn btn-dark">Reset</button>
            <a class="btn btn-warning text-white" href="<?php echo base_url() . 'Backend/data_imunisasi' ?>">Batal</a>
          </div>
        </center>

      </form>

    </div>
  </div>
</main>

<script>
  function getNmIbu(idBalita) {
    var nmIbu = '';
    <?php
    foreach ($tbl_balita as $balita) {
    ?>
      if (idBalita == '<?php echo $balita->id_balita ?>') {
        nmIbu = '<?php echo $balita->nm_ibu ?>';
        document.getElementById('nm-ibu-input').value = '<?php echo $balita->id_ortu ?>';
      }
    <?php } ?>
    document.getElementById('nm-ibu-text').value = nmIbu;
  }
</script>