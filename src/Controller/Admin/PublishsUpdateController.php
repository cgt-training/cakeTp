<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * PublishsUpdate Controller
 *
 * @property \App\Model\Table\PublishsUpdateTable $PublishsUpdate
 */
class PublishsUpdateController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */

     public function beforeFilter(Event $event)
     {
         parent::beforeFilter($event);
         $this->Auth->allow(['controller'=>'Users','action'=>'login']);
     }


    public function index()
    {
        $publishsUpdate = $this->paginate($this->PublishsUpdate);

        $this->set(compact('publishsUpdate'));
        $this->set('_serialize', ['publishsUpdate']);
    }

        
    /**
     * View method
     *
     * @param string|null $id Publishs Update id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publishsUpdate = $this->PublishsUpdate->get($id, [
            'contain' => []
        ]);

        $this->set('publishsUpdate', $publishsUpdate);
        $this->set('_serialize', ['publishsUpdate']);
    }



    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publishsUpdate = $this->PublishsUpdate->newEntity();
        if ($this->request->is('post')) {
            $publishsUpdate = $this->PublishsUpdate->patchEntity($publishsUpdate, $this->request->data);
            if ($this->PublishsUpdate->save($publishsUpdate)) {
//                $this->Flash->success(__('The publishs update has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The publishs update could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('publishsUpdate'));
        $this->set('_serialize', ['publishsUpdate']);
    }


     // public function beforeFilter(Event $event)
     // {
     //     parent::beforeFilter($event);
     //     $this->Auth->allow(['delete']);
     // }

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


    /**
     * Edit method
     *
     * @param string|null $id Publishs Update id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publishsUpdate = $this->PublishsUpdate->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publishsUpdate = $this->PublishsUpdate->patchEntity($publishsUpdate, $this->request->data);
            if ($this->PublishsUpdate->save($publishsUpdate)) {
                $this->Flash->success(__('The publishs update has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The publishs update could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('publishsUpdate'));
        $this->set('_serialize', ['publishsUpdate']);
    }

        public function isAuthorized($user = null) 
        {

            if ('index' !== $this->request->action) 
            {
                // other actions; let he AppController handle access
                return parent::isAuthorized($user);
            }

            if (!empty($user)) 
            {
                // Logged-in users have access to any page
                return true;
            }
        }
    /**
     * Delete method
     *
     * @param string|null $id Publishs Update id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publishsUpdate = $this->PublishsUpdate->get($id);
        if ($this->PublishsUpdate->delete($publishsUpdate)) {
            $this->Flash->success(__('The publishs update has been deleted.'));
        } else {
            $this->Flash->error(__('The publishs update could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
