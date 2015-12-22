<?php

class Controller {

    public $model;
    public $view;
    public $controller_name;
    public $action_name;
    public $params;

    function __construct($controller_name, $action_name, $params)
    {
        $this->model = new Model();
        $this->view = new View();

        $this->controller_name = $controller_name;
        $this->action_name = $action_name;
        $this->params = $params;

        $this->params = $this->params + $_REQUEST;
    }

    function action_index()
    {
    }
}