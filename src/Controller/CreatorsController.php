<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Creators Controller
 *
 * @property \App\Model\Table\CreatorsTable $Creators
 * @method \App\Model\Entity\Creator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CreatorsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $creators = $this->paginate($this->Creators);

        $this->set(compact('creators'));
        $this->viewBuilder()->setOption('serialize', ['creators']);
    }

    /**
     * View method
     *
     * @param string|null $id Creator id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $creator = $this->Creators->get($id, [
            'contain' => ['Media'],
        ]);

        $this->set(compact('creator'));
        $this->viewBuilder()->setOption('serialize', ['creator']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $creator = $this->Creators->newEmptyEntity();
        if ($this->request->is('post')) {
            $creator = $this->Creators->patchEntity($creator, $this->request->getData());
            if ($this->Creators->save($creator)) {
                $this->Flash->success(__('The creator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The creator could not be saved. Please, try again.'));
        }
        $this->set(compact('creator'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Creator id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $creator = $this->Creators->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $creator = $this->Creators->patchEntity($creator, $this->request->getData());
            if ($this->Creators->save($creator)) {
                $this->Flash->success(__('The creator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The creator could not be saved. Please, try again.'));
        }
        $this->set(compact('creator'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Creator id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $creator = $this->Creators->get($id);
        if ($this->Creators->delete($creator)) {
            $this->Flash->success(__('The creator has been deleted.'));
        } else {
            $this->Flash->error(__('The creator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
