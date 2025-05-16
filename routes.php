<?php
require_once __DIR__ . '/router.php';

get('/', 'pages/index.php');

get('/signup', 'pages/auth/sign-up.php');
post('/signup', 'pages/auth/sign-up.php');

any('/404', 'pages/404.php');

get('/signin', 'pages/auth/sign-in.php');
post('/signin', 'pages/auth/sign-in.php');


any('', function() {
    header("Location: /404");
    exit;
});
