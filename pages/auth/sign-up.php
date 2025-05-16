<form method="post" action="/pages/auth/sign-up.php">

<input type="text" name="login" id="login">
<input type="text" name="email" id="email">
<input type="text" name="password" id="pass">
<input type="text" name="repeat-pass" id="repeat-pass">

</form>
<?php $titleName = "Авторизация";?>
<?php
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])){
    $name = "Username";
    $email = filter_var ()
}