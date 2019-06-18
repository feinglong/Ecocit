<?php session_start(); ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="inova agency">

  <!-- Meta OG -->
  <meta property="og:title" content="Ecocit' - Baseline" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />   <!-- url du site -->
  <meta property="og:image" content="" /> <!--url de la miniature du site (1200x627) -->
  <meta property="og:description" content="" /> <!--description du site -->
  <meta property="og:site_name" content="Ecocit'" /> <!--description du site -->
  <!-- Meta Twitter card -->
  <meta name="twitter:title" content="Ecocit' - Baseline">
  <meta name="twitter:description" content=""> <!-- Description -->
  <meta name="twitter:image" content=""> <!-- Images for this Card support an aspect ratio of 2:1 with minimum dimensions of 300x157 or maximum of 4096x4096 pixels. Images must be less than 5MB in size. JPG, PNG, WEBP and GIF formats are supported. Only the first frame of an animated GIF will be used. SVG is not supported -->


  
  <title>Ecocit'</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <div style="width: 200px; height:50px; border: 1px solid #000;display: flex; align-items: center; justify-content: center">
         Ecocit' Logo
        </div>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Notre projet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contactez-nous</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Ecocit'</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
          Baseline du concept. Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. 
        </h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">découvrir</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Titre </h2>
          <p class="text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at eleifend tortor,
            non dapibus ante. Praesent magna felis, congue eu auctor in, suscipit ut enim. Integer laoreet purus euismod
            nunc.</p>
        </div>
      </div>
      <!-- <img src="img/ipad.png" class="img-fluid" alt=""> -->
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Titre</h4>
            <p class="text-black-50 mb-0">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at eleifend tortor, non dapibus ante.
              Praesent magna felis, congue eu auctor in, suscipit ut enim. Integer laoreet purus euismod nunc.
            </p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Titre</h4>
                <p class="mb-0 text-white-50">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at eleifend tortor, non dapibus ante.
                Praesent magna felis, congue eu auctor in, suscipit ut enim. Integer laoreet purus euismod nunc.
                </p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Titre</h4>
                <p class="mb-0 text-white-50">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at eleifend tortor, non dapibus ante.
                  Praesent magna felis, congue eu auctor in, suscipit ut enim. Integer laoreet purus euismod nunc.
                </p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Abonnez-vous à la Newsletter</h2>

          <form class="form-inline d-flex" method="post" action="php/action.php">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" name="email" placeholder="Entrer une adresse mail">
            <input type="submit" class="btn btn-primary mx-auto"  name="submit" value="S'abonner">
          </form>


          <!-- MAILCHIMP FORM -->

          <!-- <form method="post" action="php/action.php">
              <p><label>First Name: </label><input type="text" name="fname" /></p>
              <p><label>Last Name: </label><input type="text" name="lname" /></p>
              <p><label>Email: </label><input type="text" name="email" /></p>
              <p><input type="submit" name="submit" value="SUBSCRIBE"/></p>
          </form> -->

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Adresse</h4>
              <hr class="my-4">
              <div class="small text-black-50">19 Rue Voltaire, Paris 75011</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">inova.agency@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Téléphone</h4>
              <hr class="my-4">
              <div class="small text-black-50">07 69 07 00 89</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Ecocit' 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/script.min.js"></script>

</body>

</html>
