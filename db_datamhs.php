<?php
$koneksi = mysqli_connect ("localhost","root","","dina_output4");
$sql= "SELECT id_mhs, nama_mhs, nama_prodi, alamat_mhs
FROM tbl_mhs m, tbl_prodi p
WHERE m.id_prodi =p.id_prodi";
$hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Data Mahasiswa Teknik</h2>
    <p>Dina Violina / 210411100004 / PAW C</p>
    <p>Data mahasiswa dari my SQL:</p>   
    <form action="insert_from.php">
    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>         
    </form><br>
    <table class="table">
    <thead>
    <tr class="table-primary">
        <th>ID_mhs</th>
        <th>Nama_mhs</th>
        <th>Prodi_mhs</th>
        <th>Alamat_mhs</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
        while ($baris=mysqli_fetch_assoc($hasil)){
    ?>
    <tr class="table-danger">
        <td><?php echo $baris['id_mhs'] ?></td>
        <td><?php echo $baris['nama_mhs'] ?></td>
        <td><?php echo $baris['nama_prodi'] ?></td>
        <td><?php echo $baris['alamat_mhs'] ?></td>
        <td>
        <button type="button" class="btn btn-info">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
        </td>
    </tr>
    <?php } ?>    
    
    </tbody>
    </table>
</div>

</body>
</html>