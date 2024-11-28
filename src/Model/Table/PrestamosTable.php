<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PrestamosTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('prestamos');
        $this->setPrimaryKey('id');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Libros', [
            'foreignKey' => 'libro_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyDate('fecha_inicio', 'La fecha de inicio es requerida')
            ->notEmptyDate('fecha_vencimiento', 'La fecha de vencimiento es requerida')
            ->boolean('extendido')
            ->integer('dias_retraso');

        return $validator;
    }
}
