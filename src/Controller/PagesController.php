<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class PagesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        // Cargar la instancia de la tabla Libros
        $this->Libros = TableRegistry::getTableLocator()->get('Libros');
    }

    public function home()
    {
        // Obtener todos los libros de la base de datos
        $libros = $this->Libros->find('all');

        // Pasar los datos de libros a la vista
        $this->set(compact('libros'));
    }
}

