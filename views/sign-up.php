<div class="auth-container">
    <div class="auth-title">Регистрация</div>
    <form action="/signup" method="post" autocomplete="off">
        <input class="auth-input" type="text" name="username" placeholder="Имя" required>
        <input class="auth-input" type="email" name="email" placeholder="Email" required>
        <div class="input-group">
            <input class="auth-input" id="password" type="password" name="password" placeholder="Пароль" required>
            <button class="auth-toggle-btn" type="button" id="togglePassword">Показать</button>
        </div>
        <button class="auth-submit-btn" type="submit" name="register">Зарегистрироваться</button>
    </form>
    <div class="register-section">
        <span>Уже есть аккаунт?</span>
        <a href="/signin" class="register-btn">Войти</a>
    </div>
</div>

        <?php if (!empty($errors)):?>
            <ul class="error-list">
                <?php foreach($errors as $error):?>
                    <li><?=htmlspecialchars($error) ?></li>
                <?php endforeach;?>
            </ul>
        <?php endif;?>
<script src="/../assets/js/app.js"></script>
<?php require_once __DIR__ . '/../layout/header.php'; ?>