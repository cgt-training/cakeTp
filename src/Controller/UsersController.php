<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
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
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }



    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add','logout']);
    }



    public function login()
        {
            //pr($this->request->is);
           // echo $this->Auth->redirectUrl();
            if(isset($this->request->data['remember_me']) && $this->request->data['remember_me']=='Y')
            {
                 $user = $this->Auth->identify();
                 if ($user)
                 {
                     $cookieId = $user['id'];
                     $cookieName = $user['username'];
                     $cookiePass = $user['password'];
                     $this->Cookie->configKey('UserNew', 'path', '/');
                     $this->Cookie->configKey('UserNew', [
                        'expires' => '+1 days',
                        'httpOnly' => true
                     ]);
                     $this->Cookie->write('UserNew',['id'=>$cookieId,'name'=>$cookieName,'pass'=>$cookiePass]);
                     //pr($user);   exit;
                     //$this->Cookie->read('UserNew.name');
                    
                     $this->Auth->setUser($user);
                     return $this->redirect($this->Auth->redirectUrl());
                     
                 }
                 
                $this->Flash->error(__('Invalid username or password, try again'));    
            }
            elseif ($this->request->is('post')) {
                //pr($this->request->data['remember_me']);
                $user = $this->Auth->identify();
                 if ($user) {
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                }

                $this->Flash->error('User Name or Password is incorrect', [
                    'params' => [
                        'class' => 'alert alert-success'
                    ]
                ]);
            }
            
        }



    public function logout()
    {
      $this->request->session()->destroy();
      //                       pr($this->request->session()->read('Auth.User'));   exit;
        $this->Cookie->Delete('UserNew');
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
                // Makes New Entity for User with the same parameter as of user table
        $user = $this->Users->newEntity();
                //Checks whether the request is post or not  
        if ($this->request->is('post')) {
                // $this->request->data stores all the post data and patchEntity checks for validations.
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
