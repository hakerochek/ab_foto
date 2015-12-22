<?php
$basepath = dirname(dirname(__FILE__));

require_once $basepath . '/config.php';
require_once $basepath . '/application/core/db_connect.php';
require_once $basepath . '/application/core/model.php';
require_once $basepath . '/application/core/view.php';
require_once $basepath . '/application/core/controller.php';
require_once $basepath . '/application/core/route.php';
Route::start(); // запускаем маршрутизатор