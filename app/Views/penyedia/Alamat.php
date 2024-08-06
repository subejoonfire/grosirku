<?= $this->extend('penyedia\components\akun-header-footer') ?>
<?= $this->section('content') ?>
<div class="content">
  <div>
    <span>Provinsi: </span>
    <br>
    <input type="text" class="form-control" value="KALIMANTAN SELATAN" disabled>
  </div>
  <div>
    <span>Kecamantan: </span>
    <br>
    <input type="text" class="form-control" value="PELAIHARI" disabled>
  </div>
  <div>
    <span>Desa: </span>
    <br>
    <input type="text" class="form-control" value="Ambungan">
  </div>
  <div>
    <span>Kode Pos: </span>
    <br>
    <input type="text" class="form-control" value="8324288">
  </div>
  <div class="alamat-container">
    <span>Alamat Lengkap: </span>
    <br>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="Masukkan Alamat">
      <label for="floatingInput">Alamat</label>
    </div>
  </div>
  <div>
    <button class="profile-save-button">Simpan</button>
  </div>
</div>
<?= $this->endSection() ?>