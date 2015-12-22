<?php

class Model_User extends Model {

    function getUserList() {
        return $this->db->pdo->query('SELECT * FROM users');
    }

}