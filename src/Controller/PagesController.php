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
    public function add()
    {
        $libro = $this->Libros->newEmptyEntity();
    
        if ($this->request->is('post')) {
            $data = $this->request->getData();
    
            // Procesar foto si se envía
            if (!empty($data['foto']) && $data['foto']->getError() === UPLOAD_ERR_OK) {
                $data['foto'] = file_get_contents($data['foto']->getStream()->getMetadata('uri'));
            }
    
            $libro = $this->Libros->patchEntity($libro, $data);
            if ($this->Libros->save($libro)) {
                $this->Flash->success(__('El libro ha sido agregado exitosamente.'));
                return $this->redirect(['action' => 'home']);
            }
            $this->Flash->error(__('No se pudo guardar el libro. Intente nuevamente.'));
        }
    
        // Obtener la lista de categorías
        $categorias = $this->Libros->Categorias->find('list')->toArray();
        $this->set(compact('libro', 'categorias'));
    }
    

    public function edit($id = null)
    {
        $libro = $this->Libros->get($id);

        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->getData();

            // Procesar foto
            if (!empty($data['foto']) && $data['foto']->getError() === UPLOAD_ERR_OK) {
                $data['foto'] = file_get_contents($data['foto']->getStream()->getMetadata('uri'));
            } else {
                unset($data['foto']); // Mantener la foto anterior si no se envía una nueva
            }

            $libro = $this->Libros->patchEntity($libro, $data);
            if ($this->Libros->save($libro)) {
                $this->Flash->success(__('El libro ha sido actualizado con éxito.'));
                return $this->redirect(['action' => 'home']);
            }

            $this->Flash->error(__('No se pudo actualizar el libro. Intente nuevamente.'));
        }

        $this->set(compact('libro'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $libro = $this->Libros->get($id);

        if ($this->Libros->delete($libro)) {
            $this->Flash->success(__('El libro ha sido eliminado con éxito.'));
        } else {
            $this->Flash->error(__('No se pudo eliminar el libro. Intente nuevamente.'));
        }

        return $this->redirect(['action' => 'home']);
    }

    public function tablalibros()
    {
        $libros = $this->Libros->find('all', [
            'fields' => ['id', 'titulo', 'autor', 'isbn', 'categoria_id']
        ]);
        $this->set(compact('libros'));
    }
}


