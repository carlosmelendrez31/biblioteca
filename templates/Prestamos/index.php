<header>
    <style>
        .navbar {
            background-color: #5f27cd;
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
    </style>
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
                <a class="nav-link" href="<?= $this->Url->build('/Prestamos/listar'); ?>">Ver Prestamos</a>
            </li>
        </ul>
    </div>
</nav>
</header>
<h1>Lista de Préstamos</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Libro</th>
            <th>Fecha de Inicio</th>
            <th>Fecha de Vencimiento</th>
            <th>Extendido</th>
            <th>Días de Retraso</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($prestamos as $prestamo): ?>
            <tr>
                <td><?= h($prestamo->id) ?></td>
                <td><?= h($prestamo->usuario->nombre) ?></td>
                <td><?= h($prestamo->libro->titulo) ?></td>
                <td><?= h($prestamo->fecha_inicio->format('Y-m-d')) ?></td>
                <td><?= h($prestamo->fecha_vencimiento->format('Y-m-d')) ?></td>
                <td><?= $prestamo->extendido ? 'Sí' : 'No' ?></td>
                <td><?= h($prestamo->dias_retraso) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
