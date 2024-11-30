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
    <h2>Editar Libro</h2>
    <?= $this->Form->create($libro, ['type' => 'file', 'class' => 'form']) ?>
    <div class="form-group">
        <label for="titulo">Título</label>
        <?= $this->Form->control('titulo', [
            'label' => false,
            'class' => 'form-control',
            'placeholder' => 'Título del libro',
        ]) ?>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <?= $this->Form->control('autor', [
            'label' => false,
            'class' => 'form-control',
            'placeholder' => 'Autor del libro',
        ]) ?>
    </div>
    <div class="form-group">
        <label for="categoria_id">Categoría</label>
        <?= $this->Form->control('categoria_id', [
            'type' => 'select',
            'label' => false,
            'class' => 'form-control',
            'options' => $categorias,
            'empty' => 'Seleccione una categoría'
        ]) ?>
    </div>
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <?= $this->Form->control('isbn', [
            'label' => false,
            'class' => 'form-control',
            'placeholder' => 'ISBN del libro',
        ]) ?>
    </div>
    <div class="form-group">
        <label for="id_unico_libro">ID Único</label>
        <?= $this->Form->control('id_unico_libro', [
            'label' => false,
            'class' => 'form-control',
            'placeholder' => 'ID único del libro',
        ]) ?>
    </div>
    <div class="form-group">
        <label for="foto">Foto (Opcional)</label>
        <?= $this->Form->control('foto', [
            'type' => 'file',
            'label' => false,
            'class' => 'form-control',
        ]) ?>
        <?php if (!empty($libro->foto)): ?>
            <small class="form-text text-muted">Ya existe una foto asociada. Si deseas cambiarla, selecciona un nuevo archivo.</small>
        <?php endif; ?>
    </div>
    <div class="mt-4">
        <?= $this->Form->button(__('Guardar Cambios'), ['class' => 'btn btn-success']) ?>
        <a href="<?= $this->Url->build(['action' => 'listWithoutPhoto']) ?>" class="btn btn-secondary">Cancelar</a>
    </div>
    <?= $this->Form->end() ?>
</div>
