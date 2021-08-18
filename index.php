<?php
require "tampil_data/function.php";

if (isset($_POST["masuk"])) {
    $nama = $_POST["nama"];
    $nik  = $_POST["nik"];

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE nama = '$nama'");
    if (mysqli_num_rows($cek) === 1) {
        $row = mysqli_fetch_assoc($cek);

        if ($nik == $row["nik"]) {
            header("location: tampil_data/dashboard.php");
            exit;
        }
    }
    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Mantri Digital</title>
</head>

<body>
    <div class="container">
        <nav>
            <a href="index.php"><img src="img/logo.png" alt=""></a>
            <div class="navbar">
                <ul>
                    <li><a href="">Beranda</a></li>
                    <li><a href="#deskripsi">Tentang</a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href="#bantuan">Bantuan</a></li>
                </ul>
            </div>
        </nav>

        <!-- banner -->
        <div class="background">
            <div class="baner">
                <div class="login">
                    <h2>Masuk</h2>
                    <hr>

                    <form action="" method="POST">
                        <div class="nama">
                            <label for="nama">Nama</label><br>
                            <input type="text" name="nama" id="nama"><br>
                        </div>

                        <div class="NIK">
                            <label for="nik">NIK</label><br>
                            <input type="text" name="nik" id="nik"><br>
                        </div>
                        <button type="submit" name="masuk">Masuk</button>

                        <div class="button">
                            <button><a href="daftar.php">Buat akun</a></button>
                            <button> <a href="#">Masuk sebagai nakes</a></button>
                        </div>
                        <?php if (isset($error)) : ?>
                            <p style="color: red; font-style: italic;">nama/nik salah</p>
                        <?php endif; ?>

                    </form>
                </div>
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <div class="deskripsi" id="deskripsi">
                <h2>Tentang</h2>
                <div class="text-deskripsi">
                    <p>Mantri Digital merupakan sistem monitoring pasien isolasi mandiri berbasis Internet of Things (IoT). Sistem ini menggunakan perangkat Smart Band Mantri Digital yang mampu mendeteksi kondisi tubuh pasien isolasi mandiri melalui sensor yang tertanam di dalamnya. Parameter yang digunakan dalam pemantauan pasien isolasi mandiri yaitu denyut jantung, saturasi oksigen, dan suhu tubuh. hasil pengukurannya dapat diakses oleh pasien maupun tenaga kesehatan melalui situs Loremipsum.com. Pasien juga diberikan kemudahan untuk mengakses informasi seputar kesehatan, fasilitas kesehatan, dan daftar nomor darurat yang dapat dihubungi setiap waktu.
                    </p>
                </div>
            </div>

            <div class="layanan" id="layanan">
                <h2>Layanan</h2>
                <div class="daftar">
                    <div class="kotak1">
                        <img src="icon/monitoring.png" alt="">
                        <h3>Monitoring Kesehatan</h3>
                    </div>
                    <div class="kotak2">
                        <img src="icon/fasilitas.png" alt="">
                        <h3>Fasilitas Kesehatan</h3>
                    </div>
                    <div class="kotak3">
                        <img src="icon/informasi.png" alt="">
                        <h3>Informasi Kesehatan</h3>
                    </div>
                </div>

            </div>

            <div class="bantuan" id="bantuan">
                <h2>Layanan Informasi</h2>
                <div class="footer-bawah">
                    <hr>
                    <img src="img/logo.png" alt="">
                </div>

            </div>
        </div>

    </div>
</body>

</html>