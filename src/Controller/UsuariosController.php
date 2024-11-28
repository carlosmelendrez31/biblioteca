<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\UsuariosTable; // Add this to reference UsuariosTable
use Cake\ORM\TableRegistry;

class UsuariosController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        // Load Usuarios table instance
        $this->Usuarios = TableRegistry::getTableLocator()->get('Usuarios');
    }

    public function add()
    {
        $usuario = $this->Usuarios->newEmptyEntity(); // Usa 'Usuarios' con mayúscula
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('El usuario ha sido registrado exitosamente.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo registrar el usuario. Inténtalo de nuevo.'));
        }
        $this->set(compact('usuario'));
    }
    public function index()
    {
        // Obtiene la lista de usuarios desde la tabla Usuarios
        $usuarios = $this->Usuarios->find('all');
        $this->set(compact('usuarios')); // Envía los datos a la vista
    }
}

