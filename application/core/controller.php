<?php

class Controller
{

    public $model;
    public $view;
    public $controller_name;
    public $action_name;
    public $params;

    function __construct($controller_name, $action_name, $model_name, $params)
    {
        $model_name = 'Model_' . $model_name;
        $this->model = new $model_name();

        $this->view = new View();

        $this->controller_name = $controller_name;
        $this->action_name = $action_name;
        $this->params = $params;

        $this->params = $this->params + $_REQUEST;
    }

    /**
     * Redirect to needed url
     *
     * @param $path 'index/index'
     * @param string $msg
     */
    public function redirect($path = '', $msg = '')
    {
        //$msg - @TODO: in the future
        header('Location: /' . $path);
        exit();
    }

    function action_index()
    {
    }
}