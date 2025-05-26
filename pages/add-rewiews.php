<link rel="stylesheet" href="assets/css/style.css">
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

            <!-- Форма добавления отзыва -->
            <div class="review-form">
                <h2 style="margin-bottom: 25px; color: #333;">Оставить отзыв</h2>
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Ваше имя *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Оценка *</label>
                        <div class="star-rating" id="starRating">
                            <span class="star" data-rating="1">★</span>
                            <span class="star" data-rating="2">★</span>
                            <span class="star" data-rating="3">★</span>
                            <span class="star" data-rating="4">★</span>
                            <span class="star" data-rating="5">★</span>
                        </div>
                        <input type="hidden" id="rating" name="rating" value="0" required>
                    </div>

                    <div class="form-group">
                        <label for="review_text">Ваш отзыв *</label>
                        <textarea id="review_text" name="review_text" rows="5" 
                                placeholder="Расскажите о своем опыте..." required></textarea>
                    </div>

                    <button type="submit" name="submit_review" class="submit-btn">
                        Отправить отзыв
                    </button>
                </form>
            </div>

            <!-- Отображение отзывов -->
            <div class="reviews-section">
                <h2>Отзывы наших клиентов</h2>
                
                <?php if (empty($reviews)): ?>
                    <div style="text-align: center; padding: 60px 20px; color: #666;">
                        <h3>Пока нет отзывов</h3>
                        <p>Станьте первым, кто оставит отзыв!</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($reviews as $review): ?>
                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="avatar">
                                        <?php echo strtoupper(substr($review['name'], 0, 1)); ?>
                                    </div>
                                    <div class="reviewer-details">
                                        <h3><?php echo htmlspecialchars($review['name']); ?></h3>
                                        <div class="review-date">
                                            <?php echo date('d.m.Y', strtotime($review['created_at'])); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <span class="star">
                                            <?php echo $i <= $review['rating'] ? '★' : '☆'; ?>
                                        </span>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="review-text">
                                <?php echo nl2br(htmlspecialchars($review['review_text'])); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>