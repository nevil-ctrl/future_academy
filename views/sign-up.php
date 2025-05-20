<form action="/signup" method="post" class="signup-form">
    <input class="input-field" type="text" name="username" placeholder="Имя пользователя" required>
    <input class="input-field" type="email" name="email" placeholder="Email" required>
    <input class="input-field" id="password" type="password" name="password" placeholder="Пароль" required>
    
    <div class="button-group">
        <button class="submit-button" id="reg-submit" type="submit">Зарегистрироваться</button>
        <button class="toggle-button" type="button" id="togglePassword">Показать пароль</button>
    </div>
</form>


<?php if (!empty($errors)):?>
    <ul>
        <?php foreach($errors as $error):?>
            <li style="color: brown;"><?=htmlspecialchars($error) ?></li>
        <?php endforeach;?>
    </ul>
<?php endif;?>
<script src="/../assets/js/app.js"></script>
<?php require_once __DIR__ . '/../layout/header.php'; ?>