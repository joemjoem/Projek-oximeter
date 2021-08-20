<?php
require "function.php";
$result = mysqli_query($conn, "SELECT * FROM osimeter ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$Heartbeet = $data["Heartbeet"];

if ($Heartbeet == 0) {
    $Heartbeet = 0;
}

echo $Heartbeet;
