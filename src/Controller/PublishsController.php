<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Publishs Controller
 *
 * @property \App\Model\Table\PublishsTable $Publishs
 */
class PublishsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $publishs = $this->paginate($this->Publishs);

        $this->set(compact('publishs'));
        $this->set('_serialize', ['publishs']);
    }

    /**
     * View method
     *
     * @param string|null $id Publish id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publish = $this->Publishs->get($id, [
            'contain' => []
        ]);

        $this->set('publish', $publish);
        $this->set('_serialize', ['publish']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publish = $this->Publishs->newEntity();
        if ($this->request->is('post')) {
            $publish = $this->Publishs->patchEntity($publish, $this->request->data);
            if ($this->Publishs->save($publish)) {
                $this->Flash->success(__('The publish has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The publish could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('publish'));
        $this->set('_serialize', ['publish']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Publish id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publish = $this->Publishs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publish = $this->Publishs->patchEntity($publish, $this->request->data);
            if ($this->Publishs->save($publish)) {
                $this->Flash->success(__('The publish has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The publish could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('publish'));
        $this->set('_serialize', ['publish']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Publish id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publish = $this->Publishs->get($id);
        if ($this->Publishs->delete($publish)) {
            $this->Flash->success(__('The publish has been deleted.'));
        } else {
            $this->Flash->error(__('The publish could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

   public function initialize()
   {
           parent::initialize();

           if($this->request->isAjax()){
               $this->viewBuilder()->layout('AfEnd');

           }
           else{
               $this->viewBuilder()->layout('fEnd');

               }
   }

}
