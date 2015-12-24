<?php

class Controller_Gallery extends Controller
{
    public function action_index()
    {
        $stmt = $this->model->getGallerylist();
        $this->view->generate('gallery/index', array('stmt' => $stmt));
    }

    public function action_add()
    {
        if (!empty($this->params['title'])
            && !empty($this->params['description'])
        ) {
            $this->model->addGallery($this->params);
            $this->redirect('gallery', 'Item was added.');
        } else {
            $this->view->generate('gallery/add', array());
        }
    }

    public function action_delete()
    {
        $this->model->deleteGalleryById($this->params['id']);
        $this->redirect('gallery', 'Item was deleted.');
    }

    public function action_edit()
    {
        if (!empty($this->params['title'])
            && !empty($this->params['description'])
            && isset($this->params['img'])
        ) {

            $this->model->updateGallery($this->params);
            $this->redirect('gallery');

        } else {
            if (!empty($this->params['id'])) {
                $stmt = $this->model->getGalleryById($this->params['id']);
                $data = $stmt->fetch();
                $this->view->generate('gallery/edit', array('data' => $data));
            } else {
                //gallery id not found
                $this->redirect('gallery', 'Incorrect gallery', 'warning');
            }
        }
    }

}
