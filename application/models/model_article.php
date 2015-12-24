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

    function addArticle($params)
    {
        $sql = "INSERT INTO articles (title, text) VALUES ('{$params['title']}', '{$params['text']}')";
        return $this->db->pdo->query($sql);
    }

    function updateArticle($params)
    {
        $sql = "UPDATE articles SET title = '{$params['title']}', text = '{$params['text']}' WHERE id = {$params['id']}";
        return $this->db->pdo->query($sql);
    }

}
