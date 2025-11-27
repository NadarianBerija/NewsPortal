<?php
$host = explode('?', $_SERVER['REQUEST_URI']) [0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if ($path == '' OR $path == 'index.php') {
    //главная страница
    $response = controllerAdmin::loginAction();
}
elseif ($path == 'logout') {
    //выход
    $response = controllerAdmin::logoutAction();
}
else {
    //страница не существует
    $response = controllerAdmin::error404();
}