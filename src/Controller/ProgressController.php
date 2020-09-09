<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Progress Controller
 *
 * @property \App\Model\Table\ProgressTable $Progress
 * @method \App\Model\Entity\Progres[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgressController extends AppController
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
            'contain' => ['Users', 'Media'],
        ];
        $progress = $this->paginate($this->Progress);

        $this->set(compact('progress'));
    }

    /**
     * View method
     *
     * @param string|null $id Progres id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $progres = $this->Progress->get($id, [
            'contain' => ['Users', 'Media'],
        ]);

        $this->set(compact('progres'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $progres = $this->Progress->newEmptyEntity();
        if ($this->request->is('post')) {
            $progres = $this->Progress->patchEntity($progres, $this->request->getData());
            if ($this->Progress->save($progres)) {
                $this->Flash->success(__('The progres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The progres could not be saved. Please, try again.'));
        }
        $users = $this->Progress->Users->find('list', ['limit' => 200]);
        $media = $this->Progress->Media->find('list', ['limit' => 200]);
        $this->set(compact('progres', 'users', 'media'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Progres id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $progres = $this->Progress->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $progres = $this->Progress->patchEntity($progres, $this->request->getData());
            if ($this->Progress->save($progres)) {
                $this->Flash->success(__('The progres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The progres could not be saved. Please, try again.'));
        }
        $users = $this->Progress->Users->find('list', ['limit' => 200]);
        $media = $this->Progress->Media->find('list', ['limit' => 200]);
        $this->set(compact('progres', 'users', 'media'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Progres id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $progres = $this->Progress->get($id);
        if ($this->Progress->delete($progres)) {
            $this->Flash->success(__('The progres has been deleted.'));
        } else {
            $this->Flash->error(__('The progres could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
