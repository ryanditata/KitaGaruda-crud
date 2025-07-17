<?php
session_start();
include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
	header("location:login.php"); 
} 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KitaGaruda - Admin</title>
    <link rel="icon" href="img/icone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="bg-secondary bg-opacity-10">

<?php
$current_page = $_GET['page'] ?? 'dashboard';
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: var(--bs-body-bg);">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/logoNav.png" width="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'dashboard') ? 'active text-balck' : '' ?>" href="admin.php?page=dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'berita') ? 'active text-balck' : '' ?>" href="admin.php?page=berita">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'gallery') ? 'active text-balck' : '' ?>" href="admin.php?page=gallery">Gallery</a>
            </li>
          <li class="nav-item dropdown border-start border-secondary-subtle">
            <button class="btn nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </button> 
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <button class="dropdown-item d-flex align-items-center justify-content-center" type="button">
                    <i class="bi bi-person-circle fs-1"></i>
                    </button>
                    <li class="fw-bold text-uppercase text-center mb-3">
                    <?= $_SESSION['username']?>
                    </li>
                    <a class="bi bi-pencil ms-3 text-decoration-none text-black <?= ($current_page == 'profile') ? 'fw-bold' : '' ?>" href="admin.php?page=profile"> Edit Profile</a><br>
                    <a class="bi bi-gear ms-3 text-decoration-none text-black" href="#"> Pengaturan</a><br>
                    <a class="bi bi-info-circle ms-3 text-decoration-none text-black" href="#"> Help</a><br>
                    <hr>
                </li>
                <li>
                    <a class="btn btn-danger rounded-5 fw-medium d-flex align-items-center justify-content-center m-2" href="logout.php" role="button">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </li>
            </ul>
          </li> 
        </ul>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Content -->
<section id="content" class="p-5 mt-5">
    <div class="container">
        <?php
        if(isset($_GET['page'])){
        ?>
            <h4 class="text-uppercase fs-3 text-center p-3 bg-white"><?= ucfirst($_GET['page'])?></h4>
            <?php
            include($_GET['page'].".php");
        }else{
        ?>
            <h4 class="text-uppercase fs-3 text-center p-3 bg-white">Dashboard</h4>
            <?php
            include("dashboard.php");
        }
        ?>
    </div>
</section>
<!-- Akhir Content -->

<!-- Contact -->
  <section id="contact">
    <img src="img/contact1.jpg" alt="Gambar 1 Contact" class="img-fluid">
  </section>
<!-- Akhir Contact -->
 
<!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <h5 class="text-uppercase">Contact</h5>
      <div class="d-flex justify-content-center my-3">
        <a href="http://www.youtube.com/@TimnasIndonesia_Official" class="text-white mx-2">
          <i class="bi bi-youtube fs-4"></i>
        </a>
        <a href="https://x.com/TimnasIndonesia" class="text-white mx-2">
          <i class="bi bi-twitter fs-4"></i>
        </a>
        <a href="https://www.instagram.com/timnasindonesia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white mx-2">
          <i class="bi bi-instagram fs-4"></i>
        </a>
        <a href="https://www.tiktok.com/@timnasindonesia?is_from_webapp=1&sender_device=pc" class="text-white mx-2">
          <i class="bi bi-tiktok fs-4"></i>
        </a>
        <a href="https://www.facebook.com/timnasindonesia" class="text-white mx-2">
          <i class="bi bi-facebook fs-4"></i>
        </a>
      </div>
      <hr>
      <p class="small mb-0">&copy; 2024 KitaGaruda. All Rights Reserved.</p>
    </div>
  </footer>
<!-- Akhir Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

 </body>
</html> 