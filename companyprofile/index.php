<?php

include_once("inc/inc_fungsi.php");
include_once("inc/inc_koneksi.php");

?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<script>
      $(document).ready(function() {
  $('#summernote').summernote();
});
    </script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan Web</title>
    <link rel="stylesheet" href="css/style.css">




    <style>
        html {
            scroll-behavior: smooth;
        }

        .mx-auto {
            width: 800px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <!---taskbar-->
            <div class="circle"></div> <!-- Tambahkan div untuk lingkaran -->
            <div class="logo"><a href="#">Perusahaan web</a></div>
            <div class="menu">
                <ul id="menuList">
                    <li><a href="#home"><?php echo  ambil_judul('2') ?></a></li>
                    <li><a href="#services"><?php echo  ambil_judul('3') ?></a></li>
                    <li><a href="#joinus"><?php echo  ambil_judul('6') ?></a></li>
                    <li><a href="#about"><?php echo  ambil_judul('4') ?></a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="menu-icon" onclick="toggleMenu()">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            </ul>
        </div>
        </div>
    </nav>

    <script>
        function toggleMenu() {
            let menuList = document.getElementById("menuList");
            menuList.classList.toggle("show");
        }
    </script>
    <script src="https://kit.fontawesome.com/ea631c2519.js" crossorigin="anonymous"></script>


    <div class="wrapper">
        <!--UTK HOMEPAGE-->
        <section id="home">
            <img src="gambar/copd.jpg" alt="Gambar Perusahaan" class="home-image">
            <div class="kolom">
                <p class="deskripsi"><?php echo  ambil_judul('2') ?></p>
                <h2><?php echo  ambil_kutipan('2') ?></h2>
                <?php echo  ambil_isi(id_tulisan: '2') ?>
                <p><a href="#contact" class="tblbiru">KONTAK KAMI</a></p>
            </div>
        </section>

        <!--UTK SERVICES-->
        <section id="services">
            <div class="kolom">
                <p class="deskripsi"><?php echo  ambil_judul('3') ?></p>
                <h2><?php echo  ambil_kutipan('3') ?></h2>
                <?php echo  ambil_isi('3') ?>
                </p>
            </div>
            <img src="gambar/jasa.jpg" width="600">
        </section>
    </div>

    <!---UTK JOIN US-->
    <section id="joinus">
        <h1><?php echo  ambil_judul('6') ?></h1>
        <?php echo  ambil_isi('6') ?>
        <a href="http://localhost/companyprofile/form/joinus.php" class="tblbiru">Bergabung Dengan Kami</a>
    </section>

    <!---Utk about-->
    <section id="about">
        <div class="kolom">
            <p class="deskripsi"><?php echo  ambil_judul('4') ?></p>
            <h2><?php echo  ambil_kutipan('4') ?></h2>

            <?php echo  ambil_isi('4') ?>
        </div>

        <img src="gambar/tentang.jpg" alt="" srcset="" width="700px">
    </section>



    <!---UTK CONTACT-->
    <section id="contact">
        <div class="kolom">
            <p class="deskripsi">Our Contact</p>
            <h2>Get In Touch!</h2>

            <h3>Telp/fax</h3>
            <p>+62 899 0559 589</p>

            <h3>Email</h3>
            <p>perusahaanwebbussiness@gmail.com</p>

            <h3>Our Social Media</h3>
            <a href="https://www.instagram.com/mosesdebr/" target="_blank">@perusahaan_web</a>
            <br>
            <a href="https://www.facebook.com/zuck/" target="_blank">@perusahaanwebofc</a>


        </div>
        <img src="gambar/contact.jpg" alt="" srcset="" width="700px">
    </section>

    <div id="copyright">
        <div class="wrapper">
            copy 2024. <b>Perusahaan Web.</b> All Rights Reserved.
        </div>
    </div>


</body>

</html>

