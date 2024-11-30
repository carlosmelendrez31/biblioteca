<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CategoriasTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('categorias'); // Nombre de la tabla en la base de datos
        $this->setPrimaryKey('id');    // Llave primaria
        $this->setDisplayField('nombre'); // Campo que se mostrará en los selects

        $this->hasMany('Libros', [
            'foreignKey' => 'categoria_id',
        ]);
    }
}
