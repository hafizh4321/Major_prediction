<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Home</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="masthead-heading text-uppercase">Prediksi Jurusanmu Disini</div>
      <div class="masthead-subheading">Jawablah pertanyaan yang diberikan !!</div>
    </div>
  </header>

  <section class="page-section" id="services">
    <div class="container">
      <div class="row text">
        <div class="col-md-12">

          <?php foreach ($pertanyaan as $prtnyaan) : ?>
            <h4 class="my-3"><?= $prtnyaan['nama_pertanyaan']; ?></h4> <br>
            <input type="radio" value="yes" name="radio<?= $prtnyaan['id_pertanyaan']; ?>" id="y<?= $prtnyaan['id_pertanyaan']; ?>" />
            <label for="y<?= $prtnyaan['id_pertanyaan']; ?>" class="label1">
              <h5>YES</h5>
            </label> <br> <br>

            <input type="radio" value="no" name="radio<?= $prtnyaan['id_pertanyaan']; ?>" id="n<?= $prtnyaan['id_pertanyaan']; ?>" />
            <label for="n<?= $prtnyaan['id_pertanyaan']; ?>" class="label2">
              <h5>NO</h5>
            </label> <br><br><br>
          <?php endforeach ?>


          <div class="text-end">
            <h9 style="color: red;">*Apabila jawaban tidak terisi maka jawabannya dianggap <i> "no" </i></h9><br><br>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="save()" data-bs-target="#exampleModal">
              LIHAT HASIL
            </button>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    inilah hasil mu!
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="jawaban">

                </div>
                <div class="modal-footer">
                  <a href="/" class="btn btn-secondary">
                    Close
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer py-4" id="contact">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-start">
          Copyright &copy; Your Website 2021
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
<script>
  function save() {
    $.ajax({
      url: "/api/getjurusan?"
      <?php foreach ($pertanyaan as $prtnyaan) : ?> + "radio<?= $prtnyaan['id_pertanyaan'] ?>=" + $('input[name="radio<?= $prtnyaan['id_pertanyaan'] ?>"]:checked').val() + "&"
      <?php endforeach ?>,

      type: "GET",
      // dataType: "json",
      beforeSend: function() {
        console.log("before send");
      },
      complete: function() {
        console.log("complete");
      },
      success: function(data) {
        console.log("success");
        $("#jawaban").html(data);

      },
    });
  }
</script>

</html>