<div class="container mt-5">
    <h2 class="text-center">Inicio de Sesión</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create(null, ['class' => 'form']) ?>
            <div class="form-group">
                <?= $this->Form->control('email', [
                    'label' => 'Correo Electrónico',
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese su email'
                ]) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('contrasena', [
                    'label' => 'Contraseña',
                    'class' => 'form-control',
                    'type' => 'password',
                    'placeholder' => 'Ingrese su contraseña'
                ]) ?>
            </div>
            <div class="form-group text-center">
                <?= $this->Form->button('Iniciar Sesión', ['class' => 'btn btn-primary']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
