
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../assets/css/nav.css">
    <style>
body{
    background-color: black;
}
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="../index.php">
            <img src="../assets/img/mp2.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class='bx bx-menu'></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="color: white;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class='bx bxs-user-voice'></i> Ads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://discord.gg/uwvJ8nQ5wZ" ><i class='bx bxl-discord-alt'></i> Discord</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class='bx bxs-basket'></i> Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class='bx bxs-basket'></i> Apply's</a>
                </li>
                <li class="nav-item">
                    <a id="sesion" class="nav-link" href=""><i class='bx bx-user-circle'></i> Log in</a>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        // Close the menu after clicking an item
        document.querySelectorAll('.nav-link').forEach(item => {
            item.addEventListener('click', () => {
                document.querySelector('.navbar-collapse').classList.remove('show');
            });
        });
    </script>
