<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../models/User.php';


class UserController
{
    
    public function signup()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $username = trim($_POST['username'] ?? '');
            $password = trim($_POST['password'] ?? '');

            if ($email === '' || $username === '' || $password === '') {
                $errors[] = 'Пожалуйста, заполните все поля.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Неверный формат email.';
            } elseif (mb_strlen($password) < 8) {
                $errors[] = 'Пароль должен содержать не менее 8 символов.';
            } elseif (User::existsByEmail($email)) {
                $errors[] = 'Email уже зарегистрирован.';
            } elseif (User::existsByUsername($username)) {
                $errors[] = 'Имя пользователя уже занято.';
            }
            if(empty($errors)){
                $slug =$this->transliterate($username);
                $userId = User::create($email,$username,$password,$slug);
                $_SESSION['user_id'] = $userId;
                header('Location: /');
                exit;
               }
        }
        
        require __DIR__ . '/../../views/sign-up.php';

    }

    private function transliterate($text)
    {
        $translit = [
            'а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'yo','ж'=>'zh','з'=>'z','и'=>'i','й'=>'y',
            'к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'kh',
            'ц'=>'ts','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ь'=>'','ъ'=>'',' '=>'-'
        ];
        return strtr(mb_strtolower($text, 'UTF-8'), $translit);
    }
}