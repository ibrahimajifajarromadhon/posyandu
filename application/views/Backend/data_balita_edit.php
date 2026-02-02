<h2
  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Edit Data Balita
</h2>
<!-- CTA -->
<div
  class="px-4 py-3 mb-2 bg-purple-600 rounded-lg shadow-md dark:bg-purple-600">
  <p class="text-sm font-semibold text-white dark:text-white">
    Edit Data Balita
  </p>
</div>

<div
  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

  <?php foreach ($tbl_balita as $balita) { ?>

    <form method="POST" action="<?php echo base_url() . 'index.php/Backend/data_balita_edit_aksi' ?>" enctype="multipart/form-data">

      <div class="form-row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="id_ortu">Nama Ibu</label>
            <select id="id_ortu" name="id_ortu" class="form-control">
              <?php
              foreach ($tbl_ortu as $ortu) {
              ?>
                <option value="<?php echo $ortu->id_ortu ?>" <?php echo ($ortu->id_ortu == $balita->id_ortu) ? 'selected' : '' ?>><?php echo $ortu->nm_ibu ?></option>
              <?php  } ?>
            </select>
            <span class="text-sm text-red-600"><?= form_error('id_ortu') ?></span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="nm_balita">Nama Balita</label>
            <input type="hidden" id="id_balita" name="id_balita" class="form-control" value="<?php echo $balita->id_balita ?>">
            <input type="text" id="nm_balita" name="nm_balita" class="form-control" value="<?php echo $balita->nm_balita ?>">
            <span class="text-sm text-red-600"><?= form_error('nm_balita') ?></span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?php echo $balita->tgl_lahir ?>">
            <span class="text-sm text-red-600"><?= form_error('tgl_lahir') ?></span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="custom1">Jenis Kelamin</label><br>
            <div class="form-check form-check-inline">
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="custom1" name="jenis_kelamin" value="Laki-Laki" <?php if ($balita->jenis_kelamin == 'Laki-Laki') echo "checked='checked'" ?>>
                <label class="custom-control-label" for="custom1">Laki-Laki</label>
              </div>&nbsp;&nbsp;

              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="custom2" name="jenis_kelamin" value="Perempuan" <?php if ($balita->jenis_kelamin == 'Perempuan') echo "checked='checked'" ?>>
                <label class="custom-control-label" for="custom2">Perempuan</label>
              </div>
            </div>
          </div>
          <span class="text-sm text-red-600"><?= form_error('jenis_kelamin') ?></span>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="bb_lahir">Berat Badan Lahir</label>
            <input type="number" id="bb_lahir" name="bb_lahir" step='any' class="form-control" value="<?php echo $balita->bb_lahir ?>">
            <span class="text-sm text-red-600"><?= form_error('bb_lahir') ?></span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="pb_lahir">Panjang Badan Lahir</label>
            <input type="number" id="pb_lahir" name="pb_lahir" step='any' class="form-control" value="<?php echo $balita->pb_lahir ?>">
            <span class="text-sm text-red-600"><?= form_error('pb_lahir') ?></span>
          </div>
        </div>
      </div>

      <center>
        <div class="form-group mt-4 mb-0">
          <input type="submit" name="proses" class="btn btn-primary" value="Update">
          <button type="reset" class="btn btn-dark">Reset</button>
          <a class="btn btn-warning text-white" href="<?php echo base_url() . 'Backend/data_balita' ?>">Batal</a>
        </div>
      </center>

    </form>
  <?php } ?>

</div>