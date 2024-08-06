<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Grosirku | Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="resource/edit.css">
</head>

<body>
    <header>
        <img src="resource/logo.png" class="logo" alt="">
    </header>
    <div class="container">
        <form action="/editActionPenjual" method="post">
            <h2>Edit Data</h2>
            <div class="leftside-container">
                <div class="input-group mb-3">
                    <input name="username" value="<?= $username ?>" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input name="password" value="<?= $password ?>" type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input name="alamat" value="<?= $alamat ?>" type="text" class="form-control" placeholder="Alamat" aria-label="Alamat" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input name="email" value="<?= $email ?>" type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input name="desa" value="<?= $desa ?>" type="text" class="form-control" placeholder="Desa" aria-label="Desa" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input name="kodepos" value="<?= $kodepos ?>" type="text" class="form-control" placeholder="Kodepos" aria-label="Kodepos" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input name="nomor" value="<?= $nomor ?>" type="text" class="form-control" placeholder="Nomor" aria-label="Nomor" aria-describedby="basic-addon1">
                </div>
                <input type="text" name="idpenjual" style="display: none;" value="<?= $idpenjual ?>">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
</body>

</html>