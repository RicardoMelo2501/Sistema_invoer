<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cargas Controller
 *
 * @property \App\Model\Table\CargasTable $Cargas
 *
 * @method \App\Model\Entity\Carga[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CargasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas'],
        ];
        $cargas = $this->paginate($this->Cargas);

        $this->set(compact('cargas'));
    }

    /**
     * View method
     *
     * @param string|null $id Carga id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carga = $this->Cargas->get($id, [
            'contain' => ['Empresas'],
        ]);

        $this->set('carga', $carga);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carga = $this->Cargas->newEntity();
        if ($this->request->is('post')) {
            $carga = $this->Cargas->patchEntity($carga, $this->request->getData());
            if ($this->Cargas->save($carga)) {
                $this->Flash->success(__('The carga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carga could not be saved. Please, try again.'));
        }
        $empresas = $this->Cargas->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('carga', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carga id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carga = $this->Cargas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carga = $this->Cargas->patchEntity($carga, $this->request->getData());
            if ($this->Cargas->save($carga)) {
                $this->Flash->success(__('The carga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carga could not be saved. Please, try again.'));
        }
        $empresas = $this->Cargas->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('carga', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carga id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carga = $this->Cargas->get($id);
        if ($this->Cargas->delete($carga)) {
            $this->Flash->success(__('The carga has been deleted.'));
        } else {
            $this->Flash->error(__('The carga could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
