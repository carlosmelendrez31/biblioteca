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

    public function editar($id = null)
{
    $usuario = $this->Usuarios->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Usuarios->patchEntity($usuario, $this->request->getData());
        if ($this->Usuarios->save($usuario)) {
            $this->Flash->success(__('El usuario ha sido actualizado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('No se pudo actualizar el usuario. Inténtalo de nuevo.'));
    }
    $this->set(compact('usuario'));
}
public function eliminar($id = null)
{
    $this->request->allowMethod(['post', 'delete']);
    $usuario = $this->Usuarios->get($id);

    // Verificar si el usuario tiene préstamos asignados
    $prestamos = $this->Usuarios->prestamos->find()->where(['usuario_id' => $id])->count();

    if ($prestamos > 0) {
        $this->Flash->error(__('No se puede eliminar el usuario porque tiene préstamos asignados.'));
    } else {
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('El usuario ha sido eliminado.'));
        } else {
            $this->Flash->error(__('No se pudo eliminar el usuario. Intente nuevamente.'));
        }
    }
    return $this->redirect(['action' => 'index']);
}
public function login()
    {
        if ($this->request->is('post')) {
            $email = $this->request->getData('email');
            $contrasena = $this->request->getData('contrasena');

            // Buscar al usuario con el email y contraseña proporcionados
            $usuario = $this->Usuarios->find()
                ->where(['email' => $email, 'contrasena' => $contrasena])
                ->first();

            if ($usuario) {
                $this->Flash->success(__('Inicio de sesión exitoso. Bienvenido, ' . $usuario->nombre_completo));
                return $this->redirect(['controller' => 'Pages', 'action' => 'home']);
            } else {
                $this->Flash->error(__('Credenciales inválidas. Por favor, inténtelo de nuevo.'));
            }
        }

        // Renderizar el formulario de login
        $this->set('title', 'Inicio de Sesión');
    }


}

