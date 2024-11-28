
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Los Pipirisnais</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #5f27cd;
            width: 100%; /* Hace que el encabezado ocupe todo el ancho */
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #ffeaa7 !important;
        }
        .navbar-nav {
            margin-left: auto; /* Coloca los enlaces a la derecha */
            display: flex;
            gap: 1rem; /* Espacio entre los enlaces */
        }
        h1 {
            color: #2d3436;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
            color: #636e72;
        }
        .card {
            border: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            height: 100%;
            max-width: 10rem; /* Define un ancho máximo para todas las tarjetas */
      
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
            height: 300px; /* Define una altura fija para las imágenes */
            object-fit: cover; /* Ajusta la imagen sin distorsión */
        }
        .card-body {
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .card-title {
            color: #2d3436;
            font-size: 1.1rem;
            font-weight: bold;
        }
        .card-text {
            color: #636e72;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #5f27cd;
            color: #fff;
        }
       
    </style>
</head>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?= $this->Url->build('/');?>">Biblioteca Los Pipirisnais</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/usuarios/agregar'); ?>">Agregar Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/usuarios/listar'); ?>">Ver Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/Prestamos/index'); ?>">Ver Prestamos</a>
            </li>
        </ul>
    </div>
</nav>
<body>



<!-- Contenido principal -->
<div class="container mt-5">
    <h1>Biblioteca Los Pipirisnais</h1>
    <p>Aquí encontrarás los mejores libros</p>

    <div class="row">
        <?php foreach ($libros as $libro): ?>
            <div class="col-md-4 d-flex align-items-stretch mb-4">
                <div class="card shadow-sm">
                    <?php if (!empty($libro->foto)): ?>
                        <img src="data:image/jpeg;base64,<?= base64_encode(stream_get_contents($libro->foto)) ?>" class="card-img-top" alt="Imagen del libro">
                    <?php endif; ?>
                    <div class="card-body">
                        <?= $this->Html->link('Préstamo', ['controller' => 'Prestamos', 'action' => 'add', '?' => ['libro_id' => $libro->id]], ['class' => 'btn btn-primary']) ?>
                        <h5 class="card-title"><?= h($libro->titulo) ?></h5>
                        <p class="card-text">Autor: <?= h($libro->autor) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="footer mt-5">
    <p>&copy; 2024 Biblioteca Los Pipirisnais. Todos los derechos reservados.</p>
</div>

<!-- Incluye scripts de Bootstrap desde CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<!-- Barra de navegación -->
