<?php
require_once __DIR__ . "/../layout/nav.php";
require_once __DIR__ . "/../app/controllers/DirectionController.php";

$controller = new DirectionController();
$directions = $controller->getDirections(); // Получаем направления через метод контроллера

?>
<link rel="stylesheet" href="/assets/css/style.css" />
<div class="vacancies-page container">
    <h1 class="vacancies-title">Вакансии</h1>
    <div class="vacancies-subtitle">Станьте частью команды Future Academy</div>
   <?php require_once __DIR__ . "/../views/direction.php" ?>
    <div class="vacancies-list">
        <div class="vacancy-card">
            <div class="vacancy-card__info">
                <div class="vacancy-card__title">Дизайнер</div>
                <div class="vacancy-card__meta">
                    <span class="vacancy-card__city">Москва</span>
                    <span class="vacancy-card__type">Полная занятость</span>
                </div>
            </div>
            <a href="/vacancy1.php" class="vacancy-card__btn">Подробнее</a>
        </div>
        <div class="vacancy-card">
            <div class="vacancy-card__info">
                <div class="vacancy-card__title">Разработчик игр</div>
                <div class="vacancy-card__meta">
                    <span class="vacancy-card__city">Москва</span>
                    <span class="vacancy-card__type">Полная занятость</span>
                </div>
            </div>
            <a href="/vacancy1.php" class="vacancy-card__btn">Подробнее</a>
        </div>
        <div class="vacancy-card">
            <div class="vacancy-card__info">
                <div class="vacancy-card__title">Веб-разработчик</div>
                <div class="vacancy-card__meta">
                    <span class="vacancy-card__city">Москва</span>
                    <span class="vacancy-card__type">Полная занятость</span>
                </div>
            </div>
            <a href="/vacancy1.php" class="vacancy-card__btn">Подробнее</a>
        </div>

    </div>
</div>