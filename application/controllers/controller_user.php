<?php

class Controller_User extends Controller
{
    function action_index()
    {
        $user = new Model_User();
        $stmt = $user->getUserList();

        $this->view->generate('user/index', array('stmt' => $stmt));
    }

    function action_login()
    {
        $this->view->generate('user/login', array());
    }

    function action_registration()
    {
        $this->view->generate('user/registration', array());
    }
}