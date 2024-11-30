<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?= $this->Url->build('/pages/home'); ?>">Biblioteca Los Pipirisnais</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->Url->build('/usuarios/listar'); ?>">Ver Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->Url->build('/usuarios/agregar'); ?>">Agregar Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->Url->build('/Prestamos/index'); ?>">Ver Préstamos</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .btn-primary {
            background-color: #4caf50;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .navbar {
            background-color: #5f27cd;
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
        }

        .navbar-brand:hover, .nav-link:hover {
            color: #ffeaa7 !important;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
    </style>
</head>
<div class="container mt-5">
    <h2>Agregar Libro</h2>
    <?= $this->Form->create($libro, ['type' => 'file']) ?>
    <div class="form-group">
        <?= $this->Form->control('titulo', [
            'label' => 'Título',
            'class' => 'form-control',
            'placeholder' => 'Título del libro',
        ]) ?>
    </div>
    <div class="form-group">
        <?= $this->Form->control('autor', [
            'label' => 'Autor',
            'class' => 'form-control',
            'placeholder' => 'Autor del libro',
        ]) ?>
    </div>
    <div class="form-group">
        <?= $this->Form->control('isbn', [
            'label' => 'ISBN',
            'class' => 'form-control',
            'placeholder' => 'ISBN del libro',
        ]) ?>
    </div>
    <div class="form-group">
        <?= $this->Form->control('categoria_id', [
            'label' => 'Categoría',
            'class' => 'form-control',
            'options' => $categorias, // Lista de categorías
            'empty' => 'Seleccione una categoría',
        ]) ?>
    </div>
    <div class="form-group">
        <?= $this->Form->control('foto', [
            'type' => 'file',
            'label' => 'Foto del Libro',
            'class' => 'form-control',
        ]) ?>
    </div>
    <?= $this->Form->button('Guardar', ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>

