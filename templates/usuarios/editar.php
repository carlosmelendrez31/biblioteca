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
<body>
    <div class="container">
        <h1>Editar Usuario</h1>
        <?= $this->Form->create($usuario) ?>
        <div class="form-group">
            <?= $this->Form->control('nombre_completo', [
                'label' => 'Nombre Completo',
                'class' => 'form-control',
                'placeholder' => 'Ingrese el nombre completo',
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('email', [
                'label' => 'Correo Electrónico',
                'type' => 'email',
                'class' => 'form-control',
                'placeholder' => 'Ingrese el correo electrónico',
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('domicilio', [
                'label' => 'Domicilio',
                'class' => 'form-control',
                'placeholder' => 'Ingrese su domicilio',
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('contrasena', [
                'label' => 'Contraseña',
                'type' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Ingrese Su contraseña',
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('nombre_tutor', [
                'label' => 'Nombre tutor',
                'type' => 'tel',
                'class' => 'form-control',
                'placeholder' => 'Ingrese el nombre del tutor',
            ]) ?>
        </div>
        <div class="text-center">
            <?= $this->Form->button(__('Guardar Cambios'), ['class' => 'btn btn-primary']) ?>
            <a href="<?= $this->Url->build(['action' => 'index']); ?>" class="btn btn-secondary">Cancelar</a>
        </div>
        <?= $this->Form->end() ?>
    </div>
</body>
