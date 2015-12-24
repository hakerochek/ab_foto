<?php

class Model_User extends Model
{

    function getUserList()
    {
        return $this->db->pdo->query('SELECT * FROM users');
    }

    function getUserById($id)
    {
        return $this->db->pdo->query("SELECT * FROM users WHERE id=$id");
    }

    function deleteUserById($id)
    {
        return $this->db->pdo->query("DELETE FROM users WHERE id=$id");
    }

    function registrationUser($params)
    {
        $params['password'] = md5($params['password']);

        $sql = "INSERT INTO users (email, name, age, password) VALUES ('{$params['email']}','{$params['name']}','{$params['age']}','{$params['password']}')";
        return $this->db->pdo->query($sql);
    }
    function updateUser($params)
    {
        $sql = "UPDATE users SET email = '{$params['email']}', name = '{$params['name']}',age = '{$params['age']}',password = '{$params['password']}' WHERE id = {$params['id']}";
        return $this->db->pdo->query($sql);
    }

}