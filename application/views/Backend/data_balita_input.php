<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Input Data Balita
    </h2>
    <!-- CTA -->
    <div
      class="px-4 py-3 mb-2 bg-purple-600 rounded-lg shadow-md dark:bg-purple-600">
      <p class="text-sm font-semibold text-white dark:text-white">
        Input Data Balita
      </p>
    </div>

    <div
      class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <form method="POST" action="<?php echo base_url() . 'Backend/data_balita_input_aksi' ?>" enctype="multipart/form-data">

        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="id_ortu">Nama Ibu *</label>
              <select name="id_ortu" id="id_ortu" class="form-control">
                <option disabled selected>~Pilih Ibu</option>
                <?php
                foreach ($tbl_ortu as $ortu) {
                ?>
                  <option value="<?php echo $ortu->id_ortu ?>" <?php echo set_value('id_ortu') ==  $ortu->id_ortu  ? 'selected' : null ?>><?php echo $ortu->nm_ibu ?></option>
                <?php } ?>
              </select>
              <span class="text-sm text-red-600"><?= form_error('id_ortu') ?></span>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="nm_balita">Nama Balita *</label>
              <input type="text" id="nm_balita" name="nm_balita" value="<?php echo set_value('nm_balita') ?>" class="form-control" placeholder="Masukkan Nama Balita">
              <span class="text-sm text-red-600"><?= form_error('nm_balita') ?></span>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="tgl_lahir">Tanggal Lahir *</label>
              <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo set_value('tgl_lahir') ?>" class="form-control" placeholder="Masukkan Tanggal Lahir">
              <span class="text-sm text-red-600"><?= form_error('tgl_lahir') ?></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="custom1">Jenis Kelamin *</label><br>
              <div class="form-check form-check-inline">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="custom1" name="jenis_kelamin" value="Laki-Laki">
                  <label class="custom-control-label" for="custom1">Laki-Laki</label>
                </div>&nbsp;&nbsp;
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="custom2" name="jenis_kelamin" value="Perempuan">
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
              <label for="bb_lahir">Berat Badan Lahir *</label>
              <input type="number" id="bb_lahir" name="bb_lahir" value="<?php echo set_value('bb_lahir') ?>" step='any' class="form-control" placeholder="0,0 kg">
              <span class="text-sm text-red-600"><?= form_error('bb_lahir') ?></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="pb_lahir">Panjang Badan Lahir *</label>
              <input type="number" id="pb_lahir" name="pb_lahir" value="<?php echo set_value('pb_lahir') ?>" step='any' class="form-control" placeholder="00 cm">
              <span class="text-sm text-red-600"><?= form_error('pb_lahir') ?></span>
            </div>
          </div>
        </div>

        <center>
          <div class="form-group mt-4 mb-0">
            <input type="submit" name="proses" class="btn btn-primary" value="Simpan">
            <button type="reset" class="btn btn-dark">Reset</button>
						<a class="btn btn-warning text-white" href="<?php echo base_url() . 'Backend/data_balita' ?>">Batal</a>
          </div>
        </center>

      </form>

    </div>
  </div>
</main>