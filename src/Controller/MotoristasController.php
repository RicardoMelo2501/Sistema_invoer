<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Motoristas Controller
 *
 * @property \App\Model\Table\MotoristasTable $Motoristas
 *
 * @method \App\Model\Entity\Motorista[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MotoristasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $motoristas = $this->paginate($this->Motoristas);

        $this->set(compact('motoristas'));
    }

    /**
     * View method
     *
     * @param string|null $id Motorista id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $motorista = $this->Motoristas->get($id, [
            'contain' => ['Veiculos'],
        ]);

        $this->set('motorista', $motorista);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $motorista = $this->Motoristas->newEntity();
        if ($this->request->is('post')) {
            $motorista = $this->Motoristas->patchEntity($motorista, $this->request->getData());
            if ($this->Motoristas->save($motorista)) {
                $this->Flash->success(__('The motorista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The motorista could not be saved. Please, try again.'));
        }
        $this->set(compact('motorista'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Motorista id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $motorista = $this->Motoristas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $motorista = $this->Motoristas->patchEntity($motorista, $this->request->getData());
            if ($this->Motoristas->save($motorista)) {
                $this->Flash->success(__('The motorista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The motorista could not be saved. Please, try again.'));
        }
        $this->set(compact('motorista'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Motorista id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $motorista = $this->Motoristas->get($id);
        if ($this->Motoristas->delete($motorista)) {
            $this->Flash->success(__('The motorista has been deleted.'));
        } else {
            $this->Flash->error(__('The motorista could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
