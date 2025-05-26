<section class="reviews">
    <h2 class="reviews-title">Отзывы наших студентов</h2>
    
    <div class="reviews-slider">
        <?php if (!empty($reviews)): ?>
            <?php foreach ($reviews as $review): ?>
                <div class="review-card">
                    <div class="review-header">
                        <img src="assets/img/svg/rewiewsava.svg" alt="Фото студента" class="review-avatar">
                        <div class="review-info">
                            <h3 class="review-name"><?php echo htmlspecialchars($review['name']); ?></h3>
                            <p class="review-course">Студент курса «WEB-разработчик»</p>
                        </div>
                    </div>
                    <p class="review-text"><?php echo nl2br(htmlspecialchars($review['review_text'])); ?></p>
                    <div class="review-rating">
                        <span class="star">★</span>
                        <span class="rating-value">
                            <?php echo number_format($review['rating'], 2); ?> / 5
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div style="padding: 40px; text-align: center; color: #888;">
                <p>Пока нет отзывов.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
