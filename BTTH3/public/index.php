<?php
// Định tuyến yêu cầu đến các controller và action tương ứng
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'home';
    $action = 'index';
}

// Gọi controller và action tương ứng
$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = 'controllers/' . $controllerName . '.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerObj = new $controllerName();
    $controllerObj->$action();
} else {
    echo 'Controller không tồn tại!';
}