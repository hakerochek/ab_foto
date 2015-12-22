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
        //return $this->db->pdo->query("INSERT INTO `articles`(`id`, `title`, `text`) VALUES ([value-1],[value-2],[value-3])");

    }
}
