<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class UsuariosTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        
        $this->setTable('usuarios'); // Especifica el nombre de la tabla
        $this->setPrimaryKey('id');   // Especifica la clave primaria de la tabla
        $this->addBehavior('Timestamp'); // Añade comportamiento de marca de tiempo
    }
}
