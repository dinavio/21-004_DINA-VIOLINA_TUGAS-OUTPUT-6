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
    <h1>Form Tambah Data Mahasiswa</h1>
    <form method="post" action="action.php">
    <div class="mb-3 mt-3">
        <label for="id_mhs" class="form-label">ID Mahasiswa:</label>
        <input type="text" class="form-control" id='id_mhs' placeholder="id_mhs" name="id_mhs">
    </div> 
    <div class="mb-3">  
        <label for="id_prodi" class="form-label">ID Prodi:</label>
        <input type="text" class="form-control" id='id_prodi' placeholder="id_prodi" name="id_prodi">
    </div> 
    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa:</label>
        <input type="text" class="form-control" id='nama_mhs' placeholder="nama_mhs" name="nama_mhs">
    </div>
    <div class="mb-3">
        <label for="alamat_mhs" class="form-label">Alamat Mahasiswa:</label>
        <input type="text" class="form-control" id='alamat_mhs' placeholder="alamat_mhs" name="alamat_mhs">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>