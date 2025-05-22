
<?php if (!empty($errors)): ?>
    <?php foreach ($errors as $msg): ?>
        <p style="color:red;"><?= htmlspecialchars($msg) ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<!-- Форма входа -->
<div class="auth-container">
    <div class="auth-title">Вход</div>
    <form action="/signin" method="post">
        <input class="auth-input" type="email" name="email" placeholder="Email" required>
        <input class="auth-input" id="password" type="password" name="password" placeholder="Пароль" required>
        <div class="auth-btn-group">
            <button class="auth-toggle-btn" type="button" id="togglePassword" title="Показать/скрыть пароль"></button>
            <button class="auth-submit-btn" type="submit" name="login">Войти</button>
        </div>
    </form>
    <div style="margin-top:18px; text-align:center;">
        <span>Нет аккаунта?</span>
        <a href="/signup" class="login-button">Зарегистрироваться</a>
    </div>
</div>
<script src="/../assets/js/app.js"></script>
<?php require_once __DIR__ . '/../layout/header.php'; ?>