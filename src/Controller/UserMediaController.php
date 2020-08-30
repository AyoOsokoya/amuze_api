<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UserMedia Controller
 *
 * @property \App\Model\Table\UserMediaTable $UserMedia
 * @method \App\Model\Entity\UserMedia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserMediaController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        try {
            $this->loadComponent('RequestHandler');
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Media'],
        ];
        $userMedia = $this->paginate($this->UserMedia);

        $this->set(compact('userMedia'));
        $this->viewBuilder()->setOption('serialize', ['userMedia']);
    }

    /**
     * View method
     *
     * @param string|null $id User Media id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userMedia = $this->UserMedia->get($id, [
            'contain' => ['Users', 'Media'],
        ]);

        $this->set(compact('userMedia'));
        $this->viewBuilder()->setOption('serialize', ['userMedia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userMedia = $this->UserMedia->newEmptyEntity();
        if ($this->request->is('post')) {
            $userMedia = $this->UserMedia->patchEntity($userMedia, $this->request->getData());
            if ($this->UserMedia->save($userMedia)) {
                $this->Flash->success(__('The user media has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user media could not be saved. Please, try again.'));
        }
        $users = $this->UserMedia->Users->find('list', ['limit' => 200]);
        $media = $this->UserMedia->Media->find('list', ['limit' => 200]);
        $this->set(compact('userMedia', 'users', 'media'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Media id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userMedia = $this->UserMedia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userMedia = $this->UserMedia->patchEntity($userMedia, $this->request->getData());
            if ($this->UserMedia->save($userMedia)) {
                $this->Flash->success(__('The user media has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user media could not be saved. Please, try again.'));
        }
        $users = $this->UserMedia->Users->find('list', ['limit' => 200]);
        $media = $this->UserMedia->Media->find('list', ['limit' => 200]);
        $this->set(compact('userMedia', 'users', 'media'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Media id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userMedia = $this->UserMedia->get($id);
        if ($this->UserMedia->delete($userMedia)) {
            $this->Flash->success(__('The user media has been deleted.'));
        } else {
            $this->Flash->error(__('The user media could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
