<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Media Controller
 *
 * @property \App\Model\Table\MediaTable $Media
 * @method \App\Model\Entity\Media[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MediaController extends AppController
{
    /**
     * Initialization hook method.
     *
     * @return void
     */
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
            'contain' => ['Types', 'Services', 'Creators'],
        ];
        $media = $this->paginate($this->Media);

        $this->set(compact('media'));
        $this->viewBuilder()->setOption('serialize', ['media']);
    }

    /**
     * View method
     *
     * @param string|null $id Media id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $media = $this->Media->get($id, [
            'contain' => ['Types', 'Services', 'Creators', 'Discussions', 'UserMedia'],
        ]);

        $this->set(compact('media'));
        $this->viewBuilder()->setOption('serialize', ['media']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $media = $this->Media->newEmptyEntity();
        if ($this->request->is('post')) {
            $media = $this->Media->patchEntity($media, $this->request->getData());
            if ($this->Media->save($media)) {
                $this->Flash->success(__('The media has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The media could not be saved. Please, try again.'));
        }
        $types = $this->Media->Types->find('list', ['limit' => 200]);
        $services = $this->Media->Services->find('list', ['limit' => 200]);
        $creators = $this->Media->Creators->find('list', ['limit' => 200]);
        $this->set(compact('media', 'types', 'services', 'creators'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Media id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $media = $this->Media->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $media = $this->Media->patchEntity($media, $this->request->getData());
            if ($this->Media->save($media)) {
                $this->Flash->success(__('The media has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The media could not be saved. Please, try again.'));
        }
        $types = $this->Media->Types->find('list', ['limit' => 200]);
        $services = $this->Media->Services->find('list', ['limit' => 200]);
        $creators = $this->Media->Creators->find('list', ['limit' => 200]);
        $this->set(compact('media', 'types', 'services', 'creators'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Media id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $media = $this->Media->get($id);
        if ($this->Media->delete($media)) {
            $this->Flash->success(__('The media has been deleted.'));
        } else {
            $this->Flash->error(__('The media could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
