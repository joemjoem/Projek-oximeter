<?php
$conn = mysqli_connect("localhost", "root", "", "osimeter");


// fungsi untuk menerima data
function daftar($data)
{
    global $conn;
    $nama = strtolower(stripslashes($data["nama"]));
    $nik = stripslashes($data["nik"]);
    $alamat = strtolower(stripslashes($data["alamat"]));
    $kelurahan = strtolower(stripslashes($data["kelurahan"]));
    $kota = strtolower(stripslashes($data["kota"]));

    // cek apakah ada data nik yang sama
    $cek = mysqli_query($conn, "SELECT nik from users WHERE nik = '$nik'");

    if (mysqli_fetch_assoc($cek)) {
        echo "
            <script>nik sudah terdafta</script>
        ";
        return false;
    }

    // memasukkan data ke databse
    mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$nik', '$alamat', '$kelurahan', '$kota')");
    return mysqli_affected_rows($conn);
}
