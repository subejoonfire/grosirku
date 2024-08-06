<?= $this->extend('penjual\components\akun-header-footer') ?>
<?= $this->section('content') ?>
<div class="content">
  <div class="Profil">
    <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
      <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
    </svg>
    <div>
      <button type="file" class="choose-image">Pilih Gambar</button>
      <br>
      <span>Ukuran gambar: maks. 1 MB</span>
      <br>
      <span>Format gambar: .JPEG, .PNG</span>
    </div>
  </div>
  <form action="<?= base_url('setAkun') ?>" method="post">
    <?php
    $penjualModel = new \App\Models\Penjual();
    $row = $penjualModel->where('idpenjual', session('idpenjual'))->get()->getRow();
    ?>
    <div>
      <span>Nama: </span>
      <br>
      <input name="plusername" value="<?= $row->plusername ?>" type="text" class="form-control">
    </div>

    <div>
      <span>Email: </span>
      <br>
      <input name="email" value="<?= $row->email ?>" type="text" class="form-control">
    </div>

    <div>
      <span>Nomor Telepon: </span>
      <br>
      <input name="nomor" value="<?= $row->nomor ?>" type="text" class="form-control">
    </div>

    <div>
      <span>Kode Pos: </span>
      <br>
      <input name="kodepos" value="<?= $row->kodepos ?>" type="text" class="form-control">
    </div>

    <div>
      <span>Alamat: </span>
      <br>
      <input name="alamat" value="<?= $row->alamat ?>" type="text" class="form-control">
    </div>

    <div>
      <span>Desa: </span>
      <br>
      <input name="desa" value="<?= $row->desa ?>" type="text" class="form-control">
    </div>
    <span>Jenis Kelamin: </span>
    <br>
    <div>
      <select class="form-select" name="jenis_kelamin" id="">
        <option value="">Lainnya</option>
        <option value="Laki Laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div>
      <button type="submit" class="profile-save-button">Simpan</button>
    </div>
  </form>
</div>
<?= $this->endSection() ?>