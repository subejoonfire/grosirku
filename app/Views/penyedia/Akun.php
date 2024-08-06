<?= $this->extend('penyedia\components\akun-header-footer') ?>
<?= $this->section('content') ?>
<div class="content">
    <div class="Profil">
        <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 448 512">
            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
        </svg>
        <div>
            <button class="choose-image">Pilih Gambar</button>
            <br>
            <span>Ukuran gambar: maks. 1 MB</span>
            <br>
            <span>Format gambar: .JPEG, .PNG</span>
        </div>
    </div>
    <form action="<?= base_url('penyedia/setAkun') ?>" method="post">
        <div>
            <span>Nama Pengguna: </span>
            <br>
            <input type="text" class="form-control" name="username" value="<?= session('pyusername') ?>">
        </div>
        <div>
            <button class="profile-save-button">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>