<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?= $this->Url->build('/pages/home'); ?>">Biblioteca Los Pipirisnais</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->Url->build('/prestamos/index'); ?>">Ver Préstamos</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Préstamo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #4caf50;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Editar Préstamo</h1>
        <?= $this->Form->create($prestamo) ?>
        <div class="form-group">
            <?= $this->Form->control('usuario_id', [
                'label' => 'Usuario',
                'options' => $usuarios,
                'class' => 'form-control'
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('libro_id', [
                'label' => 'Libro',
                'options' => $libros,
                'class' => 'form-control'
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('fecha_inicio', [
                'label' => 'Fecha de Inicio',
                'type' => 'date',
                'class' => 'form-control'
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('fecha_vencimiento', [
                'label' => 'Fecha de Vencimiento',
                'type' => 'date',
                'class' => 'form-control'
            ]) ?>
        </div>
        <div class="form-group text-center">
            <?= $this->Form->button(__('Guardar Cambios'), ['class' => 'btn btn-primary']) ?>
            <a href="<?= $this->Url->build(['action' => 'index']); ?>" class="btn btn-secondary">Cancelar</a>
        </div>
        <?= $this->Form->end() ?>
    </div>
</body>
