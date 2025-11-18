<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "cobamahasiswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //Cek Koneksi
    die("Tidak bisa terkoneksi ke database");
}

$nim        = "";
$nama       = "";
$alamat     = "";
$fakultas   = "";
$sukses     = "";
$error      = "";

if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $fakultas = $_POST['fakultas'];

    if ($nim && $nama && $alamat && $fakultas) {
        $sql1 = "insert into mahasiswa(nim, nama, alamat, fakultas) values ('$nim', '$nama', '$alamat', '$fakultas')";
        $q1  = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Berhasil memasukkan data baru";
        } else {
            $error = "Gagal memasukkan data";
        }
    } else {
        $error = "Silahkan masukkan data!";
    }
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
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
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
                            <option value="ilkom" <?php if ($fakultas == "ilkom") echo "selected" ?>>Ilmu Komputer</option>
                            <option value="ilkes" <?php if ($fakultas == "ilkes") echo "selected" ?>>Ilmu Kesehatan</option>
                            <option value="hukum" <?php if ($fakultas == "hukum") echo "selected" ?>>Hukum</option>
                            <option value="manajemen" <?php if ($fakultas == "manajemen") echo "selected" ?>>Manajemen</option>
                            <option value="ekonomi" <?php if ($fakultas == "ekonomi") echo "selected" ?>>Ekonomi</option>
                            <option value="bisnis" <?php if ($fakultas == "bisnis") echo "selected" ?>>Bisnis</option>
                            <option value="pertanian" <?php if ($fakultas == "pertanian") echo "selected" ?>>Pertanian</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
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