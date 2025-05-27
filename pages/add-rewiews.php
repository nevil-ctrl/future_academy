<form action="/rewiews" method="POST">
    <input type="hidden" name="user_id" value="1"> <!-- Или подтягивай ID из сессии -->
    <input type="hidden" name="product_id" value="123"> <!-- Можно фиксированный ID или выбор -->
    
    <label>Оценка:</label>
    <input type="number" name="rating" min="1" max="5" required>

    <label>Комментарий:</label>
    <textarea name="comment" required></textarea>

    <button type="submit">Оставить отзыв</button>
</form>
