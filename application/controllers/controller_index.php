<?php

class Controller_Index extends Controller
{
    function action_index()
    {
        $this->view->generate('index/index', array());
    }

}