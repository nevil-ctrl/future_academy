<?php
require_once __DIR__ . '/router.php';
require_once __DIR__ . '/app/controllers/UserController.php';
require_once __DIR__ . '/app/controllers/AuthController.php';
require_once __DIR__ . '/app/controllers/ReviewController.php';



get('/', 'pages/index.php');
get('/profile', 'pages/profile/main.php');
get('/all-courses', 'pages/courses.php');
get('/events', 'pages/events.php');

get('/rewiews', 'pages/add-rewiews.php');
post('/rewiews', function () {
    $db = require __DIR__ . '/config/db.php';
 // или инициализируй подключение вручную
    (new ReviewController($db))->create();
});


// Регистрация
get('/signup', function () {
    (new UserController())->signup();
});
post('/signup', function () {
    (new UserController())->signup();
});

// Вход 
get('/signin', function () {
    (new AuthController())->signin();
});
post('/signin', function () {
    (new AuthController())->signin();
});

// Выход 
get('/', function () {
    (new AuthController())->signout();
});

any('/404', 'pages/404.php');

// Fallback
any('', function () {
    header("Location: /404");
    exit;
});
