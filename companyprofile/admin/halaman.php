<?php
session_start(); // Memulai sesi untuk mengecek apakah user sudah login atau belum

// Cek apakah user sudah login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php"); // Arahkan ke login.php jika belum login
    exit();
}
?>


<?php include("inc_header.php") ?>

<?php

$sukses = ""; 
$katakunci = isset($_GET['katakunci']) ? $_GET['katakunci'] : "";
$op = isset($_GET['op']) ? $_GET['op'] : "";


if ($op == 'delete_joinus') {
    $id = $_GET['id'];
    $sql2 = "DELETE FROM joinus WHERE id = '$id'";
    $q2 = mysqli_query($koneksi, $sql2);
    if ($q2) {
        $sukses = "Berhasil menghapus data calon karyawan";
    }
}


if ($sukses) {
    echo "<div class='alert alert-primary' role='alert'>$sukses</div>";
}
?>

<!-- table admin -->
<h2>Ubah halaman website</h2>
<p>
    <a href="halaman_input.php">
        <input type="button" class="btn btn-primary" value="Buat Halaman Baru"/>
    </a>
</p>

<table class="table table-stripped">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Kutipan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql1 = "SELECT * FROM halaman ORDER BY id DESC";
        $q1 = mysqli_query($koneksi, $sql1);
        $nomor = 1;
        while ($r1 = mysqli_fetch_array($q1)) {
            echo "<tr>
                    <td>{$nomor}</td>
                    <td>{$r1['judul']}</td>
                    <td>{$r1['kutipan']}</td>
                    <td>
                        <a href='halaman_input.php?id={$r1['id']}'><span class='badge bg-warning text-dark'>Edit</span></a>
                    </td>
                  </tr>";
            $nomor++;
        }
        ?>
    </tbody>
</table>

<!-- untuk memunculkan data -->
<div class="card">
    <div class="card-header text-white bg-secondary">Data Calon Karyawan</div>
    <div class="card-body">
        Cari data:
        <form method="post" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Cari berdasarkan Nama atau Notelp" autocomplete="off">
                <button class="btn btn-primary" type="submit" name="cari">Cari</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Notelp</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $keyword = isset($_POST["keyword"]) ? mysqli_real_escape_string($koneksi, $_POST["keyword"]) : "";
                $sql2 = $keyword ? "SELECT * FROM joinus WHERE nama LIKE '%$keyword%' OR notelp LIKE '%$keyword%'" : "SELECT * FROM joinus";
                $q2 = mysqli_query($koneksi, $sql2);
                $urut = 1;

                if (mysqli_num_rows($q2) > 0) {
                    while ($r2 = mysqli_fetch_array($q2)) {
                        echo "<tr>
                                <th scope='row'>{$urut}</th>
                                <td>{$r2['nama']}</td>
                                <td>{$r2['notelp']}</td>
                                <td>{$r2['email']}</td>
                                <td>
                                    <a href='halaman.php?op=delete_joinus&id={$r2['id']}' onclick='return confirm(\"Yakin mau menghapus data?\")'>
                                    <span class='badge bg-danger'>Delete</span></a>
                                </td>
                              </tr>";
                        $urut++;
                    }
                } else {
                    echo "<tr><td colspan='5'>Data tidak ditemukan atau query gagal.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
