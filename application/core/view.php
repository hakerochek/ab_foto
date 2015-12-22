<?php

class View
{
    public $template_view = 'template_view';

    function generate($content_view, $data = null)
    {
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }

        require 'application/views/' . $this->template_view . '.php';
    }
}