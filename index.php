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
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- Form Section - Untuk Memasukkan Data -->
        <div class="card">
            <div class="card-header">
                Buat / Edit Data
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                    </div>
                    <div class="mb-3">
                        <label for="fakultas" class="form-label">Fakultas</label>
                        <select class="form-control" name="fakultas" id="fakultas">
                            <option value="">- Pilih Fakultas -</option>
                            <option value="ilkom">Ilmu Komputer</option>
                            <option value="ilkes">Ilmu Kesehatan</option>
                            <option value="hukum">Hukum</option>
                            <option value="manajemen">Manajemen</option>
                            <option value="ekonomi">Ekonomi</option>
                            <option value="bisnis">Bisnis</option>
                            <option value="pertanian">Pertanian</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <!-- Untuk Mengeluarkan Data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</body>

</html>