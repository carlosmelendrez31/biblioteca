<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Libro extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
