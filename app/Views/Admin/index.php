<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width='device-width', initial-scale=1.0">
  <title>Grosirku | Beranda</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/resource-admin/style.css">
</head>

<body>
  <header>
    <img src="/resource-admin/logo.png" class="logo" alt="">
  </header>
  <div class="header-dropdown">
    <div class="menu-dropdown" id="dropdown-content">
      <nav>
        <u class="nav-link">
          <li><a id="shaking" href="<?= base_url('admin/dashboard') ?>">Penjual</a></li>
          <li><a id="shaking" href="<?= base_url('admin/penyedia') ?>">Penyedia</a></li>
          <li><a id="shaking" href="<?= base_url('admin/admin') ?>">Admin</a></li>
        </u>
      </nav>
    </div>
    <div class="dropdown-buttons">
      <div id="header-dropdown-button" class="btn-dropdown">
        <svg href="" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
        </svg>
      </div>
    </div>
  </div>
  <div>
    <div class="body-container">
      <div class="containers">
        <div class="leftside-container">
          <div class="add-data">
            <h2>Tambah Data Penjual</h2>
            <form action="/tambahPenjual" method="post">
              <div class="input-group mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input type="text" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input type="text" name="alamat" class="form-control" placeholder="Lokasi" aria-label="Lokasi" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input type="text" name="desa" class="form-control" placeholder="Desa" aria-label="Desa" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <select class="form-control" name="jeniskelamin" id="">
                  <option value="Pria">Pria</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="kodepos" class="form-control" placeholder="Kodepos" aria-label="Kodepos" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input type="text" name="nomor" class="form-control" placeholder="Nomor" aria-label="Nomor" aria-describedby="basic-addon1">
              </div>
              <button type="submit" class="btn btn-success">Tambah</button>
            </form>
          </div>
        </div>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th scope="col" class="col-1">No</th>
                <th scope="col" class="col-3">Nama</th>
                <th scope="col" class="col-4">Alamat</th>
                <th scope="col" class="col-4">Email</th>
                <th scope="col" class="col-4">Desa</th>
                <th scope="col" class="col-4">Kodepos</th>
                <th scope="col" class="col-4">Nomor</th>
                <th scope="col" class="col-2">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $penjualModel = new \App\Models\Penjual();
              $data = $penjualModel->get()->getResult();
              foreach ($data as $row) :
              ?>
                <tr>
                  <td scope="row"><?= $row->idpenjual ?></td>
                  <td><?= $row->plusername ?></td>
                  <td><?= $row->alamat ?></td>
                  <td><?= $row->email ?></td>
                  <td><?= $row->desa ?></td>
                  <td><?= $row->kodepos ?></td>
                  <td><?= $row->nomor ?></td>
                  <td class="aksi">
                    <a href="/editPagePenjual/<?= $row->idpenjual ?>" type="button" class="btn btn-success">Edit</a>
                    <a href="/hapusPenjual/<?= $row->idpenjual ?>" type="button" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/resource-admin/dropdown.js"></script>
    <script src="/resource-admin/sidebar.js"></script>
    <script>
      const myModal = document.getElementById('myModal')
      const myInput = document.getElementById('myInput')
      myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
      })
    </script>
  </footer>
</body>

</html>