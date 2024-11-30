<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class LibrosTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('libros');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER', // Si la categoría es obligatoria
        ]);
    }
}

