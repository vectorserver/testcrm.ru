<?php
session_start();
$GLOBALS['pdo'] = [
    'db_user'=>'root',
    'db_pass'=>'',
    'db_name'=>'mycrm',
    'db_host'=>'localhost',
];
require_once 'core/db.php';
require_once 'core/controller.php';
require_once 'core/user.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/route.php';

Route::start(); // запускаем маршрутизатор
