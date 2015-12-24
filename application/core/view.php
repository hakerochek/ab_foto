<?php

class View
{
    public $template_view = 'template_view';

    function generate($content_view, $data = null)
    {
        if (is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }

        require 'application/views/' . $this->template_view . '.php';
    }

    public function showMessage()
    {
        if (!empty($_SESSION['message']) && !empty($_SESSION['massage_type'])) {
            $message = $_SESSION['message'];
            $type = $_SESSION['massage_type'];

            require 'application/views/template_message.php';

            unset($_SESSION['message']);
            unset($_SESSION['massage_type']);
        }
    }
}