<!DOCTYPE html>
<html>
<head>
    <title>Отзывы</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Отзывы</h1>
        
        <?php if ($message): ?>
            <div class="alert alert-<?php echo $messageType; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <div class="stats">
            <p>Средняя оценка: <?php echo number_format($stats['avg_rating'] ?? 0, 1); ?></p>
            <p>Всего отзывов: <?php echo $stats['total'] ?? 0; ?></p>
        </div>

        <form method="POST" action="index.php?action=create" class="review-form">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="email" name="email" placeholder="Email" required>
            <select name="rating" required>
                <option value="">Выберите оценку</option>
                <?php for($i = 1; $i <= 5; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
            <textarea name="review_text" placeholder="Ваш отзыв" required></textarea>
            <button type="submit" name="submit_review">Отправить отзыв</button>
        </form>

        <div class="reviews-list">
            <?php foreach($reviews as $review): ?>
                <div class="review-item">
                    <h3><?php echo htmlspecialchars($review['name']); ?></h3>
                    <div class="rating">Оценка: <?php echo $review['rating']; ?>/5</div>
                    <p><?php echo htmlspecialchars($review['review_text']); ?></p>
                    <div class="review-actions">
                        <a href="/review/edit/<?php echo $review['id']; ?>">Редактировать</a>
                        <a href="/review/delete/<?php echo $review['id']; ?>" 
                           onclick="return confirm('Вы уверены?')">Удалить</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
