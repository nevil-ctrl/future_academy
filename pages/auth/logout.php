<?php
session_start();

// Очищаем данные сессии
$_SESSION = [];

// Уничтожаем сессию
session_destroy();

// Перенаправляем на страницу входа или главную
header("Location: /signin");
exit;
?>

<form action="/logout.php" method="post">
    <button type="submit">Выйти</button>
</form>
