<?php
session_start();
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KitaGaruda</title>
    <link rel="icon" href="img/icone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  </head>
<body id="home" class="bg-secondary bg-opacity-10">
    
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
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#store">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#schedule">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>

        <li class="nav-item dropdown border-start border-secondary-subtle">
          <button class="btn nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-circle-half theme-icon-active" data-theme-icone-active="bi-circle-half"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="light">
              <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icone="bi-sun-fill"></i>
              Light
              </button>
            </li>
            <li>
              <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="dark">
              <i class="bi-moon-stars-fill me-2 opacity-50" data-theme-icone="bi-moon-stars-fill"></i>
              Dark
              </button>
            </li>
             <li>
              <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="auto">
              <i class="bi bi-circle-half me-2 opacity-50" data-theme-icone="bi-circle-half"></i>
              Auto
              </button>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Jumbotron -->
<section class="jumbotron text-center" style="margin-top: 76px;">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="https://garuda-id.pssi.org/sign-up">
      <img src="https://www.pssi.org/files/uploads/banner/image/2024/Oct/23/6718c11a6ef5c/1366x402-px-1000x_.jpg" class="d-block w-100" alt="Gambar 1 Jumbotron">
      </a>
    </div>
    <div class="carousel-item">
      <img src="img/jumbotron2.jpeg" class="d-block w-100" alt="Gambar 2 Jumbotron">
    </div>
    <div class="carousel-item">
      <img src="img/jumbotron3.jpg" class="d-block w-100" alt="Gambar 3 Jumbotron">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <p class="lead mt-4 mb-5">FIFA | PSSI | TIMNAS INDONESIA</p>
<div class="container mt-5">
    <div class="row row-cols-5 justify-content-center mb-5">
        <div class="col-md-3 text-start">
            <h5>Pengembangan</h5>
            <a class="nav-link fw-light" href="https://www.pssi.org/development/philosophy">Filosofi Sepak Bola Indonesia</a>
            <a class="nav-link fw-light" href="https://www.pssi.org/contact-us">Hubungi Kami</a>
        </div>
        <div class="col-md-2 text-start">
            <h5>Kompetisi</h5>
            <a class="nav-link fw-light" href="https://ligaindonesiabaru.com/home/index/BRI_LIGA_1_2022-2023">BRI Liga 1</a>
            <a class="nav-link fw-light" href="https://ligaindonesiabaru.com/home/index/LIGA_2_2022-2023">Pegadaian Liga 2</a>
        </div>
        <div class="col-md-2 text-start">
            <h5>Tim Nasional</h5>
            <a class="nav-link fw-light" href="https://www.pssi.org/national-team/mens-seniors">Tim Senior</a>
            <a class="nav-link fw-light" href="https://www.pssi.org/national-team/mens-u22">Putra U-22</a>
            <a class="nav-link fw-light" href="https://www.pssi.org/national-team/mens-u19">Putra U-19</a>
            <a class="nav-link fw-light" href="https://www.pssi.org/national-team/mens-u16">Putra U-16</a>
            <a class="nav-link fw-light" href="https://www.pssi.org/national-team/womens-senior">Putri</a>
        </div>
        <div class="col-md-2 text-start">
            <h5>Tentang PSSI</h5>
            <a class="nav-link fw-light" href="https://www.pssi.org/about/history">Sejarah</a>
            <a class="nav-link fw-light" href="https://www.pssi.org/about/chairman">Daftar Ketua PSSI</a>
            <a class="nav-link fw-light" href="https://www.pssi.org/about/members/provincials">Asosiasi Provinsi</a>
            <a class="nav-link fw-light" href="https://www.pssi.org/about/knowledge-center">Pusat Informasi</a>
        </div>
        <div class="col-md-2 text-start">
            <h5>Organisasi</h5>
            <a class="nav-link fw-light" href="https://www.pssi.org/organization/structure">Struktur Organisasi</a>
            <a class="nav-link fw-light" href="https://www.pssi.org/organization/program-prioritas-pssi">Program Prioritas PSSI</a>
        </div>
    </div>
</div>
</section>
<!-- Akhir Jumbotron -->

<!-- Berita -->
<section id="berita">
  <div class="container p-4">
    <div class="row justify-content-center mt-5">
      <div class="col mb-5">
        <h2 class="text-uppercase">BERITA</h2>
      </div>
    </div>
    <div class="row row-cols-2 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM berita ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="Gambar Berita"/>
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text"><?= $row["isi"]?> . <?= $row["tanggal"]?></p>
            </div>
          </div>
        </div>
      <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- Akhir Berita -->

