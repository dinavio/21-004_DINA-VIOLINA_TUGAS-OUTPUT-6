<?php
include "connection.php";

$idmhs = $_POST['id_mhs'];
$prodi = $_POST['id_prodi'];
$nama  = $_POST['nama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES('$idmhs', '$prodi', '$nama','$alamat')";
$hasil = mysqli_query($koneksi, $sql);

if (!$hasil){
    echo "Proses penambahan data mahasiswa gagal";
}
else{
    echo "Proses eksekusi untuk menambahkan data mahasiswa berhasil.. <br> ";
    echo "<a href='db_datamhs.php'>Show data</a>";
}
?>