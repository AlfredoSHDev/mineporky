    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
        .sticky-top {
            position: sticky !important;
            top: 0;
            z-index: 1000;
        }

        nav.sticky {
            background-color:  hsla(0, 0%, 0%, 0.411);
        }

        nav {
            transition: none; /* Eliminate transition */
        }

        nav a {
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            display: flex;
            align-items: center;
        }

        nav img {
            height: 50px;
            margin-right: 20px;
        }

        .dropdown-menu {
            background-color:  hsla(0, 0%, 0%, 0.411);
        }

        .dropdown-menu a {
            color: white;
        }

        #sesion {
            width: 150px;
            height: 35px;
            border-radius: 20px;
            background-color: white;
            color: black;
            text-align: center;
            line-height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 18px;
        }

        #sesion:hover {
            background-color: lightgray;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            color: white;
            font-size: 24px;
        }

        @media (max-width: 768px) {
            nav {
                padding: 10px;
                text-align: center; /* Center align elements */
            }

            .navbar-collapse {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            #sesion {
                margin-left: 0;
                margin-top: 10px;
                width: 100%;
            }
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="#">
            <img src="../assets/img/mp2.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class='bx bx-menu'></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="color: white;">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class='bx bxs-user-voice'></i> Ads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class='bx bxl-discord-alt'></i> Discord</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class='bx bxs-basket'></i> Store</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class='bx bxs-server'></i> Server</a></li>
                        <li><a class="dropdown-item" href="#"><i class='bx bxs-error-alt'></i> Apply's</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="sesion" class="nav-link" href="#"><i class='bx bx-user-circle'></i> Log in</a>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        window.onload = function() { // Add class "sticky" onload if scrolled
            var navbar = document.querySelector("nav");
            var sticky = navbar.offsetTop;
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            }
        };

        window.onscroll = function() {stickyNavbar()};

        var navbar = document.querySelector("nav");
        var sticky = navbar.offsetTop;

        function stickyNavbar() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>