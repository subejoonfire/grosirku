<?= $this->extend('penyedia\components\akun-header-footer') ?>
<?= $this->section('content') ?>
<div class="content">
  <form action="<?= base_url('penyedia/ubahPassword') ?>" method="post">
    <span>Kata sandi lama: </span>
    <div class="input-group mb-3">
      <input id="password3" type="password" name="passwordthen" class="form-control" placeholder="Password"
        aria-describedby="button-addon3">
      <button class="btn btn-outline-secondary" type="button" id="button-addon3">
        <i id="eyeIcon3" class="fas fa-eye"></i>
      </button>
    </div>
    <span>Kata sandi baru: </span>
    <div class="input-group mb-3">
      <input id="password1" type="password" name="passwordnew" class="form-control" placeholder="Masukkan Password"
        aria-describedby="button-addon1">
      <button class="btn btn-outline-secondary" type="button" id="button-addon1">
        <i id="eyeIcon1" class="fas fa-eye"></i>
      </button>
    </div>
    <span>Konfirmasi Kata sandi baru: </span>
    <div class="input-group mb-3">
      <input id="password2" type="password" class="form-control" placeholder="Masukkan Password"
        aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2">
        <i id="eyeIcon2" class="fas fa-eye"></i>
      </button>
    </div>
    <div>
      <button type="submit" class="profile-save-button">Simpan</button>
    </div>
  </form>
</div>
<?= $this->endSection() ?>