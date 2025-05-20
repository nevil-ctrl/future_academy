
<?php if (!empty($errors)): ?>
    <?php foreach ($errors as $msg): ?>
        <p style="color:red;"><?= htmlspecialchars($msg) ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<!-- Форма входа -->
<form action="/signin" method="post">
    <input type="email" name="email" placeholder="Email" required>
    <input id="password" type="password" name="password" placeholder="Password" required>
    <button class="toggle-button" type="button" id="togglePassword">Показать пароль</button>
    <button type="submit" name="login">Sign In</button>
</form>
<script src="/../assets/js/app.js"></script>