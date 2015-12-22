<?php

class Model_Article extends Model
{
    function getArticleList()
    {
        return $this->db->pdo->query('SELECT * FROM articles');
    }

    function getArticleById($id)
    {
        return $this->db->pdo->query("SELECT * FROM articles WHERE id=$id");
    }

    function deleteArticleById($id)
    {
        return $this->db->pdo->query("DELETE FROM articles WHERE id=$id");
    }

    function addArticle($param)
    {
        $sql = "INSERT INTO articles (title, text) VALUES ('{$param['title']}', '{$param['text']}')";
        return $this->db->pdo->query($sql);
    }

    function updateArticle($param)
    {
        $sql = "UPDATE articles SET title = '{$param['title']}', text = '{$param['text']}' WHERE id = {$param['id']}";
        return $this->db->pdo->query($sql);
    }

}
