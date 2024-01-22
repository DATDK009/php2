<html>

<head>
    <title>Welcome to my Site!!!</title>
</head>

<body>
<h1>Welcome to my Website</h1>
<a href="/DemoRoute/index.php">Home</a>
<a href="/DemoRoute/index.php?news">News</a>
<a href="/DemoRoute/index.php?students">Products</a>
<a href="/DemoRoute/index.php?showFormLogin">Login From</a>
<a href="/DemoRoute/index.php?showFormRegister">Register From</a>
<br>
<?php
require 'vendor/autoload.php';

require './app/controllers/Router.php';
require_once './app/controllers/Student.php';
require './app/controllers/StudentController.php';

use Ngodat\Demo\controllers\Router;
use Ngodat\Demo\controllers\StudentController;

$router = new Router();

$router->get('/DemoRoute/index.php?students', [new StudentController(), 'index']);
$router->get('/DemoRoute/index.php?showFormLogin', [new StudentController(), 'showFormLogin']);
$router->get('/DemoRoute/index.php?showFormRegister', [new StudentController(), 'showFormRegister']);

$router->post('/DemoRoute/index.php?login',
    [new StudentController(),'login']);

$router->post('/DemoRoute/index.php?register',
    [new StudentController(),'register']);


$router->get('/DemoRoute/index.php', function () {
    echo 'HELLO HELLO <br>';
});
$router->get('/DemoRoute/index.php?news', function () {
    echo 'Trang tin tức <br>';

});

// lấy ra đường dẫn - địa chỉ gửi lên
$url = $_SERVER['REQUEST_URI'];
// xác định loại yêu cầu (GET hoặc POST)
$method = $_SERVER['REQUEST_METHOD'];

// nạp địa chỉ vào route để route điều hướng
$router->handleRoute($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
?>

</body>

</html>
