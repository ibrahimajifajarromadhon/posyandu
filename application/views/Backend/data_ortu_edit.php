<h2
  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Edit Data Orang Tua
</h2>
<!-- CTA -->
<div
  class="px-4 py-3 mb-2 bg-purple-600 rounded-lg shadow-md dark:bg-purple-600">
  <p class="text-sm font-semibold text-white dark:text-white">
    Edit Data Orang Tua
  </p>
</div>

<div
  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
  <?php foreach ($tbl_ortu as $ortu) { ?>

    <form method="POST" action="<?php echo base_url() . 'Backend/data_ortu_edit_aksi' ?>" enctype="multipart/form-data">

      <div class="form-row">
        <input type="hidden" name="id_ortu" class="form-control" value="<?php echo $ortu->id_ortu ?>">
        <div class="col-md-12">
          <div class="form-group">
            <label for="nm_ayah">Nama Ayah</label>
            <input type="text" id="nm_ayah" name="nm_ayah" class="form-control" value="<?php echo $ortu->nm_ayah ?>" autocomplete="on">
            <span class="text-sm text-red-600"><?= form_error('nm_ayah') ?></span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="nm_ibu">Nama Ibu</label>
            <input type="text" id="nm_ibu" name="nm_ibu" class="form-control" value="<?php echo $ortu->nm_ibu ?>" autocomplete="on">
            <span class="text-sm text-red-600"><?= form_error('nm_ibu') ?></span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" value="<?php echo $ortu->username ?>" autocomplete="on">
            <span class="text-sm text-red-600"><?= form_error('username') ?></span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" id="password" name="password" class="form-control" placeholder="Masukkan Password (Kosongkan jika tidak ingin mengubah)">
            <span class="text-sm text-red-600"><?= form_error('password') ?></span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" value="<?php echo $ortu->email ?>" autocomplete="on">
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="no_hp">No.Handphone</label>
            <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?php echo $ortu->no_hp ?>">
            <span class="text-sm text-red-600"><?= form_error('no_hp') ?></span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" class="form-control"><?php echo $ortu->alamat ?></textarea>
            <span class="text-sm text-red-600"><?= form_error('alamat') ?></span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
            <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control" value="<?php echo $ortu->pekerjaan_ayah ?>">
            <span class="text-sm text-red-600"><?= form_error('pekerjaan_ayah') ?></span>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
            <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control" value="<?php echo $ortu->pekerjaan_ibu ?>">
            <span class="text-sm text-red-600"><?= form_error('pekerjaan_ibu') ?></span>
          </div>
        </div>
      </div>

      <center>
        <div class="form-group mt-4 mb-0">
          <input type="submit" name="proses" class="btn btn-primary" value="Update">
          <button type="reset" class="btn btn-dark">Reset</button>
          <a class="btn btn-warning text-white" href="<?php echo base_url() . 'Backend/data_ortu' ?>">Batal</a>
        </div>
      </center>

    </form>
  <?php } ?>

</div>