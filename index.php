<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cobamahasiswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //Cek Koneksi
    die("Tidak bisa terkoneksi ke database");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="max-auto">
        <!-- Form Section - Untuk Memasukkan Data -->
        <div class="card">
            <div class="card-header">
                Buat / Edit  Data
            </div>
            <div class="card-body">
            <form action="" method="POST">
            <input type="text">
            </form>
            </div>
        </div>
        <!-- Untuk Mengeluarkan Data -->
        <div class="card">
            <div class="card-header">
                Data Mahasiswa
            </div>
            <div class="card-body">
        
            </div>
        </div>
    </div>
</body>

</html>