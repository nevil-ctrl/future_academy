<div class="directions">
    <div class="direction_title">Направления</div>
    <div class="direction_cards">
        <?php foreach ($directions as $dir): ?>
            <div class="direction_card">
                <h4><?= htmlspecialchars($dir['name']) ?></h4>
            </div>
        <?php endforeach; ?>
    </div>
</div>

