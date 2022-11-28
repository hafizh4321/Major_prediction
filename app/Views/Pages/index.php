<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Agency - Start Bootstrap Theme</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="img/navbar-logo.png" alt="..." /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#services">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Jurusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="masthead-heading text-uppercase">Tebak Jurusan</div>
      <div class="masthead-subheading">Aplikasi Prediksi Jurusan Kuliah Untuk Anak SMA</div>
      <a class="btn btn-primary btn-xl text-uppercase" href="main">Prediksi Sekarang</a>
    </div>
  </header>
  <!-- Services-->
  <section class="page-section" id="services">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Tentang</h2>
        <h3 class="section-subheading text-muted">

        </h3>
      </div>
      <div class="row text-center">
        <div class="col-md-6">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa--cog fa-spin fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Tujuan</h4>
          <p class="text-muted">
            Membantu siswa SMA, SMK serta seseorang yang ingin berkuliah dalam
            memilih jurusan untuk membantu menemukan jurusan berdasarkan
            kepribadian anak tersebut
          </p>
        </div>
        <div class="col-md-6">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-spinner fa-spin fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Manfaat</h4>
          <p class="text-muted">
            Anak SMA, SMK serta seseorang yang ingin berkuliah bisa tahu dan
            semakin yakin akan jurusan yang akan dia pilih di perkuliahan
            dengan mudah
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio Grid-->
  <section class="page-section bg-light" id="portfolio">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Jurusan</h2>
        <h3 class="section-subheading text-muted">
          Daftar Jurusan yang terdaftar
        </h3>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">

          <?php foreach ($jurusan as $jrsn) : ?>
            <!-- Portfolio item-->
            <div class="portfolio-item">
              <a class="portfolio-link" data-bs-toggle="modal" href="#a<?= (string)$jrsn['id_jurusan']; ?>">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/jurusan/<?= $jrsn['gambar_jurusan']; ?>" alt="..." />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading"><?= $jrsn['nama_jurusan']; ?></div>
                <div class="portfolio-caption-subheading text-muted">
                  <?= $jrsn['nama_fakultas']; ?>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
        <?php endforeach ?>
        </div>
      </div>
  </section>



  <!-- Footer-->
  <footer class="footer py-4" id="contact">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-start">
          Copyright &copy; PrediksiJurusan 2022
        </div>
        <div class="col-lg-4 my-3 my-lg-0">
          <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
          <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Portfolio Modals-->

  <!-- Portfolio item 1 modal popup-->
  <?php foreach ($jurusan as $jrsn) : ?>
    <div class="portfolio-modal modal fade" id="a<?= (string)$jrsn['id_jurusan']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">

                  <!-- Project details-->
                  <h2 class="text-uppercase"><?= $jrsn['nama_jurusan']; ?></h2>
                  <p class="item-intro text-muted">
                    <?= $jrsn['nama_fakultas']; ?>
                  </p>
                  <img class="img-fluid d-block mx-auto" src="img/jurusan/<?= $jrsn['gambar_jurusan']; ?>" alt="..." />
                  <p>
                    <?= $jrsn['deskripsi_jurusan']; ?>
                  </p>
                  <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                    <i class="fas fa-times me-1"></i>
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>