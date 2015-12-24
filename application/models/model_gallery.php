<?php

class Model_Gallery extends Model
{
    function getGalleryList()
    {
        return $this->db->pdo->query('SELECT * FROM gallery');
    }

    function getGalleryById($id)
    {
        return $this->db->pdo->query("SELECT * FROM gallery WHERE id=$id");
    }

    function deleteGalleryById($id)
    {
        return $this->db->pdo->query("DELETE FROM gallery WHERE id=$id");
    }

    function  updateGallery($params)
    {
        $sql = "UPDATE gallery SET title='{$params['title']}', description='{$params['description']}',img='{$params['img']}' WHERE id={$params['id']}";
        return $this->db->pdo->query($sql);
    }

    function addGallery($params)
    {
        global $basepath;

        $img = '';

        if (!empty($_FILES['img'] && !empty($_FILES['img']['tmp_name'])))
        {
            $from = $_FILES['img']['tmp_name'];
            $img = $_FILES['img']['name'];
            $to = $basepath .'/images/gallery/'. $img;
            copy($from, $to);
            chmod($to, 777);
        }

        $sql = "INSERT INTO gallery (title, description, img) VALUES ('{$params['title']}','{$params['description']}','$img')";
        return $this->db->pdo->query($sql);
    }

}