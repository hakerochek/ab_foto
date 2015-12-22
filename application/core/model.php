<?php

class Model
{
    public $db;

    public function __construct() {
        $this->db = new DB_Connect(SERVER_NAME, SERVER_DB, SERVER_CHARSET, SERVER_USER, SERVER_PASS);
    }

    public function get_data()
    {

    }
}