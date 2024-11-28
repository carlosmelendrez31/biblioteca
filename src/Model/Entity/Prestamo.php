<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Prestamo extends Entity
{
    protected array $_accessible = [
        'usuario_id' => true,
        'libro_id' => true,
        'fecha_inicio' => true,
        'fecha_vencimiento' => true,
        'extendido' => true,
        'dias_retraso' => true,
    ];
}

