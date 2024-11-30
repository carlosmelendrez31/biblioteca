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
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.users.form {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

fieldset {
    border: none;
    padding: 0;
    margin: 0;
}

legend {
    font-size: 1.5em;
    color: #333;
    text-align: center;
}

input[type="text"],
input[type="email"],
input[type="file"],
input[type="date"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    width: 100%;
}

button:hover {
    background-color: #45a049;
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
            
<div class="users form">
    <?= $this->Form->create($usuario, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Agregar Usuario') ?></legend>
        
        <?= $this->Form->control('nombre_completo', ['label' => 'Nombre Completo', 'required' => true]) ?>
        <?= $this->Form->control('contrasena', ['label' => 'contraseña','password', 'required' => true]) ?>
        <?= $this->Form->control('celular', ['label' => 'Celular']) ?>
        <?= $this->Form->control('email', ['label' => 'Email', 'required' => true]) ?>
        <?= $this->Form->control('domicilio', ['label' => 'Domicilio', 'type' => 'textarea']) ?>
        <?= $this->Form->control('foto', ['label' => 'Foto',]) ?>
        <?= $this->Form->control('fecha_vencimiento', ['label' => 'Fecha de Vencimiento', 'type' => 'date']) ?>
        <?= $this->Form->control('fecha_nacimiento', ['label' => 'Fecha de Nacimiento', 'type' => 'date']) ?>
        
        <!-- Campos de información del tutor -->
        <?= $this->Form->control('nombre_tutor', ['label' => 'Nombre del Tutor']) ?>
        <?= $this->Form->control('credencial_tutor', ['label' => 'Credencial del Tutor']) ?>
        <?= $this->Form->control('credencial_escolar', ['label' => 'Credencial Escolar', 'type' => 'checkbox']) ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar Usuario'), ['class' => 'btn btn-primary mt-3']) ?>
    <?= $this->Form->end() ?>
</div>