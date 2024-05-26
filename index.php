<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/mp.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="/assets/css/hma.css">
    <title>MinePorky | Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap');

        body {
            font-family: "Onest", sans-serif; /* Usar la fuente importada en toda la web */
        }

        .zone1 {
            font-weight: 100; /* Negrita (extrabold) */
            background: rgb(2,0,36);
background: linear-gradient(3deg, rgba(2,0,36,1) 0%, rgba(134,112,11,1) 35%, rgba(255,209,0,1) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            z-index: 1;
        }
        .h1{
            margin-top: -50px;
            margin-left: 50px;
            font-size: 16px;
        }

        /* Estilo para las demás zonas */
        .zone2 {
            background-color: black;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
        .z1con {
            margin-top: 450px;
            text-decoration: none;
            color: white;
            text-align: center;
        }

        /* Hacer que las zonas abarquen toda la pantalla */
        .full-screen {
            min-height: 100vh;
            position: relative;
            z-index: 0;
        }
        
        .navbar {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 2;
        }

        footer i {
            color: white;
            font-size: 25px;
        }
        footer a {
            color: #ffd100;
        }
        footer p {
            color: white;
            font-size: small;
        }
        footer {
            background-color: black;
        }
        footer section a {
            color: white;
        }
    </style>
</head>
<body>


<?php include("../mineporky.es/includes/navbar1.php") ?>

<main>
    <div class="zone1 full-screen">
        <h1 style="font-weight: 700;" class="h1">Welcome to MinePorky website</h1> <!-- Aplicar negrita (extrabold) -->
        <div class="z1con">
            <a href="#cards" style="text-decoration: none; color: white;">Scroll down to view more <i class='bx bxs-arrow-to-bottom'></i></a>
        </div>
    </div>
<section id="cards"
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
    </section>
</main>

<!-- Footer -->
<footer class="text-center">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">

    <!-- Seecion X -->
      <a href=""><i class='bx bxl-twitter' ><br></i></a>

    <!-- Seecion Discord -->
      <a href=""><i class='bx bxl-discord-alt' ></i></a>

    <!-- Seecion GitHub -->
      <a href=""><i class='bx bxl-github' ></i></a>

    </section>
    <!-- Section: Social media -->
  </div>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: black; color: white;">
    MinePorky Network © 2024 Copyright <br>
    <p>MinePorky Network is not affiliated in any way with Mojan AB. If you have any questions please <a href="">contact us</a></p>
  </div>
  <!-- Copyright -->
</footer>
<div class="loader-wrapper">
    <div class="loader"></div>
  </div>
  <script src="assets/js/loading.js"></script>
</body>
</html>
