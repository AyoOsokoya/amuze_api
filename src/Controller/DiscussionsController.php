<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Discussions Controller
 *
 * @property \App\Model\Table\DiscussionsTable $Discussions
 * @method \App\Model\Entity\Discussion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiscussionsController extends AppController
{
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
        $discussions = $this->paginate($this->Discussions);

        $this->set(compact('discussions'));
    }

    /**
     * View method
     *
     * @param string|null $id Discussion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discussion = $this->Discussions->get($id, [
            'contain' => ['Users', 'Media', 'Comments'],
        ]);

        $this->set(compact('discussion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discussion = $this->Discussions->newEmptyEntity();
        if ($this->request->is('post')) {
            $discussion = $this->Discussions->patchEntity($discussion, $this->request->getData());
            if ($this->Discussions->save($discussion)) {
                $this->Flash->success(__('The discussion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discussion could not be saved. Please, try again.'));
        }
        $users = $this->Discussions->Users->find('list', ['limit' => 200]);
        $media = $this->Discussions->Media->find('list', ['limit' => 200]);
        $this->set(compact('discussion', 'users', 'media'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Discussion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discussion = $this->Discussions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $discussion = $this->Discussions->patchEntity($discussion, $this->request->getData());
            if ($this->Discussions->save($discussion)) {
                $this->Flash->success(__('The discussion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discussion could not be saved. Please, try again.'));
        }
        $users = $this->Discussions->Users->find('list', ['limit' => 200]);
        $media = $this->Discussions->Media->find('list', ['limit' => 200]);
        $this->set(compact('discussion', 'users', 'media'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Discussion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discussion = $this->Discussions->get($id);
        if ($this->Discussions->delete($discussion)) {
            $this->Flash->success(__('The discussion has been deleted.'));
        } else {
            $this->Flash->error(__('The discussion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
