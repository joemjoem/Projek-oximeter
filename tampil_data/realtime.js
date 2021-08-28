var suhu = document.getElementById("suhu1");
var Heartbeet = document.getElementById("Heartbeet1");
var SO = document.getElementById("SO1");

$(document).ready(function () {
    setInterval(function () {
        $(suhu).load("ceksuhu.php");
    }, 1000);

    setInterval(function () {
        $(Heartbeet).load("cekheartbeet.php");
    }, 1000);

    setInterval(function () {
        $(SO).load("cekSO.php");
    }, 1000);
});
