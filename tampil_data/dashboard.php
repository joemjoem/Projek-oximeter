<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../css/tampilan_data.css">
    <title>Mantri digital-Muhammad arif hidayat</title>
</head>

<body>
    <div class="container">
        <!-- sidebar -->
        <div class="sidebar-kiri">
            <div class="logo">
                <img src="../img/logo.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="dashboard.php">
                            <div class="icon-menu">
                                <img src="../icon/white-home.png" alt="">
                            </div>
                            Dashboard
                        </a>

                    </li>

                    <li>
                        <a href="panduan.php">
                            <div class="icon-menu">
                                <img src="../icon/panduan.png" alt="">
                            </div>
                            Panduan
                        </a>

                    </li>

                    <li>
                        <a href="kontak.php">
                            <div class="icon-menu">
                                <img src="../icon/nomor-darurat.png" alt="">
                            </div>
                            Nomor darurat
                        </a>

                    </li>

                    <li>
                        <a href="informasi.php">
                            <div class="icon-menu">
                                <img src="../icon/informasi.png" alt="">
                            </div>
                            Informasi
                        </a>

                    </li>
                </ul>
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <div class="profil">
                <h3>Muhammad arif hidayat</h3>
                <img src="../img/profil.jpg" alt="">
            </div>

            <div class="judul">
                <img src="../icon/black-home.png" alt="">
                <h2>Dashboard</h2>
            </div>

            <div class="data">

                <div class="kotak1">
                    <h3>Denyut Jantung</h3>
                    <div class="jantung">
                        <img src="../icon/detak-jantung.png" alt="">
                        <p id="Heartbeet1"></p>
                    </div>
                    <p>Denyut per menit</p>
                </div>

                <div class="kotak2">
                    <h3>Saturasi Oksigen</h3>
                    <div class="paru-paru">
                        <img src="../icon/saturasi-oksigen.png" alt="">
                        <p id="SO1"></p>
                    </div>
                    <p>Persen %</p>
                </div>

                <div class="kotak3">
                    <h3>Suhu Tubuh</h3>
                    <div class="temperature">
                        <img src="../icon/temperatur.png" alt="">
                        <p id="suhu1"></p>
                    </div>

                    <p>Celsius</p>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/realtime.js"></script>
</body>

</html>