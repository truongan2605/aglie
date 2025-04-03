<?php
// Lấy giá trị controller và action từ URL (hoặc đặt mặc định)
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Xác định đường dẫn file controller
$controllerFile = "../app/controllers/" . ucfirst($controller) . "Controller.php";

// Kiểm tra xem file controller có tồn tại không
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    
    $className = ucfirst($controller) . "Controller";
    
    // Kiểm tra xem class có tồn tại không
    if (class_exists($className)) {
        $controllerObject = new $className();
        
        // Dùng switch-case để điều hướng action
        switch ($action) {
            case 'index':
                $controllerObject->index();
                break;

            case 'detail':
                if (method_exists($controllerObject, 'detail')) {
                    $controllerObject->detail();
                } else {
                    echo "Lỗi: Action 'detail' không tồn tại!";
                }
                break;

            case 'category':
                if (method_exists($controllerObject, 'category')) {
                    $controllerObject->category();
                } else {
                    echo "Lỗi: Action 'category' không tồn tại!";
                }
                break;

            default:
                echo "Lỗi: Action '$action' không hợp lệ!";
                break;
        }
    } else {
        echo "Lỗi: Controller '$className' không tồn tại!";
    }
} else {
    echo "Lỗi: File controller '$controllerFile' không tồn tại!";
}
?>
