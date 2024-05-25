<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/logomp.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="/assets/css/hma.css">
    <title>MinePorky | Home</title>
    <style>
        body{
            background-color:   rgb(247, 0, 255); /* Color rosado */
        }
        /* Estilo para la primera zona */
        .zone1 {
            background-color:   rgb(247, 0, 255); /* Color rosado */
            color: black; /* Texto en negro */
            text-align: center; /* Centrar texto */
            padding: 100px 0; /* Espaciado interior superior e inferior */
            position: relative; /* Añadido */
            z-index: 1; /* Añadido */
        }

        /* Estilo para las demás zonas */
        .zone2 {
            background-color: black; /* Color negro */
            color: white; /* Texto en blanco para resaltar */
            text-align: center; /* Centrar texto */
            padding: 100px 0; /* Espaciado interior superior e inferior */
        }

        /* Hacer que las zonas abarquen toda la pantalla */
        .full-screen {
            min-height: 100vh; /* Mínimo de 100% del viewport height */
            position: relative; /* Añadido */
            z-index: 0; /* Añadido */
        }
        
        /* Añadido */
        .navbar {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 2;
        }footer i{
            color: black;
            font-size: 25px;
        }
    </style>
</head>
<body>

<?php include("../mineporky.es/includes/navbar1.php") ?>

<main>
    <div class="zone1 full-screen">
        <h1>MINEPORKY NETWORK</h1>
        <p>"MinePorky awaits you! Join the fun in our universe. <br> Build, explore, and compete on our network of servers. Don't wait any longer, <br>join us now and make history together!"</p>
    </div>

    <!-- Cards Section -->
    <div class="zone2 full-screen">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card Title 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card Title 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card Title 3</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="text-center bg-body-tertiary">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <a href="">
      <i class='bx bxl-twitter' ></i>
      </a>

      <a href="">
      <i class='bx bxl-discord-alt' ></i>
      </a>

      <a href="">
      <i class='bx bxl-github' ></i>
      </a>

    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: black; color: white;">
    © 2020 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

<script>
    // Initialization for ES Users
import { Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Ripple });
</script>
</body>
</html>
