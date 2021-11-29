<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "perpusatakaan";
$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
 die("Koneksi dengan data base gagal: ".mysql_connect_error());
}
?>