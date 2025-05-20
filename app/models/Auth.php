<?php
require_once __DIR__ . '/../../config/db.php';

class Auth
{
    public static function findUserByEmail($email)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function verifyPassword($password, $hash)
    {
        return password_verify($password, $hash);
    }
}
