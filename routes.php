<?php
require_once __DIR__ . '/router.php';

get('/', 'pages/index.php');
get('/signup', 'pages/auth/sign-up.php');
any('/404', 'pages/404.php');

// fallback
any('', function() {
    header("Location: /404");
    exit;
});
