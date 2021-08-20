<?php
$conn = mysqli_connect("localhost", "root", "", "osimeter");
$suhu = $_GET['suhu'];
$heartbeet = $_GET['Heartbeet'];
$SO = $_GET['SO'];
mysqli_query($conn, "ALTER TABLE osimeter AUT_INCREMENT=1");
$simpan = mysqli_query($conn, "INSERT INTO osimeter(suhu, Heartbeet, SO) VALUES('$suhu', '$Heartbeet', '$SO')");
if ($simpan) {
    echo ("berhasil");
} else {
    echo ("gagal");
}
