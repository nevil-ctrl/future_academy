<?php
global $conn;

$stmt = $conn->query("SELECT name, photo_url, description FROM teachers");
$teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="teachers-section">
  <h2 class="teachers-title">Наши преподаватели</h2>
  <div class="teachers-list">
    <?php foreach ($teachers as $teacher): ?>
      <div class="teacher-card">
        <div class="teacher-photo-placeholder">
          <img src="<?= htmlspecialchars($teacher['photo_url']) ?>" alt="">
        </div>
        <div class="teacher-name"><?= htmlspecialchars($teacher['name']) ?></div>
        <div class="teacher-desc"><?= nl2br(htmlspecialchars($teacher['description'])) ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
