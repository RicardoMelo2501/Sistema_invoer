<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Portos Controller
 *
 * @property \App\Model\Table\PortosTable $Portos
 *
 * @method \App\Model\Entity\Porto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PortosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $portos = $this->paginate($this->Portos);

        $this->set(compact('portos'));
    }

    /**
     * View method
     *
     * @param string|null $id Porto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $porto = $this->Portos->get($id, [
            'contain' => [],
        ]);

        $this->set('porto', $porto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $porto = $this->Portos->newEntity();
        if ($this->request->is('post')) {
            $porto = $this->Portos->patchEntity($porto, $this->request->getData());
            if ($this->Portos->save($porto)) {
                $this->Flash->success(__('The porto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The porto could not be saved. Please, try again.'));
        }
        $this->set(compact('porto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Porto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $porto = $this->Portos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $porto = $this->Portos->patchEntity($porto, $this->request->getData());
            if ($this->Portos->save($porto)) {
                $this->Flash->success(__('The porto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The porto could not be saved. Please, try again.'));
        }
        $this->set(compact('porto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Porto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $porto = $this->Portos->get($id);
        if ($this->Portos->delete($porto)) {
            $this->Flash->success(__('The porto has been deleted.'));
        } else {
            $this->Flash->error(__('The porto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
