<?php
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/controllers/HomeController.php';

$controller = new HomeController();

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestUri === '/' && $requestMethod === 'GET') {
    $controller->index();
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>