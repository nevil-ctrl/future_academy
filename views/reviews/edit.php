<h2>Редактировать отзыв</h2>
<form method="post">
    <input name="name" value="<?= htmlspecialchars($review['name']) ?>" required>
    <input name="email" type="email" value="<?= htmlspecialchars($review['email']) ?>" required>
    <input name="rating" type="number" min="1" max="5" value="<?= $review['rating'] ?>" required>
    <textarea name="comment" required><?= htmlspecialchars($review['comment']) ?></textarea>
    <button>Сохранить</button>
</form>