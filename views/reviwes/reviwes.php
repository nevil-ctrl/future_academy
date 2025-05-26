<?php
require_once __DIR__ . '/../../app/models/Review.php';
require_once __DIR__ . '/../../config/db.php';?>
<link rel="stylesheet" href="/assets/css/style.css">
<div class="container">
    <div class="header">
        <h1>💬 Отзывы клиентов</h1>
        <p>Поделитесь своим опытом и помогите другим</p>

        <?php if ($stats && $stats['total_reviews'] > 0): ?>
        <div class="stats">
            <div class="stat-item">
                <div class="stat-number"><?php echo $stats['total_reviews']; ?></div>
                <div class="stat-label">Всего отзывов</div>
            </div>
            <div class="stat-item">
                <div class="stat-number"><?php echo number_format($stats['average_rating'], 1); ?></div>
                <div class="stat-label">Средняя оценка</div>
            </div>
            <div class="stat-item">
                <div class="stat-number"><?php echo $stats['five_stars']; ?></div>
                <div class="stat-label">5 звезд</div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="content">
        <?php if ($message): ?>
            <div class="message <?php echo $messageType; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <div class="review-form">
            <h2>Оставить отзыв</h2>
            <form method="POST" action="?action=create">
                <input type="text" name="name" placeholder="Имя" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="number" name="rating" min="1" max="5" placeholder="Оценка (1-5)" required>
                <textarea name="review_text" rows="4" placeholder="Ваш отзыв..." required></textarea>
                <button type="submit" name="submit_review">Отправить отзыв</button>
            </form>
        </div>

        <div class="reviews-section">
            <h2>Отзывы</h2>
            <?php if (empty($reviews)): ?>
                <p>Пока нет отзывов</p>
            <?php else: ?>
                <?php foreach ($reviews as $review): ?>
                    <div class="review-item">
                        <strong><?php echo htmlspecialchars($review['name']); ?></strong>
                        <span><?php echo date('d.m.Y', strtotime($review['created_at'])); ?></span>
                        <div>
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <span class="star"><?php echo $i <= $review['rating'] ? '★' : '☆'; ?></span>
                            <?php endfor; ?>
                        </div>
                        <p><?php echo nl2br(htmlspecialchars($review['review_text'])); ?></p>
                        <div class="review-actions">
                            <a href="?action=edit&id=<?php echo $review['id']; ?>">✏️ Редактировать</a> |
                            <a href="?action=delete&id=<?php echo $review['id']; ?>" onclick="return confirm('Удалить отзыв?')">🗑️ Удалить</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>