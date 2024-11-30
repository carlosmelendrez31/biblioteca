<header> 
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?= $this->Url->build('/pages/home');?>">Biblioteca Los Pipirisnais</a>
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
</header>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <style>
        .navbar {
            background-color: #5f27cd;
        }
        .navbar-brand, .nav-link {
            color: #1a2691 !important;
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #ffeaa7 !important;
        }
       

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        button {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Lista de Usuarios</h1>
        <table>
            <tr>
                <th>Nombre Completo</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Domicilio</th>
                <th>credencial escolar</th>
                <th>Vencimiento Credencial</th>
                <th>Nombre de Tutor(Opcional)</th>
                <th>Credencial Tutor</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= h($usuario->nombre_completo) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->celular) ?></td>
                <td><?= h($usuario->domicilio) ?></td>
                <td><?= h($usuario->credencial_escolar) ?></td>
                <td><?= h($usuario->fecha_vencimiento) ?></td>
                <td><?= h($usuario->nombre_tutor) ?></td>
                <td><?= h($usuario->credencial_tutor) ?></td>
                <td>
                    <!-- Botón Editar -->
                    <a href="<?= $this->Url->build(['action' => 'editar', $usuario->id]) ?>" class="btn btn-warning btn-sm">
                        Editar
                    </a>
                    <!-- Botón Eliminar -->
                    <?= $this->Form->postLink(
                        'Eliminar',
                        ['action' => 'eliminar', $usuario->id],
                        [
                            'class' => 'btn btn-danger btn-sm',
                            'confirm' => '¿Estás seguro de que quieres eliminar este usuario?'
                        ]
                    ) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
