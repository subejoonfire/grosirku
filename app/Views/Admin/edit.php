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
        <h2>Edit Data</h2>
        <form action="/editAction" method="post">
            <div class="leftside-container">
                <div class="input-group mb-3">
                    <input name="username" value="<?= $username ?>" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input name="password" value="<?= $password ?>" type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <input type="text" value="<?= $role ?>" name="role" style="display:none">
                <input type="text" value="<?= $id ?>" name="id" style="display:none">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
</body>

</html>