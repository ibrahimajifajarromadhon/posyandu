<h2
  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Edit Data Pertumbuhan
</h2>
<!-- CTA -->
<div
  class="px-4 py-3 mb-2 bg-purple-600 rounded-lg shadow-md dark:bg-purple-600">
  <p class="text-sm font-semibold text-white dark:text-white">
    Edit Data Pertumbuhan
  </p>
</div>

<div
  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

  <form method="POST" action="<?php echo base_url() . 'index.php/Backend/data_pertumbuhan_edit_aksi' ?>" enctype="multipart/form-data">

    <input type="hidden" name="id_pertumbuhan" class="form-control" value="<?php echo $pertumbuhan->id_pertumbuhan ?>">

    <input type="hidden" id="tgl_lahir" value="<?php echo $pertumbuhan->tgl_lahir ?>">

    <div class="form-row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="balita">Nama Balita</label>
          <input type="hidden" name="balita" value="<?php echo $pertumbuhan->id_balita ?>">
          <input type="text" id="balita" name="balita" class="form-control" value="[<?= $pertumbuhan->id_balita ?>] | [<?= $pertumbuhan->nik_balita ?>] <?php echo $pertumbuhan->nm_balita ?>" disabled>
          <span class="text-sm text-red-600"><?= form_error('balita') ?></span>
        </div>
      </div>

    <div class="col-md-12">
      <div class="form-group">
        <label for="tgl_cek">Tanggal Cek Pertumbuhan *</label>
        <input type="date" id="tgl_cek" name="tgl_cek" class="form-control" value="<?php echo $pertumbuhan->tgl_cek ?>">
        <span class="text-sm text-red-600"><?= form_error('tgl_cek') ?></span>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <label for="usia_balita">Usia (Bulan) *</label>
        <input type="hidden" name="usia" class="form-control" id="usia">
        <input type="text" class="form-control" id="usia_balita" value="<?php echo $pertumbuhan->usia ?>" disabled>
        <span class="text-sm text-red-600"><?= form_error('usia') ?></span>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <label for="berat_badan">Berat Badan (Kg)</label>
        <input type="number" id="berat_badan" name="berat_badan" step='any' class="form-control" value="<?php echo $pertumbuhan->berat_badan ?>">
        <span class="text-sm text-red-600"><?= form_error('berat_badan') ?></span>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label for="tinggi_badan">Tinggi Badan (Cm)</label>
        <input type="number" id="tinggi_badan" name="tinggi_badan" step='any' class="form-control" value="<?php echo $pertumbuhan->tinggi_badan ?>">
        <span class="text-sm text-red-600"><?= form_error('tinggi_badan') ?></span>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label for="lingkar_kepala">Lingkar Kepala (Cm)</label>
        <input type="number" id="lingkar_kepala" name="lingkar_kepala" step='any' class="form-control" value="<?php echo $pertumbuhan->lingkar_kepala ?>">
        <span class="text-sm text-red-600"><?= form_error('lingkar_kepala') ?></span>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label for="lingkar_lengan">Lingkar Lengan (Cm)</label>
        <input type="number" id="lingkar_lengan" name="lingkar_lengan" step='any' class="form-control" value="<?php echo $pertumbuhan->lingkar_lengan ?>">
        <span class="text-sm text-red-600"><?= form_error('lingkar_lengan') ?></span>
      </div>
    </div>
</div>

<center>
  <div class="form-group mt-4 mb-0">
    <input type="submit" name="proses" class="btn btn-primary" value="Update">
    <button type="reset" class="btn btn-dark">Reset</button>
    <a class="btn btn-warning text-white" href="<?php echo base_url() . 'Backend/data_pertumbuhan' ?>">Batal</a>
  </div>
</center>

</form>

</div>


<script>
  document.addEventListener("DOMContentLoaded", function() {

    document.getElementById("tgl_cek").addEventListener("change", getUsia);

    function getUsia() {

      var tgl_lahir = document.getElementById("tgl_lahir").value;
      var tgl_cek = document.getElementById("tgl_cek").value;

      if (tgl_lahir === "" || tgl_cek === "") {
        document.getElementById("usia").value = "";
        document.getElementById("usia_balita").value = "";
        return;
      }

      var lahir = new Date(tgl_lahir);
      var cek   = new Date(tgl_cek);

      if (isNaN(lahir.getTime()) || isNaN(cek.getTime())) return;

      var totalBulan =
        (cek.getFullYear() - lahir.getFullYear()) * 12 +
        (cek.getMonth() - lahir.getMonth());

      if (cek.getDate() < lahir.getDate()) {
        totalBulan--;
      }

      if (totalBulan < 0) totalBulan = 0;

      var usiaText = totalBulan + " Bulan";

      document.getElementById("usia").value = usiaText;
      document.getElementById("usia_balita").value = usiaText;
    }

    getUsia();

  });
</script>