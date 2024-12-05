<?php
// Include koneksi database
include '../inc/inc_koneksi.php'; // Pastikan path sudah sesuai dengan struktur folder

// Inisialisasi variabel
$nama = "";
$notelp = "";
$email = "";
$sukses = "";
$error = "";

// Tambah data ketika formulir dikirim
if (isset($_POST['submit_joinus'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelp = $_POST['notelp'];

    // Query untuk menambah data ke tabel 'joinus'
    $query = "INSERT INTO joinus (nama, email, notelp) VALUES ('$nama', '$email', '$notelp')";

    // Jalankan query dan cek apakah berhasil
    if ($koneksi->query($query)) {
        $sukses = "Data berhasil ditambahkan.";
    } else {
        $error = "Gagal menambahkan data: " . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan Web - Join Us</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html { scroll-behavior: smooth; }
        .mx-auto { width: 800px; }
        .card { margin-top: 10px; }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="../index.php">Perusahaan Web</a></div>
            <div class="menu">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php">Services</a></li>
                    <li><a href="../index.php">Join Us</a></li>
                    <li><a href="../index.php">About</a></li>
                    <li><a href="../index.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form untuk memasukkan data -->
    <div class="mx-auto">
        <h2>Bergabunglah dengan kami!</h2>
        <div class="card">
            <div class="card-header">Masukkan Data</div>
            <div class="card-body">
                <?php if ($error) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $error ?></div>
                <?php } elseif ($sukses) { ?>
                    <div class="alert alert-success" role="alert"><?php echo $sukses ?></div>
                <?php } ?>

                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="notelp" name="notelp" value="<?php echo $notelp ?>" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="submit_joinus" value="Kirim" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div id="copyright">
            <div class="wrapper">copy 2024. <b>Perusahaan Web.</b> All Rights Reserved.</div>
        </div>
    </footer>
</body>

</html>
