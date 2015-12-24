<?php

class Controller_User extends Controller
{
    public function action_index()
    {
        $user = new Model_User();
        $stmt = $user->getUserList();
        $this->view->generate('user/index', array('stmt' => $stmt));
    }

    public function action_login()
    {
        $this->view->generate('user/login', array());
    }

    public function action_registration()
    {
        if (!empty($this->params['email'])
            && !empty($this->params['name'])
            && !empty($this->params['age'])
            && !empty($this->params['password'])
        ) {
            $this->model->registrationUser($this->params);
            $this->redirect('user');
        } else {
            $this->view->generate('user/registration', array());
        }
    }

    public function action_delete()
    {
        $this->model->deleteUserById($this->params['id']);
        $this->redirect('user');
    }

    public function action_edit()
    {
        if (!empty($this->params['email'])
            && !empty($this->params['name'])
            && !empty($this->params['age'])
            && !empty($this->params['password'])
        ) {
            $this->model->updateUser($this->params);
            $this->redirect('user');
        } else {
            $stmt = $this->model->getUserById($this->params['id']);
            $data = $stmt->fetch();
            $this->view->generate('user/edit', array('data' =>$data));
        }
    }
}
