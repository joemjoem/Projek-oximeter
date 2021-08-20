<?php
require "function.php";
$result = mysqli_query($conn, "SELECT * FROM osimeter ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$suhu = $data["suhu"];

if ($suhu == 0) {
    $suhu = 0;
}

echo $suhu;
