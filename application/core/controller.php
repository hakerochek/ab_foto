<?php

class Controller
{
    public $model;
    public $view;
    public $controller_name;
    public $action_name;
    public $params;
    public $app_path;

    function __construct($controller_name, $action_name, $model_name, $params)
    {
        global $basepath;
        $this->app_path = $basepath;

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
     * @param string $msg_type  Examples: success, info, warning, danger
     */
    public function redirect($path = '', $msg = '', $msg_type = 'success')
    {
        //message
        if (!empty($msg)) {
            $_SESSION['message'] = $msg;
            $_SESSION['massage_type'] = $msg_type;
        }

        //redirect
        header('Location: /' . $path);
        exit();
    }

    function action_index()
    {
    }
}