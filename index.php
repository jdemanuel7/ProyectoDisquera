<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARJ Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #000;
        }
        .navbar-brand img {
            width: 120px;
        }
        .nav-link {
            color: white !important;
            font-weight: 500;
        }
        .hero {
            background: url('https://source.unsplash.com/1600x600/?concert,music') center/cover no-repeat;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
        }
        .section-title {
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
        }
        .footer {
            background-color: #000;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/src/logoARJ.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Novedades</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="artistasDropdown" role="button"
                            data-bs-toggle="dropdown">Artistas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Manolo</a></li>
                            <li><a class="dropdown-item" href="#">El</a></li>
                            <li><a class="dropdown-item" href="#">Del</a></li>
                            <li><a class="dropdown-item" href="#">Bombo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="generosDropdown" role="button"
                            data-bs-toggle="dropdown">Géneros</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Rock</a></li>
                            <li><a class="dropdown-item" href="#">Rap</a></li>
                            <li><a class="dropdown-item" href="#">Pop</a></li>
                            <li><a class="dropdown-item" href="#">Reggaeton</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        Descubre lo mejor de la música
    </div>

    <!-- Sección de Novedades -->
    <div class="container mt-5">
        <h2 class="section-title">Novedades</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?music,album" class="card-img-top" alt="Album">
                    <div class="card-body">
                        <h5 class="card-title">Nuevo Álbum</h5>
                        <p class="card-text">Descubre el último lanzamiento de nuestros artistas.</p>
                        <a href="#" class="btn btn-dark">Escuchar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?dj,concert" class="card-img-top" alt="Evento">
                    <div class="card-body">
                        <h5 class="card-title">Próximo Concierto</h5>
                        <p class="card-text">No te pierdas el evento más esperado del año.</p>
                        <a href="#" class="btn btn-dark">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?guitar,music" class="card-img-top" alt="Noticia">
                    <div class="card-body">
                        <h5 class="card-title">Noticia Destacada</h5>
                        <p class="card-text">Lo último en el mundo de la música.</p>
                        <a href="#" class="btn btn-dark">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 ARJ Records - Todos los derechos reservados</p>
        <div>
            <a href="#" class="text-white me-3">Facebook</a>
            <a href="#" class="text-white me-3">Twitter</a>
            <a href="#" class="text-white">Instagram</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>