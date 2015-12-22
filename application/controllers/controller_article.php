<?php

class Controller_Article extends Controller
{
    public function action_index()
    {
        $article = new Model_Article();
        $stmt = $article->getArticleList();
        $this->view->generate('article/index', array('stmt' => $stmt));
    }

    public function action_edit() {
        $article = new Model_Article();
        $stmt = $article->getArticleById($this->params['id']);
        $data = $stmt->fetch();
        $this->view->generate('article/edit', array('data' => $data));
    }

    public function action_add() {
        $article = new Model_Article();
        $stmt = $article->addArticle($this->params);


    }
    public function action_delete() {
        $article= new Model_Article();
        $stmt = $article->deleteArticleById($this->params['id']);

    }
}