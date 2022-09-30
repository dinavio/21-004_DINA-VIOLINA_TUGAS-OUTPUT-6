<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "dina_output4";

$koneksi = mysqli_connect("localhost","root","","dina_output4");

if(!$koneksi){
    echo "proses koneksi gagal dilakukan";
}
?>