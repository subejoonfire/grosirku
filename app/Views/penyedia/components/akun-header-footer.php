<?php
if (session('logged') != 'YES') {
    return redirect('/');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Grosirku | Beranda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="/resource-penyedia/style-akun.css">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="header-left">
                <div class="logo">
                    <img src="/resource/logo.png" alt="">
                </div>
                <div class="header-content">
                    <h5 class="header-location">Penyedia >
                        <?= session('section') ?>
                    </h5>
                </div>
            </div>
            <div class="header-right">
                <a href="<?= base_url('penyedia/akun') ?>" class="material-symbols-outlined">
                    apps
                </a>
                <button type="submit" class="penyedia-name">Harlan</button>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="sidebar">
            <div class="AkunSaya">
                <i class="fas fa-regular fa-user"><a href="" class="first-child">Akun Saya</a></i>
                <div class="attribute-content">
                    <a href="<?= base_url('penyedia/akun') ?>">Profil</a>
                    <a href="<?= base_url('penyedia/ubah_sandi') ?>">Ubah Kata sandi</a>
                    <a href="<?= base_url('penyedia/keluar') ?>">Keluar</a>
                </div>
            </div>
        </div>
        <?php
        if (session()->getFlashdata('error')) {
            echo '<div class="error">' . session()->getFlashdata('error') . '</div>';
        }
        ?>
        <?= $this->renderSection('content') ?>
    </div>
</body>
<footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/resource-penyedia/password.js"></script>
    <script src="/resource-penyedia/dropdown.js"></script>
    <script src="/resource-penyedia/sidebar.js"></script>
</footer>

</html>