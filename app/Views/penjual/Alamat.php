<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width='device-width', initial-scale=1.0">
  <title>Grosirku | Beranda</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/resource/style-alamat.css">
</head>

<body>
  <header>
    <img src="/resource/logo.png" class="logo" alt="">
    <div class="search-container">
      <!-- <span>Pencarian : </span> -->
      <input type="text" class="search-input">
      <a class="search-button" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
          <path
            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
        </svg></a>
    </div>
    <div class="header-container">
      <a href="/penjual/keranjang">
        <svg xmlns="http://www.w3.org/2000/svg" height="2.7em"
          viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path
            d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
        </svg>
      </a>
      <a href="/penjual/akun">
        <svg xmlns="http://www.w3.org/2000/svg" height="2.7em"
          viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path
            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
        </svg>
      </a>
    </div>
  </header>
  <div class="header-dropdown">
    <div class="menu-dropdown" id="dropdown-content">
      <nav>
        <u class="nav-link">
          <li><a id="shaking" href="penjual">Beranda</a></li>
          <!-- <li><a id="shaking" href="StatusBarang.html">Status Barang</a></li>
          <li><a id="shaking" href="Penjualan.html">Penjualan</a></li> -->
          <li><a id="shaking" href="/penjual/status_pesanan">Status Pesanan</a></li>
        </u>
      </nav>
    </div>
    <div class="dropdown-buttons">
      <div id="header-dropdown-button" class="btn-dropdown">
        <svg href="" xmlns="http://www.w3.org/2000/svg" height="1em"
          viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path
            d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
        </svg>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="sidebar">
        <div class="AkunSaya">
          <i class="fas fa-regular fa-user"><a href="" class="first-child">Akun Saya</a></i>
          <div class="attribute-content">
            <a href="Akun.html">Profil</a>
            <a href="Alamat.html">Alamat</a>
            <a href="UbahSandi.html">Ubah Kata sandi</a>
            <a href="Keluar.html">Keluar</a>
          </div>
        </div>
      </div>
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
    </div>
</body>
<footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/resource/dropdown.js"></script>
  <script src="/resource/sidebar.js"></script>
</footer>

</html>