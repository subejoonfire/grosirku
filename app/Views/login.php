<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style_login.css">
    <!-- Bootstrap CSS -->
    <link href="bootstrap 5.3/css/bootstrap.min.css" rel="stylesheet" />
    <title>Login | SI Pencatatan Barang</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 right">
                    <div class="input-box">
                        <div class="logo-container">
                            <img class="logo" src="/resource/logo.png" alt="">
                        </div>
                        <form action="/login/validasi" method="post">
                            <div class="input-select">
                                <p>Login sebagai : </p>
                                <select name="level" id="">
                                    <option value="penjual">Penjual</option>
                                    <option value="penyedia">Penyedia</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="username" id="username" required autocomplete="off" />
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" class="input" id="password" required />
                                <label for="password">Password</label>
                            </div>
                            <!-- <?php if (session()->getFlashdata('pesan')) {
                                        echo "error";
                                    } ?> -->
                            <div class="input-field">
                                <button type="submit" class="submit">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>