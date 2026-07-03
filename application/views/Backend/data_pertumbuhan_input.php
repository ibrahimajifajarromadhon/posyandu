<h2
  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Input Data Pertumbuhan
</h2>
<!-- CTA -->
<div
  class="px-4 py-3 mb-2 bg-purple-600 rounded-lg shadow-md dark:bg-purple-600">
  <p class="text-sm font-semibold text-white dark:text-white">
    Input Data Pertumbuhan
  </p>
</div>

<div
  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
  <form method="POST" action="<?php echo base_url() . 'Backend/data_pertumbuhan_input_aksi' ?>" enctype="multipart/form-data">

    <div class="form-row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="balita">Nama Balita *</label>
          <select id="balita" name="balita" class="form-control">
            <option disabled selected>~Pilih Balita~</option>
            <?php
            foreach ($tbl_balita as $balita) {
            ?>
              <option value="<?php echo $balita->id_balita ?>" <?php echo set_value('balita') ==  $balita->id_balita  ? 'selected' : null ?>>[<?= $balita->id_balita ?>] | [<?= $balita->nik_balita ?>] <?php echo $balita->nm_balita ?></option>
            <?php } ?>
          </select>
          <span class="text-sm text-red-600"><?= form_error('balita') ?></span>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <label for="tgl_cek">Tanggal Cek Pertumbuhan *</label>
          <input type="date" id="tgl_cek" name="tgl_cek" class="form-control">
          <span class="text-sm text-red-600"><?= form_error('tgl_cek') ?></span>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <label for="usia_balita">Usia (Bulan) *</label>
          <input type="hidden" name="usia" class="form-control" id="usia">
          <input type="text" class="form-control" id="usia_balita" disabled>
          <span class="text-sm text-red-600"><?= form_error('usia') ?></span>
        </div>
      </div>


      <div class="col-md-12">
        <div class="form-group">
          <label for="berat_badan">Berat Badan (Kg) *</label>
          <input type="number" id="berat_badan" name="berat_badan" step='any' value="<?php echo set_value('berat_badan') ?>" class="form-control" placeholder="Contoh : 0,0 Kg">
          <span class="text-sm text-red-600"><?= form_error('berat_badan') ?></span>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="tinggi_badan">Tinggi Badan (Cm) *</label>
          <input type="number" id="tinggi_badan" name="tinggi_badan" step='any' value="<?php echo set_value('tinggi_badan') ?>" class="form-control" placeholder="Contoh : 00 Cm">
          <span class="text-sm text-red-600"><?= form_error('tinggi_badan') ?></span>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="lingkar_kepala">Lingkar Kepala (Cm) *</label>
          <input type="number" id="lingkar_kepala" name="lingkar_kepala" step='any' value="<?php echo set_value('lingkar_kepala') ?>" class="form-control" placeholder="Contoh : 00 Cm">
          <span class="text-sm text-red-600"><?= form_error('lingkar_kepala') ?></span>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="lingkar_lengan">Lingkar Lengan (Cm) *</label>
          <input type="number" id="lingkar_lengan" name="lingkar_lengan" step='any' value="<?php echo set_value('lingkar_lengan') ?>" class="form-control" placeholder="Contoh : 00 Cm">
          <span class="text-sm text-red-600"><?= form_error('lingkar_lengan') ?></span>
        </div>
      </div>
    </div>

    <center>
      <div class="form-group mt-4 mb-0">
        <input type="submit" name="proses" class="btn btn-primary" value="Simpan">
        <button type="reset" class="btn btn-dark">Reset</button>
        <a class="btn btn-warning text-white" href="<?php echo base_url() . 'Backend/data_pertumbuhan' ?>">Batal</a>
      </div>
    </center>

  </form>

</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {

    document.getElementById("balita").addEventListener("change", getUsia);
    document.getElementById("tgl_cek").addEventListener("change", getUsia);

    function getUsia() {

      var id = document.getElementById("balita").value;
      var tgl_cek = document.getElementById("tgl_cek").value;

      if (id === "" || tgl_cek === "") {
        document.getElementById("usia").value = "";
        document.getElementById("usia_balita").value = "";
        return;
      }

      var tgl_lahir = "";

      <?php foreach ($tbl_balita as $balita) { ?>
        if (id == "<?= $balita->id_balita ?>") {
          tgl_lahir = "<?= $balita->tgl_lahir ?>";
        }
      <?php } ?>

      if (tgl_lahir === "") {
        return;
      }

      var lahir = new Date(tgl_lahir);
      var cek = new Date(tgl_cek);

      if (isNaN(lahir.getTime()) || isNaN(cek.getTime())) {
        return;
      }

      var totalBulan =
        (cek.getFullYear() - lahir.getFullYear()) * 12 +
        (cek.getMonth() - lahir.getMonth());

      if (cek.getDate() < lahir.getDate()) {
        totalBulan--;
      }

      if (totalBulan < 0) {
        totalBulan = 0;
      }

      var usiaText = totalBulan + " Bulan";

      document.getElementById("usia").value = usiaText;
      document.getElementById("usia_balita").value = usiaText;
    }

    getUsia();

  });
</script>