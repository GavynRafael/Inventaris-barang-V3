<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Filesystem;

/**
 * ItemDetails Controller
 *
 * @property \App\Model\Table\ItemDetailsTable $ItemDetails
 * @method \App\Model\Entity\ItemDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items', 'Histories'],
        ];
        $itemDetails = $this->paginate($this->ItemDetails);

        $this->set(compact('itemDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Item Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemDetail = $this->ItemDetails->get($id, [
            'contain' => ['Items', 'Histories'],
        ]);

        $this->set(compact('itemDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemDetail = $this->ItemDetails->newEmptyEntity();

        if ($this->request->is('post')) {
            $itemDetail = $this->ItemDetails->patchEntity($itemDetail, $this->request->getData());

            $files = $this->request->getUploadedFiles();
            if (!empty($files['photo']) && $files['photo']->getError() === UPLOAD_ERR_OK) {
                $myname = $files['photo']->getClientFileName();
                $myext = pathinfo($myname, PATHINFO_EXTENSION);
                $mypath = $myname;

                $files['photo']->moveTo(WWW_ROOT . 'photo' . DS .  $mypath);

                $itemDetail->photo = $mypath;
            }

            if ($this->ItemDetails->save($itemDetail)) {
                $this->Flash->success(__('The item detail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The item detail could not be saved. Please, try again.'));
            }
        }

        $items = $this->ItemDetails->Items->find('list', ['limit' => 200])->all();
        $histories = $this->ItemDetails->Histories->find('list', ['limit' => 200])->all();
        $this->set(compact('itemDetail', 'items', 'histories'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Item Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemDetail = $this->ItemDetails->get($id, [
            'contain' => [] // Add associations as needed
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            // Populate entity with request data
            $itemDetail = $this->ItemDetails->patchEntity($itemDetail, $this->request->getData());

            // Handle file upload
            $files = $this->request->getUploadedFiles();
            if (!empty($files['photo']) && $files['photo']->getError() === UPLOAD_ERR_OK) {
                // Delete the existing file, if any
                $this->deleteFile($itemDetail->photo);

                $myname = $files['photo']->getClientFileName();
                $myext = pathinfo($myname, PATHINFO_EXTENSION);
                $mypath = "photo/" . $myname;

                // Move the file to the desired location
                $files['photo']->moveTo(WWW_ROOT . $mypath);

                // Save the file path to the entity
                $itemDetail->photo = $mypath;
            }

            // Attempt to save the entity
            if ($this->ItemDetails->save($itemDetail)) {
                $this->Flash->success(__('The item detail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The item detail could not be saved. Please, try again.'));
            }
        }

        $items = $this->ItemDetails->Items->find('list', ['limit' => 200])->all();
        $histories = $this->ItemDetails->Histories->find('list', ['limit' => 200])->all();
        $this->set(compact('itemDetail', 'items', 'histories'));
    }

    private function deleteFile($path)
    {
        $filePath = WWW_ROOT . $path;

        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }


    /**
     * Delete method
     *
     * @param string|null $id Item Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemDetail = $this->ItemDetails->get($id);
        if ($this->ItemDetails->delete($itemDetail)) {
            $this->Flash->success(__('The item detail has been deleted.'));
        } else {
            $this->Flash->error(__('The item detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
