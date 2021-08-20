<?php
require "function.php";
$result = mysqli_query($conn, "SELECT * FROM osimeter ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$SO = $data["SO"];

if ($SO == 0) {
    $SO = 0;
}

echo $SO;
