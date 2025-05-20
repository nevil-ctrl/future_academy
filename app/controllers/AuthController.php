<?php
session_start();
require_once __DIR__ . '/../models/Auth.php';

class AuthController
{
    public function signin()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');

            if ($email === '' || $password === '') {
                $errors[] = 'Пожалуйста, заполните все поля';
            } else {
                $user = Auth::findUserByEmail($email);

                if ($user && Auth::verifyPassword($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['username'] = $user['username'];

                    header('Location: /profile?id=' . $user['id']);
                    exit;
                } else {
                    $errors[] = 'Неверный email или пароль';
                }
            }
        }

        require __DIR__ . '/../../views/sign-in.php';
    }
    
 public function signout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start(); 
        }

        // Очистка и уничтожение сессии
        $_SESSION = [];
        session_destroy();
    }
}
