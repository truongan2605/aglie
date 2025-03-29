<?php
require_once __DIR__ . '/../app/controllers/HomeController.php';
$controller = new HomeController();


$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Chuyển đổi thành tên file controller
$controllerFile = "../app/controllers/" . ucfirst($controller) . "Controller.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $className = ucfirst($controller) . "Controller";
    $controllerObject = new $className();

    if (method_exists($controllerObject, $action)) {
        $controllerObject->$action();
    } else {
        echo "Action không tồn tại!";
    }
} else {
    echo "Controller không tồn tại!";
}
?>
