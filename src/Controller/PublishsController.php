<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


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
       //$uid= $this->request->session->read('Auth');

        $publish = $this->Publishs->newEntity();
        if ($this->request->is('post')) {
            $loggedUser = $this->Auth->user();
            $publish->user_id = $loggedUser['id'];

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
       // $query=$this->Publishs->find()->select(['id'])->where(['id'=>1])->first();
        $query= $this->Publishs->get($id)->toArray();


        $loggedUser = $this->Auth->user();
       

        $publish = $this->Publishs->get($id);
        // print_r($query['user_id']);
        // exit;
         if($loggedUser['id']==$query['user_id'])
        {
                    $this->request->allowMethod(['post', 'delete']);

            if ($this->Publishs->delete($publish)) {
                $this->Flash->success(__('The publish has been deleted.'));
            } else {
                $this->Flash->error(__('The publish could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }
        else
        {
            $this->Flash->error(__('You don\'t have right to delete this post'));
                    return $this->redirect(['action' => 'index']);


        }
    }

   public function initialize()
   {
           parent::initialize();

           // pr($query);
           // exit();
           if($this->request->isAjax()){
               $this->viewBuilder()->layout('AfEnd');

           }
           else{
               $this->viewBuilder()->layout('fEnd');

               }
   }

}
