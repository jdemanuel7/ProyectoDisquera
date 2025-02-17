<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARJ Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="CSS/index.css">
</head>

<body>
    <nav id="cabecera" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="/src/logo/logoARJ.png" alt="Logo">
            </a>

            <!-- Barra de búsqueda centrada -->
            <div class="search-container mx-auto">
                <form class="d-flex">
                    <input class="form-control search-input" type="search" placeholder="Buscar..." aria-label="Search">
                    <button class="btn search-button" type="submit">🔍</button>
                </form>
            </div>

            <!-- Botón de menú en móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú de navegación -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/index.php">Inicio</a></li>
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


    <h1 class="h1">La musica</h1>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="src/img_carrusel/kendricklamar.jpg" class="d-block w-100" alt="Concierto">
            </div>
            <div class="carousel-item">
                <img src="src/img_carrusel/kaze.webp" class="d-block w-100" alt="DJ">
            </div>
            <div class="carousel-item">
                <img src="src/img_carrusel/periferia.jpg" class="d-block w-100" alt="Guitarra en vivo">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <br>
    <div>

    </div>
    <br>
    <div class="container novedades-section">
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