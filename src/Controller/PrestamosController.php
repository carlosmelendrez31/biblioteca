<?php
namespace App\Controller;

use App\Controller\AppController;

class PrestamosController extends AppController
{
    public function add()
    {
        $prestamo = $this->Prestamos->newEmptyEntity();
        $libroId = $this->request->getQuery('libro_id'); // Obtener el id del libro desde la URL

        if ($this->request->is('post')) {
            $prestamo = $this->Prestamos->patchEntity($prestamo, $this->request->getData());
            $prestamo->libro_id = $libroId; // Asignar el id del libro al préstamo

            if ($this->Prestamos->save($prestamo)) {
                $this->Flash->success(__('El préstamo ha sido registrado exitosamente.'));
                return $this->redirect(['controller' => 'Prestamos', 'action' => 'index']);
            }
            $this->Flash->error(__('No se pudo registrar el préstamo. Intente de nuevo.'));
        }

        $usuarios = $this->Prestamos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('prestamo', 'usuarios', 'libroId'));
    }
    public function index()
    {
        // Obtener todos los préstamos
        $prestamos = $this->paginate($this->Prestamos->find('all', [
            'contain' => ['Usuarios', 'Libros'] // Incluye datos de las tablas relacionadas
        ]));

        $this->set(compact('prestamos'));
    }
    public function editar($id = null)
{
    $prestamo = $this->Prestamos->get($id, [
        'contain' => [],
    ]);

    if ($this->request->is(['patch', 'post', 'put'])) {
        $prestamo = $this->Prestamos->patchEntity($prestamo, $this->request->getData());
        if ($this->Prestamos->save($prestamo)) {
            $this->Flash->success(__('El préstamo ha sido actualizado.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('No se pudo actualizar el préstamo. Inténtelo de nuevo.'));
    }

    $usuarios = $this->Prestamos->Usuarios->find('list', ['limit' => 200]);
    $libros = $this->Prestamos->Libros->find('list', ['limit' => 200]);
    $this->set(compact('prestamo', 'usuarios', 'libros'));
}
public function eliminar($id = null)
{
    $this->request->allowMethod(['post', 'delete']); // Permite solo solicitudes POST o DELETE

    $prestamo = $this->Prestamos->get($id); // Obtiene el préstamo por ID

    if ($this->Prestamos->delete($prestamo)) {
        $this->Flash->success(__('El préstamo ha sido eliminado exitosamente.'));
    } else {
        $this->Flash->error(__('No se pudo eliminar el préstamo. Intente nuevamente.'));
    }

    return $this->redirect(['action' => 'index']); // Redirige al índice de préstamos
}

}
