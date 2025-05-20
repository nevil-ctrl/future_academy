<?php
require_once __DIR__ .'/../../config/db.php';

class User {
    public static function create($email, $username, $password, $slug)
    {
        global $conn;

        // Хэшируем пароль (не забудь использовать $hash, а не $password при вставке)
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users(email, username, password, slug) VALUES(:email, :username, :password, :slug)");
        $stmt->execute([
            ':email' => $email,
            ':username' => $username,
            ':password' => $hash, 
            ':slug' => $slug
        ]);

        return $conn->lastInsertId();
    }

    public static function existsByEmail($email)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->fetchColumn() > 0;
    }

    public static function existsByUsername($username)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
        $stmt->execute([':username' => $username]);
        return $stmt->fetchColumn() > 0;
    }
}

