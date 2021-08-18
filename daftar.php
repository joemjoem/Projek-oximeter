<?php
require "tampil_data/function.php";

if (isset($_POST["daftar"])) {
    if (daftar($_POST) > 0) {
        echo "
            <script> alert('data berhasil terdaftar') </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="css/daftar.css">

    <title>Mantri Digital</title>
</head>

<body>
    <div class="container">
        <nav>
            <a href="index.php"><img src="img/logo.png" alt=""></a>
            <div class="navbar">
                <ul>
                    <li><a href="">Beranda</a></li>
                    <li><a href="">Tentang</a></li>
                    <li><a href="">Layanan</a></li>
                    <li><a href="">Bantuan</a></li>
                </ul>
            </div>
        </nav>

        <!-- banner -->
        <div class="background">
            <div class="baner">
                <div class="login">
                    <div class="pilihan">
                        <ul>
                            <li><a href="index.php">Masuk</a></li>
                            <li><a href="daftar.php">Daftar</a></li>
                        </ul>
                    </div>
                    <hr>
                    <!-- kolom daftar -->
                    <form action="" method="POST">
                        <div class="daftar">
                            <div class="pil-kiri">
                                <div class="nama">
                                    <label for="nama">Nama</label><br>
                                    <input type="text" name="nama" id="nama"><br>
                                </div>

                                <div class="NIK">
                                    <label for="nik">NIK</label><br>
                                    <input type="text" name="nik" id="nik"><br>
                                </div>

                                <div class="alamat">
                                    <label for="alamat">Alamat</label><br>
                                    <input type="text" name="alamat" id="alamat"><br>
                                </div>
                            </div>

                            <div class="pil-kanan">

                                <div class="kelurahan">
                                    <label for="kelurahan">kelurahan/desa</label><br>
                                    <input type="text" name="kelurahan" id="kelurahan"><br>
                                </div>

                                <div class="kota">
                                    <label for="kota">Kota</label><br>
                                    <input type="text" name="kota" id="kota"><br>
                                </div>
                            </div>
                        </div>

                        <div class="button">
                            <button type="submit" name="daftar">Daftar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>