<!-- Store -->
<section id="store">
  <div class="container p-4">
    <div class="row justify-content-center text-center mt-5">
      <div class="col mb-5">
        <h2 class="text-uppercase">GARUDA STORE</h2>
      </div>
    </div>
    <div class="row row-cols-2">
      <div class="col-md-3">
        <div class="card">
          <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98w-lvyu0wsqdnul05@resize_w900_nl.webp" class="card-img-top" alt="Gambar 1 Store">
          <div class="card-body">
            <h5 class="card-title">Garuda Store - Player 12 Jersey Merah</h5>
            <a href="https://shopee.co.id/Garuda-Store-Player-12-Jersey-Merah-i.391837434.25026207645" class="btn bg-danger text-white">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card">
          <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98y-lws9ohibg5jy1d@resize_w900_nl.webp" class="card-img-top" alt="Gambar 2 Store">
          <div class="card-body">
            <h5 class="card-title">Garuda Store - E-Money Spesial Edition Timnas</h5>
            <a href="https://shopee.co.id/Garuda-Store-E-Money-Spesial-Edition-Timnas-i.391837434.25282516175?sp_atk=09853e03-8b81-473d-89c2-2d821e3dbd7f" class="btn bg-danger text-white">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98y-lwxsfhacv8ym10@resize_w900_nl.webp" class="card-img-top" alt="Gambar 3 Store">
          <div class="card-body">
            <h5 class="card-title">Garuda Store - Jersey Training Red-Black</h5>
            <a href="https://shopee.co.id/Garuda-Store-Jersey-Training-Red-Black-i.391837434.29453667543" class="btn bg-danger text-white">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://down-id.img.susercontent.com/file/id-11134207-7r990-lvyu0wsq589q04@resize_w900_nl.webp" class="card-img-top" alt="Gambar 4 Store">
          <div class="card-body">
            <h5 class="card-title">Garuda Store - Tshirt player 12 Merah</h5>
            <a href="https://shopee.co.id/Garuda-Store-Tshirt-player-12-Merah-i.391837434.25830262965" class="btn bg-danger text-white">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Store -->

<!-- Gallery -->
<section id="gallery">
  <div class="container p-4">
    <div class="row justify-content-center mt-5">
      <div class="col mb-5">
        <h2 class="text-uppercase">GALLERY</h2>
      </div>
    </div>
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
      <div class="carousel-inner mb-5">
        <?php
        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 
        $isActive = true;

        while ($row = $hasil->fetch_assoc()) {
        ?>
        <div class="carousel-item <?= $isActive ? 'active' : '' ?>">
          <img src="img/<?= $row["gambar"] ?>" class="d-block w-100" alt="Gambar Gallery" />
        </div>
        <?php
          $isActive = false;
        }
        ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!-- Akhir Gallery -->

<!-- Schedule -->
    <section id="schedule" class="text-center">
      <div class="container p-4">
        <div class="row justify-content-center mt-5">
        <h2 class="text-uppercase">SCHEDULE</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center mb-5">
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SENIN</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Kecerdasan Buatan<br />07.00-09.30 | H.5.12
                </li>
                <li class="list-group-item">
                  Logika Informatika<br />12.30-15.00 | H.4.10
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SELASA</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Basis Data<br />12.30-14.10 | D.3.M
                </li>
                <li class="list-group-item">
                  Sitem Operasi<br />15.30-18.00 | H.4.7
                </li>
                <li class="list-group-item">
                  Pendidikan Kewarganegaraan<br />18.30-20.10 | AULA E.3.1
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">RABU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Pemrograman Berbasis Web<br />07.00-08.40 | D.2.J
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">KAMIS</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Basis Data<br />07.00-08.40 | H.5.1
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">JUMAT</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Rekayasa Perangkat Lunak<br />09.30-12.00 | H.4.5
                </li>
                <li class="list-group-item">
                  Probabilitas Dan Statistik<br />12.30-15.00 | H.4.7
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SABTU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">FREE</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Akhir Schedule -->

<!-- About Me -->
<section id="about" class="text-center p-5 bg-dark-subtle mt-5">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center">
          <div class="p-3">
            <img
              src="https://pbs.twimg.com/profile_images/1844466401563533315/CeDXq2xB_400x400.jpg"
              class="rounded-circle border shadow"
              width="300"
            />
          </div>
          <div class="p-md-5 text-sm-start">
            <h3 class="lead">A11.2023.15175</h3>
            <h1 class="fw-bold">Ryandita Tegar Kusuma</h1>
            Program Studi Teknik Informatika<br />
            <a href="https://dinus.ac.id/" class="fw-bold text-decoration-none"
              >Universitas Dian Nuswantoro</a
            >
          </div>
        </div>
      </div>
</section>
<!-- Akhir About Me -->

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

<script>
(() => {
  'use strict'

  const getStoredTheme = () => localStorage.getItem('theme')
  const setStoredTheme = theme => localStorage.setItem('theme', theme)

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme()
    if (storedTheme) {
      return storedTheme
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  }

  const setTheme = theme => {
    if (theme === 'auto') {
      document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme)
    }
  }

  setTheme(getPreferredTheme())

  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#bd-theme')

    if (!themeSwitcher) {
      return
    }

    const themeSwitcherText = document.querySelector('#bd-theme-text')
    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })

    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    if (focus) {
      themeSwitcher.focus()
    }
  }

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    const storedTheme = getStoredTheme()
    if (storedTheme !== 'light' && storedTheme !== 'dark') {
      setTheme(getPreferredTheme())
    }
  })

  window.addEventListener('DOMContentLoaded', () => {
    showActiveTheme(getPreferredTheme())

    document.querySelectorAll('[data-bs-theme-value]')
      .forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value')
          setStoredTheme(theme)
          setTheme(theme)
          showActiveTheme(theme, true)
        })
      })
  })
})()
</script>

  </body>
</html>