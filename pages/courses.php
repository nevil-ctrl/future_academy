<?php
require_once __DIR__ . "/../layout/nav.php";
require_once __DIR__ . "/../app/controllers/DirectionController.php";

$controller = new DirectionController();
$directions = $controller->getDirections(); // Получаем направления через метод контроллера

?>
<link rel="stylesheet" href="/assets/css/style.css" />
<div class="courses-page">
    <div class="courses container">
        <h1 class="courses-page__title">Все программы обучения</h1>
        <section class="age-categories___list">
            <div class="age-categories__item">
            <div class="age-categories__img">
                <img src="assets\img\png\courses\Lchildren.png" alt=""></div>
                <a href="/all-courses?age=0-3" class="age-categories__link">8-14 лет</a>
            </div>
            <div class="age-categories__item">
                <div class="age-categories__img">
                <img src="assets\img\png\courses\Mchildren.png" alt=""></div>
                <a href="/all-courses?age=3-6" class="age-categories__link">14-18 лет</a>
            </div>
            <div class="age-categories__item">
                <div class="age-categories__img">
                <img src="assets\img\png\courses\adults.png" alt=""></div>
                <a href="/all-courses?age=6-12" class="age-categories__link">18+</a>
            </div>
        </section>
        <div class="courses-page__content">
        <section class="courses-page__sidebar">
            <h2 class="courses-page__subtitle">Фильтры</h2>
            <div class="difficulty-level">
                <h3>Уровень сложности</h3>
            <label><input class="difficulty-level-item" type="radio" name="difficulty" value="novice" checked> Новичок</label>
            <label><input class="difficulty-level-item" type="radio" name="difficulty" value="user"> Пользователь</label>
            <label><input class="difficulty-level-item" type="radio" name="difficulty" value="pro"> Профессионал</label>
            <label><input class="difficulty-level-item" type="radio" name="difficulty" value="cheater"> Читер</label>
                </div>
            <div class="difficulty-level">
                <h3>Уровень сложности</h3>
            <label><input class="difficulty-level-item" type="radio" name="difficulty" Any ="novice" checked> Любой</label>
            <label><input class="difficulty-level-item" type="radio" name="difficulty" value="Profession"> Профессия</label>
            <label><input class="difficulty-level-item" type="radio" name="difficulty" value="Course"> Курс</label>
                </div>
            <div class="difficulty-level">
                <h3>Длительность</h3>
                <h5>от 1 до 24 месяцев</h5>
  
                </div>
        </section>
        <?php require_once __DIR__ . "/../views/direction.php" ?>
        <!-- <section class="cards-program">
            <h2 class="cards-program__title">Все программы обучения</h2>
            <div class="cards-program__list">
                    <div class="card-program">
                        
                        <img src="" class="card-program__image">
                        <h3 class="card-program__title">«Разработка мобильных приложений»</h3>
                        <p class="card-program__description">Разработчик мобильных приложений
                            создаёт приложения, которыми
                            люди ежедневно пользуются на
                            смартфонах, умных часах и планшетах.</p>
                        <div class="card-program_time">24Месяца</div>
                </div>
            </div>
        </section> -->
        </div>
    </div>
</div>