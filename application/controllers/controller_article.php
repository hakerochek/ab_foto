<?php

class Controller_Article extends Controller
{
    public function action_index()
    {
        $stmt = $this->model->getArticleList();
        $this->view->generate('article/index', array('stmt' => $stmt));
    }

    public function action_edit()
    {
        if (!empty($this->params['title'])
            && !empty($this->params['text'])
            && !empty($this->params['id'])
        ) {

            $this->model->updateArticle($this->params);
            $this->redirect('article');
        } else {
            $stmt = $this->model->getArticleById($this->params['id']);
            $data = $stmt->fetch();
            $this->view->generate('article/edit', array('data' => $data));
        }
    }

    public function action_add()
    {
        if (!empty($this->params['title']) && !empty($this->params['text']))
        {
            $this->model->addArticle($this->params);
            $this->redirect('article');
        } else {
            $this->view->generate('article/add', array());
        }
    }

    public function action_delete()
    {
        $article = new Model_Article();
        $article->deleteArticleById($this->params['id']);
        $this->redirect('article');
    }
}