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
<div class="prestamos form p-4 shadow-sm rounded bg-light">
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
        .prestamos.form {
            max-width: 500px;
            margin: auto;
        }

        .prestamos form fieldset {
            border: 1px solid #dee2e6;
            padding: 1.5rem;
            border-radius: 0.5rem;
            background-color: #ffffff;
        }

        .prestamos form legend {
            font-weight: bold;
            font-size: 1.5rem;
            text-align:center;
        }

        .prestamos .form-control,
        .prestamos .form-select {
            border-radius: 1rem;
        }

        .prestamos .form-check-input {
            margin-left: 6;
        }

        .prestamos button.btn-primary {
            width: 100%;
            padding: 0.75rem;
            font-size: 1.1rem;
            border-radius: 0.3rem;
        }
    </style>
    
    
    <?= $this->Form->create($prestamo, ['class' => 'needs-validation']) ?>
    <fieldset>
        <legend class="text-primary"><?= __('Registrar Prestamo') ?></legend>
        <div class="mb-3">
            <?= $this->Form->control('usuario_id', ['options' => $usuarios, 'label' => 'Usuario', 'class' => 'form-select']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('fecha_inicio', ['type' => 'date', 'label' => 'Fecha de inicio', 'class' => 'form-control']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('fecha_vencimiento', ['type' => 'date', 'label' => 'Fecha de vencimiento', 'class' => 'form-control']) ?>
        </div>
        <div class="form-check mb-3">
            <?= $this->Form->control('extendido', ['type' => 'checkbox', 'label' => '¿Préstamo extendido?', 'class' => 'form-check-input']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('dias_retraso', ['type' => 'number', 'label' => 'Días de retraso', 'class' => 'form-control']) ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Guardar Préstamo'), ['class' => 'btn btn-primary mt-3']) ?>
    <?= $this->Form->end() ?>
</div>
